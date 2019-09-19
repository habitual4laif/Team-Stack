
<?php
session_start();
require_once 'core/dbh.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Our Page</title>
<link rel="stylesheet" type="text/css" href="message.css">
</head>

<body>

<?php
          if(isset($_SESSION['id'])){
            $uid = $_SESSION['id'];
            $sql = "SELECT * FROM user WHERE id='$uid'";
            $result = $dbh->query($sql);
            $row = $result->fetch_assoc();

            echo "<hr><h5 class='msgDisplay'>".$row['username'].'! You are Welcome'."</h5><hr>";
}
  			if(isset($_SESSION['id'])){

        echo "<div class='message' align='left'>
              <div class='topmessage'><h1>Ideate, Brainstorm, Collaborate.</h1></div>
              <div class='submessage'>Team Stack is a fine Blend of 10 Creative minds bubbling forth with innovations in tech that would hold your attention. We are devoted to learning and collaborating as we journey through the HNG tasks, we are excited  to have you visit Our Page.</div>
                <div class='btnMsg'>
                <form action='logoutcode.php' method='POST'>
                <button class='button'>LOG OUT</button></div>
                </form>
                <button class='button btnMsg'>Welcome to Team Stack</button>
                </div>
                </div>
                <footer>
                Designed By Team Stack <a href='https://github.com/cramwordplay/Team-Stack'>VISIT US</a>
                <img src='logo-white.png'>
                </footer>";
              } else {
                header('Location: index.php');
              }
?>
</body>
</html>
