<?php

if (isset($_POST['post'])) {
  $heart = $_POST['heart'];
  $productsID = $_POST['productsID'];
  $userID = $_POST['userID'];
  $comment = $_POST['comment'];
  $date = date("m/d/Y");

  require "dbh.inc.php";

  $sql = "INSERT INTO reviews (reviewsCom, reviewsDate, reviewsHeart, usersName, productsID) VALUES ('$comment', '$date', '$heart', '$userID', '$productsID');";
   mysqli_query($conn, $sql);
  header("location: ../offers.php?modal=1&productID=".$productsID."&addComment=success");

}
else{
  header("location: ../index.php");
}
