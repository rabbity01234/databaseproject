<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sathu69 Crops</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<?php require 'header.php';?>
  <!--================ Start Header Menu Area =================-->

	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/hero-banner.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Sathu Comopany</h4>
              <h1>Let's move forward together</h1>
              <p>Our determination for the company is for creating the greatest experiences for all users. You can trust our company and move forward to be a marketing leader in future together.</p>
              <a class="button button-hero"  href="#browproduct" >Browse Product</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->
<section  id="browproduct"></section>
   

    <!--================ Hero Carousel start =================-->

    <section class="section-margin   " >
      <!--================ 1 =================-->
      <div class="owl-carousel owl-theme hero-carousel  ">

        <div class="hero-carousel__slide">
          <img src="img/Classic Cars.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Classic Cars" class="hero-carousel__slideOverlay">
            <h3>Classic Cars</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Motorcycles.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Motorcycles" class="hero-carousel__slideOverlay">
            <h3>Motorcycles</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Planes.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Planes" class="hero-carousel__slideOverlay">
            <h3>Planes</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Ships.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Ships" class="hero-carousel__slideOverlay">
            <h3>Ships</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Trains.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Trains" class="hero-carousel__slideOverlay">
            <h3>Trains</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Trucks and Buses.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Trucks and Buses" class="hero-carousel__slideOverlay">
            <h3>Trucks and Buses</h3>
            <p>Accessories Item</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/Vintage Cars.jpg" alt="" class="img-fluid">
          <a href="products.php?name=Vintage Cars" class="hero-carousel__slideOverlay">
            <h3>Vintage Cars</h3>
            <p>Accessories Item</p>
          </a>
        </div>
      </div>
    
     
    
    <!--================ Hero Carousel end =================-->

  </main>


  <!--================ Start footer Area  =================-->	
	<?php require 'footer.php';?>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>