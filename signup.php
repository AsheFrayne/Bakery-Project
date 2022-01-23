<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="signup.css">
  <title>Document</title>
</head>

<body>
  <div class="navbarContainer">
    <div class="navbar">
      <a href="./index.html">
        <img src="img/newlogobg.png" alt="Arki's Bakery Logo">
      </a>
      <button class="dropdown">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </button>
      <div class="navmenu">
        <a href="index.php">Home</a>
        <a href="">About</a>
        <a href="./offers.html">Offers</a>
        <a href="./gallery.html">Gallery</a>
        <?php
        if (isset($_SESSION["uname"])) {
          $a = $_SESSION["uname"];
          echo '<a href="./profile.php">Profile Page</a>';
          echo '<a href="./includes/logout.inc.php">Log out</a>';
        } else {
          echo '<a href="./login.php">Log in</a>';
          echo '<a href="./signup.php">Sign up</a>';
        }
        ?>

      </div>
    </div>
  </div>
  <main>
    <h1>Sign up</h1>

    <form action="includes/signup.inc.php" method="post">
      <div class="input-field">
        <h3>Username</h3>
        <input type="text" name="uname" placeholder="Username">
      </div>
      <div class="input-field">
        <h3>Email</h3>
        <input type="email" name="email" placeholder="example@email.com">
      </div>
      <div class="input-field">
        <h3>Password</h3>
        <input type="password" name="pwd" placeholder="Password...">
      </div>
      <div class="input-field">
        <h3>Confirm Password</h3>
        <input type="password" name="conpwd" placeholder="Confirm Password..."><br />
      </div>
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </main>
  <?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      // echo '<script>alert("Fill in all fields!")</script>';
      echo '<p>Error: Fill in all fields!<p>';
    } else if ($_GET["error"] == "invalid_uname") {
      echo '<p>Error: Invalid Username!<p>';
    } else if ($_GET["error"] == "pwd_notmatch") {
      echo '<p>Error: Password not match!<p>';
    } else if ($_GET["error"] == "username_email_taken") {
      echo '<p>Error: The username or email is already taken!<p>';
    }
  }
  ?>

</body>

</html>