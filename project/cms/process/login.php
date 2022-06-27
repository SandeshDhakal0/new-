<?php
    //code control, controller
    require_once "../../config/config.php";

    if(isset($_POST) && !empty($_POST)){
        //form data is received
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);    //string, false
        if($email){
            //invalid email, blank email
            redirect('../','error','Invalid email or empty email');
        }
        $password = $_POST['password']; 
        // debug($_POST);
        //remember me checkbox, radio, select-option
        //uncheck

    }else{
        //invalid access
        redirect("../","error",'Invalid access');
    }
