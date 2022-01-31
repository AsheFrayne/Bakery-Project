<?php

require 'dbh.inc.php';

if (isset($_POST["submit"])) {
  $filename = $_FILES['filename']['name'];
  $tempname = $_FILES['filename']['tmp_name'];
  $folder = "../img/Products/".$filename;

  $productsID = $_POST['productsID'];

  $sql = "UPDATE products SET productsFilename = '$filename' WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  if (move_uploaded_file($tempname, $folder)) {
    header("location: ../offers.php?modal=1&productID=".$productsID."&upload=success");
  } else {
    header("location: ../offers.php?modal=1&productID=".$productsID."&upload=success");
  }

}elseif (isset($_POST["title"])) {
  $productsName = $_POST['productsName'];
  $productsID = $_POST['productsID'];

  $sql = "UPDATE products SET productsName = '$productsName' WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  $check = "SELECT productsName FROM products WHERE productsID = '$productsID';";
  $result = mysqli_query($conn, $check);
  $products = mysqli_fetch_assoc($result);
  if ($products['productsName'] == $filename) {
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsName=success');
  }else{
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsName=failed');
  }

}elseif (isset($_POST["description"])) {
  $productsDescription = $_POST['productsDescription'];
  $productsID = $_POST['productsID'];

  $sql = "UPDATE products SET productsDescription = '$productsDescription' WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  $check = "SELECT productsDescription FROM products WHERE productsID = '$productsID';";
  $result = mysqli_query($conn, $check);
  $products = mysqli_fetch_assoc($result);
  if ($products['productsDescription'] == $filename) {
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsDescription=success');
  }else{
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsDescription=failed');
  }

}elseif (isset($_POST["price"])) {
  $productsPrice = $_POST['productsPrice'];
  $productsID = $_POST['productsID'];

  $sql = "UPDATE products SET productsPrice = '$productsPrice' WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  $check = "SELECT productsPrice FROM products WHERE productsID = '$productsID';";
  $result = mysqli_query($conn, $check);
  $products = mysqli_fetch_assoc($result);
  if ($products['productsPrice'] == $filename) {
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsDescription=success');
  }else{
    header('location: ../offers.php?modal=1&productID='.$productsID.'&productsDescription=failed');
  }

}elseif (isset($_POST["delete"])) {
  $productsID = $_POST['productsID'];

  $sql = "DELETE FROM products WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  $check = "SELECT * FROM products WHERE productsID = '$productsID';";
  $result = mysqli_query($conn, $check);
  if (!$products = mysqli_fetch_assoc($result)) {
    header('location: ../offers.php?modal=1&productID='.$productsID.'&delete=success');
  }else{
    header('location: ../offers.php?modal=1&productID='.$productsID.'&delete=failed');
  }
}
