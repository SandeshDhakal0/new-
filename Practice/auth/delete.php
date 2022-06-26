<?php 
require_once "conn.php";

    if(isset($_GET['id']) && !empty($_GET['id'])){
        //
        $id = (int)$_GET['id'];
        if($id <= 0){
            //invalid id
            header("location: list.php");
            exit;
        }
        $sql = "DELETE FROM users WHERE id= $id";
        $query = mysqli_query($conn, $sql);
        if($query){
            //success msg
        } else {
            //failure msg
        }
        header("location: list.php");
        exit;
        
        } else {
        // no id
        header("location: list.php");
        exit;
        }