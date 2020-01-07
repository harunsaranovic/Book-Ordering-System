<?php
include 'connect.php';
session_start();
$sqlquery = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id ='" . $_SESSION['id'] . "'";
$sqlquery2 = "SELECT SUM(price) AS Total FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id ='" . $_SESSION['id'] . "'";
$items = mysqli_query($conn, $sqlquery);
$items2 = mysqli_query($conn, $sqlquery);
$sums = mysqli_query($conn, $sqlquery2);
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="scripts/jquery-ui-1.12.1/jquery-ui.min.css">
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/main.css">

    <title>CS412 Ordering System</title>
  </head>
  <body>
  <?php include 'incl/header.php'; ?>

  <div class="cart-holder">
    <div class="cart-items">

      <?php
      while($item = $items->fetch_array()){
      ?>
      <div class="box">
        <div class="box-img" style="background-image: url(img/<?php echo $item['image']; ?>)"></div>
        <div class="box-header">
          <h3><?php echo $item['item_name']; ?></h3>
        </div>
        <div class="box-price">
          <h5><?php echo $item['price']; ?></h5>
        </div>
        <div class="box-link">
          <a href="deletecart.php?item_id=<?php echo $item['item_id']; ?>&cart_id=<?php echo $item['cart_id']; ?>">Delete</a>
        </div>
      </div>
      <?php
      }?>

    </div>
  </div>

  <div class="price-box">
    <h6>Total</h6>
    <br>
    <br>
    <h4><?php while($sum = $sums->fetch_array()){ echo round($sum['Total']); } ?>$</h4>
    <hr>
    <br>
      <a href="buy.php?user_id=<?php echo $_SESSION['id']; ?>">BUY NOW</a>
    </div>







  <footer>
    <span>@Harun Saranovic. All Rights Reserved.</span>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Library for UI -->
  <script src="scripts/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
  <script src="scripts/jquery-ui-1.12.1/jquery-ui.min.js"></script>

  </body>
  </html>
