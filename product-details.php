<?php
session_start();
include('connection.php');
include('1.php')

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
  <!--================ Start Header Menu Area =================-->
  <?php require 'header.php';?>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <!-- <section class="hero-banner">
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
    </section> -->
    <!--================ Hero banner start =================-->
<!-- <section  id="browproduct"></section> -->
<!--================ Hero banner end =================-->




  <!--================Single Product Area =================-->
  <?php $select_product = "Select * from products where productCode = '".$_GET["productCode"]."'"; 
                $query_post = mysqli_query($conn,$select_product);
                $number = mysqli_fetch_array($query_post, MYSQLI_ASSOC)?>

<!-- Check QNTY -->



  <div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid mb-5" src="img/category/<?php echo $number['productLine'] ?>.jpg" alt="">
						</div>
						<!-- <div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div> -->
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
                
						<h3><?php echo $number['productName'] ?></h3>
						<h2>$<?php echo $number['buyPrice'] ?></h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Category</span> : <?php echo $number['productLine'] ?></a></li>
							<li><a href="#"><span>Quantity</span> : <?php echo $number['quantityInStock']?></a></li>
						</ul>
						<p><?php echo $number['productDescription']  ?> </p>
						<div class="product_count">
              <label for="qty">Quantity:</label>
              
							<input type="text" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							
							<button type="submit" class="btn"  >kuyyy</button> 
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

    <!-- ##### Main Content Wrapper End ##### -->


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