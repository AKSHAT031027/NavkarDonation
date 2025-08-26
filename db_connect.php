<?php
$host = "trolley.proxy.rlwy.net";
$username = "root";
$password = "wNyVnY0FHWCsHpzQSjOmimbdfzTOILw";  // full password
$database = "railway";
$port = 32181;  // ✅ Railway port

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
