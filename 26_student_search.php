<?php
include_once('17_connectDB.php');

//mo ket noi 
$cn = connect();

//viet cau lenh truy van
$query = "SELECT * FROM tbStudent";
//thuc thi truy van
$result = mysqli_query($cn, $query);

if ($result == false) {
    die("Not Found");
}

//khai bao 1 mang rong de chua du lieu trich xuat ra tu bang ket qua
$data = [];

//doc tung dong` tu bang ket qua 
while ($row = mysqli_fetch_assoc($result)) {
    //print_r($row);
    $data[] = $row; //va them vao mang data
}

// xu ly search
if (isset($_GET['btnSearch'])) {
    //lay du lieu search tu form len
    $name = $_GET['searchKey'];
    //viet cau lenh truy van
    $query = "SELECT * FROM tbStudent WHERE stuName LIKE '%" . $name. "%' ";
    //thuc thi truy van
    $result2 = mysqli_query($cn, $query);

    //khai bao 1 mang rong de chua du lieu trich xuat ra tu bang ket qua
    $data = [];

    while ($row = mysqli_fetch_assoc($result2)) {
        $data[] = $row; //va them vao mang data
    }
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

    <!-- search -->
    <form action="26_student_search.php" method="get">
        <input type="text" name="searchKey" placeholder="Enter student name">
        <input type="submit" name="btnSearch" value="Search">
    </form>
    <!-- end search -->

    <h1>Student List</h1>
    <table border='1'>
        <thead>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Gender</th>
            <th>Student DOB</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($data as $item) { ?>
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