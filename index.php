  
 <?php
    include('include/header.php');
?>  
    <!-- Hero Section -->
    <div style="position: relative; overflow: hidden; text-align: center; color: white; padding: 100px 20px;">
        <div
            style=" position: absolute;  top: 0;  left: 0; width: 100%;  height: 100%; background-image: url('assets/img/indian-children.jpeg'); background-size: cover;background-position: center;filter: blur(1px); z-index: 0">
        </div>

        <div
            style="  position: absolute;   top: 0;  left: 0;  width: 100%;  height: 100%; background-color: rgba(0, 0, 0,0.4);  z-index: 1;">
        </div>
        <div style="position: relative; z-index: 2;">
            <h1 style="font-size: 50px; font-weight: bolder;">Hand to Make Better Life for <span
                    style="color: rgb(88, 166, 170,2); ">Children</span></h1>
            <p style="font-size: 18px; margin: 20px 0;">Every good act is humanity. A man's true wealth hereafter is the
                good that he does in this world to his fellows.</p>
            <!-- <button type="button" style="background-color: #fbfbfa; color: rgb(11, 0, 0); padding: 8px 22px; text-decoration: none; border-radius: 5px; margin-right: 10px;">Read More</button> -->
            <a type="button" class="btn btn-read ms-4" data-bs-toggle="modal"
                style="background-color: #fbfbfa; color: rgb(11, 0, 0); padding: 8px 22px; text-decoration: none; border-radius: 5px; margin-right: 10px;"
                data-bs-target="#read">Read More</a>
            <div class="modal" id="read">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content2">
                        <div class="modal-header">
                            <h5 class="modal-title">Read More</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button> <br>
                        </div>
                        <div class="modal-body">
                            </form>
                            <div class="mb-5">
                                <h5>A donation for children can make a significant difference in their lives, providing
                                    them with opportunities they might not otherwise have. Whether it's monetary support
                                    for education, clothing for warmth, or toys for play, every contribution helps these
                                    young individuals build a brighter future. Consider donating to organizations
                                    dedicated to child welfare, or directly to a school or community center serving
                                    children in need. Your generosity can empower them to learn, grow, and thrive.

                                    Here are some ways your donation can make an impact:
                                    Education:
                                    Donate to provide school supplies, books, or even fund a child's tuition, ensuring
                                    they have access to quality education.
                                    Health:
                                    Support medical care, vaccinations, or nutritional programs for children, promoting
                                    their physical well-being.
                                    Basic Needs:
                                    Contribute to organizations that provide clothing, food, and shelter for children
                                    facing poverty or homelessness.
                                    Childcare:
                                    Donations can help fund childcare facilities or after-school programs, offering safe
                                    and nurturing environments for children while their parents work.
                                    Special Needs:
                                    Support programs that cater to children with disabilities or special needs,
                                    providing them with specialized care and resources.
                                    Recreation:
                                    Donations can fund recreational activities, toys, and sports equipment, allowing
                                    children to enjoy their childhood and develop essential skills.
                                    By donating, you are not just giving; you are investing in the future of these
                                    children, helping them to reach their full potential and become contributing members
                                    of society.
                                </h5>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--     
  <a href="#" style="background-color: #fbf9f9; color: #333; padding: 12px 25px; text-decoration: none; border-radius: 5px; ">Our Causes</a> -->
    </div>
    <!-- Welcome Section -->
    <div style="padding: 60px 20px; text-align: center;">
        <h2 style="font-size: 32px;">WELCOME TO <span style="color: #ff5722;">HUMANITY</span></h2>
        <p style="max-width: 700px; margin: auto; font-size: 16px; color: rgb(60, 60, 60);">
            We are humanity’s voice! A fundraising NGO organization. Your humanity is the service you show others
            across the world as we continue to help them with joy, one heart at a time.
        </p>

        <!-- Features Grid -->
       
  <style>
        @keyframes appear{
        from{
            opacity: 0;
          transform: translateX(-800px);
           
        }
        to{
            opacity: 1;
           transform: translateX(0px);
        }
      }
      .hover-image{
         box-shadow: 0 4px 15px rgba(36, 40, 58, 0.4);
         transition: transform 0.3s ease;
      }
      .hover-image:hover{
          transform: scale(1.08);
      }
       .hover-image {
        animation: appear 2s  ;
        /* animation-timeline: view(); */
        animation-range: entry 0 cover 50%;
       }
       .container6{
         animation: appear 4s  ;
        animation-timeline: view();
        animation-range: entry 0 cover 50%;
       }
     </style>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px;">
        <div style="width: 250px; text-align: center;">
         <!-- <img src="assets/img/SchoolChilds.jpeg" alt="Child Help" style="width: 100%; border-radius: 100px;">
            <h3>Child Support</h3> -->
         <a href="donate.html" class=" btn" ><img src="assets/img/SchoolChilds.jpeg" class="hover-image" style="width: 115%; margin-left: -17px; border-radius: 100px;" > </a>    
           <h3>Child Support</h3>
        </div>
         <div style="width: 250px; text-align: center;">
         <!--   <img src="assets/img/cloth distribution.jpg" alt="Donate" style="width: 100%; border-radius: 100px;"> -->
             <a href="donate.html" class=" btn" ><img src="assets/img/cloth distribution.jpg" class="hover-image" style="width: 115%; margin-left: -17px; border-radius: 100px;" > </a> 
            <h3>Donate to Causes</h3>
        </div>
         <div style="width: 250px; text-align: center;">
       <!--    <img src="assets/img/Eco awareness.jpg" alt="Green Earth" style="width: 110%; border-radius: 100px;"> -->
             <a href="donate.html" class=" btn" ><img src="assets/img/Eco awareness.jpg" class="hover-image" style="width: 120%; margin-bottom: 15px; margin-left: -17px; border-radius: 100px;" > </a> 
            <h3>Eco Awareness</h3>
        </div>
    </div>
</div>
<br>
    <br>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button> -->
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/handpump.jpg" alt="Handpump" class="d-block mx-auto ">
            </div>
            <div class="carousel-item">
                <img src="assets/img/cloth distribution.webp" alt="Cloth distribution" class="d-block mx-auto">
            </div>
            <div class="carousel-item">
                <img src="assets/img/food donation.jpg" alt="Food donating donating" class="d-block mx-auto">
            </div>
            <!-- <div class="carousel-item">
    <img src="assets/img/Blood donation.jpg" alt="Blood donating" class="d-block mb-5 mt-5 mx-auto">
  </div> -->
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark"></span>
        </button>
    </div>

    <!-- Donation Section -->
     <div class="donation-section">
    <div style="background-color: #fefbf2; padding: 60px 20px; text-align: center;">
        <h2 style="font-size: 32px;">Make a Donation</h2>
        <p style="max-width: 700px; margin: auto; font-size: 16px; color: #555;">
            Your generous donations help us continue our work and support those in need. Thank you for your
            kindness!
        </p>
        <a href="donation.php" class=" btn btn-primary" style="margin-top: 20px;">Donate Now<img
                src="assets/img/heart-donate.webp" class="logo2 ms-2"> </a>
    </div>
</body>
</div>
<br>
<!-- part-2 -->
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
        <p>A non-profit organization that provides children’s aid and relief effort to vulnerable communities through
            the cooperation of volunteers.</p>

        <div class="actions">
            <button>💙 Give Love</button>
            <button>🧒 Save the Children</button>
            <button>🛟 Rescue</button>
            <button>🤝 Become A Volunteer</button>
        </div>

        <a class="help-btn nav-link text-center" href="volunteer.php">❤️ Yes! I Want To Help!</a>
    </div>
</div>
<!-- footer -->
<?php
include('include/footer.php');
?>
</body>
</html>