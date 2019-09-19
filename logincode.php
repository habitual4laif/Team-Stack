<?php
session_start();
include 'core/dbh.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $dbh->query($sql);
$row = $result->fetch_assoc();
$hash_pwd = $row['pwd'];
$hash = password_verify($pwd, $hash_pwd);  //This function decrypt the password

if($hash == 0){
    header("Location: login.php?error=empty");
    exit();
}else {
    $sql = "SELECT * FROM user WHERE username='$username' AND pwd='$hash_pwd'";
        $result = $dbh->query($sql);

    if(!$row = $result->fetch_assoc()){
        echo "Your Username or Password is incorrect!";
    }else{
        $_SESSION['id'] = $row['id'];
    }

    header('Location: message.php');
}
