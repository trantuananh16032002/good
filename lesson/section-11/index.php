<?php
    if(isset($_POST['btn_login'])){
        $error = array();
        // kiem tra username
        if(empty($_POST['username'])){
            $error['username'] = "Khong duoc de trong username";
        }else{
            $partten ="/^[A-Za-z0-9_\.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
            if(!preg_match($partten ,$_POST['username']))
                $error['username'] = "Username khong dung dinh dang";
            else
                $username = $_POST['username'];
        }
        //kiem tra password
        if(empty($_POST['password'])){
            $error['password'] = "Khong duoc de trong password";
        }else{
            $password = $_POST['password'];
        }
        //xu ly
        if(empty($error)){
            echo "Username: {$username} <br> Password: {$password}";
        }else{
            echo "<pre>";
            print_r($error);
            echo "</pre>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chuan hoa du lieu form dang nhap</h1>
    <form action="" method="post">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>
</html>