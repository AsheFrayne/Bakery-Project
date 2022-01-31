<?php
if (isset($_POST["submit"])) {
  $filename = $_FILES['productsFilename']['name'];
  $tempname = $_FILES["productsFilename"]["tmp_name"];
  $folder = "../img/Products/".$filename;

  $date = date("m/d/Y");
  $description = $_POST['productsDescription'];
  $prize = $_POST['productsPrice'];
  $productsName = $_POST['productsName'];
  $adminID = $_GET['admin'];


  include 'dbh.inc.php';
  include 'functions.inc.php';

  $sql = "INSERT INTO products (productsFilename, productsPrice, productsDescription, productsDate, productsName, usersID) VALUES ('$filename', '$prize', '$description', '$date', '$productsName', '$adminID')";
  mysqli_query($conn, $sql);
  if (move_uploaded_file($tempname, $folder)) {
    header("location: ../offers.php?addProduct=success&admin=true");
  } else {
    header("location: ../offers.php?addProduct=failed&admin=true");
  }
}
else{
  header("location: ../index.php");
}
