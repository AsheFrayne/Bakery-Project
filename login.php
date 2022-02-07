<?php
  if (isset($_SESSION["usersID"])) {
    header('location: index.php');
  }
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

  if (isset($_POST["submit"])) {
    $uname = $_POST["uname"];
    $pwd = $_POST["pwd"];
  }
  ?>


  <main>
    <h1>Log in</h1>
    <form action="includes/login.inc.php" method="post">
      <h3>Email</h3>
      <div class="input-field <?php if (isset($_GET['error'])) if ($_GET['error'] == 'emptyinput' || $_GET['error'] == 'usernotexist') {
                                echo 'err-pass';
                              } ?>">
        <i class="far fa-user"></i>
        <input type="text" name="uname" placeholder="Email" id='lEmail'>
      </div>
      <h3>Password</h3>
      <div class="<?php if (isset($_GET['error'])) if ($_GET['error'] == 'wrongpassword' || $_GET['error'] == 'emptyinput' || $_GET['error'] == 'usernotexist') {
                    echo 'err-pass';
                  } ?> input-field">
        <i class="fas fa-lock"></i>
        <input class="" type="password" name="pwd" placeholder="Input password"><br />

      </div>

      <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo '<p >Error: Fill in all fields!<p>';
        }
        if ($_GET["error"] == "wrongpassword") {
          echo '<p>Error: Incorrect Password or Email!<p>';
        } else if ($_GET["error"] == "usernotexist") {
          echo '<p>Error: User not Exist!<p>';
        }
      }
      ?>
      <p>No account yet?</p>
      <a href="signup.php">Create account</a><br/>
      <button class=' submit' type="submit" name="submit">LOGIN</button>


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
  <script src='login.js'></script>
  <script src='script.js'></script>
</body>

</html>
