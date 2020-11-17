<?php
session_start();
include('connection.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
        <div>
           <?php
           require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell AD </h1>
                   </div>
                   </center>
               </div>
           </div>
         


         <?php
         if( $_GET["name"] ) 
         {
            $select_post = "Select * FROM products Where productLine = '".$_GET["name"]."'";
          }
          else{
             $select_post = "Select * FROM products ORDER BY 1 DESC";
          }
            $query_post = mysqli_query($con,$select_post);
            while ($number = mysqli_fetch_array($query_post, MYSQLI_ASSOC)) {
                
               // $productCode = $row['productCode'];
               echo $number['productCode']; 
            }
            ?>
                    <?php //echo $productCode ?>
            <?php  ?>
            <br><br> <br><br><br><br>
            <footer class="footer"> 
               <div class="container">
               </div>
           </footer>
        </div>
    </body>
</html>