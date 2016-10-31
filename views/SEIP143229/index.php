<?php
use App\person;
use App\Student;

//require_once("../../src/BITM/SEIP143229/Person.php");
//require_once("../../src/BITM/SEIP143229/Student.php");
function __autoload($className){



    echo $className."<br>";
    list($ns,$cn) = explode("\\", $className);
        require_once("../../src/BITM/SEIP143229/".$cn.".php");
}

$obj = new Person();
echo $obj->showPersonalInfo();

$objStudent = new Student();
echo $objStudent->ShowStudentInfo();