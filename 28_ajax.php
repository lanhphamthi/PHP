<?php
include_once('17_connectDB.php');
if (isset($_GET['name'])) {
    $name = $_GET['name'];

    $cn = connect();
    //viet cau lenh truy van
    $query = "SELECT * FROM tbStudent WHERE stuName LIKE '%" . $name . "%' ";
    //thuc thi truy van
    $result2 = mysqli_query($cn, $query);

    //khai bao 1 mang rong de chua du lieu trich xuat ra tu bang ket qua
    $data = [];

    while ($row = mysqli_fetch_assoc($result2)) {
        $data[] = $row; //va them vao mang data
    } ?>

    //dong ket noi
    disconnect($cn);

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
<?php } ?>
