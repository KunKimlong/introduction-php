<?php 

    // abstract class Animal{
    //     public abstract function name();
    //     public abstract function type();
    // }

    interface Animal{
        public function name(); //method abstract
        public function type(); //method abstract
    }

    interface Food{
        public function foodType();
    }

    class Dog implements Animal, Food{
        private $name;
        private $type;
        private $gender;

        public function __construct($name,$type,$gender)
        {
            $this->name = $name;
            $this->type = $type;
            $this->gender = $gender;
        }

        public function name(){
            echo "Name = $this->name <br>";
        }
        public function type(){
            echo "Type = $this->type <br>";
        }
        public function gender(){
            echo "Gender = $this->gender <br>";
        }
        public function foodType()
        {
            // method body
        }
    }

    $dog = new Dog("Kiki","Golden","Male");
    $dog->name();
    $dog->type();
    $dog->gender();


    class Cat implements Animal{
        public function name(){
           // method body
        }
        public function type(){
            // method body
        }
    }

    