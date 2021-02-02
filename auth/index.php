<link rel="stylesheet" href="./css/style.css">

<?php
  session_start();
?>

<div class="wrapper">
  <h1>Sign In</h1>
  <form action="./validate.php" method="POST">
    <input type="text" name="username" placeholder="Enter a name">
    <input type="password" name="password" placeholder="Enter a password">
    <button class="btn" type="submit">Submit</button>
  </form>
</div>