<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation portal</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #58a6aa;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="assets/img/logo.jpg" alt="Logo" class="me-2">
                    <h5 class="mb-0 text-white1 fw-bold">NAVKAR DONATIONS</h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon" style="position: absolute; margin: top -10px; margin: left -15px; "></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="ourwork.php">Our Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="volunteer.php">Volunteer</a>
                        </li>
                    </ul>
                    <!-- Buttons -->
                    <div class="d-flex flex-column flex-lg-row gap-2 ms-lg-3 mt-3 mt-lg-0">
                        <a href="donation.php" class="btn btn-light">Donate Now</a>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#contact">Contact
                            Now</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="contact">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="contactnow.php">
                      
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="+91">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3"
                                placeholder="Leave a message"></textarea>
                        </div>
                        
                        <button type="submit" href="#contact" class="btn btn-primary">Submit</button>
                    </div>
              
                    </form>
            </div>
        </div>
    </div>
