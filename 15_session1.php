<?php
    session_start();

    //kiem tra xem session co luu chua?
    if(isset($_SESSION['username']))
    {
        //get gia tri cua session
        $uname = $_SESSION['username'];
        $pass = $_SESSION['password'];
        echo "<br>UserName is $uname";
        echo "<br>Password is $pass";

        //thay doi session
        $_SESSION['username'] = "user";
        $_SESSION['password'] = 456;
        echo "<br> After change: ";
        //get gia tri cua session
        $uname = $_SESSION['username'];
        $pass = $_SESSION['password'];
        echo "<br>UserName is $uname";
        echo "<br>Password is $pass";

    }
    else
    {
        echo "Session not set yet";
    }

?>