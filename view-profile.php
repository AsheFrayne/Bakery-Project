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
  $result = mysqli_query($conn, "SELECT * FROM users WHERE usersID = '$usersID'");
  $user = mysqli_fetch_array($result);
  ?>
  ?>
  <div class="modal-bg">
    <div class="modal">
      <div class="question">
        Do you want your account deleted?
      </div>
      <div class="modal-btn">
        <!-- Submit button para mag delete ng account -->
        <form class="" action="includes/upload.inc.php" method="post">
          <button class="yes-btn" type="submit" name="delete">Yes</button>
          <button class="cancel-btn" type="button">Cancel</button>
        </form>
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
        <!-- Form start .........................................................................-->
        <form class="" action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
          <input id="file" type="file" name="uploadDP" />
          <img src="./img/profilePics/<?php echo $user['filename']; ?>">
      </div>

      <div class="infobox">
        <input type="text" name="uname" class="uname txt-box" value="<?php echo $user['usersName'] ?>" readonly autocomplete="off">
        <input type="text" name="email" class='email' value="<?php echo $usersEmail ?>" readonly>
        <div class="pw-box">
          <label for="password">Password</label>
          <input type="password" name="password" class="password" value="<?php echo $usersPwd ?>">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" name="conf-password" class="conf-password" value="<?php echo $usersPwd ?>">
        </div>
        <div class=" date-joined">
          <small>Date Joined</small>
          <div><?php echo $_SESSION["dateJoined"]; ?></div>
        </div>

      </div>
      <div class="description-box">

        <textarea name="description" class="description" cols="30" rows="10" placeholder="Let me describe you!" readonly><?php echo $_SESSION["description"]; ?></textarea>
        <div class="buttons"><button class='edit-btn' type="button">Edit</button>
          <button class="cancel-btn">Cancel</button>
          <button type="submit" class="done-btn" name="upload"> Done</button>
        </div>

        </form>
        <!-- form end ................................................... -->
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