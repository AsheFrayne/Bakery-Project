<?php
if (isset($_POST["submit"])) {
  $filename = $_FILES['productsFilename']['name'];
  $date = date("m/d/Y");
  $description = $_POST['productsDescription'];
  $prize = $_POST['productsPrize'];
  $adminID = $_GET['admin'];


  include 'dbh.inc.php';
  include 'functions.inc.php';

  $sql = "INSERT INTO products (productsFilename, produtsDate, productsDescription, adminID, productsPrize) VALUES ('$filename', '$date', '$description', '$adminID', '$prize')";
  mysqli_query($conn, $sql);

}
else{
  header("location: ../index.php");
}
