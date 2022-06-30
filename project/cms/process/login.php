<?php
    //code control, controller
    require_once "../../config/config.php";

    if(isset($_POST) && !empty($_POST)){
        //form data is received
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);    //string, false
        if(!$email){
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
            redirect("../",'error','Credentials does not match.'); 
        }
        setSession('user_id',$user_info->id);
        setSession('name',$user_info->name);
        setSession('role',$user_info->role);
        setSession('email',$user_info->email);
        setSession('status',$user_info->status);

        $token = generateRandomString(100);
        setSession('token', $token);

        if(isset($_POST['remember_me']) && $_POST['remember_me'] == 1){
            //cookie
            setcookie('_au', $token, time()+8640000,'./');
            //TODO: DB update
            $data = array(
                'remember_token' => $token,
                'status' => 'active'
            );
            $user->updatedRowById($user_info->id, $data);
        }
        //remember_me, checkbox, radio, select-option
        redirect("../dashboard.php",'success','Welcome to admin panel');

    }else{
        //invalid access
        redirect("../","error",'Invalid access');
    }
