<?php
    //functions that are not connected to database
    function setSession($key, $data){
        is(!isset($_SESSION)){
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