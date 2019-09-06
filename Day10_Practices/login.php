<?php
session_start();
include 'connection.php';
$connection = new Connection;

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $array = array(
    ':username'=>$username,
        ':password'=>$password
    );
    
    $connection->update("INSERT INTO users(username,password) VALUES(:username,:password)",$array);
    
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $array = array(
    ':username'=>$username,
        ':password'=>$password
    );
    $result = $connection->getAll("SELECT * FROM users WHERE username='$username' AND password = '$password'",$array);
    
    if(count($result)){
        $_SESSION['logged_id'] = $username;
        header("location:index_admin.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username"><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" value="Login" name="login">
        <input type="submit" value="Register" name="register">
    </form>

    <hr>
    <a href="index.php">Home</a>
</body>

</html>
