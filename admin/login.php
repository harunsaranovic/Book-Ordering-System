<?php
session_start();
if (isset($_SESSION['username'])){
  if(($_SESSION['username'] == 'admin'))
    header("Location: panel.php");
}

?>


<html>
<style>
  .add{
    margin-top: 100px;
    text-align: center;
  }
  .delete{
    margin-top: 100px;
    text-align: center;
  }
  input{
    border-radius: 20px;
    padding: 10px 20px;
    font-size: 20px;
    border: solid 1px gray;
  }
</style>
<body>


<div class="delete">
  <form action="validate.php" method="post">
    <input type="password" name="password" value="">
    <input type="submit" name="" value="Login">
  </form>
  <?php

   ?>
</div>


</body>
</html>
