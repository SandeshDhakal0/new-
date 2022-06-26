<?php 

    $conn = new PDO("mysql:host=localhost;dbname=php_brodway;","root","");
    //error==> exception
    //insert
    // $year = "078";
    $name = "Hehehe";
    $email = "heheh@gmail.com";
    $gender = "Male";
    $role_id =1;
    $address = "Kathmandu";
    $dob = "2022-01-01";
    $about = "Here I am.";
    $password = password_hash("admin123", PASSWORD_BCRYPT);

    // sql injection
    // $sql = "INSERT INTO users SET
    //         year = '$year',
    //         name = '$name',
    //         email = '$email',
    //         password = '$password',
    //         role_id = '$role_id',
    //         gender = '$gender',
    //         address = '$address',
    //         date_of_birth = '$dob',
    //         about = '$about'
    //         ";

    $sql = "INSERT INTO users SET
        -- year = :year,
        name = :name,
        email = :email,
        password = :password,
        role_id = :role_id,
        gender = :gender,
        address = :address,
        date_of_birth = :date_of_birth,
        about = :about
        ";

    //Convert sql to statement object
    $stmt = $conn->prepare($sql);

    if(!$stmt){
        //error
        echo "Error in statement conversion";
        exit;
    }
//This is data binding
    // $stmt->bindValue(":year", $year, PDO::PARAM_STR);
    $stmt->bindValue(":name", $name, PDO::PARAM_STR);
    $stmt->bindValue(":email", $email, PDO::PARAM_STR);
    $stmt->bindValue(":password", $password, PDO::PARAM_STR);
    $stmt->bindValue(":role_id", $role_id, PDO::PARAM_INT);
    $stmt->bindValue(":gender", $gender, PDO::PARAM_STR);
    $stmt->bindValue(":address", $address, PDO::PARAM_STR);
    $stmt->bindValue(":date_of_birth", $dob, PDO::PARAM_STR);
    $stmt->bindValue(":about", $about, PDO::PARAM_STR);
    //execute this statement
    $success = $stmt->execute();
    if($success){
        echo "Data entered successfully.";
    } else {
        echo "There was a problem while entering the data.";
    }
