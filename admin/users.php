<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'connect.php';
include 'head.php';
include 'incl/header.php';

 $sqlquery = "SELECT * FROM users";
 $items = mysqli_query($conn, $sqlquery);
?>


<div style="height: 200px; width: 100px;"></div>


<div class="table-holder t-h-2">
  <table>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Email</th>
    </tr>

  <?php
  while($item = $items->fetch_array()){
    echo "<tr>";
    echo "<td>". $item['id'] ."</td>";
    echo "<td>". $item['username'] ."</td>";
    echo "<td>". $item['name'] ."</td>";
    echo "<td>". $item['address'] ."</td>";
    echo "<td>". $item['phone'] ."</td>";
    echo "<td>". $item['email'] ."</td>";

    //echo '<td><a href="edit.php?id='. $item['item_id'] .'">Edit</a></td>';
    //echo '<td><a href="delete.php?id='. $item['item_id'] .'">Delete</a></td>';
    echo "</tr>";
  }?>

  </table>
</div>
