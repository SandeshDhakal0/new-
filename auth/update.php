<?php
    ob_start();
    require_once "conn.php";

if(!empty($_POST)){
    //validating data
    if(empty($_POST['name']) || empty($_POST['email'])){
        //validation failure
        //message set
        header('location: list.php');
        exit;
    }
        //text@text
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);        //text, false
    //gmail, yahoo, working email
    if(!$email){
        //message set
        header("location: ./");
        exit;
    }
    //mail
    //validation pass
    if($_FILES['image']['error'] == 0){
        //no error in file

        if($_FILES['image']['size'] <= 3000000){
            //size allowed
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $allowed = array('jpg','jpeg','png','webp');

            if(in_array($ext, $allowed)){
                //Image-2021120822401502.jpg
                $name = "Image". "-" . date("YmdHis") . rand(0, 99999) . "." . $ext;
                $path = "uploads/image/";
                if(!is_dir($path)){
                    mkdir($path, 0777, true);
                }
                $image_uploaded = move_uploaded_file($_FILES['image']['tmp_name'], $path . $name);

            } else {
                echo "File format is not supported.";
            }
            }else {
            echo "File size should be less than 3mb";
            }
            }else {
            //file has error
            echo "File contains error.";
            }
        
   
    
    $full_name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $date_of_birth = $_POST['dob'];
    $about = $_POST['about'];

    $user_id = (int)$_POST['user_id'];

    $sql = "UPDATE users SET
            name = '$full_name',
            email = '$email',
            gender = '".$_POST['gender']."',
            address = '$address',
            date_of_birth = '$date_of_birth',
            about = '$about'
            "; 

    if(isset($name)){
        $sql .= " , image = '$name'";
    }
    
    $sql .= "WHERE id = $user_id";

    // echo $sql;
    // exit;

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "Data inserted successfully.";
    } else {
        echo "Error: ".mysqli_error($conn);
    }

    //store data in db
    // echo "<pre>";
    // print_r($_FILES);
    // echo "<pre>";

    } else {
    //direct access
    //set message

    header("location: ./");
    exit;
    }
    ob_flush();
    //