<?php
    include('include/header.php');
    include('db_connect.php');
?>  

<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(to bottom, #e6e6e6 0%, #fde7a4 100%);
        color: #333;
        line-height: 1.6;
    }

    .form-section {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(243, 20, 20, 0.1);
    }

    .form-title {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .form-title span {
        color: rgb(89, 167, 171);
        font-family: 'Cursive';
    }

    .container12 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 60px 10%;
    }

    .font-family-rabic {
        font-family: cursive;
    }

    .font-weight-do {
        font-size: x-large;
    }
</style>

<body>
    <!-- Hero Section -->
    <div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background-image: url('assets/img/volunteerpage.jpg');
            background-size: cover; background-position: center;
            filter: blur(1px); z-index: 0">
        </div>

        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.4); z-index: 1;">
        </div>

        <div style="position: relative; z-index: 2;">
            <h1 style="font-size: 50px; font-weight: bolder;font-family: 'Courier New', Courier, monospace;">
                <span style="color:rgb(240, 241, 240)"> Volunteer Application Registration </span>
            </h1>
            <p style="font-size: 18px; margin: 20px 0;font-family: inherit;">
                "Your greatest wealth is the impact you create.
                <br> Become a volunteer — because every act of kindness shapes a better world."
            </p>
            <br>
            <a href="#registration" 
                style="background-color: #fbfbfa; color: rgb(11, 0, 0); padding: 12px 25px; 
                text-decoration: none; border-radius: 5px; margin-right: 10px;">
                Registration Form
            </a>
            <a href="#" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                style="background-color: #fbf9f9; color: #333; padding: 12px 25px; text-decoration: none; border-radius: 5px;">
                Categories
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#registration">Food Donator</a></li>
                <li><a class="dropdown-item" href="#registration">Helper</a></li>
                <li><a class="dropdown-item" href="#registration">Doctor/Nurse</a></li>
            </ul>
        </div>
    </div>

    <!-- Categories -->
    <div class="container py-5 card shadow-sm mt-5 mb-5 w-100% bg-search">
        <h4 style="font-size: 50px;text-align: center; font-weight: bolder;
            font-family: 'Courier New', Courier, monospace;">
            <span style="color:rgb(9, 9, 9);"> Volunteering Categories</span>
        </h4> 
        <br>
        <div class="row justify-content-center g-4">
            <div class="col-md-3"><div class="card text-center shadow-sm"><div class="card-body">
                <h2 class="fw-bold font-family-rabic font-weight-do">Food Distribution</h2></div></div></div>
            <div class="col-md-3"><div class="card text-center shadow-sm"><div class="card-body">
                <h2 class="fw-bold font-family-rabic font-weight-do">Disaster Relief</h2></div></div></div>
            <div class="col-md-3"><div class="card text-center shadow-sm"><div class="card-body">
                <h2 class="fw-bold font-family-rabic font-weight-do">Education</h2></div></div></div>
            <div class="col-md-3"><div class="card text-center shadow-sm"><div class="card-body">
                <h2 class="fw-bold font-family-rabic font-weight-do">Health Care</h2></div></div></div>
        </div>
    </div>

    <!-- Registration Form -->
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
            </div>
        </div>

        <!-- Display Volunteers -->
        <div class="registeration-details mt-5">
        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone_no = $_POST['phone_no'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $father_name = $_POST['father_name'];
            $father_contact_no = $_POST['father_contact_no'];

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
        </div>
    </div>

<?php
include('include/footer.php');
?> 
</body>
</html>
