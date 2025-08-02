<?php
    //khai bao bien toan cuc
    $y = 1;

    //khai bao ham
    function myGlobal()
    {
        global $y;
        $y++;
        echo "<br>bien y la $y";
    }

    //goi ham
    myGlobal();

    //ngoai ham
    echo "<br>bien y o ngoai la $y";


?>