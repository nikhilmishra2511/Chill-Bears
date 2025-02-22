<?php
$root = new SimpleXMLElement("<root/>");

$e1 = $root->addChild("CricketTeam");


$e2 = $e1->addChild("team");
$e2->addAttribute("country", "India");
$e2->addChild("player", "Virat Kohli");
$e2->addChild("run", "10000");
$e2->addChild("wicket", "5");

$e2 = $e1->addChild("team");
$e2->addAttribute("country", "Pakistan");
$e2->addChild("player", "Babar Azam");
$e2->addChild("run", "1000");
$e2->addChild("wicket", "2");

$e2 = $e1->addChild("team");
$e2->addAttribute("country", "India");
$e2->addChild("player", "Rohit Sharma");
$e2->addChild("run", "5000");
$e2->addChild("wicket", "4");


$root->asXML("cricket.xml");

?>
