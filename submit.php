<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $donation = isset($_POST['donation']) ? $_POST['donation'] : '';
    $name = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    // $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $fphone = isset($_POST['fphone']) ? $_POST['fphone'] : '';


   

} else {
    
    header("Location: form.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Submitted</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(to bottom, #e6e6e6 0%, #fde7a4 100%);
    color: #333;
    line-height: 1.6;
}

submit {
    text-align: center;
    margin-top: 20px;
    padding: 10px 20px;
}
</style>

<body class="container mt-5">

    <h2 class="text-center bg-success text-white">Submission Successful</h2>

    <div class="card p-3 mb-4">
        <p><strong>Donation Type:</strong> <?= htmlspecialchars($donation) ?></p>
        <div class="mb-3 row">
            <p class="col-md-6 mb-3"><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
            <p class="col-md-6 mb-3"><strong>Phone:</strong> <?= htmlspecialchars($phone) ?></p>
        </div>
        <div class="mb-3 row">
            <p class="col-md-6 mb-3"><strong>Date of Birth:</strong> <?= htmlspecialchars($dob) ?></p>
            <p class="col-md-6 mb-3"><strong>Gender:</strong> <?= htmlspecialchars($gender) ?></p>
        </div>
        <div class="mb-3 row">
            <p class="col-md-6 mb-3"><strong>Father's Name:</strong> <?= htmlspecialchars($fname) ?></p>
            <p class="col-md-6 mb-3"><strong>Father's Phone:</strong> <?= htmlspecialchars($fphone) ?></p>
        </div>

    </div>

    <!-- Payment Button -->
    <a href="#payment-section" class="btn btn-success w-30">Proceed to Payment</a>
    
 <style>
    body {
      background-color: #f5f7fa;
    }
    .payment-card {
      max-width: 700px;
      margin: 60px auto;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      background-color: #fff;
      padding: 30px;
    }
    .btn-success {
      background-color: #58A6AA;
      border: none;
    }
    .form-section {
      display: none;
    }
    .qr-code {
      width: 180px;
      height: 180px;
      background-image: url('assets/img/qr.jpg');
      background-size: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>

  <div class="card payment-card" id="payment-section">
    <h3 class="text-center mb-4 fw-bold">💳 Choose Payment Method</h3>

    <form action="payment_process.php" method="post">
      <!-- Amount -->
      <div class="mb-4">
        <label for="amount" class="form-label fw-bold">💰 Enter Amount</label>
        <input type="number" name="amount" id="amount" class="form-control" placeholder="00.00" required>
      </div>

      <!-- Payment Method -->
      <label class="form-label fw-bold">Select Payment Method</label>
      <div class="form-check mb-2">
        <input class="form-check-input" type="radio" name="payment_method" id="upi" value="UPI" required>
        <label class="form-check-label" for="upi">UPI</label>
      </div>
      <div class="form-check mb-4">
        <input class="form-check-input" type="radio" name="payment_method" id="credit" value="Credit Card">
        <label class="form-check-label" for="credit">Credit Card</label>
      </div>

      <!-- UPI Section -->
      <div class="form-section" id="section-upi">
        <div class="row align-items-center">
          <div class="col-md-6">
            <label class="form-label">Scan this QR with any UPI App:</label>
            <div class="qr-code mt-2"></div>
          </div>
        </div>
      </div>

      <!-- Credit Card Section -->
      <div class="form-section" id="section-credit">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label class="form-label">Card Number</label>
              <input type="text" class="form-control" name="card_number" placeholder="XXXX-XXXX-XXXX-XXXX">
            </div>
            <div class="mb-3">
              <label class="form-label">Expiry Date</label>
              <input type="month" class="form-control" name="expiry">
            </div>
          </div>
        </div>
      </div>

      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-success btn-lg">Proceed to Pay</button>
      </div>
    </form>
  </div>

  <script>
    const methodInputs = document.querySelectorAll('input[name="payment_method"]');
    const upiSection = document.getElementById('section-upi');
    const creditSection = document.getElementById('section-credit');

    methodInputs.forEach(input => {
      input.addEventListener('change', () => {
        upiSection.style.display = 'none';
        creditSection.style.display = 'none';

        if (input.value === 'UPI') {
          upiSection.style.display = 'block';
        } else if (input.value === 'Credit Card') {
          creditSection.style.display = 'block';
        }
      });
    });
  </script>
<style>
    .shape{
        text-align: center;
        font-size: 2rem;
        color: #141414ff;
        font-weight: bold;
        margin-top: 20px;
        font-family:Cursive;
    }
    </style>
</body>
<h1  style="text-align: center; margin-top: 20px; font-size: 3rem;">🙏</h1>
    <h3 class="shape">Thank you for your Donation❤ </h3>
    </div>
    <br>
   
 
    <?php
include('include/footer.php');
?>

</body>


</html>
