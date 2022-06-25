<?php 
    final class Gallery extends Database{
        function __construct(){
            parent::__construct();
            $this->table = "gallaries";
        }
    }