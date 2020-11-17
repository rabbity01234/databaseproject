  
<?php 
include('changerole.php')
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
 <style> 
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button{
       -webkit-appearance: none;
       margin:0;
   }
</style>
<body>
<?php require 'header.php';?>
<center>
	<div class="header">
	<h2>ChangeRole</h2>
  </div>
  	
  </div>
	
<form method="post" action="promote.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>EmployeeNumber</label>
  	  <input type="number" name="employeeNumber" value="<?php echo $employeenumber; ?>">
  	</div>
    <div class="input-group">
    <select name="jobTitle"  id="jobTitle" class="input-group" <?php echo $jobTitle?>>
        <optgroup label="JobTitle">
            <option value="Sale Manager (EMEA)">Sale Manager (EMEA)</option>
            <option value="Sales Manager (APAC)">Sales Manager (APAC)</option>
            <option value="Sales Manager (NA)">Sales Manager (NA)</option>
            <option value="Sales Rep">Sales Rep</option>
            <option value="VP Marketing">VP Marketing</option>
            <option value="VP Sales">VP Sales</option>
    </optgroup>
     </select>
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="changerole">ChangeRole</button>
  	</div>
  </form>
  </center>
  <footer class="footer"> 
               <div class="container">
               </div>
  </footer>
</body>
</html>