<?php
include_once('ConnectDB.php');

//lay gia tri cu~ cua student
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //mo ket noi
    $cn = connect();

    //viet cau lenh truy van
    $query = "SELECT * FROM tbFlights WHERE AircraftCode = '$id'";
    //thuc thi truy van, luc nay chi tra ve 1 dong` du lieu
    $row = mysqli_query($cn, $query);

    $item = mysqli_fetch_assoc($row);

    //dong ket noi
    disconnect($cn);
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <h1>Detail</h1>
    Code: <?php echo $item['AircraftCode'] ?> <br>
    Source: <?php echo $item['Source'] ?> <br>
    Destination: <?php echo $item['Destination'] ?> <br>
    FType: <?php echo $item['FType'] ?> <br>
    DepTime: <?php echo $item['DepTime'] ?> <br>
    Hours: <?php echo $item['JourneyHrs'] ?> <br>
        
</body>

</html>