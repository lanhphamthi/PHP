<?php
if (isset($_POST['btnLogin'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    if ($uname == 'airAD' && $pass == '001100') {
        header('location: FlightControl.php');
    } else {
        echo "Login fail";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="Login.php" method="post">
        <div>
            UserName: <input type="text" name="username">
        </div>
        <div>
            Password: <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="Login" name="btnLogin">
        </div>
    </form>
</body>

</html>