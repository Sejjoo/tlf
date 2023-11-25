<?php

  if (!isset($_SESSION["user"])) {
    header("Location: login.php");
  }

  include_once "header.php";
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

  <title>
    Discover and Share | 
    The Lasallian Folio
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
        <!-- header section strats -->
        
        <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
              
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">
              
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">
              
            </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        best of
                         <br />
                        lasallian <br />
                        folio
                      </h1>
                      <p>Projects featured today by our curators.
                      </p>
                     
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img1.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        discover your
                        <br />
                        niche
                      </h1>
                      <p>
                        
                      </p>
                
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                      <img src="images/slider-img2.jpg" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        create and
                        <br />
                        engage!
                      </h1>
                      <p>
                        
                      </p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Dis<span>co</span>ver
        </h2>
        <p>
          Find your Niche!
        </p>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="img-container tab-content">
            <div class="img-box tab-pane fade show active" id="img1" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img2" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img3" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
            <div class="img-box tab-pane fade  " id="img4" role="tabpanel">
              <img src="images/service-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="detail-container nav nav-tabs" id="myTab" role="tablist">
            <div class="detail-box active" id="img1-tab" data-toggle="tab" href="#img1" role="tab" aria-selected="true">
              <h4>
                Arts<br />
                and <br />
                Creativity
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img2" role="tab" aria-selected="false">
              <h4>
                Engineering<br /> and Design
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img3" role="tab" aria-selected="false">
              <h4>
                Political<br />Science<br />and<br />Governance
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                Technology<br />and<br />Innovation <br />
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                Business<br />and<br />Entrepreneurship
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                Education<br />and Pedagogy<br />
              </h4>
            </div>
            <div class="detail-box" id="img2-tab" data-toggle="tab" href="#img4" role="tab" aria-selected="false">
              <h4>
                Health<br />and<br /> Medicine
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- portfolio section -->
5
  <section class="portfolio_section">
    <div class="heading_container">
      <h2>
        Pro<span>je</span>cts
      </h2>
      <p>
        Discover amazing works.
      </p>
    </div>
    <div class="portfolio_container layout_padding">
      <div class="box-1">
        <div class="img-box b-1">
          <img src="images/p1.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-2">
          <img src="images/p2.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
      <div class="box-2">
        <div class="img-box b-3">
          <img src="images/p3.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
        <div class="img-box b-4">
          <img src="images/p4.jpg" alt="">
          <div class="btn-box">
            <a href="" class="btn-1">

            </a>
            <a href="" class="btn-2">

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end portfolio section -->

  <!-- logo section -->

  <section class="logo_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Be<span> an</span> A-List <br>
          Achiever!
        </h2>
        <p>
          A-List Award: The pinnacle of academic recognition on The Lasallian Folio. This prestigious award is granted to outstanding students, highlighting their exceptional contributions and achievements. Join the A-List and stand out in the academic crowd.
        </p>
      </div>
    </div>
    <div class="logo_container layout_padding">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <div class="box  b1">
              <div class="img-box">
                <img src="images/l1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Engineering
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box b2">
              <div class="img-box">
                <img src="images/l2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Arts
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box  b1">
              <div class="img-box">
                <img src="images/l3.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Science
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box b2">
              <div class="img-box">
                <img src="images/l4.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Literature
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box  b1">
              <div class="img-box">
                <img src="images/l5.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Programming
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box b2">
              <div class="img-box">
                <img src="images/l6.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Hospitality
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box  b1">
              <div class="img-box">
                <img src="images/l3.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Science
                </h4>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box b2">
              <div class="img-box">
                <img src="images/l4.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Logo
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end logo section -->


  <!-- started section -->

  <section class="started_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Lets <span>Get</span> Started, Share<br>
                Your Projects!
              </h2>
              <p>
                Connect and Celebrate!
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="btn-box">
            <a href="">
              Start Sharing
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end started section -->

  <!-- agency section -->

  <section class="agency_section layout_padding-bottom">
    <div class="agency_container ">
      <div class="box ">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About <span>The Lasallian Folio</span>
            </h2>
          </div>
          <p>
            At The Lasallian Folio, we believe that every student's academic journey is a story worth celebrating. Our platform is dedicated to making that celebration possible. Let us take you on a journey through our story.          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end agency section -->


  <!-- contact section -->

  

  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          What <span>our</span> users say
        </h2>
      </div>
      <div class="box">
        <div class="client_id">
          <div class="name">
            <h4>
              Juan <br>
              
            </h4>
          </div>
          <div class="img-box">
            <img src="images/client.jfif" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            Using The Lasallian Folio has been a game-changer for my academic journey. I love how the platform is specifically designed for students like me. It's not just a place to showcase my work; it's a space where I've built meaningful connections with peers who share my interests. The networking tools are fantastic! Plus, having my projects in the spotlight is incredibly motivating. It's an all-in-one platform that's truly transformed my university experience.
          </p>
          <img src="images/quote.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


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


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>