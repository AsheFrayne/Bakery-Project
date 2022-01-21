<?php

function emptyInputSignup($uname, $email, $pwd, $conpwd){
  $result;
  if (empty($uname) || empty($email) || empty($pwd) || empty($conpwd)) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function emptyInputLogin($uname, $pwd){
  $result;
  if (empty($uname) || empty($pwd)) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function invalidUid($uname){
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $conpwd){
  $result;
  if ($pwd !== $conpwd) {
    $result = true;
  }
  else{
    $result = false;
  }
  return $result;
}

function unameEmailExist($conn, $uname, $email){
  $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $uname, $email, $pwd){
  $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=username/stmt_failed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $uname, $email, $pwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../login.php?signup=success");
  exit();
}

function loginUser($conn, $uname, $pwd){
  $unameEmailExist = unameEmailExist($conn, $uname, $uname);
  if ($unameEmailExist === false) {
    header("location: ../login.php?error=usernotexist");
    exit();
  }

  $getPwd = $unameEmailExist["usersPwd"];
  if ($getPwd === $pwd) {
    session_start();
    $_SESSION["uname"] = $unameEmailExist["usersName"];
    $_SESSION["usersid"] = $unameEmailExist["usersID"];
    header("location: ../index.php?login=success");
    exit();
  }
  else{
    header("location: ../login.php?error=wrongpassword");
    exit();
  }

}
