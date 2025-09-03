

<?php
try {
    $conn = new PDO("pgsql:host=localhost;port=5432;dbname=volunteer_db", "postgres", "Akshatmeena@1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
