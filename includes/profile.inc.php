<?php

if (isset($_POST["submit"])) {
  $uname = $_POST["uname"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $conpwd = $_POST["conpwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (emptyInputSignup($uname, $email, $pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUid($uname) !== false) {
    header("location: ../signup.php?error=invalid_uname");
    exit();
  }
  if (pwdMatch($pwd, $conpwd) !== false) {
    header("location: ../signup.php?error=pwd_notmatch");
    exit();
  }
  if (unameEmailExist($conn, $uname, $email) !== false) {
    header("location: ../signup.php?error=username_email_taken");
    exit();
  }

  createUser($conn, $uname, $email, $pwd);
}
else {
  header("location: ../profile.php");
}
