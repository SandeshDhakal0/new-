<?php 
    require_once "../../config/config.php";

    if(isset($_POST) && !empty($_POST)){
        //form submission
        $data = array(
            'title' => sanitize($_POST['title']),
            'status' => sanitize($_POST['status']),
            'image' => '',
            'created_by' => $_SESSION['user_id']
        );

        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
            $image = uploadImage($_FILES['image'], 'slider');
            if($image){
                $data['image'] = $image;
            }
        }
        $slider = new Banner();

        $row_id = $slider->insertRow($data);
        if($row_id){
            redirect('../slider.php','success','Slider created successfully.');
        } else { 
            redirect('../slider.php','error','Problem while adding slider.');
        }

    } else {
        redirect('../slider.php', 'error', 'Please add slider first');
    }