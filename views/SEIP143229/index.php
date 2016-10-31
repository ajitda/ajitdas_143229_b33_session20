<?php

include_once("../../vendor/autoload.php");
use App\Person;
use App\Student;

//require_once("../../src/BITM/SEIP143229/Person.php");
//require_once("../../src/BITM/SEIP143229/Student.php");
/*function __autoload($className){
    echo $className."<br>";
    //list($ns,$cn) = explode("\\", $className);
    $cn= explode('\\', $className);
    require_once("../../src/BITM/SEIP143229/".$cn[1].".php");
}*/

$obj = new Person();
$obj->showPersonalInfo();

$objStudent = new Student();
$objStudent->ShowStudentInfo();