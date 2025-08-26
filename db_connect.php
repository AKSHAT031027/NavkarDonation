<?php
$host = "dpg-d2mprfggjchc73cv6n40-a";   // your Render DB host
$port = "5432";                         // PostgreSQL default port
$dbname = "navkardonation_db";          // your Render DB name
$user = "navkardonation_db_user";       // your DB user
$password = "Tn1LonadqMJ2bF3o8unThRQnA4PYMqur";       // ⚠️ put the real password from Render here

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
