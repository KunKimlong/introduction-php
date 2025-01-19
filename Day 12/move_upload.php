<?php 

    $name = $_FILES['image']['name'];
    $new_name = "Image/".rand(1,99999)."_".$name;
    move_uploaded_file($_FILES['image']['tmp_name'],$new_name);
    echo $new_name;