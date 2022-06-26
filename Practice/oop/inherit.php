<?php
    class Database{
        private $conn = null;
        protected function insert(){

        }
        protected function select(){

        }
        protected function update(){

        }
        protected function delete(){

        }
    }

    class User extends Database{
        //User Crud
        // not allowed to access private property of Database class
        public function getUser(){
            return this->select();
        }
    }

    $user = new User();
    $user->getUser();
    
