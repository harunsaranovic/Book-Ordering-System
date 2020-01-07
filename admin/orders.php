<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'connect.php';
include 'head.php';
include 'incl/header.php';

 $sqlquery = "SELECT * FROM orders INNER JOIN items ON orders.items_id = items.item_id
 INNER JOIN users ON orders.customer_id = users.id";
 $items = mysqli_query($conn, $sqlquery);
?>


<div style="height: 200px; width: 100px;"></div>


<div class="table-holder t-h-2">
  <table>
    <tr>
      <th>Order ID</th>
      <th>Name</th>
      <th>User</th>
      <th>Address</th>
      <th>Shipped</th>
      <th>Delivered</th>
    </tr>

  <?php
  while($item = $items->fetch_array()){
    echo "<tr>";
    echo "<td>". $item['order_id'] ."</td>";
    echo "<td>". $item['item_name'] ."</td>";
    echo "<td>". $item['name'] ."</td>";
    echo "<td>". $item['address'] ."</td>";
    echo "<td>". $item['date_shipped'] ."</td>";
    if(isset($item['date_delivered']))
      echo "<td>". $item['date_delivered'] ."</td>";
    else
      echo '<td><a href="shipped.php?id='. $item['order_id'] .'">Mark as shipped</a></td>';

    echo "</tr>";
  }?>

  </table>
</div>
