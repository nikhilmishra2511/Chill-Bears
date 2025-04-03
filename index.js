const express = require("express");
const path = require("path");
const { Server } = require("socket.io");
const http = require("http");

const app = express();
const server = http.createServer(app);
const io = new Server(server);

const users = {};
let uniqueUsers = new Set(); 

// Serve the HTML file at the root route
app.get("/", (req, res) => {
    return res.sendFile(path.join(__dirname, "public", "index.html"));
});

app.get("/chat", (req, res) => {
    return res.sendFile(path.join(__dirname, "public", "chat.html"));
});

app.get("/about", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "about.html"));
});

// Serve static files from the "public" directory
app.use(express.static(path.join(__dirname, "public")));

// Socket.io connection event
io.on("connection", (socket) => {
    // Handle the user joining with their name
    socket.on("user-join", (name) => {
        users[socket.id] = name;
        uniqueUsers.add(name);
        console.log(`User joined. Unique users: ${uniqueUsers.size}`);
        io.emit("user-count", uniqueUsers.size - 1);
    });

    // Handle receiving a user message
    socket.on("user-message", (message) => {
        const name = users[socket.id];
        if (name) {
            socket.broadcast.emit("message", { userId: socket.id, names: name, message: message });
        }
    });

    // Handle disconnecting users
    socket.on("disconnect", () => {
        const name = users[socket.id];
        if (name) {
            uniqueUsers.delete(name);
            console.log(`User disconnected. Unique users: ${uniqueUsers.size}`);
            io.emit("user-count", Math.max(0, uniqueUsers.size - 1));
        }
        delete users[socket.id];
    });
});

server.listen(3000, () => {
    console.log("Server is running on port 3000");
});
