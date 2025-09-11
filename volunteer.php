<?php
include('include/header.php');

// PostgreSQL connection
$host = "dpg-d2rg27adbo4c73d9ro2g-a.oregon-postgres.render.com";
$dbname = "navkardatabase";
$user = "navkardatabase_user";
$password = "e7mDVwBkOpvert2W2UE9OPYv14rLFijU"; 
$port = "5432";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Initialize success message
$successMsg = "";

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

    // Set success message
    $successMsg = "Volunteer registered successfully!";
}
?>

<!-- Your HTML & CSS content -->
<style>
body { margin: 0; font-family: 'Segoe UI', sans-serif; background: linear-gradient(to bottom, #e6e6e6, #fde7a4); color:#333; }
.form-section { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin-bottom:50px; }
.success-msg { color: green; font-weight: bold; margin-bottom: 15px; text-align: center; }
</style>

<body>
<div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-image:url('assets/img/volunteerpage.jpg'); background-size:cover; filter:blur(1px); z-index:0;"></div>
    <div style="position:absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.4); z-index:1;"></div>
    <div style="position:relative; z-index:2;">
        <h1 style="font-size:50px; font-weight:bolder;">Volunteer Application Registration</h1>
        <p>"Your greatest wealth is the impact you create.<br>Become a volunteer — because every act of kindness shapes a better world."</p>
    </div>
</div>
<br><br>

<div class="container" id="registration">
    <div class="row">
        <div class="col-12 text-center mb-2">
            <h2 class="form-title"><span>Fill The</span> Volunteering Form</h2>
        </div>
        <div class="col-lg-8 offset-lg-2 form-section">

            <!-- Show success message -->
            <?php if($successMsg != ""): ?>
                <div class="success-msg"><?= htmlspecialchars($successMsg) ?></div>
            <?php endif; ?>

            <form method="POST" action="">
                <div class="mb-3">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Phone No:</label>
                        <input type="text" class="form-control" name="phone_no" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Date of Birth:</label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Gender:</label>
                        <select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Father's Name:</label>
                        <input type="text" class="form-control" name="father_name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Father's Contact No:</label>
                        <input type="text" class="form-control" name="father_contact_no" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 w-100" name="submit">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>
</body>
</html>

