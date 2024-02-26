<?php
    if(isset($_GET['success'])) {
      $message = 'Sign Up Success';
    }
    if(isset($_GET['UsernameTaken'])) {
      $error = 'UsernameTaken';
    }
    if(isset($_GET['FillAllFields'])){
        $error = 'Fill All Fields';
    }
    if(isset($_GET['wrongcredentials'])) {
      $error = "Wrong Credentials";
    }
    if(isset($_POST['logout'])) {
      session_start();
      session_destroy();
      header("location: ./login.php");
;    }
?>