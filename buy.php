<?php
session_start();
include 'connect.php';
$user_id = $_SESSION['id'];
$sqlquery2 = "SELECT * FROM cart WHERE user_id ='" . $_SESSION['id'] . "'";
$items = mysqli_query($conn, $sqlquery2);

while($item = $items->fetch_array()){

  $sqlquery = "INSERT INTO orders (items_id, customer_id) VALUES ('" . $item['item_id'] . "','" . $user_id ."');";
  if ($result = mysqli_query($conn, $sqlquery)){
  }
}
$sqlquery3 = "DELETE FROM cart WHERE user_id ='" . $_SESSION['id'] . "'";
$delete = mysqli_query($conn, $sqlquery3);

header("Location: index.php");

?>
