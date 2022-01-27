<?php
session_start();
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

$usersID = $_SESSION["usersID"];
$uname = $_SESSION["usersName"];
$description = $_SESSION["description"];

if (isset($_POST['delete'])) {
  $sql = "DELETE FROM users WHERE usersID = '$usersID';";
  mysqli_query($conn, $sql);

  $result = mysqli_query($conn, "SELECT filename FROM users WHERE usersID = '$usersID'");
  $user = mysqli_fetch_array($result);
  if (!$user) {
    session_unset();
    session_destroy();
    header("location: ../index.php?delete=success");
  } else {
    header("location: ../view-profile.php?delete=failed");
  }
} else if (isset($_POST["upload"])) {
  $_uname = $_POST["uname"];
  $_pwd = $_POST["password"];
  $_description = $_POST["description"];
  $uname = $users["usersName"];
  $update = false;

  $_filename = $_FILES["uploadDP"]["name"];
  $tempname = $_FILES["uploadDP"]["tmp_name"];
  $folder = "../img/profilePics/" . $_filename;
  if (compareThis($uname, $_uname)) {
    $sql = "UPDATE users SET usersName = '$_uname' WHERE usersID = '$usersID';";
    mysqli_query($conn, $sql);
    $uname = $users["usersName"];
    $update = true;
  }
  if (!empty($_pwd)) {
    $sql = "UPDATE users SET usersPwd = '$_pwd' WHERE usersID = '$usersID';";
    mysqli_query($conn, $sql);
    $uname = $users["usersName"];
    $update = true;
  }
  if (!empty($_filename)) {
    $sql = "UPDATE users SET filename = '$_filename' WHERE usersID = '$usersID';";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($tempname, $folder)) {
      $uname = $users["usersName"];
      $update = true;
    } else {
      $update = false;
    }
  }
  if (!empty($_description)) {
    $sql = "UPDATE users SET description = '$_description' WHERE usersID = '$usersID';";
    mysqli_query($conn, $sql);
    $uname = $users["usersName"];
    $update = true;
  }
  if ($update === true) {
    $uname = $users["usersName"];
    header("location: ../view-profile.php?upload=success");
  } else {
    sleep(2);
    header("location: ../view-profile.php?upload=failed");
  }
}
