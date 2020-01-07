<?php
session_start();

if (!isset($_SESSION['username']))
  header("Location: login.php");
else if($_SESSION['username'] != 'admin')
  header("Location: ../index.php");

include 'head.php';
include 'incl/header.php';
?>

<div style="height: 200px; width: 100px;"></div>

<div class="item-input">
  <form class="" action="add-item.php" method="post" enctype="multipart/form-data">

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
      <option value="1">Novel</option><option value="2">Self Help</option><option value="3">School</option>
    </select>
    <label>Image</label>
    <input type="file" name="file" id="file" />
    <input type="submit" name="" value="ADD">

  </form>
</div>
