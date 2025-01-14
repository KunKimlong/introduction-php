<?php 
    abstract class Number{
        protected $x;
        protected $y;

        public function __construct($x=0, $y=0)
        {   
            $this->x = $x;
            $this->y = $y;
        }

        public function __toString()
        {
            return "X = $this->x Y = $this->y";
        }

        public abstract function sum(); //abstract method
        public abstract function multi(); //abstract method
    }

    class Test1 extends Number{
        public function __construct($x=0, $y=0)
        {   
            parent::__construct($x,$y);
        }

        public function sum(){
            return $this->x + $this->y;
        }

        public function multi()
        {
            return $this->x * $this->y;
        }

        public function __toString()
        {
            return parent::__toString()." Sum = ".$this->sum()." Multi = ".$this->multi();
        }
    }

    $test = new Test1(30,50);
    echo $test->__toString();

    $number = new Number(10,20);
    echo $number->__toString();