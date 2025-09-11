
<?php
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU"; // replace with actual password
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
    <title>Volunteer List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <h1>Volunteer List</h1>
    <?php if(count($volunteers) > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Father Name</th>
                <th>Father Contact</th>
            </tr>
            <?php foreach($volunteers as $v): ?>
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['name'] ?></td>
                <td><?= $v['email'] ?></td>
                <td><?= $v['phone_no'] ?></td>
                <td><?= $v['dob'] ?></td>
                <td><?= $v['gender'] ?></td>
                <td><?= $v['father_name'] ?></td>
                <td><?= $v['father_contact_no'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No volunteers found.</p>
    <?php endif; ?>
</body>
</html>

