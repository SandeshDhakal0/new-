<?php

/**
 * Connect your database and select your db
 * Create SQL
 * Execute your database query
 * fetch data
 */
// this function is used to connect mysql server.
// params => host, user, password, db_name, port no
$conn = mysqli_connect("localhost", "root", "", "php_brodway");
if(!$conn) {
// end the program if no db is being connected
die("Error establishing db connection.");
}

$user_name = "User Name"; 

$sql = "INSERT INTO users (name, email, password, gender, address, date_of_birth, about)
VALUES
('$user_name', 'useremaill@gmail.com', 'userpassword', 'Male', 'Other', '2000-01-01', 'This is about')";
// echo $sql;
$query = mysqli_query($conn, $sql);
if ($query) {
    echo "Data inserted successfully.";
} else {
    echo "Error: ".mysqli_error($conn);
}
// Min 10 users entry


