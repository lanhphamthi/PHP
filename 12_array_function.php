<?php
    //khai bao 1 array
    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung"];

    //array_push(): them phan tu vao cuoi array
    array_push($studentList, "Gia Bao");
    print_r($studentList);

    //array_unshift(): them phan tu vao dau` array
    array_unshift($studentList, "Lam Phong");
    echo '<br> After array_unshift($studentList, "Lam Phong"): <br> ';
    print_r($studentList);

    //array_pop(): xoa 1 phan tu cuoi cung` ra khoi array
    array_pop($studentList);
    echo '<br> array_pop($studentList): <br> ';
    print_r($studentList);

    //array_shift(): xoa phan tu dau tien ra khoi array
    array_shift($studentList);
    echo '<br> array_shift($studentList): <br> ';
    print_r($studentList);

    //array_splice(): xoa phan tu o vi tri bat ky
    array_splice($studentList, 1, 1);
    echo '<br> array_splice($studentList, 1, 1): <br> ';
    print_r($studentList);

    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung", "Lam Phong"];
    //array_slice(): cat 1 mang nho trong mang lon
    $newArray = array_slice($studentList, 2);
    echo '<br> studentList: <br> ';
    print_r($studentList);
    echo '<br> newArray: <br> ';
    print_r($newArray);

    //them 1 phan tu vao cuoi array
    $studentList[] = "Minh Hieu";
    echo '<br> $studentList[] = "Minh Hieu" <br> ';
    print_r($studentList);

    //them Phuc vao sau Khoa: them 1 phan tu vao vi tri bat ky
    array_splice($studentList, 2, 0, "Hoang Phuc");
    echo '<br> array_splice($studentList, 2, 0, "Hoang Phuc") <br> ';
    print_r($studentList);

    //chuoi dinh dang file: abc.jpg, abc.jpeg, abc.png, abc.gif
    $image = "abc._3ab_3.pdf";
    //cat chuoi thanh mang
    $newImage = explode(".", $image);
    //get phan tu cuoi cung`
    $ext = end($newImage);
    //khai bao 1 mang chua cac extension hop le
    $accept_ext = ['jpg', 'jpeg', 'png', 'gif'];
    //kiem tra xem extension cua file co hop le ko
    $result = in_array($ext, $accept_ext);
    if($result)
    {
        echo "<br>Hinh anh hop le";
    }
    else{
        echo "<br>Hinh anh ko hop le";
    }




?>