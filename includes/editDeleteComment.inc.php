<?php
include 'dbh.inc.php';

if (isset($_POST['delete'])) {
  $reviewsID = $_POST['reviewsID'];
  $productID = $_POST['productID'];
  $sql = "UPDATE reviews SET reviewsCom = NULL WHERE reviewsID = '$reviewsID';";
  mysqli_query($conn, $sql);

  $sql = "SELECT reviewsCom FROM reviews WHERE reviewsID = '$reviewsID';";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  if ($user['reviewsCom'] == NULL) {
    header('location: ../offers.php?modal=1&productID='.$productID.'&delete=success');
  }
  else {
    header('location: ../offers.php?modal=1&productID='.$productID.'&delete=failed');
  }
}
elseif (isset($_POST['edit'])) {
  $reviewsID = $_POST['reviewsID'];
  $reviewsCom = $_POST['reviewsCom'];
  $productID = $_POST['productID'];
  $sql = "UPDATE reviews SET reviewsCom = '$reviewsCom' WHERE reviewsID = '$reviewsID';";
  mysqli_query($conn, $sql);

  $sql = "SELECT reviewsCom FROM reviews WHERE reviewsID = '$reviewsID';";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
  if ($user['reviewsCom'] != $reviewsCom) {
    header('location: ../offers.php?modal=1&productID='.$productID.'&change=success');
  }
  else {
    header('location: ../offers.php?modal=1&productID='.$productID.'&change=failed');
  }
}
