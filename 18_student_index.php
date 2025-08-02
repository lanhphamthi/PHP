<?php
    include_once ('17_connectDB.php');

    //mo ket noi 
    $cn = connect();

    //viet cau lenh truy van
    $query = "SELECT * FROM tbStudent";
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
    <title>Student Index</title>
</head>
<body>
    <h1><a href="19_student_create.php">Add New Student</a></h1>
    <h1>Student List</h1>
    <table border = '1'>
        <thead>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student DOB</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach($data as $item) { ?>
            <tr>
                <td><?php echo $item['stuID'] ?></td>
                <td><?php echo $item['stuName'] ?></td>
                <td><?php echo $item['stuGender'] ?></td>
                <td><?php echo $item['stuDOB'] ?></td>
                <td>
                    <a href="20_student_edit.php?id=<?php echo $item['stuID'] ?>">Edit</a> | 
                    <a href="21_student_delete.php?id=<?php echo $item['stuID'] ?>" 
                        onclick="return confirm('Are u sure to delete?')">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>