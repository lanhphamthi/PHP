<?php

    function connect()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "pretest4";

        $con = mysqli_connect($host, $user, $pass, $database);

        if ($con) {
            echo "Connect successfully";
            return $con;
        } else {
            die("Cannot connect");
        }
    }

    function disconnect($cn)
    {
        mysqli_close($cn);
    }

?>
