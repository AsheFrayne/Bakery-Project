<?php
  session_start();
if (isset($_POST["upload"])) {
  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $filename = $_FILES["uploadDP"]["name"];
	$tempname = $_FILES["uploadDP"]["tmp_name"];
		$folder = "../img/profilePics/".$filename;

    $usersID = $_SESSION["usersID"];

    $sql = "UPDATE users SET filename ='$filename' WHERE usersID = '$usersID'";

    mysqli_query($conn, $sql);

    if (move_uploaded_file($tempname, $folder)) {
			header("location: ../view-profile.php?upload=success");
		}else{
			header("location: ../view-profile.php?upload=failed");
    }
}
