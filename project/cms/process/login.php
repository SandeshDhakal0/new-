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

        if(!user_info){
            redirect("../",'error','User not found.');
        }

        //password verify
        if(!password_verify($password, $user_info->password)){
            redirect(",,/",'error','Credentials does not match.'); 
        }
         debug($user_info);

    }else{
        //invalid access
        redirect("../","error",'Invalid access');
    }
