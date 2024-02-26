<?php
session_start();
if(isset($_POST['submit'])) {

    require_once "db.inc.php";

    $email = $_POST['email'];
    $password = $_POST['password'];


    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);

    $login = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if(mysqli_num_rows($login) > 0) {
        $sel_username = mysqli_query($connect, "SELECT username FROM users WHERE email = '$email' ");

        $row = mysqli_fetch_array($sel_username);

        $_SESSION['username'] = $row['username'];

        header("location: ../dash.php");

        exit();

    } else {

        header("location: ../login.php?wrongcredentials");

        exit(); 
    }
}
?>
