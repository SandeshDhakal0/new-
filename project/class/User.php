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
        }
    }