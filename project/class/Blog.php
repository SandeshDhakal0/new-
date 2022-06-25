<?php
    class Blog extends Database{
        function __construct()
        {
            parent::__construct();
            $this->table = "blogs";
        }
    }