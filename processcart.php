<?php
session_start();
include('connection.php');

$productCode = $_POST['productCode'];
$amount = $_POST['amount'];
$CID =$_POST['CID'];


$query= "INSERT INTO cart (`P_ID`, `C_ID`, `amount`) VALUES ('$productCode','$CID','$amount')";
mysqli_query($conn, $query);

header('Location: ' . $_SERVER['HTTP_REFERER']);

// if(isset($amount) && isset($CID)){

//     mysqli_query($con, $query);
//     echo '<script language="javascript">';
//     echo 'alert("message successfully sent")';
//     echo '</script>';
    
// }



// <!-- echo  '<p> Product ADD </p>';
//     header('Location: ' . $_SERVER['HTTP_REFERER']); -->