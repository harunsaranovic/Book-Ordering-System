<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sqlquery = "SELECT * FROM users WHERE username='" . $username . "'";
$user = mysqli_query($conn, $sqlquery);
$user = mysqli_fetch_array($user);
if(isset($user)){
  if($user['password'] == $password){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['address'] = $user['address'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['email'] = $user['email'];
    header("Location: index.php");
  }
}else{
  header("Location: login.php");
}

?>
