
<?php
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU"; // your password
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Fetch all volunteers
$stmt = $pdo->query("SELECT * FROM volunteer");
$volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Gallery</title>
    <style>
        body { font-family: Arial; background: #f4f4f9; margin: 20px; }
        h1 { text-align: center; color: #333; }
        .container { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 200px;
            padding: 15px;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .card h3 { margin: 5px 0; color: #007BFF; }
        .card p { margin: 3px 0; font-size: 14px; }
    </style>
</head>
<body>
    <h1>Our Volunteers</h1>
    <div class="container">
        <?php foreach($volunteers as $v): ?>
            <div class="card">
                <img src="https://via.placeholder.com/200x150?text=Photo" alt="Volunteer Photo">
                <h3><?= htmlspecialchars($v['name']) ?></h3>
                <p>Email: <?= htmlspecialchars($v['email']) ?></p>
                <p>Phone: <?= htmlspecialchars($v['phone_no']) ?></p>
                <p>DOB: <?= htmlspecialchars($v['dob']) ?></p>
                <p>Gender: <?= htmlspecialchars($v['gender']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
