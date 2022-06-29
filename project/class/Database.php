<?php
    abstract class Database{
        protected $table = null;
        protected $sql = null;
        protected $stmt = null;

        
        function __construct(){
        try{
            $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->sql = "SET NAMES utf8";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->execute();

            // English, Nepali 
            //Nepali font, unicode, 

        } catch(PDOException $ex){
            $msg = date("Y-m-d H:i:s").",Connection: ".$ex->getMessage()."\n\r";
            error_log($msg, 3, ERROR_LOG);

        } catch(Exception $ex){
            $msg = date("Y-m-d H:i:s") . ", Connection:" .$ex-getMessage()."\n\r";
            error_log($msg, 3, ERROR_LOG);
        }
    } 

} 