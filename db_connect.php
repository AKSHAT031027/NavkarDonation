
<?php
$host = "trolley.proxy.rlwy.net";
$port = 32181;
$username = "root";  // From Railway
$password = "WnYVnYOFHWHCsHpzQSjOMimbdfzTOILW"; // Exact password from Railway
$database = "railway";

// Create connection
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
