<?php include('discountfunction.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
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
<center>
	<div class="header">
	<h2>Create Coupon</h2>
  </div>
  	
  </div>
	
  <form method="post" action="createcoupon.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Serial Code</label>
  	  <input type="Code" name="Code" value="<?php echo $Code; ?>">
  	</div>
	 <div class="input-group">
  	  <label>Start Date</label>
  	  <input type="date" name="sDate" value="<?php echo $sDate; ?>">
  	</div>
  	<div class="input-group">
  	  <label>EXP Date</label>
  	  <input type="date" name="expDate"value="<?php echo $expDate; ?>">
  	</div>
      <div class="input-group">
  	  <label>Quantity</label>
  	  <input type="number" name="quantity"value="<?php echo $quantity; ?>">
  	</div>
    <div class="input-group">
  	  <label>discount</label>
  	  <input type="number" name="d"value="<?php echo $d; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="create">Create</button>
  	</div>
  </form>
  </center>
  <footer class="footer"> 
  <div class="container">
</div>
  </footer>
</body>
</html>