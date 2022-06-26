<?php
    class User{
        /**
         * $name=> functional parameter
         * $email=> functional parameter
         * $address=> functional parameter
         * 
         * their scope is within function, __construct();
         */
        function __construct($name, $email, $address){
            //autoloading fuction which executes whenever we create any object of that class
            //$this is an instance of current object which points the class
            // this function executes at first, so those code blocks which has to execute first should be called inside constructor
            $this->conn = mysqli_connect("localhost", 'root','','php_brodway')
            //$this->name 
            //$this->address
            //$this->email => scope within an object or class
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
        }
        function getUserName(){
            $this->conn;
            return $this->name;
        }

        function __destruct(){

        }
    }
        $user= new User("Sandesh", "sandesh@test.com","Kathmandu");

        $user->getUserName();
        "<pre>";
        print_r($user);
    