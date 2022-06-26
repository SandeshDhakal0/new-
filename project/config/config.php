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
    

