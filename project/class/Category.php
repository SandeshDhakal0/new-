<?php
final class Category extends Database{
    function __construct(){
        parent:: __construct();
        $this->table = "categories";
    }
}