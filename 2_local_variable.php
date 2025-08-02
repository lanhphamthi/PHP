<?php
    //khai bao ham
    function myLocal()
    {
        //khai bao bien cuc bo (local variable)
        $x = 5;
        echo "bien x co gia tri la $x";
    }

    //goi ham
    myLocal();

    //in bien x o ngoai ham -> error
    echo "bien x o ngoai ham la $x";


?>