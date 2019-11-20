<div style="margin-top: 20vh; text-align: center;">

<?php
session_start();
if (!isset($_SESSION['username'])){
  header("Location: login.php");
}

include 'connect.php';

 $item_name = $_POST['item_name'];
 $description = $_POST['description'];
 $price = $_POST['price'];
 $availability = $_POST['availability'];
 $category = $_POST['category'];
 $id = $_POST['item_id'];

$sqlquery = "UPDATE items SET item_name = '".$item_name."',
description = '".$description."',
price = '".$price."',
availability = '".$availability."',
category = '".$category."'
WHERE item_id = $id;";


if ($result = mysqli_query($conn, $sqlquery)){
  header("Location: panel.php");
}else{
  echo "wrong";
}

 ?>
</div>
