<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'connect.php';
include 'head.php';
include 'incl/header.php';

 $sqlquery = "SELECT * FROM items";
 $items = mysqli_query($conn, $sqlquery);
?>


<div style="height: 200px; width: 100px;"></div>


<div class="table-holder">
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Availability</th>
      <th>Option</th>
    </tr>

  <?php
  while($item = $items->fetch_array()){
    echo "<tr>";
    echo "<td>". $item['item_id'] ."</td>";
    echo "<td>". $item['item_name'] ."</td>";
    echo "<td>". $item['price'] ."</td>";
    echo "<td>". $item['availability'] ."</td>";
    echo '<td><a href="edit.php?id='. $item['item_id'] .'">Edit</a></td>';
    echo '<td><a href="delete.php?id='. $item['item_id'] .'">Delete</a></td>';
    echo "</tr>";
  }?>

  </table>
</div>
