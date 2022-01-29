<?php
include_once 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="signup.css">
  <title>Document</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>


  <main>
    <h1>Sign up</h1>

    <form action="includes/signup.inc.php" method="post" id="form">
      <div class="input-field">
        <h3>Username</h3>
        <input type="text" name="uname" placeholder="Username" id="username">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small>.</small>
      </div>
      <div class="input-field ">
        <h3>Email</h3>
        <input type="email" name="email" placeholder="example@email.com" id="email">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small>.</small>
      </div>
      <div class="input-field">
        <h3>Password</h3>
        <input type="password" name="pwd" placeholder="Password..." id="password">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small></small>
      </div>
      <div class="input-field">
        <h3>Confirm Password</h3>
        <input type="password" name="conpwd" placeholder="Confirm Password..." id="confirm-password">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small></small>
      </div>
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </main>
  <?php

  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo ' <div class="alert show showAlert">
      <span class="fas fa-exclamation-circle"></span>
      <span class="msg">Fill in all fields</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div></div>';
    } else if ($_GET["error"] == "uname_tooshort") {
      echo ' <div class="alert show showAlert">
      <span class="fas fa-exclamation-circle"></span>
      <span class="msg">Username should contain atleast 5 characters</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div></div>';
    } else if ($_GET["error"] == "invalid_email") {
      echo ' <div class="alert show showAlert">
      <span class="fas fa-exclamation-circle"></span>
      <span class="msg">Invalid Email Address</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div></div>';
    } else if ($_GET["error"] == "pwd_tooshort") {
      echo ' <div class="alert show showAlert">
      <span class="fas fa-exclamation-circle"></span>
      <span class="msg">Password should contain at least 8 characters</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div></div>';
    } else if ($_GET["error"] == "invalid_password") {
      echo ' <div class="alert show showAlert">
      <span class="fas fa-exclamation-circle"></span>
      <span class="msg">Password should not contain symbols</span>
      <div class="close-btn">
         <span class="fas fa-times"></span>
      </div></div>';
    } else if ($_GET["error"] == "pwd_notmatch") {
      echo ' <div class="alert show showAlert">
    <span class="fas fa-exclamation-circle"></span>
    <span class="msg">Password does not match</span>
    <div class="close-btn">
       <span class="fas fa-times"></span>
    </div></div>';
    } else if ($_GET["error"] == "username_taken") {
      echo ' <div class="alert show showAlert">
  <span class="fas fa-exclamation-circle"></span>
  <span class="msg">Username is already taken.</span>
  <div class="close-btn">
     <span class="fas fa-times"></span>
  </div></div>';
    } else if ($_GET["error"] == "email_taken") {
      echo ' <div class="alert show showAlert">
  <span class="fas fa-exclamation-circle"></span>
  <span class="msg">Email is already is use.</span>
  <div class="close-btn">
     <span class="fas fa-times"></span>
  </div></div>';
    }
  }
  ?>
  <footer>
    <div class="footer-container">
      <img src="img/newlogobg.png" alt="Arki's Bakery Logo">
      <div class="socmed-container">
        <a href="" class="fa fa-facebook"></a>
        <a href="" class="fa fa-twitter"></a>
        <a href="" class="fa fa-google"></a>
        <a href="" class="fa fa-instagram"></a>
        <a href="" class="fa fa-pinterest"></a>
      </div>
    </div>
  </footer>
</body>
<script src="./alert.js"></script>

</html>