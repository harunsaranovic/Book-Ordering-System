<header>
  <div class="links">
    <a href="index.php">Home</a>
    <a href="admin/login.php">Admin</a>
    <?php if(!isset($_SESSION['username'])){ ?>
      <a class="login-link" href="login.php">Log In</a>
    <?php }else{ ?>
      <a class="login-link" href="logout.php">Log Out</a>
      <a class="login-link cart-link" href="orders.php">ORDERS</a>
      <a class="login-link cart-link" href="cart.php">CART</a>
      <span class="header-username"> <?php echo $_SESSION['username']; ?></span>
    <?php } ?>
  </div>
</header>

<div class="menu" id="menu">
<div><a href="index.php" >Home</a></div>
</div>
<i class="material-icons tab" id="tab">menu</i>
