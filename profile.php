<?php
  include 'header.php';
  $usersName = $_SESSION['usersName'];
  $usersID = $_SESSION["usersID"];
  $usersPwd = $_SESSION["usersPwd"];
  $usersEmail = $_SESSION["usersEmail"];
?>

<h3>Update Profile</h3>
<form action="includes/profile.inc.php" method="post">
  <h3>Username</h3>
  <input class="change" type="text" name="uname" <?php echo 'placeholder='.$usersName ?> readonly>
  <h3>Email</h3>
  <input class="change" type="email" name="email" <?php echo 'placeholder='.$usersEmail ?>readonly>

  <h3>Password</h3>
  <input type="password" name="pwd" placeholder="Password...">
  <h3>Confirm Password</h3>
  <input type="password" name="conpwd" placeholder="Confirm Password..."><br/>
  <button type="submit" name="submit">Update</button>
  <button type="button" id="changeButton">Change Username/Email</button>
</form>

<script type="text/javascript">
document.getElementById('changeButton').onclick = function() {
  document.getElementByClassName('change').removeAttribute('readonly');
};
</script>

<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo '<p>Error: Fill in all fields!<p>';
  } else if ($_GET["error"] == "invalid_uname") {
    echo '<p>Error: Invalid Username!<p>';
  } else if ($_GET["error"] == "pwd_notmatch") {
    echo '<p>Error: Password not match!<p>';
  } else if ($_GET["error"] == "username_email_taken") {
    echo '<p>Error: The username or email is already taken!<p>';
  }
}
    include 'footer.php'
?>
