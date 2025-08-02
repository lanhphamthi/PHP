<?php
    if(isset($_GET['btnSubmit']))
    {
        $uname = $_GET['name'];
        $pass = $_GET['password'];

        echo "Name: $uname Pass: $pass";
    }

?>