<?php
if (isset($_POST["submit"])) {
  $filename = $_FILES['productsFilename']['name'];
  $date = date("m/d/Y");
  $description = $_POST['productsDescription'];
  $prize = $_POST['productsPrize'];
  $adminID = $_GET['admin'];


  include 'dbh.inc.php';
  include 'functions.inc.php';

  $sql = "INSERT INTO products (productsFilename, productsPrize, productsDescription, productsDate, adminID) VALUES ('$filename', '$prize', '$description', '$date', '$adminID')";
  mysqli_query($conn, $sql);
  header("location: ../offers.php?addProduct=success&admin=true");
}
else{
  header("location: ../index.php");
}
