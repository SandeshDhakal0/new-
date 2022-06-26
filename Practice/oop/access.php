<?php 
    class User{
        public $name = "Sandesh";
        protected $email = "";
        private $password = "";

        const ROLE = "User";
        function __construct(){
            $this->address = "Kathmandu";
        }
        /**
         * public
         *  - can be accessed from anywhere using object
         * protected
         *  - can be accessed from either within the same class, or child class.
         * private
         *  - can be accessed within the same class only
         */
        private function getUserByEmail(){

        }
        function getUserByEmailPublic(){
            $this->getUserByEmail;
        }
    }
    $user = new User(); 
    echo $user->name;
    User:: ROLE;
    
