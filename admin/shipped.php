<div style="margin-top: 20vh; text-align: center;">

<?php
session_start();
if (!isset($_SESSION['username'])){
  header("Location: login.php");
}

include 'connect.php';

 $oid = $_GET['id'];
$timestamp = date('Y-m-d H:i:s');

$sqlquery = "UPDATE orders SET date_delivered = '".$timestamp."'
WHERE order_id = $oid;";


if ($result = mysqli_query($conn, $sqlquery)){
  header("Location: orders.php");
}else{
  echo "wrong";
}

 ?>
</div>
