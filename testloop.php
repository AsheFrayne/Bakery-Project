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
    <script src="https://kit.fontawesome.com/b5a9e83033.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="offers.css">
    <title>Arki's Bakery - Offers</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>
    <div class="headerContainer">
        <div class="header">
            <h2>Our Offers</h2>
            <p>Treat yourselves with our delicious offers.</p>
        </div>
    </div>

<div class="item-section">
    <div class="item-header">
        <div class="item-title">
            <h1>Cakes</h1>
        </div>
        <div class="carousel-btn">
            <i class="fa fa-angle-left cake-left hover"></i>
            <i class="fa fa-angle-right cake-right hover"></i>
        </div>
    </div>
    <div class="item-contents cake-contents">
        <?php
        $a = 0;
        while ($a <= 5) {
          echo '<div class="item cake-item">
              <div class="item-img">
                  <img src="img/Wedding/1.jpeg" alt="">
              </div>
              <div class="item-name">
                  <h3>Wedding Cake</h3>
              </div>
              <div class="item-description">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum iste consequuntur rerum eum
                      veritatis autem cumque laborum, molestiae atque aspernatur!</p><br>
              </div>
              <div class="item-price">
                  <p>Starting at ₱20</p>
              </div>
          </div>';
          $a++;
        }
        ?>
    </div>
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

</html>
