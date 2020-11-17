<?php
session_start();
include('connection.php');
$productCode = "";
$productName   = "";
$productLine    ="";
$productScale ="";
$productVendor ="";
$productDescription ="";
$quantityInStock ="";
$buyPrice ="";
$MSRP ="";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'projectdb');
$dt = date('Y-m-d h:i:s');
if(!isset($_SESSION['Employee'])){
  header("Location: index.php");
}
if (isset($_POST['add'])) {
  $productCode = mysqli_real_escape_string($db, $_POST['productCode']);
  $productName = mysqli_real_escape_string($db, $_POST['productName']);
  $productLine = mysqli_real_escape_string($db, $_POST['productLine']);
  $productScale = mysqli_real_escape_string($db, $_POST['productScale']);
  $productVendor = mysqli_real_escape_string($db,$_POST['productVendor']);
  $productDescription = mysqli_real_escape_string($db,$_POST['productDescription']);
  $quantityInStock = mysqli_real_escape_string($db,$_POST['quantityInStock']);
  $buyPrice = mysqli_real_escape_string($db,$_POST['buyPrice']);
  $MSRP = mysqli_real_escape_string($db,$_POST['MSRP']);
  $user_check_query = "SELECT * FROM products WHERE productCode='$productCode' OR productName ='$productName' LIMIT 1";
  $check = "SELECT * FROM productlines";
  $result = mysqli_query($db, $user_check_query);
  $result1 = mysqli_query($db, $check);
  $product = mysqli_fetch_assoc($result);
  $product1 = mysqli_fetch_assoc($result1);
  if ($product) {
    if ($product['productCode'] === $productCode or $product['productName'] === $productName) {
      array_push($errors, "Prodcut already exists");
    }
   
}

else{
  if($productLine != 'Motorcycles' AND $productLine != 'Motorcycles' AND $productLine != 'Classic Cars' AND $productLine != 'Planes' AND $productLine != 'Ships' AND $productLine != 'Trains'
   AND $productLine != 'Trucks and Buses' AND $productLine != 'Vintage Cars'
  ){ array_push($errors,"This product line is not available.");}
  if (empty($productCode)) { array_push($errors, "Product Code is required"); }
  if (empty($productName)) { array_push($errors, "Prodcut Name is required"); }
  if (empty($productLine)) { array_push($errors, "Product Line is required"); }
  if (empty($productScale)){array_push($errors,"Product Scale is Required");}
  if (empty($productVendor)){array_push($errors,"Prodcut Vendor is Required");}
  if (empty($productDescription)){array_push($errors,"Product Description is Required");}
  if (empty($quantityInStock)){array_push($errors,"Quntity is Required");}
  if (empty($buyPrice)){array_push($errors,"Price is Required");}
  if (empty($MSRP)){array_push($errors,"MSRP is Required");}
}
  if (count($errors) == 0) {
    
  	$query = "INSERT INTO products(productCode,productName,productLine,productScale,productVendor,productDescription,quantityInStock,buyPrice,MSRP) 
    VALUES('$productCode','$productName','$productLine','$productScale','$productVendor','$productDescription','$quantityInStock','$buyPrice','$MSRP')";
     mysqli_query($db, $query);
     $query1= "INSERT INTO hisproduct(productCode,productName,quantity,type,ludate) 
     VALUES('$productCode','$productName','$quantityInStock','Imported',CURRENT_DATE)";
    mysqli_query($db, $query1);
    header('location: product-add.php');  
}

}

if (isset($_POST['del'])) {
  $productCode = mysqli_real_escape_string($db, $_POST['productCode']);
  $user_check_query = "SELECT * FROM products WHERE productCode='$productCode'" ;
  $result = mysqli_query($db, $user_check_query);
  $product = mysqli_fetch_assoc($result);
  $productName = $product['productName'];
  if ($product == 0) {
    if ($product['productCode'] = $productCode) {
      array_push($errors, "There are no Products Code in the system");
    }
  }
  else{
    if (empty($productCode)) { array_push($errors, "Product Code is required"); }
  }
    if (count($errors) == 0) {
      $del = "DELETE FROM products WHERE productCode = '$productCode'";
      $query1= "INSERT INTO hisproduct(productCode,productName,quantity,type,ludate) 
      VALUES('$productCode','$productName','0','Delete',CURRENT_DATE)";
      mysqli_query($db, $del); 
      mysqli_query($db, $query1); 
      header('location: product-del.php');
    }
  }
  if (isset($_POST['update'])) {
    $productCode = mysqli_real_escape_string($db, $_POST['productCode']);
    $productName = mysqli_real_escape_string($db, $_POST['productName']);
    $productLine = mysqli_real_escape_string($db, $_POST['productLine']);
    $productScale = mysqli_real_escape_string($db, $_POST['productScale']);
    $productVendor = mysqli_real_escape_string($db,$_POST['productVendor']);
    $productDescription = mysqli_real_escape_string($db,$_POST['productDescription']);
    $quantityInStock = mysqli_real_escape_string($db,$_POST['quantityInStock']);
    $buyPrice = mysqli_real_escape_string($db,$_POST['buyPrice']);
    $MSRP = mysqli_real_escape_string($db,$_POST['MSRP']);
    $user_check_query = "SELECT * FROM products WHERE productCode='$productCode' OR productName ='$productName' LIMIT 1";
    $check = "SELECT * FROM productlines";
    $result = mysqli_query($db, $user_check_query);
    $result1 = mysqli_query($db, $check);
    $product = mysqli_fetch_assoc($result);
    $product1 = mysqli_fetch_assoc($result1);
    if($productLine != 'Motorcycles' AND $productLine != 'Motorcycles' AND $productLine != 'Classic Cars' AND $productLine != 'Planes' AND $productLine != 'Ships' AND $productLine != 'Trains'
     AND $productLine != 'Trucks and Buses' AND $productLine != 'Vintage Cars'
    ){ array_push($errors,"This product line is not available.");}
    if (empty($productCode)) { array_push($errors, "Product Code is required"); }
    if (empty($productName)) { array_push($errors, "Prodcut Name is required"); }
    if (empty($productLine)) { array_push($errors, "Product Line is required"); }
    if (empty($productScale)){array_push($errors,"Product Scale is Required");}
    if (empty($productVendor)){array_push($errors,"Prodcut Vendor is Required");}
    if (empty($productDescription)){array_push($errors,"Product Description is Required");}
    if (empty($quantityInStock)){array_push($errors,"Quntity is Required");}
    if (empty($buyPrice)){array_push($errors,"Price is Required");}
    if (empty($MSRP)){array_push($errors,"MSRP is Required");}
    if (count($errors) == 0) {
      
      $query = "UPDATE products SET productName='$productName',productLine = '$productLine'
      ,productScale = '$productScale',productVendor='$productVendor',productDescription='$productDescription'
      ,quantityInStock='$quantityInStock',buyPrice='$buyPrice',MSRP='$MSRP'WHERE productcode = '$productCode'";
       mysqli_query($db, $query);
       $query1= "INSERT INTO hisproduct(productCode,productName,quantity,type,ludate) 
       VALUES('$productCode','$productName','$quantityInStock','Update',CURRENT_DATE)";
      mysqli_query($db, $query1);
      header('location: product-update.php');  
  }

  }
?>
