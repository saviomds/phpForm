<?php
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
  <h2>User Login</h2>
  <form action="./includes/allow.inc.php" method="post">

    <div class="error">
              <?php 
                echo isset($error) ? $error : '';
              ?>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="btn" name="submit">Login</button>
    <div class="form-group">
      <a href="./index.php">Don't have an account! Register</a>
    </div>
  </form>
</div>

</body>
</html>
