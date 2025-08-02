<?php
    if(isset($_POST['btnLogin']))
    {
        //get gia tri cua cac field tu form dua len
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        //kiem tra xem co rememember hay ko
        if(isset($_POST['remember']))
        {
            //luu cookie
            setcookie("userName", $uname, time() + 120);
        }

        if($uname == "admin" && $pass == "123")
        {
            echo "Welcome Admin";
        }
        else
        {
            echo "Welcome User";
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Login</h1>
    <form action="13_cookie.php" method="post">
        <div>
            UserName: <input type="text" name="username" 
                        value="<?php if(isset($_COOKIE['userName'])) echo $_COOKIE['username'] ?>">
        </div>
        <div>
            Password: <input type="password" name="password">
        </div>
        <div>
            Remember: <input type="checkbox" name="remember">
        </div>
        <div>
            <input type="submit" value="Login" name="btnLogin">
        </div>
    </form>
</body>
</html>