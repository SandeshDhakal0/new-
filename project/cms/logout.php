<?php 
    require_once "../config/config.php";
    require_once "./includes/isLoggedIn.php";
    if(isset($_COOKIE['_au'])){
        $cookie = $_COOKIE['_au'];
        $data = array(
            'remember_token' => ''
        );
        $user->updatedRowById($_SESSION['user_id'], $data);
        setcookie('_au','', time()-60,'/');
    }
    session_destroy();
    redirect('./');
