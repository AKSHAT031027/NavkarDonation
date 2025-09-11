
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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    $father_contact_no = $_POST['father_contact_no'];

    $sql = "INSERT INTO volunteer (name, email, phone_no, dob, gender, father_name, father_contact_no)
            VALUES (:name, :email, :phone_no, :dob, :gender, :father_name, :father_contact_no)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone_no' => $phone_no,
        ':dob' => $dob,
        ':gender' => $gender,
        ':father_name' => $father_name,
        ':father_contact_no' => $father_contact_no
    ]);

    echo "<p style='color:green;'>Volunteer registered successfully!</p>";
}

// Fetch all volunteers
$stmt = $conn->query("SELECT * FROM volunteer ORDER BY id DESC");
$volunteers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Your HTML & CSS content -->
<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to bottom, #e6e6e6 0%, #fde7a4 100%);
    color: #333;
    line-height: 1.6;
}
/* ... keep all your existing CSS ... */
</style>

<body>
<div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('assets/img/volunteerpage.jpg'); background-size: cover; background-position: center; filter: blur(1px); z-index: 0;"></div>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.4); z-index:1;"></div>
    <div style="position: relative; z-index:2;">
        <h1 style="font-size: 50px; font-weight: bolder; font-family:'Courier New', Courier, monospace;">
            <span style="color:rgb(240,241,240)"> Volunteer Application Registration </span>
        </h1>
        <p style="font-size:18px; margin:20px 0; font-family:inherit;">
            "Your greatest wealth is the impact you create.<br> Become a volunteer — because every act of kindness shapes a better world."
        </p>
        <br>
        <a href="#registration" style="background-color:#fbfbfa; color:rgb(11,0,0); padding:12px 25px; text-decoration:none; border-radius:5px; margin-right:10px;">
            Registration Form
        </a>
        <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" style="background-color:#fbf9f9; color:#333; padding:12px 25px; text-decoration:none; border-radius:5px;">
            Categories
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#registration">Food Donator</a></li>
            <li><a class="dropdown-item" href="#registration">Helper</a></li>
            <li><a class="dropdown-item" href="#registration">Doctor/Nurse</a></li>
        </ul>
    </div>
</div>
<br><br>

<div class="container" id="registration">
    <div class="row">
        <div class="col-12 text-center mb-2">
            <h2 class="form-title"><span>Fill The</span> Volunteering Form</h2>
        </div>
        <div class="col-lg-8 offset-lg-2 form-section">
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

            <!-- Display Registered Volunteers -->
            <div class="registeration-details mt-4">
                <h3>Registered Volunteers</h3>
                <?php if(count($volunteers) > 0): ?>
                    <table border="1" cellpadding="10" style="width:100%; border-collapse: collapse;">
                        <tr style="background:#007BFF; color:white;">
                            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th>
                            <th>Gender</th><th>Father's Name</th><th>Father's Contact</th>
                        </tr>
                        <?php foreach($volunteers as $v): ?>
                        <tr style="text-align:center;">
                            <td><?= htmlspecialchars($v['id']) ?></td>
                            <td><?= htmlspecialchars($v['name']) ?></td>
                            <td><?= htmlspecialchars($v['email']) ?></td>
                            <td><?= htmlspecialchars($v['phone_no']) ?></td>
                            <td><?= htmlspecialchars($v['dob']) ?></td>
                            <td><?= htmlspecialchars($v['gender']) ?></td>
                            <td><?= htmlspecialchars($v['father_name']) ?></td>
                            <td><?= htmlspecialchars($v['father_contact_no']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                <?php else: ?>
                    <p>No volunteers found.</p>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<?php
include('include/footer.php');
?>
</body>
</html>
