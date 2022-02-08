<?php
$serverName = "localhost";
$dbUserName = "reydan";
$dbPassword = "belen";
$dbName = "bakery_project";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn){
  die("Connection failed" . mysqli_connect_error());
}
