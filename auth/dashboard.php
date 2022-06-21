<?php
session_start();
if(isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    //
    $_SESSION['error'] = "Please login first.";
    header('location: ./');
    exit;
} else {
    echo "Welcome to admin profile,".$_SESSION['name'];
}
?>