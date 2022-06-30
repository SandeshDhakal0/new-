<?php
$user = new User();
    if(!issest($_SESSION) || empty($_SESSION['token'])){
       // redirect("./");
       if(isset($_COOKIE, $_COOKIE['_au'])){
            $token = $_COOKIE['_au'];

            if(!$token){
                setcookie('_au','', time()-60,'/');
                redirect("./", 'error', 'Invalid cookie. Please clear cookie before login');
            }
            $user_info = $user->getUserByToken($token);
            if(!user_info){
                setcookie('_au','', time()-60,'/');
                redirect("../",'error','Invalid cookie value. PLease clear the cookie before login.');
            }
    
            setSession('user_id',$user_info->id);
            setSession('name',$user_info->name);
            setSession('role',$user_info->role);
            setSession('email',$user_info->email);
            setSession('status',$user_info->status);
    
            $token = generateRandomString(100);
            setSession('token', $token);
    // Jan 1 ------------------------------------------ Jan 10
                    // Jan 3 ------------------ Jan 10
            setcookie('_au', $token, time()+8640000,'./');
            $data = array(
                'remember_token' => $token,
                    'status' => 'active'
            );
            $user->updatedRowById($user_info->id, $data);

        }
    }