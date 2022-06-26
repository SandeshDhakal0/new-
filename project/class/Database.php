<?php
    abstract class Database{
        protected $table = null;
        
        function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $ex){
            $msg = date("Y-m-d H:i:s").",Connection: ".$ex->getMessage()."\n\r";
            error_log($msg, 3, ERROR_LOG);
        } catch(Exception $ex){
            $msg = date("Y-m-d H:i:s") . ", Connection:" .$ex-getMessage()."\n\r";
            error_log($msg, 3, ERROR_LOG);
        }
    } 

} 