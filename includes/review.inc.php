<?php

if (isset($_POST['post'])) {
  $productsID = $_POST['productsID'];
  $userID = $_POST['userID'];
  $comment = $_POST['comment'];
  $date = date("m/d/Y");

  require "dbh.inc.php";

  $sql = "INSERT INTO reviews (reviewsCom, reviewsDate, usersName, productsID) VALUES ('$comment', '$date', '$userID', '$productsID');";
   mysqli_query($conn, $sql);
  header("location: ../offers.php?modal=1&productID=".$productsID."&addComment=success");

}
else{
  header("location: ../index.php");
}
