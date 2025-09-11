<?php
include('include/header.php');

// PostgreSQL connection
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU"; // your password
$port = "5432";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Handle form submission
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO volunteer (name, email, phone_no, dob, gender, father_name, father_contact_no)
            VALUES (:name, :email, :phone_no, :dob, :gender, :father_name, :father_contact_no)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':phone_no' => $_POST['phone_no'],
        ':dob' => $_POST['dob'],
        ':gender' => $_POST['gender'],
        ':father_name' => $_POST['father_name'],
        ':father_contact_no' => $_POST['father_contact_no']
    ]);

    // Redirect to prevent duplicate form submission
    header("Location: volunteer.php");
    exit();
}
?>

<!-- Your HTML content -->
<style>
body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(to bottom, #e6e6e6, #fde7a4); margin:0; }
h1, h2 { text-align: center; }
.container { width: 90%; margin: auto; }
.form-section { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-bottom:50px; }
</style>

<body>
<div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-image:url('assets/img/volunteerpage.jpg');background-size:cover;filter:blur(1px); z-index:0;"></div>
    <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.4); z-index:1;"></div>
    <div style="position: relative; z-index:2;">
        <h1>Volunteer Application Registration</h1>
        <p>"Your greatest wealth is the impact you create.<br>Become a volunteer — because every act of kindness shapes a better world."</p>
        <a href="#registration" style="background-color:#fff;color:#000;padding:12px 25px;border-radius:5px;text-decoration:none;">Registration Form</a>
    </div>
</div>

<div class="container" id="registration">
    <div class="form-section">
        <h2>Fill The Volunteering Form</h2>
        <form method="POST" action="">
            <div>
                <label>Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div>
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div>
                <label>Phone No:</label>
                <input type="text" name="phone_no" class="form-control" required>
            </div>
            <div>
                <label>Date of Birth:</label>
                <input type="date" name="dob" class="form-control" required>
            </div>
            <div>
                <label>Gender:</label>
                <select name="gender" class="form-control" required>
                    <option value="">Select</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div>
                <label>Father's Name:</label>
                <input type="text" name="father_name" class="form-control" required>
            </div>
            <div>
                <label>Father's Contact No:</label>
                <input type="text" name="father_contact_no" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3 w-100">Submit</button>
        </form>
    </div>
</div>

<?php
include('include/footer.php');
?>
</body>
</html>

