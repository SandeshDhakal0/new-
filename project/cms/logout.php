<?php 
    require_once "../config/config.php";
    require_once "./includes/isLoggedIn.php";

    session_destroy();
    redirect('./');
