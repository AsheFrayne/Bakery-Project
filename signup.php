<?php
  include_once 'header.php';
?>

    <h1>Sign up</h1>
    <form action="includes/signup.inc.php" method="post">
      <h3>Username</h3>
      <input type="text" name="uname" placeholder="Username...">
      <h3>Email</h3>
      <input type="email" name="email" placeholder="example@email.com">
      <h3>Password</h3>
      <input type="password" name="pwd" placeholder="Password...">
      <h3>Confirm Password</h3>
      <input type="password" name="conpwd" placeholder="Confirm Password..."><br/>
      <button type="submit" name="submit">Sign Up</button>
    </form>

<?php
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      // echo '<script>alert("Fill in all fields!")</script>';
      echo '<p>Error: Fill in all fields!<p>';
    }
    else if ($_GET["error"] == "invalid_uname") {
      echo '<p>Error: Invalid Username!<p>';
    }
    else if ($_GET["error"] == "pwd_notmatch") {
      echo '<p>Error: Password not match!<p>';
    }
    else if ($_GET["error"] == "username_email_taken") {
      echo '<p>Error: The username or email is already taken!<p>';
    }
  }

  include_once 'footer.php'
?>
