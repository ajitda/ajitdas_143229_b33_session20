<?php
namespace App;

class Student extends Person
{
    public $studentID = "SEIP143229";
    public function ShowStudentInfo(){
        parent::showPersonalInfo();
        echo $this->studentID;
    }
}