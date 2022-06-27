<?php
    //functions that are not connected to database
    function setSession($key, $data){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION[$key] = $data;
    }

    function redirect($path, $session_key = null, $session_msg = null){
        if($session_key){
            setSession($session_key, $session_msg);
        }
        header("location: ".$path);
        exit;
    }
    function flash(){
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    }