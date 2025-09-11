
<?php
include 'db_connect.php'; // Make sure this returns $conn = new PDO(...);

if (isset($_POST['submit'])) {
    try {
        $stmt = $conn->prepare("INSERT INTO volunteer 
            (name, email, phone_no, dob, gender, father_name, father_contact_no)
            VALUES (:name, :email, :phone_no, :dob, :gender, :father_name, :father_contact_no)");

        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':phone_no' => $_POST['phone_no'],
            ':dob' => $_POST['dob'],
            ':gender' => $_POST['gender'],
            ':father_name' => $_POST['father_name'],
            ':father_contact_no' => $_POST['father_contact_no']
        ]);

        echo "<p>Volunteer registered successfully!</p>";
    } catch (PDOException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

// Fetch all volunteers
try {
    $stmt = $conn->query("SELECT * FROM volunteer ORDER BY id DESC");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h3>Registered Volunteers</h3>";
    if (count($rows) > 0) {
        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th>
                    <th>Gender</th><th>Father's Name</th><th>Father's Contact</th>
                </tr>";
        foreach ($rows as $row) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone_no']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['father_name']}</td>
                    <td>{$row['father_contact_no']}</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No volunteers found.</p>";
    }
} catch (PDOException $e) {
    echo "<p>Error fetching volunteers: " . $e->getMessage() . "</p>";
}

// Close connection (optional in PDO, handled by PHP GC)
$conn = null;
?>
