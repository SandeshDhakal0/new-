<?php
    require_once "../../config/config.php";

    $slider = new Banner();

    //get all sliders

    is(isset($_GET['action']) && !empty($_GET['action']) && $_GET['action'] == 'getAllSliders'){
        //fetch all sliders
        $data = $slider->getAllRows();

        if($data){
            $response = array(
                'data' => $data,
                'status' => 200,
                'msg' => 'List success.'
            );
        } else { 
            $response = array(
                'data' => null,
                'status' => 400,
                'msg' => 'Data not found.'
            );
        }

        echo json_encode($response);
        exit;
    }