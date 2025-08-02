<?php
    //khai bao 1 array 1 chieu (numeric array/index array)
    $numbers = array(10, 11, 12, 13, 14);
    $numbers2 = [10, 11, 12, 13, 14];
    echo "<br>In theo print_r:";
    print_r($numbers);

    //for thuong
    echo "<br> For thuong: ";
    for($i = 0; $i < count($numbers); $i++)
    {
        echo "<br> $numbers[$i]";
    }

    //foreach
    echo "<br> Foreach: ";
    foreach($numbers as $num)
    {
        echo "<br> $num";
    }

    //khai bao 1 associative array (key => value)
    $student = ["name"=>"Khoa","age"=>29];
    echo "<br>In theo print_r:";
    print_r($student);

    echo "<br> Foreach: ";
    foreach($student as $s)
    {
        echo "<br> $s";
    }

    echo "<br> Ten: " . $student['name'];
    echo "<br> Tuoi: " . $student["age"];

    echo "<br> Foreach 2: ";
    foreach($student as $k=>$s)
    {
        echo "<br> $k la $s";
    }

    echo "<br> Foreach: ";
    foreach($numbers as $ke=>$num)
    {
        echo "<br> $ke la $num";
    }

    //khai bao 1 array 2 chieu`
    $studentList = [
        ["name"=>"Khoa","age"=>29],
        ["name"=>"Nghia","age"=>25],
        ["name"=>"Hop","age"=>19]
    ];

    echo "<br>In theo print_r:";
    print_r($studentList);

    /*1. Khoa: 29
      2. Nghia: 25
      3. Hop: 19
    */

    foreach($studentList as $k=>$stu)
    {
        echo "<br>". ($k+1). "." .$stu['name'] . ":" . $stu['age'];    
    }

    //sort
    asort($student);
    echo "<br> After sort: ";
    print_r($student);
?>