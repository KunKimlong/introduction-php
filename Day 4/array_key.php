<?php

    // $people = [
    //     "name"=>"Sok",
    //     "gender"=>'Male',
    // ];
    // echo $people["name"];

    $peoples = [
        [
            "name"=>"Sok",
            "gender"=>'Male',
        ],
        [
            "name"=>"Thida",
            "gender"=>'Female',
        ]
    ];

    foreach($peoples as $p){
        echo "<span>Name = ".$p["name"]." </span>";
    }

    // foreach($peoples as $i => $p){
    //     echo "<span>".$i." = ".$p["name"]." </span>";
    // }

?>