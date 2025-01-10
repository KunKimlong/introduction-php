<?php 

/**
 * OOP(Object Oriented Programming ):
 * 1. Encapulation: access modifier(private, protected, public)
 * 2. Inheritance
 * 3. Abstraction
 * 4. Polymophism
 * 
 * constructor:
 * 1. Default constructor
 * 2. Constructor with parameter
 */

   class Student{
    private $id;
    private $name;
    private $gender;
    private $subject;
    
    public function __construct($id=0,$name="NULL",$gender="NULL",$subject="NULL") { //constructor in php
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
        $this->subject = $subject;
    }

    public function output(){
        echo "ID = $this->id Name = $this->name Gender = $this->gender Subject = $this->subject";
    }

    //setter
    //getter
   }

    $stu = new Student();// create object stu from student class

    $stu->output();



