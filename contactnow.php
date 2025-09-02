<?php
$host = "your-postgres-host";
$port = 5432;
$dbname = "your-database-name";
$username = "your-username";
$password = "your-password";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get form data safely
$name    = $_POST['name']    ?? '';
$email   = $_POST['email']   ?? '';
$phone   = $_POST['phone']   ?? '';
$message = $_POST['message'] ?? '';

try {
    $sql = "INSERT INTO contact_messages (name, email, phone, message) 
            VALUES (:name, :email, :phone, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name'    => $name,
        ':email'   => $email,
        ':phone'   => $phone,
        ':message' => $message
    ]);
    echo "Message submitted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
