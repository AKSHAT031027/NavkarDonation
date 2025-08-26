<?php
$host = "mysql.railway.internal";
$port = 3306;
$user = "root";
$password = "WnYVnYOFHWCsHpzQSjOMimbdfzTOIlW";
$dbname = "railway";

$conn = new mysqli($host, $user, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
