<?php 
    session_start();
    date_default_timezone_set('Asia/Kathmandu');

    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PWD", '');
    define("DB_NAME", 'blog_1');

    //htdocs/project/error/error.log
    //personal/project
    define("PROJECT_DIR", $_SERVER['DOCUMENT_ROOT'].'/php/project');

    define("ERROR_LOG", PROJECT_DIR.'error/error.log');

    define("CLASS_PATH", PROJECT_DIR.'class');

    define("UPLOAD_DIR", PROJECT_DIR.'upload');

    require_once(PROJECT_DIR.'config/functions.php');
    
    //autload of the class file
    spl_autoload_register(function($class_name){ //callback or callable-> function($class_name)
        require_once CLASS_PATH.'/'.$class_name.".php";
    });

