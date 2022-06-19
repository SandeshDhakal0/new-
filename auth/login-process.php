<?php
require_once "conn.php";

if(isset($_POST) && !empty($_POST)){
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if(!$email){
        //incorrect
        //notify
        header("location: login.php");
        exit;
    }
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) <= 0){
        //user not registered
        header("location: login.php");
        exit;
    }
    $user_info = mysqli_fetch_assoc($query);
    if(password_verify($_POST['password'], $user_info['password'])){
        //correct
        header("location: dashboard.php");
        exit;
    } else {
        //incorrect password
        header("location: login.php");
        exit;
    }
} else {
    //set notification
    header("location: login.php");
    exit;
}
