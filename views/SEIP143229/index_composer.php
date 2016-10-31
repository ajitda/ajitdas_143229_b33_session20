<?php
require_once("../../vendor/autoload.php");

use App\Person;
use App\Student;

$objPerson = new Person();
echo $objPerson->showPersonalInfo();

$objStudent = new Student();
echo $objStudent->ShowStudentInfo();
