<link rel="stylesheet" href="./css/style.css">

<?php
  session_start();
  $username= $_SESSION['username'];
  $password = $_SESSION['password'];
?>

<div class="wrapper">
  <h2><?php echo "Hi $username!"; ?></h2>
  <p><?php echo "You are successfully logged in!" ?></p>
  <form action="./close_session.php">
    <button class="btn">Log Out</button>
  </form>
</div>
