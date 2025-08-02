<?php

    //khai bao bien
    $name = "FPT Aptech";
    $age = 26;

    //in gia tri cac bien ra man hinh
    echo "Ten toi la: " . $name;
    print '<br>Tuoi cua toi la: ' . $age;

    echo "<br> Ten toi la $name";
    echo '<br> Tuoi toi la $name';

    //khai bao hang so
    define("MY_NAME", "FPT");
    const myname = "FPT";
    
    echo "<br>Ten ban la: " . MY_NAME;

    echo "<br> Ban dang o line so " . __LINE__;
    echo "<br> Ban dang o file  " . __FILE__;
    

?>