<?php
    abstract class Database{
        protected $table = null;
        protected $sql = null;
        protected $stmt = null;

        // To construct the database or to connect the database::
        function __construct(){                 
            try{
                $this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->sql = "SET NAMES utf8";
                $this->stmt = $this->conn->prepare($this->sql);
                $this->stmt->execute();

            } catch(PDOException $ex){
                $msg = date("Y-m-d H:i:s").",Connection: ".$ex->getMessage()."\n\r";
                error_log($msg, 3, ERROR_LOG);

            } catch(Exception $ex){
                $msg = date("Y-m-d H:i:s") . ", Connection:" .$ex-getMessage()."\n\r";
                error_log($msg, 3, ERROR_LOG);
            }
        } 
    // To run the select query
    final protected function select($data = array()){
        try{
            //sql
            //stmt
            //bind
            //execute 
            //data fetch

            $this->stmt = $this->conn->prepare($this->sql);
            if(!empty($data)){
                // [email] => '']
                foreach($data as $key => $value){
                    if(is_int($value)){
                        $param_type = PDO::PARAM_INT;
                    } else if(is_bool($value)){
                        $param_type = PDO::PARAM_BOOL;
                    }else {
                        $param_type = PDO::PARAM_STR;
                    }
                    $this->stmt->bindValue(":".$key, $value, $param_type);
                }
            }
            $this->stmt->execute();
            $result = $this->stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;

        } catch(PDOException $ex){
            $msg = date("Y-m-d H:i:s"). ",Select: ". $ex->getMessage(). "\n\r";
            error_log($msg, 3, ERROR_LOG);

        } catch(Exception $ex){
            $msg = date("Y-m-d H:i:s") . ", Select:" .$ex-getMessage()."\n\r";
            error_log($msg, 3, ERROR_LOG);

    }
    }

    final protected function update($id = null, $data = array()){
        try{
            $this->stmt = $this->conn->prepare($this->sql);
            if(!empty($data)){
                foreach($data as $key => $value){
                    if(is_int($value)){
                        $param_type = PDO::PARAM_INT;
                    } else if(is_bool($value)){
                        $param_type = PDO::PARAM_BOOL;
                    }else {
                        $param_type = PDO::PARAM_STR;
                    }
                    $this->stmt->bindValue(":".$key, $value, $param_type);
                }
            }
            if($id){
                $this->stmt->bindValue(":id",$id, PDO::PARAM_INT);
            }
            return $this->stmt->execute();
            
        } catch(PDOException $ex){
            $msg = data("Y-m-d H:i:s"). ",Update: ". $ex->getMessage(). "\n\r";
            error_log($msg, 3, ERROR_LOG); 
        } catch(Exception $ex){
            $msg = data("Y-m-d H:i:s"). ",Update: ". $ex->getMessage(). "\n\r";
            error_log($msg, 3, ERROR_LOG);
        }
    }
    }
