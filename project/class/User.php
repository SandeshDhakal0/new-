<?php
    final class User extends Database{
        function __construct()
        {
            parent::__construct();
            $this->table = "users";
            //db operation
        }
        public function getUserByEmail($email){
            //sql
            //SELECT * FROM users WHERE email = :email;
            $data = array(
                'email_address' => $email
            );
    
            $this->sql = "SELECT * FROM ".$this->table."WHERE email= :email_address";
            //User is set in array
            $user = $this->select($data);
            if($user){
                return $user[0];
            } else {
                return null;
            }
        }
    }