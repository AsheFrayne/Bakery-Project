<?php
include 'session.php';

$usersName = $_SESSION["usersName"];
$usersID = $_SESSION["usersID"];
$usersPwd = $_SESSION["usersPwd"];
$usersEmail = $_SESSION["usersEmail"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=GFS Didot' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/8e42a01d1f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="profile.css">
  <title>Update Profile</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <h3>Update Profile</h3>
    <form action="includes/profile.inc.php" method="post" id="form">
      <div class="input-field">
        <h3>Username</h3>
        <input type="text" name="uname" value="<?php echo $usersName ?>" id="username">
        <i class="fas fa-exclamation"></i>
        <i class="far fa-check-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="input-field">
        <h3>Email</h3>
        <input type="email" name="email" value="<?php echo $usersEmail ?>" id="email">
        <i class="fas fa-exclamation"></i><i class="far fa-check-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="input-field">
        <h3>Password</h3>
        <input type="password" name="pwd" placeholder="Password..." id="password">
        <i class="fas fa-exclamation"></i><i class="far fa-check-circle"></i>
        <small>Error Message</small>
      </div>
      <div class="input-field">
        <h3>Confirm Password</h3>
        <input type="password" name="conpwd" placeholder="Confirm Password..." id="confirm-password">
        <i class="fas fa-exclamation"></i><i class="far fa-check-circle"></i>
        <small>Error Message</small>
      </div>
      <button type="submit" name="submit">Update</button>
    </form>

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

</html>