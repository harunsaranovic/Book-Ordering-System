<div style="width: 100%; margin-top: 20vh; text-align: center">

<?php
session_start();

if (isset($_POST['password'])){
  if ($_POST['password'] == 'admin'){
      $_SESSION['username'] = 'admin';
      header("Location: panel.php");
      die();
}else {
  echo "<h2>Wrong pass</h2><br>";
  echo '<a href="login.php">Back</a>';
}}else {
  echo 'Error occured';
  echo '<a href="login.php">Back</a>';
}

 ?>
</div>
