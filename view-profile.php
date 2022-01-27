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
  <link rel="stylesheet" href="view-profile.css">
  <title>View Profile</title>
</head>

<body>
  <?php
  include 'header.php';
  require_once 'includes/dbh.inc.php';
  $usersID = $_SESSION["usersID"];
  $result = mysqli_query($conn, "SELECT filename FROM users WHERE usersID = '$usersID'");
  $pic = mysqli_fetch_array($result);
  ?>
  ?>
  <div class="modal-bg">
    <div class="modal">
      <div class="question">
        Do you want your account deleted?
      </div>
      <div class="modal-btn">
        <!-- Submit button para mag delete ng account -->
        <button class="yes-btn" type="submit">Yes</button>
        <button class="cancel-btn">Cancel</button>
      </div>
    </div>
  </div>
  <div class="alert hide">
    <span class="fas fa-exclamation-circle"></span>
    <span class="msg">Warning: This is a warning alert!</span>

  </div>
  <main>

    <div class="container">
      <div class="menu">
        <i class="fas fa-ellipsis-v"></i>
        <div class="del-btn">Delete Account</div>
      </div>

      <div class=" profile-pic">
        <label class="-label" for="file">
          <i class="fas fa-camera"></i>
          <span>Change Image</span>
        </label>
        <input id="file" type="file" />
        <img src="./img/profilePics/<?php echo $pic['filename']; ?>">
      </div>

      <div class="infobox">
        <input type="text" name="uname" class="uname txt-box" value="<?php echo $usersName ?>" readonly autocomplete="off">
        <input type="text" name="email" class='email' value="<?php echo $usersEmail ?>" readonly>
        <div class="pw-box">
          <label for="password">Password</label>
          <input type="password" name="password" class="password">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" name="conf-password" class="conf-password">
        </div>
        <div class=" date-joined">
          <small>Date Joined</small>
          <div>01/01/01</div>
        </div>

      </div>
      <div class="description-box">

        <textarea name="description" class="description" cols="30" rows="10" placeholder="Let me describe you!" readonly></textarea>
        <button class='edit-btn'>Edit</button>
        <button type="submit" class="done-btn" name="upload"t> Done</button>

      </div>
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
<script src="./view-profile.js"></script>

</html>