<?php
include 'db_connect.php'; // Make sure this file has pg_connect()

if (isset($_POST['submit'])) {
    // Escape input to prevent SQL injection
    $name = pg_escape_string($conn, $_POST['name']);
    $email = pg_escape_string($conn, $_POST['email']);
    $phone_no = pg_escape_string($conn, $_POST['phone_no']);
    $dob = pg_escape_string($conn, $_POST['dob']);
    $gender = pg_escape_string($conn, $_POST['gender']);
    $father_name = pg_escape_string($conn, $_POST['father_name']);
    $father_contact_no = pg_escape_string($conn, $_POST['father_contact_no']);

    $sql = "INSERT INTO volunteer (name, email, phone_no, dob, gender, father_name, father_contact_no)
            VALUES ('$name', '$email', '$phone_no', '$dob', '$gender', '$father_name', '$father_contact_no')";

    $result = pg_query($conn, $sql);

    if ($result) {
        echo "<p>Volunteer registered successfully!</p>";
    } else {
        echo "<p>Error: " . pg_last_error($conn) . "</p>";
    }
}

echo "<h3>Registered Volunteers</h3>";
$result = pg_query($conn, "SELECT * FROM volunteer ORDER BY id DESC");

if (pg_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th>
                <th>Gender</th><th>Father's Name</th><th>Father's Contact</th>
            </tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td>
                <td>{$row['phone_no']}</td><td>{$row['dob']}</td><td>{$row['gender']}</td>
                <td>{$row['father_name']}</td><td>{$row['father_contact_no']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No volunteers found.</p>";
}

pg_close($conn);
?>
