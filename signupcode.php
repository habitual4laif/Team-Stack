<?php
session_start();
include 'core/dbh.php';

$fname = $_POST['fname'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$confirmPwd = $_POST['confirmPwd'];

//To check empty fields
if (empty($fname)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($username)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($email)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($pwd)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($confirmPwd)){
    header("Location: signup.php?error=empty");
    exit();
}
// To compare the password
if ($pwd !== $confirmPwd) {
    header("Location: signup.php?error=notsame");
    exit();
}
//To check existing users
else{
    $sql = "SELECT email FROM user WHERE email='$email'";
    $result = $dbh->query($sql);
    $emailcheck = mysqli_num_rows($result);
    if ($emailcheck > 0){
        header("Location: signup.php?error=fname");
        exit();
    }else{
        $encrypted_password = password_hash($pwd, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $sql = "INSERT INTO user (fname, username, email, pwd) VALUES ('$fname', '$username', '$email', '$encrypted_password')";
        $result = $dbh->query($sql);

        header("Location: signup.php?successful");
        // header("Location: login.php");
    }
}
