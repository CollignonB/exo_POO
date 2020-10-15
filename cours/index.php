<?php 
require "model/entity/student.php"; 
require "model/studentModel.php";

$studentModel = new StudentModel();

if(isset($_POST["newStudent"])){
    $student = new Student($_POST);
    $studentModel->addStudent($student);
}

$students = $studentModel->getStudents();

include "view/indexView.php";