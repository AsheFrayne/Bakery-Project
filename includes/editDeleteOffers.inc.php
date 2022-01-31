<?php

require 'dbh.inc.php';

if (isset($_POST["submit"])) {
  $filename = $_FILES['filename']['name'];
  $tempname = $_FILES['filename']['tmp_name'];

  $productsID = $_POST['productsID'];

  $sql = "UPDATE products SET productsFilename = '$filename' WHERE productsID='$productsID';";
  mysqli_query($conn, $sql);

  $check = "SELECT productsFilename FROM products WHERE productsID = '$productsID';";
  $result = mysqli_query($conn, $check);
  $products = mysqli_fetch_assoc($result);
  if ($products['productsFilename'] == $filename) {
    header('location: ../offers.php?modal=1&productID='.$productsID.'&upload=success');
  }else{
    header('location: ../offers.php?modal=1&productID='.$productsID.'&upload=failed');
  }

}elseif (isset($_POST["title"])) {
  $productsName = $_POST['productsName'];
  $productsID = $_POST['productsID'];

}elseif (isset($_POST["description"])) {
  $productsName = $_POST['productsName'];
  $productsID = $_POST['productsID'];

}elseif (isset($_POST["price"])) {
  $productsName = $_POST['productsName'];
  $productsID = $_POST['productsID'];

}elseif (isset($_POST["price"])) {
  // code...
}
