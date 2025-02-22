<?php
// Assignment 3 : Set A : Question 1


// The code creates an XML file (course.xml) using PHP's DOMDocument. 
// It defines a course element with a type attribute set to "ug" and a child element sy. 
// Inside sy, it adds multiple student records, each containing Studentname, classname, and Percentage elements.
//  Finally, it saves the XML file and outputs its content. 
 
 $doc = new DOMDocument("1.0");
 $course = $doc->createelement("course");
 $doc->appendchild($course);
 $course->setattribute("type","ug");
 $e1=$doc->createelement("sy");
 $course->appendchild($e1);

 $name=$doc->createelement("Studentname","Rahul");
 $e1->appendchild($name);
 $class=$doc->createelement("classname","sybca");
 $e1->appendchild($class);
 $perc=$doc->createelement("Percentage","80");
 $e1->appendchild($perc);
 $name1=$doc->createelement("Studentname","Rajeev");
 $e1->appendchild($name1);
 $class1=$doc->createelement("classname","sybca");
 $e1->appendchild($class1);
 $perc1=$doc->createelement("Percentage","85");
 $e1->appendchild($perc1);
 $name1=$doc->createelement("Studentname","Raj");
 $e1->appendchild($name1);
 $class1=$doc->createelement("classname","sybca");
 $e1->appendchild($class1);
 $perc1=$doc->createelement("Percentage","70");
 $e1->appendchild($perc1);
 $name1=$doc->createelement("Studentname","Rohan");
 $e1->appendchild($name1);
 $class1=$doc->createelement("classname","sybca");
 $e1->appendchild($class1);
 $perc1=$doc->createelement("Percentage","75");
 $e1->appendchild($perc1);
 $name1=$doc->createelement("Studentname","Rajesh");
 $e1->appendchild($name1);
 $class1=$doc->createelement("classname","sybca");
 $e1->appendchild($class1);
 $perc1=$doc->createelement("Percentage","60");
 $e1->appendchild($perc1);
 $doc->save('course.xml');
 echo $doc->saveXML();
 

?>