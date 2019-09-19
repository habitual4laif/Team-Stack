<?php
session_start();

include 'core/dbh.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login to Team Stack</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,800|Roboto:300,400&display=swap" rel="stylesheet">
</head>
<body>


	<?php
					$errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
					if (strpos($errMsg, 'error=empty') !== false){
							echo "<div class='emptyErr'>Incorrect details</div>";
					}
	?>

	<div class="login-container">
		<div class="login-box">
			<!-- Team stack image -->
			<img src="logo-green.png" alt="Team Stack Logo" width="100px">
			<p class="login-text">LOG IN</p>

<form class="login-form" action="logincode.php" method="post">
				<input type="email" name="email" placeholder="Email address" required autofocus>
				<input type="password" name="pwd" placeholder="Password" required><br>
				<input class="login-button" type="submit" name="submit" value="LOG IN">
			</form>
			<!-- <p class="login-help"><a href="">Forgot password?</a></p><br> -->
			<p class="login-help"><a href="signup.php">Have no account yet?</a></p>
		</div>
		<div class="login-desc">
			<h1>TEAM <span>STACK</span></h1>
		</div>
	</div>
</body>
</html>
