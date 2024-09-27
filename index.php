
<?php
session_start();
include 'core/dbh.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Team Stack</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
if(isset($_SESSION['id'])){
  $uid = $_SESSION['id'];
  $sql = "SELECT * FROM user WHERE id='$uid'";
  $result = $dbh->query($sql);
  $row = $result->fetch_assoc();

  echo "<div class='msgDisplay'>".$row['username'].'! You are login'."</div>

        <form action='logoutcode.php' method='POST'>
        <button class='logout'>LOG OUT</button>
        </form>";
}

$errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($errMsg, 'error=signout') !== false){
    echo "<div class='outMsg'>You have Successful SignOut</div>";
}

?>

<center>
<div class="message">
<img src="logo-green.png">
<h1>Welcome</h1>
<button class="button button1"><a href="signup.php">SIGN UP</a></button>
<button class="button"><a class="loginBtn" href="login.php">LOG IN</button></div>
</center>
</body>
</html>
