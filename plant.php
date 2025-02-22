<?php

// Assignment 3 : Set A : Question 3


//The code creates an XML file (`plant.xml`) using PHP's `SimpleXMLElement`. 
// It defines a root element `<plantdet>`, which contains a `<catalog>` element. 
// Inside `<catalog>`, a `<plant>` element is added with child elements (`botanical`, `zone`, `light`, `price`, and `availability`) containing plant details.
//  Finally, it saves the XML file.

$root=new simplexmlElement("<plantdet/>");
$e1=$root->addchild("catalog");
$e2=$e1->addchild("plant");
$e2->addchild("botanical","sanguinaria");
$e2->addchild("zone","4");
$e2->addchild("light","mostly shady");
$e2->addchild("price","$2.44");
$e2->addchild("availablity","031599");

$e1=$root->addchild("catalog");
$e2=$e1->addchild("plant");
$e2->addchild("botanical","Anacardiaceae");
$e2->addchild("zone","7");
$e2->addchild("light","Green");
$e2->addchild("price","$7.77");
$e2->addchild("availablity","152514");

$e1=$root->addchild("catalog");
$e2=$e1->addchild("plant");
$e2->addchild("botanical","Rosaceae");
$e2->addchild("zone","9");
$e2->addchild("light","red");
$e2->addchild("price","$8.87");
$e2->addchild("availablity","43523");


$root->asXML('plant.xml');
?>