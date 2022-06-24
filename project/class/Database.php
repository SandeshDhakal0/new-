<?php
    class Database{
        protected $table = null;
        
        function __construct(){
            $this->conn = mysqli_connect();
        }
    }