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
  <link rel="stylesheet" href="login.css">
  <title>Log in</title>
</head>

<body>
  <?php
  include 'header.php';
  ?>
  <main>
    <h1>Log in</h1>
    <form action="includes/login.inc.php" method="post">
      <h3>Email</h3>
      <div class="input-field">
        <i class="far fa-user"></i>
        <input type="text" name="uname" placeholder="Email">
      </div>
      <h3>Password</h3>
      <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="pwd" placeholder="Input password"><br />

      </div>
      <button type="submit" name="submit">LOGIN</button>

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

</html>


<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo '<p>Error: Fill in all fields!<p>';
  }
  if ($_GET["error"] == "wrongpassword") {
    echo '<p>Error: Incorrect Password!<p>';
  } else if ($_GET["error"] == "usernotexist") {
    echo '<p>Error: User not Exist!<p>';
  }
}

?>
