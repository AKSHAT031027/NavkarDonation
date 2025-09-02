<?php
require 'db_connect.php';
try {
    $stmt = $conn->query("SELECT NOW()");
    $row = $stmt->fetch();
    echo "PostgreSQL connection successful! Current time: " . $row['now'];
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
