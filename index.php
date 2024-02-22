<?php
    if(isset($_GET['success'])) {
      $message = 'Sign Up Success';
    }
    if(isset($_GET['UsernameTaken'])) {
      $error = 'UsernameTaken';
    }
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
  <h2>User Registration</h2>
  <form action="./includes/action.inc.php" method="post">
    <div class="message">
      <?php
        echo isset($message) ? $message : '';
      ?>
    </div>
    <div class="error">
              <?php 
                echo isset($error) ? $error : '';
              ?>

    </div>
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="btn" name="submit">Register</button>
  </form>
</div>

</body>
</html>
