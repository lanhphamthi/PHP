<?php
include_once('17_connectDB.php');

//lay gia tri id can delete
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //mo ket noi
    $cn = connect();

    //viet cau lenh truy van
    $query = "DELETE FROM tbStudent WHERE stuID = $id";
    //thuc thi truy van, luc nay chi tra ve 1 dong` du lieu
    mysqli_query($cn, $query);

    //dong ket noi
    disconnect($cn);

    //chuyen trang
    header("location: 18_student_index.php");
}