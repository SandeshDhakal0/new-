<?php
    //12 db server
    //PDO = PHP data object
    //class db handle
    // modern 
    //new PDO("drivername","user","password")
    try {
        //those code which either throws exception should be defined within try block
        $conn = new PDO("mysql:host=localhost;dbname=php_brodway;","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //exception return
        $x = 10;
        $y = 0;
        // $result = $x/$y;
        if($y == 0){
            //trigger
            throw new Exception("Division by Zero");
        }
            $result = $x / $y;
            echo $result;
        // echo "<pre>";
        // print_r($conn);
        // echo "</pre>";
    } catch(PDOException $exception){
        $msg = $exception->getMessage()."\n\r";
        error_log($msg, 3, "error.log");
        //log, respond, email
        //echo $msg; 
    } catch (Exception $e){
        $msg = $e->getMessage();
        echo $msg;
    }
    // } finally {
    //     //which executes always

    // }