<?php
$host = "dpg-d2mprfggjchc73cv6n40-a";   // e.g. dpg-cg1234567a8b9.us-east-1.render.com
$port = "5432";                    // PostgreSQL default port
$dbname = "navkardonation_db";    // From Render
$user = "navkardonation_db_user";           // From Render
$password = "Tn1LonadqMJ2bF3o8unThRQnA4PYMqur";       // From Render

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";  // Optional for testing
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
