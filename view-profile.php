<?php
include 'session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="view-profile.css">
  <title>View Profile</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <div class="container">
      <div class="profile-pic">
        <label class="-label" for="file">
          <i class="fas fa-camera"></i>
          <span>Change Image</span>
        </label>
        <input id="file" type="file" />
        <img src="./img/default.png" />
      </div>

      <div class="infobox">
        <div class="name">Jessie Kulot</div>
        <div>example@gmail.com</div>
        <small>Date Joined.</small>
        <div>01/01/01</div>
      </div>
      <div class="description-box">
        <small>Desciption</small>
        <textarea name="description" class="description" cols="30" rows="10">
        </textarea>
        <a href="./profile.php"><button>Edit</button></a>

      </div>
  </main>
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

</html>