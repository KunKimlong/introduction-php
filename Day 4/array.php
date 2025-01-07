<?php 
    /**
     * loop have 4:
     * 1. for loop
     * 2. while loop
     * 3. do while loop
     * 4. foreach loop
     */

    // $phones = array("Iphone","Samsung","Oppo");
    $phones = ["Iphone","Samsung","Oppo"];
    echo "<h1>Before add </h1>";
    $count = count($phones);
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }

    #add Nokia
    array_push($phones,"nokai");
    $count = count($phones);
    echo "<h1>After add </h1>";
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }

    #remove Oppo
    array_splice($phones,2,1);
    $count = count($phones);
    echo "<h1>After remove </h1>";
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }

    #update Iphone -> Tesla
    array_splice($phones,0,1,"Tesla");
    $count = count($phones);
    echo "<h1>After update </h1>";
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }

    #sort A->Z->a->z 
    sort($phones);
    $count = count($phones);
    echo "<h1>After sort </h1>";
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }
    
    #sort z->a->Z->A
    rsort($phones);
    $count = count($phones);
    echo "<h1>After revers sort </h1>";
    echo "<h1>Number elements array = $count</h1>";
    foreach($phones as $phone){
        echo "<span> $phone </span>";
    }
?>