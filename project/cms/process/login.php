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

        //query db
        $user = new User();

        $user_info = $user->getUserByEmail($email);
        //remember me checkbox, radio, select-option
        //uncheck

    }else{
        //invalid access
        redirect("../","error",'Invalid access');
    }
