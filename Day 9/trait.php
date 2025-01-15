<?php 

    trait Department{
        private $departmentName;
        
        public function __construct($departmentName = "NULL")
        {
            $this->departmentName = $departmentName;
        }
        public function __toString()
        {
            return "Department Name = $this->departmentName";
        }
    }

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
        use Department{
            Department::__construct as private DepartmentContruct;
            Department::__toString as private output;
        }
        private $salary;
        public function __construct($id=0,$name="NULL",$gender="NULL",$salary=0.0,$departmentName = "NULL")
        {
            parent::__construct($id,$name,$gender);
            $this->DepartmentContruct($departmentName);
            $this->salary = $salary;
        }
        
        public function  __toString()
        {
            return parent::__toString()." Salary = $this->salary".$this->output();
        }
    }

    $employee = new Employee(101,"Sok Dara","Male",500,"Employee IT Department");
    echo $employee->__toString();

    class Student{
        use Department;
    }
    echo "<br>";
    $student = new Student(" Student IT Center");
    echo $student->__toString();
?>