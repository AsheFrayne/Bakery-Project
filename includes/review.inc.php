<?php

if (isset($_GET['post'])) {
  $heart = $_GET['heart'];
  $productsID = $_GET['productsID'];
  $userID = $_GET['userID'];
  $comment = $_GET['comment'];
  $date = date("m/d/Y");
  echo $productsID;
  echo $userID;

  require "dbh.inc.php";

  // $sql1 = "SELECT productsID FROM products WHERE productsName='$productsName';";
  // $result = mysqli_query($conn, $sql1);
  // $products = mysqli_fetch_array($result);
  // $productsID = $products["productsID"];
  // echo $productsID;

  // $sql = "INSERT INTO reviews (reviewsCom, reviewsDate, reviewsHeart, usersID, productsID) VALUES ('$comment', '$date', '$heart', '$userID', '$productsID');";
  // mysqli_query($conn, $sql);
  // header("location: ../offers.php?addProduct=success&admin=true");

}
else{
  header("location: ../index.php");
}
