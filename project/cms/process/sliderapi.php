<?php
    require_once "../../config/config.php";

    $slider = new Banner();

    //get all sliders

    is(isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'getAllSliders'){
        //fetch all sliders
        
    }