<?php
    //code control, controller
    require_once "../../config/config.php";

    if(isset($_POST) && !empty($_POST)){
        //form data is received
    }else{
        //invalid access
        redirect("../","error",'Invalid access')
    }