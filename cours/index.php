<?php 
require "student.php"; 

$student = new Student("Patick", 17);
$student2 = new Student("Georgette", 21);
// $student3 = new Student();

$student->setId("azerty123");


var_dump($student);
var_dump($student2);
// var_dump($student3);

echo $student->getId();
