<?php
    //functions that are not connected to database
    function debug($data, $is_exit = false){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if($is_exit){
            exit;
        }
    }

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
        if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<span class='text-success'>".$_SESSION['success']."</span>";
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
            echo "<span class='text-danger'>".$_SESSION['error']."</span>";
            unset($_SESSION['error']);
        }
    }

    function generateRandomString($len){
        $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $strlen = strlen($chars);

        $str = '';
        for($i=0; $i < $len; $i++){
            $postn = rand(0,$strlen-1);
            $str .= $char[$postn];
        }
        return $str;
    }