<?php
include 'connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sqlquery = "SELECT * FROM users WHERE username='" . $username . "'";
$user = mysqli_query($conn, $sqlquery);
$user = mysqli_fetch_array($user);
if(isset($user)){
  header("Location: register.php");
}else{
  /*
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['email'] = $_POST['email'];
  */
  $sqlquery = "INSERT INTO users (username, password, name, address, phone, email)
  VALUES ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['email']."');";

  if ($result = mysqli_query($conn, $sqlquery)){
    header("Location: login.php");
  }
}

?>
