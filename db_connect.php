<?php
$host = "your-postgres-host";   // e.g. dpg-xxxxx.render.com
$port = 5432;                   // PostgreSQL default
$dbname = "your-database-name";
$user = "your-username";
$password = "your-password";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
