<?php

    /**
     * function have 2 type:
     * 1. Non-return function
     *  1.1 no parameter
     *  1.2 has parameter
     * 2. Return functon
     *  1.1 non parameter
     *  1.2 has paramter
     */

    function showData()
    {
        $name = "Sok Dara";
        echo "Name = $name";
    }

    showData();// calling function

    echo "<br>";
    
    function sum($a,$b){// $a when create function called parameter
        echo "A = $a ";
        echo "B = $b ";
        echo "A+B = ".$a+$b;
    }

    $a1 = 100;
    $b1 = 200;
    sum($a1,$b1);// $a when calling function called argument

    echo "<br>";


    // Return 
    function multi(){
        $a = 10;
        $b = 2;
        return $a * $b;
    }
    $result = multi();

    echo "Result = ". $result;

    function getAreaCircle($pi,$r){
        return $pi*pow($r,2);
    }
    
    $rs = getAreaCircle(3.14,5);

    echo "Result get area circle = ".$rs;
    

    // global variable and local variable

    $x = 5;
    $y = 10;
    function sum2(){
        global $x;
        global $y;
        echo "X + Y = ".$x+$y;
    }
    function multi2(){
        global $x,$y;
        echo "X * Y = ".$x*$y;
    }

    sum2();
    multi2();
