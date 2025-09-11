<?php
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU"; // replace with actual password
$port = "5432";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2>Connected successfully!</h2>";

    // Fetch all volunteers
    $stmt = $pdo->query("SELECT * FROM volunteer");
    $volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(count($volunteers) > 0){
        echo "<table border='1' cellpadding='5'>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Father Name</th>
                <th>Father Contact</th>
              </tr>";

        foreach($volunteers as $v){
            echo "<tr>
                    <td>{$v['id']}</td>
                    <td>{$v['name']}</td>
                    <td>{$v['email']}</td>
                    <td>{$v['phone_no']}</td>
                    <td>{$v['dob']}</td>
                    <td>{$v['gender']}</td>
                    <td>{$v['father_name']}</td>
                    <td>{$v['father_contact_no']}</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No volunteers found.";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

