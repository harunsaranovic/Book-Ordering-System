<?php
session_start();
include 'connect.php';
$item_id = $_GET['id'];
$user_id = $_SESSION['id'];

$sqlquery = "INSERT INTO cart (user_id, item_id) VALUES ('" . $user_id . "','" . $item_id ."');";
if ($result = mysqli_query($conn, $sqlquery)){
  header("Location: item.php?id=".$item_id);
}

?>
