<?php
include 'session.php';
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
                <!-- <a href="index.php">Home</a> -->

                <?php
                if (isset($_SESSION["usersID"])) {
                    if ($_SESSION["usersType"] == 'admin') {
                        echo '<a href="index.php?admin=true">Home</a><a href="about.php?admin=true">About</a><a href="./offers.php?admin=true">Offers</a>';
                    } else {
                        echo '<a href="index.php">Home</a><a href="about.php">About</a><a href="./offers.php">Offers</a>';
                    }
                } else {
                    echo '<a href="index.php">Home</a><a href="about.php">About</a><a href="./offers.php">Offers</a>';
                }
                ?>
                <?php
                if (isset($_SESSION["usersID"])) {
                    if ($_SESSION["usersType"] == 'admin') {
                        echo '<a href="./view-profile.php?admin=true">Profile Page</a>';
                    } else {
                        echo '<a href="./view-profile.php">Profile Page</a>';
                    }
                    echo '<a href="./includes/logout.inc.php">Log out</a>';
                } else {
                    echo '<a href="./login.php">Log in</a>';
                    echo '<a href="./signup.php">Sign up</a>';
                }
                ?>

            </div>

        </div>
    </div>
    </div>
    <div class="video-container">
        <video class="video" preload="auto" autoplay muted loop poster="./img/poster.png">
            <source src="./img/video-compressed.mp4" type="video/mp4">
        </video>
    </div>
    <div class="overlay">
        <img src="./img/newlogobg.png" alt="logo" class="overlay-img">
        <p>Arki's Bakery</p>
    </div>
    <div class="bttm-home">
        <section class="box">
            <div class="imgbox">
                <img src="img/box1.jpg">
            </div>
            <div class="boxtext">
                <p>Lorem ipsum dolor sit amet, co nsectetur adipiscing elit. Sed libero urna, cursus in hendrerit sed, pretium in diam. Nulla lobortis turpis vel neque fringilla, non faucibus diam fringilla. Curabitur eleifend nisi id venenatis eleifend. Vestibulum semper euismod augue sollicitudin egestas. Vestibulum vitae purus tincidunt, eleifend ipsum in, placerat tellus.</p>
            </div>
        </section>
        <section class="box">
            <div class="imgbox">
                <img src="img/box2.jpg">
            </div>
            <div class="boxtext">
                <p>Lorem ipsum dolor sit amet, co nsectetur adipiscing elit. Sed libero urna, cursus in hendrerit sed, pretium in diam. Nulla lobortis turpis vel neque fringilla, non faucibus diam fringilla. Curabitur eleifend nisi id venenatis eleifend. Vestibulum semper euismod augue sollicitudin egestas. Vestibulum vitae purus tincidunt, eleifend ipsum in, placerat tellus.</p>
            </div>
        </section>
    </div>

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
</body>
<script src="script.js" defer></script>
<script src="animation-home.js" defer></script>

</html>