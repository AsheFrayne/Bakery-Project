<?php
 require 'dbh.inc.php';
if (isset($_POST['heart'])) {
  $productsID = $_POST['productsID'];
  $usersName = $_POST['usersName'];

  $res = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productsID' AND usersName = '$usersName';");
  $heart = mysqli_fetch_assoc($res);
  if ($heart['usersName'] == $usersName) {
    $sql = "DELETE FROM heart WHERE usersName = '$usersName';";
    mysqli_query($conn, $sql);

    $res1 = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productsID' AND usersName = '$usersName';");
    if (!mysqli_fetch_assoc($res1)) {
      header("location: ../offers.php?modal=1&productID=".$productsID."&heartdelete=success");
    }
    else{
      header("location: ../offers.php?modal=1&productID=".$productsID."&heartdelete=failed");
    }
  }else{
    $sql = "INSERT INTO heart (productsID, usersName) VALUES ('$productsID','$usersName');";
    mysqli_query($conn, $sql);
    $res1 = mysqli_query($conn, "SELECT * FROM heart WHERE productsID = '$productsID' AND usersName = '$usersName';");
    if (mysqli_fetch_assoc($res1)) {
      header("location: ../offers.php?modal=1&productID=".$productsID."&heartadd=success");
    }
    else{
      header("location: ../offers.php?modal=1&productID=".$productsID."&heartadd=failed");
    }
  }
}
else{
    header("location: ../index.php");
}
