<?php
    $nameErr = $passErr = $confirmPassErr = $emailErr = "";

    if(isset($_POST['btnRegister']))
    {
        //username: bat dau la chu cai', it nhat la 2 ky tu
        $uname = $_POST['name'];
        if(!preg_match("/^[a-zA-Z]\w+$/", $uname))
        {
            //bao loi
            $nameErr = "username: bat dau la chu cai', it nhat la 2 ky tu";
        }

        //password: bat ky ky' tu nao, it nhat 3 ky tu.
        $pass = $_POST['password'];
        if(!preg_match("/^.{3,}$/", $pass))
        {
            //bao loi
            $passErr = "Password it nhat 3 ky tu";
        }

        //confirmPass: trung` voi password
        $confirmPass = $_POST['confirmPassword'];
        if($pass !== $confirmPass)
        {
            $confirmPassErr = "ConfirmPass phai trung voi Password";
        }

        //email: aaa@aaa.com
        $email = $_POST['email'];
        if(!preg_match("/^\w+@\w+\.\w+$/", $email))
        {
            //bao loi
            $emailErr = "Email chua dung dinh dang";
        }

        if($nameErr == "" && $passErr == "" && $confirmPassErr == "" && $emailErr =="")
        {
            echo "Ban da dang ky thanh cong";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validate</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
    <form action="11_form_validate.php" method="post">
        <div>
            UserName: <input type="text" name="name">
            <span class="error"><?php echo $nameErr; ?></span>
        </div>
        <div>
            Password: <input type="password" name="password">
            <span class="error"><?php echo $passErr; ?></span>
        </div>
        <div>
            ConfirmPassword: <input type="password" name="confirmPassword">
            <span class="error"><?php echo $confirmPassErr; ?></span>
        </div>
        <div>
            Email: <input type="email" name="email">
            <span class="error"><?php echo $emailErr; ?></span>
        </div>
        <div>
            Birthday: <input type="date" name="birthday" required>
        </div>
        <div>
            <input type="submit" value="Register" name="btnRegister">
        </div>

    </form>
</body>
</html>