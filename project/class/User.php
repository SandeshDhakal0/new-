<?php
    class User extends Database{
        function __construct()
        {
            parent::__construct();
            //db operation
            this->table = "users";
        }
    }