<?php
include('include/header.php'); // your header file

// PostgreSQL connection
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$port = 5432;
$dbname = "navkardatabase";
$username = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Initialize message
$feedback = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name']    ?? '';
    $email   = $_POST['email']   ?? '';
    $phone   = $_POST['phone']   ?? '';
    $message = $_POST['message'] ?? '';

    // Check if email already exists
    $stmtCheck = $conn->prepare("SELECT COUNT(*) FROM contact_messages WHERE email = :email");
    $stmtCheck->execute([':email' => $email]);
    if ($stmtCheck->fetchColumn() > 0) {
        $feedback = "<p style='color:orange;'>You have already submitted a message.</p>";
    } else {
        // Insert new message
        $stmt = $conn->prepare("
            INSERT INTO contact_messages (name, email, phone, message) 
            VALUES (:name, :email, :phone, :message)
        ");
        if ($stmt->execute([
            ':name'    => $name,
            ':email'   => $email,
            ':phone'   => $phone,
            ':message' => $message
        ])) {
            $feedback = "<p style='color:green;'>Message submitted successfully!</p>";
        } else {
            $feedback = "<p style='color:red;'>Something went wrong. Please try again.</p>";
        }
    }
}
?>

<div class="container py-5">
    <h2 class="text-center mb-4">Contact Us</h2>

    <!-- Feedback message -->
    <?php if($feedback) echo $feedback; ?>

    <form method="POST" action="" class="w-75 mx-auto">
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label>Message:</label>
            <textarea class="form-control" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<?php include('include/footer.php'); ?>
