<?php
namespace App;

class Person
{
    public $name = "Ajit";
    public $gender = "Male";
    public $blood_group = "O+";


    public function showPersonalInfo(){
        echo $this->name."<br>";
        echo $this->gender."<br>";
        echo $this->blood_group."<br>";
    }
}