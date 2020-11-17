<?php
session_start();
include('connection.php');

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

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop Category</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


	<!-- ================ category section start ================= -->		  
  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
      




        </div>
        <div class="col-xl-12 col-lg-11 col-md-10">
         
          <div class="filter-bar d-flex flex-wrap align-items-center">
            <div class="sorting">
            <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Vendor
  </button>
  <div class="dropdown-menu">
      <?php $vendor= "SELECT DISTINCT productVendor FROM products WHERE productLine = '".$_GET["name"]."'";
      $vendor_query = mysqli_query($con,$vendor);
      while ($vendor_type = mysqli_fetch_array($vendor_query, MYSQLI_ASSOC)) {  ?>
    <a class="dropdown-item" href="products.php?name=<?php echo $_GET["name"];?>&vendor=<?php echo $vendor_type['productVendor'] ?>"><?php echo $vendor_type['productVendor']; ?> </a>

      <?php } ?>
  </div>
</div>
            </div>

            <div class="sorting mr-auto">
            <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Scale
  </button>
  <div class="dropdown-menu">
<?php $scale = "SELECT DISTINCT productScale FROM products where productLine = '".$_GET["name"]."'";
      $scale_query = mysqli_query($conn,$scale);
      while ($scale_type = mysqli_fetch_array($scale_query,MYSQLI_ASSOC)) {     ?>
    <a class="dropdown-item" href="products.php?name=<?php echo $_GET["name"];?>&scale=<?php echo $scale_type['productScale'] ?>"><?php echo $scale_type['productScale'] ?></a>
      <?php } ?>
  </div>
</div>
            </div>
            <div>
              <div class="input-group filter-bar-search">
                <input type="text" placeholder="Search">
                <div class="input-group-append">
                  <button type="button"><i class="ti-search"></i></button>
                </div>
              </div>
            </div>
          </div>
         
          <section class="lattest-product-area pb-40 category-list">
            <div class="row">
                     <!-- Product -->
                     <?php 
        if(isset($_GET["name"]) && isset($_GET["vendor"])) 
            {
           $select_post = "Select * FROM products Where productLine  = '".$_GET["name"]."' AND productVendor = '".$_GET["vendor"]."'";
            
            }
        else if(isset($_GET["name"]) && isset($_GET["scale"]))
        {
            $select_post = "Select * FROM products Where productLine  = '".$_GET["name"]."' AND productScale = '".$_GET["scale"]."'";
           
        }
        else if(isset($_GET["name"]) &&(!isset($_GET["vendor"]) || !isset($_GET["scale"])))
        {
            $select_post = "Select * FROM products Where productLine  = '".$_GET["name"]."'";
            // echo "onlyname";
        }
        else 
        {
            $select_post = "Select * FROM products";
            // echo "nothing";
        }
            $query_post = mysqli_query($conn,$select_post);
            while ($number = mysqli_fetch_array($query_post, MYSQLI_ASSOC)) {
                

               // $productCode = $row['productCode'];
            //    echo $number['productCode']; 
               ?>

            <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <img class="card-img" src="img/<?php echo   $number['productLine']?>.jpg" alt="">
                    <ul class="card-product__imgOverlay">
                      <li><a href="product-details.php?productCode=<?php echo   $number['productCode']?>"><button><i class="ti-search"></i></button></a></li>
                      <li><a href ="cart.php"><button><i class="ti-shopping-cart"></i></button></li>
                      <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <p><?php echo $number['productVendor']?></p>
                    <h4 class="card-product__title"><a href="#"><?php echo $number['productName']?></a></h4>
                    <p class="card-product__price">$<?php echo $number['buyPrice']?></p>
                  </div>
                </div>
            </div>

            <?php } ?>
                     <!-- EndProduct -->
    </div>
  </section>
	<!-- ================ category section end ================= -->		  

	<!-- ================ top product area start ================= -->	
	
	<!-- ================ top product area end ================= -->		

	<!-- ================ Subscribe section start ================= -->		  
  <section class="subscribe-position">
    <div class="container">
      <div class="subscribe text-center">
        <h3 class="subscribe__title">Get Update From Anywhere</h3>
        <p>Bearing Void gathering light light his eavening unto dont afraid</p>
        <div id="mc_embed_signup">
          <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
            <div class="form-group ml-sm-auto">
              <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
              <div class="info"></div>
            </div>
            <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
            <div style="position: absolute; left: -5000px;">
              <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
            </div>

          </form>
        </div>
        
      </div>
    </div>
  </section>
	<!-- ================ Subscribe section end ================= -->		  


  <!--================ Start footer Area  =================-->	
	<br><br><br><br><?php require 'footer.php';?>
	<!--================ End footer Area  =================-->



  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/nouislider/nouislider.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>