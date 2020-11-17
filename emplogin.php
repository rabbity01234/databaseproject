  
<?php 
include('checkemplogin.php')
?>
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
  <div class="header">
  	<h2>Employee Login</h2>
  </div>
 <center>	 
  <form method="post" action="emplogin.php">
    <?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>EmployeeNumber</label>
  		<input type="text" name="employeeNumber" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_emp">Login</button>
  	</div>
  </form>
  </center>
  <footer class="footer"> 
               <div class="container">
               </div>
           </footer>
</body>
</html> 
