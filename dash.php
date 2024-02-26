<?php

  session_start();
  if($_SESSION['username']) {
    $username = $_SESSION['username'];
  }else {
    header("location: login.php");
  }
  include "error.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
<link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="container">
  <h2>Welcome <?php echo $username; ?> </h2>
  <form method="post">
    <button type="submit" class="btn" name="logout">Logout</button>
  </form>

</div>

</body>
</html>
