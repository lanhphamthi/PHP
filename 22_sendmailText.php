<?php
    $to = "lanhpt5@fpt.edu.vn";
    $subject = "Test e-mail";
    $message = "This is an example for sending mail by mail() function.";
    $header = "From: lanhpt5@fpt.edu.vn";

    if ($send) {
        echo "Mail sent to $to address!!!";
    } else {
        echo "Mail could not be sent to $to address!!!";
    }
?>