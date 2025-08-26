<?php
$sever = "localhost";
$username ="root";
$password="";
$dbname="suyash_database";


$con = mysqli_connect($sever, $username, $password, $dbname);

if (!$con) {
    echo "Database connection failed";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $donation = isset($_POST['donation']) ? $_POST['donation'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $fphone = isset($_POST['fphone']) ? $_POST['fphone'] : '';


    $sql = "INSERT INTO information(donation, name, email, phone, dob, gender, fname, fphone) 
            VALUES ('$donation', '$name', '$email', '$phone', '$dob', '$gender', '$fname', '$fphone')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Data submitted successfully.";
    } else {
        echo "Database error: " . mysqli_error($con);
    }
} else {
    echo "Form not submitted.";
}
?>