<?php
  include 'header.php';
?>

<h1>Log in</h1>
<form action="includes/login.inc.php" method="post">
  <h3>Username/Email</h3>
  <input type="text" name="uname" placeholder="Input username/email">
  <h3>Password</h3>
  <input type="password" name="pwd" placeholder="Input password"><br/>
  <button type="submit" name="submit">Sign Up</button>
</form>

<?php
if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
    echo '<p>Error: Fill in all fields!<p>';
  }
  if ($_GET["error"] == "wrongpassword") {
    echo '<p>Error: Incorrect Password!<p>';
  }
  else if ($_GET["error"] == "usernotexist") {
    echo '<p>Error: User not Exist!<p>';
  }
}
  include 'footer.php'
?>
