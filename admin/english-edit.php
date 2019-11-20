<?php
session_start();
if (!isset($_SESSION['username'])){
  header("Location: login.php");
}

include 'connect.php';

$sqlquery = "SELECT * FROM content WHERE id=0";
if ($result = mysqli_query($conn, $sqlquery)){
  $eng = mysqli_fetch_array($result);
}


 ?>
 <style>
   input, textarea{
     width: 100%;
   }

   .holder{
     width: 90%;
     margin-left: 5%;
     margin-top: 10vh;
   }

   .row div{
     margin-bottom: 10px;
   }
 </style>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <header style="font-family: Arial; text-align: center; padding-top: 20px;">
   <a style="margin: 0 10px;" href="panel.php">Language Panel</a>
   <a style="margin: 0 10px;" href="english-edit.php">Edit English</a>
   <a style="margin: 0 10px;" href="bosnian-edit.php">Edit Bosnian</a>

 </header>

<div class="holder">
  <div style="text-align: center">
    <h1>Edit English</h1>
  </div>

  <form class="" action="update-content.php" method="post">
   <div class="row">

        <div class="col-12">
          <h5>Header</h5>
        </div>

     <div class="col-6">
       <span class="original"> <?php echo $eng['header_0'] ?> </span>
     </div>
     <div class="col-6">
       <input type="text" name="header_0" value="<?php echo $eng['header_0'] ?>">
     </div>

     <div class="col-6">
       <span class="original"> <?php echo $eng['header_1'] ?> </span>
     </div>
     <div class="col-6">
       <input type="text" name="header_1" value="<?php echo $eng['header_1'] ?>">
     </div>



     <div class="col-12">
       <h5>Services</h5>
     </div>

     <div class="col-6">
       <span class="original"> <?php echo $eng['services_h2_1'] ?> </span>
     </div>
     <div class="col-6">
       <input type="text" name="services_h2_1" value="<?php echo $eng['services_h2_1'] ?>">
     </div>

     <div class="col-6">
       <span class="original"> <?php echo $eng['services_span_1'] ?> </span>
     </div>
     <div class="col-6">
       <textarea name="services_span_1" rows="2" cols="80"><?php echo $eng['services_span_1'] ?></textarea>
     </div>


     <div class="col-6">
       <span class="original"> <?php echo $eng['services_h2_2'] ?> </span>
     </div>
     <div class="col-6">
       <input type="text" name="services_h2_2" value="<?php echo $eng['services_h2_2'] ?>">
     </div>

     <div class="col-6">
       <span class="original"> <?php echo $eng['services_span_3'] ?> </span>
     </div>
     <div class="col-6">
       <textarea name="services_span_3" rows="2" cols="80"><?php echo $eng['services_span_3'] ?></textarea>
     </div>




     <input type="text" name="id" value="<?php echo $eng['id'] ?>" style="display: none">

     <input type="submit" name="" value="Update">

   </form>

   </div>
  </div>
