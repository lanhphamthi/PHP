<?php
    include_once ('ConnectDB.php');

    //mo ket noi 
    $cn = connect();

    //viet cau lenh truy van
    $query = "SELECT * FROM tbFlights";
    //thuc thi truy van
    $result = mysqli_query($cn, $query);

    if($result == false)
    {
        die("Not Found");
    }

    //khai bao 1 mang rong de chua du lieu trich xuat ra tu bang ket qua
    $data = [];

    //doc tung dong` tu bang ket qua 
    while($row = mysqli_fetch_assoc($result))
    {
        //print_r($row);
        $data[] = $row; //va them vao mang data
    }

    //dong ket noi
    disconnect($cn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Control</title>
</head>
<body>
    <h1><a href="addFlight.php">Add New Flight</a></h1>
    <h1>Flight List</h1>
    <table border = '1'>
        <thead>
            <th>Code</th>
            <th>From</th>
            <th>To</th>
            <th>Departure Time</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($data as $item) { ?>
            <tr>
                <td><?php echo $item['AircraftCode'] ?></td>
                <td><?php echo $item['Source'] ?></td>
                <td><?php echo $item['Destination'] ?></td>
                <td><?php echo $item['DepTime'] ?></td>
                <td>
                    <a href="detailFlight.php?id=<?php echo $item['AircraftCode'] ?>">Detail</a> | 
                    <a href="editFlight.php?id=<?php echo $item['AircraftCode'] ?>">Edit</a> | 
                    <a href="deleteFlight.php?id=<?php echo $item['AircraftCode'] ?>" 
                        onclick="return confirm('Are u sure to delete?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>