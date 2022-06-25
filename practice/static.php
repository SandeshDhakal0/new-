<?php 
    class User{
        /**
         * abstract
         */
        static protected $name = "test";
        
        static function getUser(){
            //$this->name;
            echo self::$name;
            echo "I am getUser function. <br>";
        }
    }
    $user = new User; //memory initialization for $user object

    $user->getUser();       //memory

    User::getUser();