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
      <div class="input-field <?php if (isset($_GET['error'])) if ($_GET['error'] == 'username_taken') {
                                echo 'error';
                              } ?>">
        <h3>Username</h3>
        <input type="text" name="uname" placeholder="Username" id="username">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small class=" <?php if (isset($_GET['error'])) if ($_GET['error'] == 'username_taken') {
                          echo 'exist-err';
                        } ?>">.</small>
      </div>
      <div class="input-field <?php if (isset($_GET['error'])) if ($_GET['error'] == 'email_taken') {
                                echo 'error';
                              } ?>">
        <h3>Email</h3>
        <input type="email" name="email" placeholder="example@email.com" id="email">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small class="<?php if (isset($_GET['error'])) if ($_GET['error'] == 'email_taken') {
                        echo 'email-err';
                      } ?>">.</small>
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
<script src="./validation.js"></script>
*

</html>