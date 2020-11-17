<?php include('productfunction.php') ?>
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
	<h2>Update Product</h2>
  </div>
  	
  </div>
	
  <form method="post" action="product-update.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>ProductCode</label>
  	  <input type="productCode" name="productCode" value="<?php echo $productCode; ?>">
  	</div>
	 <div class="input-group">
  	  <label>ProductName</label>
  	  <input type="text" name="productName" value="<?php echo $productName; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ProductLine</label>
  	  <input type="text" name="productLine"value="<?php echo $productLine; ?>">
  	</div>
      <div class="input-group">
  	  <label>ProductScale</label>
  	  <input type="text" name="productScale"value="<?php echo $productScale; ?>">
  	</div>
  	<div class="input-group">
  	  <label>ProductVendor</label>
  	  <input type="text" name="productVendor"value="<?php echo $productVendor; ?>">
  	</div>
	<div class="input-group">
  	  <label>ProductDescription</label>
  	  <input type="text" name="productDescription"value="<?php echo $productDescription; ?>">
  	</div>
    <div class="input-group">
  	  <label>Quantity</label>
  	  <input type="number" name="quantityInStock"value="<?php echo $quantityInStock; ?>">
  	</div>
    <div class="input-group">
  	  <label>Price</label>
  	  <input type="number" required min="0" value="0" step="0.01" name="buyPrice"value="<?php echo $buyPrice; ?>">
  	</div>    
        <div class="input-group">
  	  <label>MSRP</label>
  	  <input type="number" required min="0" value="0" step="0.01" name="MSRP"value="<?php echo $MSRP; ?>">
  	</div>         
  	<div class="input-group">
  	  <button type="submit" class="btn" name="update">Update</button>
  	</div>
  </form>
  </center>
  <footer class="footer"> 
               <div class="container">
               </div>
  </footer>
</body>
</html>