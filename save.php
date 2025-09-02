<?php
$host = "localhost";
$port = "5432"; // Default PostgreSQL port
$dbname = "suyash_database";
$user = "postgres"; // Change to your PostgreSQL username
$password = "your_password"; // Change to your PostgreSQL password

$con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$con) {
    echo "Database connection failed";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $donation = $_POST['donation'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $fphone = $_POST['fphone'] ?? '';

    $sql = "INSERT INTO information (donation, name, email, phone, dob, gender, fname, fphone)
            VALUES ($1, $2, $3, $4, $5, $6, $7, $8)";

    $result = pg_query_params($con, $sql, [$donation, $name, $email, $phone, $dob, $gender, $fname, $fphone]);

    if ($result) {
        echo "Data submitted successfully.";
    } else {
        echo "Database error: " . pg_last_error($con);
    }
} else {
    echo "Form not submitted.";
}
?>
