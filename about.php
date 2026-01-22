 <?php
    include('include/header.php');
?>  
<!--  -->
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(to bottom, #e6e6e6 0%, #fde7a4 100%);
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

    /* contact style */

    .fa-map-marker {
        color: #ff6c00;
        font-weight: 900;
        font-height: 200px;
        font-size: 5rem;

    }

    .fa-envelope {
        color: #ff6c00;
        font-weight: 900;
        font-height: 200px;
        font-size: 5rem;
    }

    .fa-phone {
        color: #ff6c00;
        font-weight: 900;
        font-height: 200px;
        font-size: 5rem;
    }

    .font-family-rabic {
        font-family: monospace;

    }

    .background-color-info {
        background-color: white;
    }
    .btn-orange {
        background-color: #ff6c00;
        color: white;
    }
    .card{
        background-color: rgb(255, 255, 255, 0);
        border-color: rgb(255, 108, 0, 0);
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
        border-bottom: 0px;
        box-shadow: #999;
    }
    .card-body:hover {
    transition: transform 0.3s ease-in-out;
    transform: scale(1.05);
    background-color: rgba(255, 255, 255, 0.1);
    }
    .btn-orange:hover {
    color: white; 
    background-color: #ff6c00;
    transition: transform 0.3s ease-in-out;
    transform: scale(1.05);
   
    }
    
    .row:hover {
    color: white; 
   
    transition: transform 0.3s ease;
    transform: scale(1.02);
   
    }
    
</style>
</head>

<body>
    <div class="container3">
        <h1>A Donation for Underprivileged children</h1>
        <div class="heart-line">💖</div>
        <p class="subheading">
            Navkar Donation Trust was founded in 2019 and incorporated in 1956 under Public Trust Act.
        </p>

        <div class="content">
            <p>
                <span class="bold">Navkar Donation trust</span> is a Jaipur-based NGO working on child rights and sustainable
                development goals.
                Navkar Donation Trust was founded by International Children peace prize winner
                <span class="bold highlight">‘Om Prakash’</span> with his wife <span
                    class="bold highlight">‘Mohini’</span> and alumni of AIESEC
                <span class="bold highlight">‘Pritam Singh’</span> with the vision of creating a society where no child
                is denied access to education and
                forced to work in exploitative jobs that are often underpaid and in dangerous conditions. Whether it’s
                giving a good education
                or ensuring that poor children have a better life. Navkar Donation Trust caters to the specific requirements
                of children, providing
                them with a good start, opportunities to learn, and safety from violence.
            </p>
        </div>

        <div class="content">
            <p>
                Navkar Donation is a <span class="bold">non-profit organisation</span> founded in <span
                    class="bold">2019</span> and incorporated under the
                <span class="bold">Public Trust Act of 1956</span>. Om Prakash Gujar, a former child labourer, an
                <span class="bold">International Children’s Peace 2006 awardee</span>, and a Bachpan Bachao Andolan
                alumni, and his colleagues began
                their fight to abolish child labour by focusing on out-of-school children near Poornima University in
                Jaipur. They chose to
                follow in the footsteps of their mentor, <span class="bold">Nobel Peace Prize winner Kailash
                    Satyarthi</span>, who gave Om Prakash a new
                lease on life by releasing him from child labour.
            </p>
        </div>
    </div>
</body>
<!-- contact info -->

<body class="bg-light">

    <div class="container py-5 card shadow-sm mt-5 mb-5 w-100% background-color-info">
        <div class="row justify-content-center g-4">

            <!-- Address -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100 ">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt fs-1 text-warning"></i>
                        </div>
                        <p alt="Address" class=" fa-map-marker "></p>
                        <h5 class="card-title fw-bold font-family-rabic">Address Line</h5>

                        <p class="card-text text-muted mb-0">S-7, Aayojan Apartments,</p>
                        <p class="card-text text-muted mb-0">Jyotinagar Ext, Jyothi Nagar,</p>
                        <p class="card-text text-muted mb-0">Lalkothi, Jaipur, Rajasthan</p>
                        <p class="card-text text-muted">302005</p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class=" bi bi-envelope fs-1 text-warning"></i>
                        </div>
                        <p class="fa-envelope"></p>
                        <h5 class="card-title fw-bold font-family-rabic">Email Address</h5>
                        <p class="card-text text-muted">info@paathshalatrust.org</p>
                    </div>
                </div>
            </div>

            <!-- Phone -->
            <div class="col-md-4">
                <div class="card text-center shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-telephone fs-1 text-warning"></i>
                        </div>
                        <p class=" fa-phone"></p>
                        <h5 class="card-title fw-bold font-family-rabic">Phone Number</h5>
                        <p class="card-text text-muted mb-0">(+91) 97822 09683</p>
                        <p class="card-text text-muted">91663 71582</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <body class="bg-light">

        <div class="container py-5">
            <div class="row g-5">

                <!-- Left: Contact Form -->
                <div class="col-md-6 card shadow-sm p-4 bg-search">
                    <h3 class="fw-bold mb-2">Your Details</h3>
                    <p class="text-muted mb-4">Let us know how to get back to you.</p>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name">
                            <small class="form-text text-muted">Enter your first name here</small>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject">
                            <small class="form-text text-muted">How can we help you?</small>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email">
                            <small class="form-text text-muted">Example: user@website.com</small>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Phone">
                        </div>

                        <h5 class="mt-4">How can we help?</h5>
                        <p class="text-muted">Feel free to ask a question or simply leave a comment</p>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Write your message..."></textarea>
                        </div>



                        <button type="submit" class="btn btn-orange px-4">Send Message</button>
                    </form>
                </div>

                <!-- Right: Contact Info -->
                <div class="col-md-6 card shadow-sm p-4 ">
                    <h3 class="fw-bold mb-3">Contact Us</h3>
                    <p class="text-muted">
                        Navkar Donations strives to make a difference wherever we can. However, we need your support
                        to further our cause.
                        <br><br>
                        Become our partner by donating or sponsoring these children.
                    </p>



                    <div class="ratio ratio-4x3 rounded mt-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4596.528837983748!2d75.86472323813183!3d26.819890395645082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db770070b115f%3A0x6f306afd08a3e737!2sSwami%20Keshvanand%20Institute%20of%20Technology%2C%20Management%20%26%20Gramothan%20(SKIT)!5e0!3m2!1sen!2sin!4v1753547539237!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div>
                    <div class="container2">
                        <div class="left">
                            <img src="assets/img/Group.jpg" alt="Volunteers with children" class="main-img">
                            <div class="small-images">
                                <img src="assets/img/group2.jpg" alt="Volunteer with kid">
                                <img src="assets/img/group3.png" alt="Happy kids">
                            </div>
                        </div>

                        <div class="right">
                            <h2>Join Navkar Donations</h2>
                            <h1>Want to help ?</h1>
                            <p>A non-profit organization that provides children’s aid and relief effort to vulnerable
                                communities through the cooperation of volunteers.</p>

                            <div class="actions">
                                <button>💙 Give Love</button>
                                <button>🧒 Save the Children</button>
                                <button>🛟 Rescue</button>
                                <button>🤝 Become A Volunteer</button>
                            </div>
                            <a class="help-btn nav-link text-center" href="volunteer.php">❤️ Yes! I Want To Help!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

<?php
include("include/footer.php");

?>
