<?php
    class Person{
        function __construct(){
            echo "I am constructor of person.<br>";
        }
        function getPerson(){
            echo "I am from getPerson function.<br>";
        }
    }

    class User extends Person {
        const ALLOW_LOGIN = true;
        public $user_name = "Test User";
        function __construct(){
            echo "I am constructor of User.<br>";
            echo "User is allowed to login?".self::ALLOW_LOGIN;
            parent::__construct();
        }
        public function testUser(){
            echo "This is test user. <br>";
        }
        function getPerson(){
            parent::getPerson();
            echo "This is from child class.<br>";
        }
    }

    class UserClass {
        function __construct(){
            $this->obj1 = new Person();
            $this->obj2 = new User();
        }
    }
    $user = new User();