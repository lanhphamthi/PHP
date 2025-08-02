<?php
    function myFunction(){
        //khai bao bien static
        static $staticVar = 10;
        //khai bao bien thuong
        $normalVar = 10;

        $staticVar++;
        $normalVar++;

        echo "<br> staticVar is " . $staticVar;
        echo "<br> normalVar is " . $normalVar;
    }

    //goi ham
    myFunction();
    myFunction();
    myFunction();

?>