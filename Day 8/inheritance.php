<?php 
    class Person{
        protected $id;
        protected $name;
        protected $gender;

        public function __construct($id=0,$name="NULL",$gender="NULL")
        {
            $this->id = $id;
            $this->name = $name;
            $this->gender = $gender;
        }

        public function __toString()
        {
            return "ID = $this->id Name = $this->name Gender = $this->gender";
        }
    }

    class Employee extends Person{
        private $salary;

        public function __construct($id=0,$name="NULL",$gender="NULL",$salary=0.0)
        {
            parent::__construct($id,$name,$gender);
            $this->salary = $salary;
        }
        
        public function  __toString()
        {
            return parent::__toString()." Salary = $this->salary";
        }
    }

    $employee = new Employee(101,"Sok Dara","Male",500);
    echo $employee->__toString();
?>