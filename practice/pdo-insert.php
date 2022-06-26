<?php 

    $conn = new PDO("mysql:host=localhost;dbname=php_brodway;","root","");
    //error==> exception
    $year = "078";
    $name = "Hehehe";
    $email = "heheh@gmail.com";
    $gender = "Male";
    $role_id =1;
    $address = "Kathmandu";
    $dob = "2022-01-01";
    $about = "Here I am.";
    $password = password_hash("admin123", PASSWORD_BCRYPT);

    // insert query
    $sql = "INSERT INTO users SET
            year = '$year',
            name = '$name',
            email = '$email',
            password = '$password',
            role_id = '$role_id',
            gender = '$gender',
            address = '$address',
            date_of_birth = '$dob',
            about = '$about'
            ";

    //Convert sql to statement object
    $stmt = $conn->prepare($sql);

    if(!$stmt){
        //error
        echo "Error in statement conversion";
        exit;
    }
    