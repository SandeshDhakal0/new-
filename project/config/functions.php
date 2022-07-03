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

    function sanitize($str){
        $str = strip_tags($str);
        $str = rtrim($str);

        return $str;
    }

    function uploadImage($image, $path){
        if($image['error'] == 0){
            if($image['size'] <= 5000000){
                //
                $allowed = array('jpg','jpeg','png','svg','gif','webp','bmp');

                $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
                if(in_array(strtolower($ext), $allowed)){
                    //
                    $path = UPLOAD_DIR.'/'.$path;
                    if(!is_dir($path)){
                        mkdir($path, 0777, true);
                    }
                    $name = date('YmdHis')."-".generateRandomString(40).".".$ext;
                    $success = move_uploaded_file($image['tmp_name'], $path."/".$name);
                    if($success){
                        return name; 
                    } else {
                        // error uploading 
                        return false;
                    }
                } else {
                    // not supported
                    return false;
                }
            } else {
                // file size
                return false;
            }
        } else {
            //error in file
            return false;
        }
    }