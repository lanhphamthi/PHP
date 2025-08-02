<?php
    $to = "lanhpt5@fpt.edu.vn";
    $subject = "Gửi email có đính kèm file";
    $message = "Đây là nội dung email.";

    //Mở file để đọc nội dung
    $file = fopen( "text.txt", "r" );
    if( $file == false )
    {
        echo "Error in opening file";
        exit();
    }
    $size = filesize("text.txt");
    $content = fread( $file, $size); //Nội dung file
    //Mã hóa nội dung đính kèm - chia nhỏ nội dung thành nhiều dòng
    $encoded_content = chunk_split( base64_encode($content)); 

    //Tạo ra một chuỗi 32 dùng để phân vùng mô tả
    $num = md5( time() );

    //Phần header chính
    $header = "From: lanhpt5@fpt.edu.vn \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; ";
    $header .= "boundary=$num\r\n";
    $header .= "--$num\r\n";

    //Phần nội dung Email
    $message .= "Content-Type: text/plain\r\n";
    $message .= "Content-Transfer-Encoding:8bit\r\n\n";
    $message .= "This is an example for mail attachment in MIME format\r\n";
    $message .= "--$num\r\n";

    //Phần nội dung đính kèm
    $message .= "Content-Type:  multipart/mixed; ";
    $message .= "name=\"text.txt\"\r\n";
    $message .= "Content-Transfer-Encoding:base64\r\n";
    $message .= "Content-Disposition:attachment; ";
    $message .= "filename=\"text.txt\"\r\n\n";
    $message .= "$encoded_content\r\n";
    $message .= "--$num--";   //Kết thúc các phân đoạn

    //Gửi mail
    $success = mail ($to,$subject,$message,$header);

    if( $success == true )
    {
        echo "Đã gửi mail thành công...";
    }
    else
    {
        echo "Không gửi đi được...";
    }
?>

