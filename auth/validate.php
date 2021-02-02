<link rel="stylesheet" href="./css/style.css">

<?php
  session_start();
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "faber" && $password == 1234) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header('location: ./panel.php');
    } else {
      if (!$_POST["username"] || !$_POST["password"]) {
        $errorMsg = "Username and password are required!";
      } else {
        $errorMsg = "Username or password are not correct!";
      }
      echo "<script>alert('$errorMsg');</script>";
      header("Refresh: 0; ./index.php");
    }
  }
?>