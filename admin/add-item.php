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
 $newfilename = "";

if (!$_FILES["file"]["error"] > 0){
  $newfilename = substr(str_shuffle(MD5(microtime())), 0, 10) . '.' . pathinfo($_FILES["file"]["name"],  PATHINFO_EXTENSION);
  move_uploaded_file($_FILES["file"]["tmp_name"],
  "../img/" . $newfilename);
  //echo $_FILES["file"]["tmp_name"] . '<br>';
  //echo "Stored in: " . "../img/" . $_FILES["file"]["name"] . '<br>';
}


$sqlquery = "INSERT INTO items (item_name, description, price, availability, category, image)
VALUES ('".$item_name."','".$description."','".$price."','".$availability."','".$category."','".$newfilename."');";


if ($result = mysqli_query($conn, $sqlquery)){
  header("Location: panel.php");
}else{
  echo "wrong";
}

 ?>
</div>
