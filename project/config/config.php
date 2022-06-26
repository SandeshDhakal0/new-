<?php 
    session_start();
    date_default_timezone_set('Asia/Kathmandu');

    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PWD", '');
    define("DB_NAME", 'php_brodway');

    //htdocs/project/error/error.log
    //personal/project

    define("ERROR_LOG", $_SERVER['DOCUMENT_ROOT']."/project/error/error.log");

    define("CLASS_PATH", $_SERVER['DOCUMENT_ROOT'].'/project/class');
    
    //autload of the class file
    spl_autoload_register(function($class_name){
        //User
        //..../class/User
        // echo $class_name;
        require_once CLASS_PATH.'/'.$class_name.".php";
    });

