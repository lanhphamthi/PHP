<?php
    include_once('ConnectDB.php');

    if(isset($_POST['btnAdd']))
    {
        //mo ket noi
        $cn = connect();

        //get gia tri tu form dua len
        $code = $_POST['code'];
        $type = $_POST['type'];
        $source = $_POST['source'];
        $destination = $_POST['destination'];
        $depTime = $_POST['depTime'];
        $hours = $_POST['hours'];

        if($hours < 1 || $hours > 20)
        {
            echo "Hours must be between 1 and 20";
            return;
        }

        echo "ok";

        //viet cau lenh truy van
        $query = "INSERT INTO tbFlights(AircraftCode, FType, Source, Destination, DepTime, JourneyHrs) 
                    VALUES ('$code', '$type', '$source', '$destination', '$depTime', '$hours')";
        //thuc thi truy van
        mysqli_query($cn, $query);
        //dong ket noi
        disconnect($cn);
        //chuyen ve trang index
        header("location: FlightControl.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Create</title>
</head>
<body>
    <h1>Add New Flight</h1>
    <form action="addFlight.php" method="post">
        <div>
            AircraftCode: <input type="text" name="code" required>
        </div>
        <div>
            FType: <input type="text" name="type" required pattern="(Boeing|Airbus)">
        </div>
        <div>
            Source: <input type="text" name="source" required>
        </div>
        <div>
            Destination: <input type="text" name="destination" required>
        </div>
        <div>
            DepTime: <input type="datetime" name="depTime" required>
        </div>
        <div>
            JourneyHrs: <input type="text" name="hours" required>
        </div>
        <div>
            <input type="submit" value="Add" name="btnAdd">
        </div>
    </form>
</body>
</html>