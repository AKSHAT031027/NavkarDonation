 <?php
    include('include/header.php');
?>  
<!--  -->
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #e6e6e6 0%, #fdf7e3 100%);
            color: #333;
            line-height: 1.6;
        }

        .container3 {
            max-width: 900px;
            margin: 0 auto;
            padding: 50px 20px;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .heart-line {
            font-size: 24px;
            color: #e28743;
            margin: 10px 0;
        }

        .subheading {
            color: #999;
            font-size: 1rem;
            margin-bottom: 40px;
        }

        .content {
            text-align: left;
            font-size: 1.05rem;
            margin-bottom: 30px;
        }

        .bold {
            font-weight: bold;
        }

        .highlight {
            color: #000;
        }

        .container4 { 
             background: white; 
            height: auto;
            width: 400px;
            margin: 50px;
            border: 0.1mm solid rgb(139, 138, 138, 0.5);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
            
             /* position: relative;
                top: -250px; */
        

        }
        .container4:hover {
            transform: scale(1.02);
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateX(-400px);
            }

            to {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        .container4 {
            animation: appear 2s linear;
            animation-timeline: view();
            animation-range: entry 0 cover 40%;
        }

        .form-title span {
            color: rgb(89, 167, 171);
            font-family: 'Cursive';
        }

        .form-title {
            font-size: 2rem;
            font-weight: bold;

        }
    </style>
</head>
<style>
.background-container {
  background-image: url('assets/img/donationpage.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  min-height: 600px;
  padding: 60px 20px;
}

/* Flexbox container for cards */
.donation-cards {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}

/* Individual card styles */
.donation-card {
  width: 280px;
  background: white;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  opacity: 0;
  transform: translateY(50px);
  animation: slideUp 0.6s ease forwards;
}

.donation-card h4 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
}

.donation-card p {
  font-size: 14px;
  margin-bottom: 15px;
}

.icon {
  font-size: 1.2em;
  margin-left: 8px;
  vertical-align: middle;
}

/* Slide animation */
@keyframes slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.delay-1 { animation-delay: 0.2s; }
.delay-2 { animation-delay: 0.4s; }
.delay-3 { animation-delay: 0.6s; }




    </style>


</head>

<body>
<body>
  <div class="background-container">
    <div class="donation-cards d-flex justify-content-center flex-wrap gap-4">

      <!-- Education Card -->
      <div class="donation-card slide-in">
        <h3>Education <i class="bi bi-mortarboard-fill icon"></i></h3>
        <p> Education donation plays a vital role in shaping a brighter future for underprivileged children. 
            By supporting educational causes, donors help provide essential resources like books, uniforms, school supplies, and scholarships.
             These contributions break down financial barriers, allowing children to access quality.
              Every donation, big or small, creates a ripple effect—empowering individuals and uplifting entire communities through the power of learning. </p>
        <a href="#donate" class="btn btn-primary w-100">Donate Now</a>
      </div>

      <!-- Healthcare Card -->
      <div class="donation-card slide-in delay-1">
        <h3>Healthcare <i class="bi bi-heart-pulse-fill icon"></i></h3>
        <p> Healthcare donation is a powerful way to improve lives and support those in need of medical care.
             Donations help fund treatments, purchase medicines, and equip hospitals with necessary tools.
              They make healthcare accessible for poor and vulnerable communities, saving lives and promoting well-being. 
              Just like in education, every contribution in healthcare creates lasting impact—bringing hope, healing, and a healthier future for all.
<br>
<br>

 </p>
        <a href="#donate" class="btn btn-primary w-100">Donate Now</a>
      </div>

      <!-- Food Security Card -->
      <div class="donation-card slide-in delay-2">
        <h3>Food Security <i class="bi bi-basket-fill icon"></i></h3>
        <p> Food security donation ensures that no one goes to bed hungry, especially in vulnerable communities.
             These donations help provide nutritious meals, support food banks, and assist families during emergencies.
              By addressing hunger, they promote health, growth, and stability. Like education and healthcare, food support strengthens communities—turning compassion into action and creating a more just and nourished world for everyone. world for everyone.
<br>
 </p>
        <a href="#donate" class="btn btn-primary w-100">Donate Now</a>
      </div>

      <!-- Disaster Relief Card -->
      <div class="donation-card slide-in delay-3">
        <h3>Disaster Relief <i class="bi bi-lightning-fill icon"></i></h3>
        <p>Disaster relief donation provides immediate help to communities affected by natural or man-made disasters.
             These contributions supply essentials like food, water, shelter, and medical aid during critical times.
              They support recovery efforts and help rebuild lives and infrastructure. Just as with education, healthcare, and food security, disaster relief donations bring hope, safety, and resilience to those facing hardship—restoring dignity when it’s needed most. </p>
        <a href="#donate" class="btn btn-primary w-100">Donate Now</a>
      </div>

    </div>
  </div>
</body>

<body>
    <div class="view" id="donate" >

        <div class="container4 mx-auto" style="width:auto;">
            <form action="save.php" method="post">
                <div class="container mt-1 border">
                    <h2 class="form-title text-center"><span>Fill The</span> Donation Form</h2>
                    <h6>Donation Type</h6>
                    <select required class="form-select" name="donation">
                        <option>Select Donation</option>
                        <option>Education</option>
                        <option>Healthcare</option>
                        <option>Food Security</option>
                        <option>Disaster Relief</option>
                    </select>
                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name *</label>
                        <input type="text" class="form-control initial-scale" id="name" name="name" placeholder="Enter Name"
                            required>

                    </div>
                    <!-- Email and Phone -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email Address *</label>
                            <input type="email" class="form-control initial-scale" id="email" name="email" placeholder="" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone *</label>
                            <input type="tel" class="form-control initial-scale" id="phone" name="phone" placeholder="91+" required>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label">D.O.B *</label>
                            <input type="date" class="form-control initial-scale" id="dob" name="dob" required>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label">Gender *</label>
                            <select class="form-control initial-scale" id="gender" name="gender" required>
                                <option value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>

                        </div>
                    </div>

                    <!-- Father's Name and Mother's Name -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fatherName" class="form-label">Father's Name *</label>
                            <input type="text" class="form-control initial-scale" id="fatherName" name="fname"
                                placeholder="Enter father's Name" required> 
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Father's Contact No. *</label>
                            <input type="tel" class="form-control initial-scale" id="phone" name="fphone" placeholder="91+" required>

                        </div>
                    </div>

<div>
    Privacy Policy: We respect your privacy and are committed to protecting your personal information. When you make a donation, we collect basic details like your name, email, and payment information solely to process your donation and send receipts or updates. Your data is securely handled and never sold or shared, except with trusted payment processors or if required by law.
</div>



                    <!-- Submit -->
                    <button type="submit" formaction="submit.php" class="btn btn-primary mt-3">Next</button>
                    <br>
                    <h6 class="text-center">Thank you for your donation❤️</h6>
            </form>
        </div>
    </div>
    </div>
</body>


</form>
</div>

</div>
<?php
include('include/footer.php');
?>
</body>

    </html>