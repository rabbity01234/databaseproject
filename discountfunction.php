<?php
session_start();
include('connection.php');
$Code = "";
$sDate = "";
$expDate = "";
$quantitiy = "";
$dis = "";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'projectdb');
if(!isset($_SESSION['Discount Create'])){
  header("Location: index.php");
}
if (isset($_POST['create'])) {
  $Code = mysqli_real_escape_string($db, $_POST['Code']);
  $sDate = htmlentities(mysqli_real_escape_string($db, $_POST['sDate']));
  $expDate = htmlentities(mysqli_real_escape_string($db, $_POST['expDate']));
  $d = mysqli_real_escape_string($db, $_POST['d']);
  $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  $user_check_query = "SELECT * FROM dcoupon WHERE Code='$Code' LIMIT 1";
  $check = "SELECT * FROM productlines";
  $result = mysqli_query($db, $user_check_query);
  $product = mysqli_fetch_assoc($result);
  if ($product) {
    if ($product['Code'] === $Code) {
      array_push($errors, "Serial Code already exists");
    }
   
}

else{
  if (empty($Code)) { array_push($errors, "Code is required"); }
  if (empty($sDate)) { array_push($errors, "Start Date is required"); }
  if (empty($expDate)) { array_push($errors, "Exp Date is required"); }
  if (empty($quantity)){array_push($errors,"Quantity is Required");}
  if (empty($d)){array_push($errors,"Discount is Required");}
}
  if (count($errors) == 0) {
    
  	$query = "INSERT INTO dcoupon(Code,sDate,expDate,quantity,discount) 
    VALUES('$Code','$sDate','$expDate','$quantity','$d')";
     mysqli_query($db, $query);
    header('location: index.php');  
}

}
?>