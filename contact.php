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
        <h2>Your Plans</h2>
  
        <div class="subscription_plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h3>Basic</h3>
          <h5>Price: Free</h5>
          <p>Price: PHP 100/month</p>
        </div>
  
        <div class="subscription_plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h3>Standard Premium</h3>
          <p>Price: PHP 200/month</p>
        </div>
  
        <div class="subscription_plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h3>Premium Plus</h3>
          <p>Price: PHP 300/month</p>
        </div>
  
        <div class="subscription_plan" onclick="window.location.href = 'payment.php'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h3>Premium Project Promotion</h3>
          <p>Price: PHP 50 for each promoted project</p>
        </div>
  
  
        <div class="subscription_plan" onclick="window.location.href = '#'" onmouseover="this.style.backgroundColor = '#95D7F5'" onmouseout="this.style.backgroundColor = ''">
          <h3>Certification Programs</h3>
          <p>Various certification programs priced at PHP 500 each</p>
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
</body>

</html>
