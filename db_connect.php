<?php
$host = "dpg-d2rg27adbo4c73d9ro2g-a";   // e.g. dpg-xxxxx.render.com
$port = 5432;                   // PostgreSQL default
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU";

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

