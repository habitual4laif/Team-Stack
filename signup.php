<?php
session_start();

include 'core/dbh.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Page</title>
    <link href="css/signup.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto&display=swap" rel="stylesheet">

</head>
<body>

<div class="main-container">

<div class="sub-container">
    <!-- this div only displays on mobile starting -->

        <div class="div_for_mobile_view">
            <div class="image_of_team_stack_above">
                <center>
                    <img src="./img/Vector.svg"  alt="teamStack" class="above_image">
                </center>
            </div>
            <div class="image_of_team_stack_below">
              <img src="./img/TEAM STACK.svg" alt="teamStack" class="below_text">
            </div>
            <h2 class="welcome_text_mobile">Welcome!</h2>
            <p class="welcome_text_p_tag_mobile">Ideate, Brainstorm, and Collaborate.</p>
      </div>
        <!-- this div only displays on mobile ending -->

    <div class="form-container">

      <form action="signupcode.php" method="post" class="login-form">
        <h1 class="sign_up_text">Sign Up</h1>
<?php
        $errMsg = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($errMsg, 'error=empty') !== false){
            echo "<hr><h5 class='emptyErr'>Kindly fill all fields</h5><hr>";
        } else if (strpos($errMsg, 'error=notsame') !== false) {
            echo "<hr><h5 class='pwdErrMsg'>Password does not match</h5><hr>";
        } else if (strpos($errMsg, 'error=fname') !== false) {
              echo "<hr><h5 class='emailErr'>This Email is already taken</h5><hr>";
        } else if (strpos($errMsg, 'successful') !== false) {
              echo "<hr><h5 class='signMsg'>SignUp Successful</h5><hr>";
        }
?>
          <div id="emptyFields"></div>
        <div class="txtb">
            <label class="labels">Full name</label>
            <input type="text" placeholder="Team Stack" name="fname">
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <label class="labels">Username</label>
            <input type="text" placeholder="@TeamStack_HNG" name="username">
            <span data-placeholder="Password"></span>
        </div>

        <div class="txtb">
                <label class="labels">Email Address</label>
                <input type="email" placeholder="teamStack@example.com" name="email">
                <span data-placeholder="Password"></span>
            </div>
            <div class="txtb">
                <label class="labels">Password</label>
                <input type="password" placeholder="*******" name="pwd">
                <span data-placeholder="Password"></span>
                <div id="comparePwd"></div>
            </div>
            <div class="txtb">
                <label class="labels">Confirm Password</label>
                <input type="password" placeholder="*******" name="confirmPwd">
                <span data-placeholder="Password"></span>
            </div>
            <center>
            <input type="submit" class="logbtn" value="Sign Up">



    <div class="bottom-text">
     <p class="already_user_text">Already a user?</p>
    </div>
            </center>
        </form>

</div>
<div class="welcome_text_div">
    <center>
        <div class="image_of_team_stack_above">
            <img src="./img/Vector.svg"  alt="teamStack" class="above_image">
        </div>

        <div class="image_of_team_stack_below">
            <img src="./img/TEAM STACK.svg" alt="teamStack" class="below_text">

        </div>
        <div class="whole_div_welcome_text">
            <p class="welcome_text">Welcome!</p>

            <p class="welcome_text_p_tag">Ideate, Brainstorm, and Collaborate.</p>

            <div class="image_of_team_stack_below_text">
                   <img src="./img/Vector (1).svg" alt="teamStack">
                   <img src="./img/TEAM STACK (1).svg" alt="teamStack" class="below_text_teamStack">
            </div>
        </div>
    </center>

</div>

</div>

</div>

<script src="stack.js"></script>

</body>
</html>
