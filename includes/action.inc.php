<?php

   if(isset($_POST['submit'])) {

    require_once "db.inc.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkUser = mysqli_query($connect, "SELECT * FROM users WHERE username='$username' OR email='$email' ");
    
    if(mysqli_num_rows($checkUser)) {
        header("location: ../index.php?UsernameTaken");
    }else {
        $insertData = mysqli_query($connect ,"INSERT INTO users (username, email, password) VALUES('$username','$email', '$password')");
    }
    

    echo $insertData ? header('location: ../index.php?success') : 'error';

   }
