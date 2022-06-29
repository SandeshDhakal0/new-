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
                'email' => $email
            );
            $this->sql = "SELECT * FROM".$this->table."WHERE email= :email";
            $user = $this->select($data);
            if($user){
                
            }
        }
    }