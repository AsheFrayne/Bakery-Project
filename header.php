<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
    <link rel="stylesheet" href="home.css">
    <title>Arki's Bakery</title>
</head>
<body>
    <div class="navbarContainer">
        <div class="navbar">
            <button class="dropdown" title="dropdown">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </button>
            <div class="navmenu">
                <a href="">Home</a>
                <!-- <a href="">About</a> -->
                <a href="./offers.html">Offers</a>
                <a href="./gallery.html">Gallery</a>
                <?php
                  if(isset($_SESSION["uname"])) {
                    $a = $_SESSION["uname"];
                    echo '<a href="./profile.php">Profile Page</a>';
                    echo '<a href="./includes/logout.inc.php">Log out</a>';
                  }
                  else{
                    echo '<a href="./login.php">Log in</a>';
                    echo '<a href="./signup.php">Sign up</a>';
                  }
                ?>
                <!-- <a href="">Blog</a> -->
                <!-- <a href="">Contact</a> -->
            </div>
        </div>
    </div>
