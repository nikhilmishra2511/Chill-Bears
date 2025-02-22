<?php

// Assignment 3 : Set C: Question 1

//The PHP code reads data from an XML file (book.xml) and displays it in an HTML table. 
// It extracts book details such as Book Number (code), Book Name, Quantity, Price, 
// and calculates the Total Price (Qty × Price) for each book.


$xml = simplexml_load_file("book.xml")
or die("Error: Cannot create object");
$h=array("Bookno","BookName","Qty","Price","Total");
echo"<table border=1>";
echo"<tr>";
foreach($h as $v)
{
echo"<th>$v</th>";
}
echo"</tr>";foreach($xml->children() as $book)
{
echo"<tr>";
echo "<td>".$book['code']."</td>";
echo "<td>".$book->bname."</td>";
echo "<td>".$book->qty."</td>";
echo "<td>".$book->price."</td>";
$tot=$book->qty*$book->price;
echo "<td>$tot</td>";
echo"</tr>";
}
echo"</table>"; 
?>