<?php
  include_once "sidebar.php";
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Your Plans | Lasallian Folio</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  

  <!-- Your Plans section -->

  <section class="your_plans_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="container-bg">
        <h1>Your Plans</h1><br><br>
  
        <div class="container">
        <div class="pricing-table">
            <div class="pricing-table-plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">          
                <h2>Basic</h2>
                <h3 style = "background-color: #006633";>Free</h3>
                <ul>
                    <li>Personal Portfolio Creation</li>
                    <li>Limited Access to Community Forums</li>
                    <li>Basic Project Showcasing ( Limited to 3 projects )</li>
                </ul>
            </div>
            
            <div class="pricing-table-plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">           
            <h2>Basic Premium</h2>
            <h3 style = "background-color: #006633";>₱50/month</h3>
            <ul>
                <li>Personal Portfolio Creation</li>
                <li>Full Access to Community Forums</li>
                <li>Unlimited Project Showcasing</li>
            </ul>
        </div>
  
        <div class="pricing-table-plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
            
                <h2>Premium Plus</h2>
                <h3 style = "background-color: #006633";>₱99/month</h3>
                <ul>
                    <li>Personal Portfolio Creation</li>
                    <li>Full Access to Community Forums</li>
                    <li>Unlimited Project Showcasing</li>
                    <li>A-list Circle Award Nominations</li>
                </ul>
            </div>
</div>
</div>
</div>
<div class="container">
      <div class="container-bg">
      <h1>Pay-per-Use</h1><br><br>
        <div class="subscription_plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h2>Premium Project Promotion</h2>
          <h3 style = "background-color: #006633";>₱30</h3>
            <p>for each promoted project</p>
        </div>
  
  
        <div class="subscription_plan" onclick="window.location.href = '#'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h2>Certification Programs</h2>
          <h3 style = "background-color: #006633";>₱300</h3>
            <p>for each program</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- End Your Plans section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">

    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              Why The Lasallian Folio?
            </h6>
            <p>
              The Lasallian Folio is the ideal choice for students seeking a platform that's tailored to their needs. With a student-centric approach, it empowers users to excel academically and professionally. Beyond showcasing achievements, it fosters a vibrant network of like-minded individuals, ensuring that your hard work and accomplishments take center stage for the recognition they deserve            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Our Team
            </h6>
            <p>
              Behind The Lasallian Folio is a dedicated team of professionals, educators, and tech enthusiasts. Together, we're creating a vibrant space for students to write their academic stories.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Our Mission
            </h6>
            <p>
              Our mission is clear: to empower students and celebrate their success. We envision a world where students can showcase their academic achievements, collaborate with peers, and open doors to a bright future. We're here to provide the canvas for your academic narrative.            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <img src="images/location.png" alt="">
                <span> Lasalle Avenue, Bacolod City, Negros Occidental, 6100 </span>
              </a>
              <a href="">
                <img src="images/call.png" alt="">
                <span>+01 12345678901</span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span> thelasallianfolio@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <section class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://www.facebook.com/thearcanbox">Arcan Technologies</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </section>

  <!-- end info section -->

  

  <!-- JavaScript -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
