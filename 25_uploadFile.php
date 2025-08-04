<?php
    if (isset($_POST['btnSubmit'])) {
        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            print_r($file);
            $fileName = $file['name'];
            $fileTmp = $file['tmp_name'];
            $fileSize = $file['size'];

            //kiem tra xem file up len co phai la hinh` anh ko?
            //cat chuoi thanh mang
            $newArray = explode(".", $fileName);
            //get phan tu cuoi cung`
            $ext = end($newArray);
            //khai bao 1 mang chua cac extension hop le
            $accept_ext = ['jpg', 'jpeg', 'png', 'gif'];
            //kiem tra xem extension cua file co hop le ko
            $result = in_array($ext, $accept_ext);
            if(!$result)
            {
                echo "<br>File phai co dinh dang hinh anh";
            }
            else
            {
                //kiem tra xem kich thuoc hinh co lon hon 2 MB hay ko?
                if($fileSize > 2*1024*1024)
                {
                    echo "<br>File phai <= 2MB";
                }
                else{
                    //move tu tmp qua upload
                    move_uploaded_file($fileTmp, 'upload/'. $fileName);
                    echo "Upload thanh cong";
                }

            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <h1>Upload Image</h1>
    <form action="25_uploadFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="btnSubmit">
    </form>
    <div>
        <img src="upload/<?php echo $fileName ?>" alt="Hinh">
    </div>
</body>

</html>