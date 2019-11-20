<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'head.php';
?>


<header>
  <a href="add.php">Add Item</a>
  <a href="edit.php">Edit Item</a>
</header>
<div style="height: 200px; width: 100px;"></div>

<div class="item-input">
  <form class="" action="add-item.php" method="post">

    <input type="hidden" name="item_id" value="">
    <label>Name</label>
    <input type="text" name="item_name" value="">
    <label>Description</label>
    <input type="text" name="description" value="">
    <label>Price</label>
    <input type="text" name="price" value="">
    <label>Availability</label>
    <select name="availability">
      <option value="1">Availabile</option><option value="0">Unavailabile</option>
    </select>
    <label>Category</label>
    <select name="category">
      <option value="1">Food</option><option value="2">Medicine</option><option value="3">Books</option>
    </select>
    <input type="submit" name="" value="UPDATE">

  </form>
</div>
