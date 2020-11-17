<?php include('connection.php') ?>
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
<center>
	<div class="header">
	<h2>Register</h2>
  </div>
  	
  </div>
	
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	 <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="Password(min6characters)" required="true" pattern=".{6,}">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
	<input type="password" name="password_2" placeholder="Password(min6characters)" required="true" pattern=".{6,}">
  	</div>
  	<div class="input-group">
  	  <label>Tel</label>
  	  <input type="number" name="tel"value="<?php echo $tel; ?>">
  	</div>
	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address"value="<?php echo $address; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  </form>
  </center>
  <footer class="footer"> 
               <div class="container">
               </div>
  </footer>
</body>
</html>