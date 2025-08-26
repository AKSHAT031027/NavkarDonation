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
    };
    

    .form-section {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(243, 20, 20, 0.1);
    }

    .step-progress {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .step-progress span {
      text-align: center;
      font-weight: bold;
    }

    .step-progress .active {
      color: rgb(89, 167, 171);
    }

    .form-title {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .form-title span {
      color: rgb(89, 167, 171);
      font-family: 'Cursive';
    }

    .form-label {
      font-weight: bold;
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
   .form-section{
    background-image: 
   }
    </style>
    <body>
   <div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
 
    <!-- Blurred background image -->
    <div
      style=" position: absolute;  top: 0;  left: 0; width: 100%;  height: 100%; background-image: url('assets/img/volunteerpage.jpg'); background-size: cover;background-position: center;filter: blur(1px); z-index: 0">
    </div>

    <div
      style="  position: absolute;   top: 0;  left: 0;  width: 100%;  height: 100%; background-color: rgba(0, 0, 0, 0.4);  z-index: 1;">
    </div>

    <!-- Foreground content -->
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
        style="background-color: #fbfbfa; color: rgb(11, 0, 0); padding: 12px 25px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
        Registration Form
      </a>
      <a href="#"  type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
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
  <br>
  <br>

  
  <body class="bg-light">
    
    <div class="container py-5 card shadow-sm mt-5 mb-5 w-100% bg-search">
      <h4
        style="font-size: 50px;text-align: center; font-weight: bolder;font-family: 'Courier New', Courier, monospace;margin: top 100px;;">
        <span style="color:rgb(9, 9, 9);"> Volunteering Categories</span>
      </h4> <br>
      <div class="row justify-content-center g-4">


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70 ">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Food Distribution</h2>

              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Disaster Relief</h2>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Education</h2>
              </div>

            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card text-center shadow-sm h-70">
            <div class="card-body">
              <div class="mb-3 hover">
                <br>
                <h2 class="fw-bold font-family-rabic font-weight-do">Health Care</h2>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    <br>
    <br>


    <div class="container " id="registration">
      <div class="row">
        <!-- Form Title -->
          

        <div class="col-12 text-center mb-2">
          <h2 class="form-title"><span>Fill The</span> Volunteering Form</h2>
        </div>
    <div class="col-lg-8 offset-lg-2 form-section">
    
    <form method="POST" action="">
      
      <div class="mb-3">
      
        <label>Name:</label><br>
        <input type="text" class="form-control initial scale" name="name" required>
         </div>
          <div class="row">
              <div class="col-md-6 mb-3">
        <label>Email:</label><br>
        <input type="email" class="form-control initial scale" name="email" required>
         </div>
        <div class="col-md-6 mb-3">
        <label>Phone No:</label><br>
        <input type="text" class="form-control initial scale" name="phone_no" required>
         
          </div>
            </div>
        <div class="row">
              <div class="col-md-6 mb-3">
        <label>Date of Birth:</label><br>
        <input type="date" class="form-control initial scale" name="dob" required>
         </div>
        <div class="col-md-6 mb-3">
        <label>Gender:</label><br>
        <select name="gender" class="form-control initial scale" required>
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        
              </div>
            </div>
       <div class="row">
        <div class="col-md-6 mb-3">
        <label>Father's Name:</label><br>
        <input type="text" class="form-control initial scale" name="father_name" required>
         </div>
      <div class="col-md-6 mb-3">
        <label>Father's Contact No:</label><br>
        <input type="text" class="form-control initial scale" name="father_contact_no" required>
           </div>
            </div>
        <button type="submit" href="#registration" class="btn  btn-primary mt-3 w-100" name="submit">Submit</button>
          </div>
      </div>
    
      </div>
     <div class="registeration-details" style=" margin-left: 320px; margin-top: 32px;">

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

        if ($conn->query($sql) === TRUE) {
            echo "<p>Volunteer registered successfully!</p>";
        } else {
            echo "<p>Error: " . $conn->error . "</p>";
        }
    }

    // Retrieve and display all volunteers
    
    echo "<h3>Registered Volunteers</h3>";
    $result = $conn->query("SELECT * FROM volunteer ORDER BY id DESC");

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th>
                    <th>Gender</th><th>Father's Name</th><th>Father's Contact</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
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

    $conn->close();
    ?>
    </form>
  </body>
 <br>
  </div>
  </div>
<?php
include('include/footer.php');
?> 
</body>
</html>