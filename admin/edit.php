<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'connect.php';
include 'head.php';

 $sqlquery = "SELECT * FROM items WHERE item_id=" . $_GET['id'];
 $items = mysqli_query($conn, $sqlquery);
?>


<header>
  <a href="add.php">Add Item</a>
  <a href="edit.php">Edit Item</a>
</header>
<div style="height: 200px; width: 100px;"></div>

<div class="item-input">
  <form class="" action="update-item.php" method="post">
  <?php
  while($item = $items->fetch_array()){
    echo '<input type="hidden" name="item_id" value="'. $item['item_id'] .'">';
    echo '<label>Name</label>';
    echo '<input type="text" name="item_name" value="'. $item['item_name'] .'">';
    echo '<label>Description</label>';
    echo '<input type="text" name="description" value="'. $item['description'] .'">';
    echo '<label>Price</label>';
    echo '<input type="text" name="price" value="'. $item['price'] .'">';
    echo '<label>Availability</label>';
    echo '<select name="availability">';
    if($item['availability'])
      echo '<option value="1">Availabile</option><option value="0">Unavailabile</option>';
    else
      echo '<option value="0">Unavailabile</option><option value="1">Availabile</option>';
    echo '</select>';

    echo '<label>Category</label>';
    echo '<select name="category">';
    if($item['category']==1)
      echo '<option value="1">Food</option><option value="2">Medicine</option><option value="3">Books</option>';
    else if($item['category']==2)
      echo '<option value="2">Medicine</option><option value="1">Food</option><option value="3">Books</option>';
    else if($item['category']==3)
      echo '<option value="3">Books</option><option value="2">Medicine</option><option value="1">Food</option>';
    echo '</select>';
    echo '<input type="submit" name="" value="UPDATE">';
  }?>
  </form>
</div>
