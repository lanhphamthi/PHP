<?php
    $name = "FPT Aptech";

    //POSIX
    $result = mb_ereg("^F\w+\s\w+$", $name);
    echo "<br>result is $result";

    $result2 = mb_eregi("^f\w+\s\w+$", $name);
    echo "<br>result2 is $result2";

    $email = "fptaptech1999@gmail.com";

    $result3 = mb_ereg_replace("\d+", "2025", $email);
    echo "<br>result3 is $result3";

    //split: cat chuoi thanh mang
    $newArr = mb_split("\s", $name);
    echo "<br>newArr is: ";
    print_r($newArr);

    //PERL
    $result = preg_match("/^F\w+\s\w+$/", $name);
    echo "<br>result is $result";

    $result2 = preg_match("/^f\w+\s\w+$/i", $name);
    echo "<br>result2 is $result2";

    $result3 = preg_replace("/\d+/", "2025", $email);
    echo "<br>result3 is $result3";

    $newArr = preg_split("/\s/", $name);
    echo "<br>newArr is: ";
    print_r($newArr);

?>