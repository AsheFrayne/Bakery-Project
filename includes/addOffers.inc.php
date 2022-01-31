<?php
if (isset($_POST["submit"])) {
  $filename = $_FILES['productsFilename']['name'];
  $date = date("m/d/Y");
  $description = $_POST['productsDescription'];
  $prize = $_POST['productsPrice'];
  $productsName = $_POST['productsName'];
  $adminID = $_GET['admin'];


  include 'dbh.inc.php';
  include 'functions.inc.php';

  $sql = "INSERT INTO products (productsFilename, productsPrice, productsDescription, productsDate, productsName, usersID) VALUES ('$filename', '$prize', '$description', '$date', '$productsName', '$adminID')";
  mysqli_query($conn, $sql);
  header("location: ../offers.php?addProduct=success&admin=true");
}
else{
  header("location: ../index.php");
}
