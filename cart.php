<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['username']))
{
    header("location: .php");
}
?>
  <tbody id="cartItems">
            <?php
                if(!empty($_SESSION['shopping_cart'])) {
                    $total = 0;
                        foreach($_SESSION['shopping_cart'] as $keys => $values) {
                                ?>
                             <tr>
                    <td class="cart_product_img">
                    <a href="product-details.php?id=<?php $number['productName']; ?>"><img src="img/product-img/<?php echo $number['img']; ?>" alt="Product"></a>
                    </td>
                    <td class="cart_product_desc">                    
                     <h5><?php echo $name['productName']; ?><br><a class="btn btn-outline-danger btn-sm" href="product-details.php?id=<?php echo $number['productCode']; ?>&action=delete"> <i class="fa fa-trash" aria-hidden="true"></i> Remove</a> </h5>
                                        </td>
                                        <td class="price">
                                            $<span class="priceNum"><?php echo $number['buyPrice']; ?></span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <!-- <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span> -->
                                                    <input type="number" class="qty-text priceNum" id="qty" step="1" min="1" max="300" name="quantity" value="<?php echo $values['quantity']; ?>" readonly>
                                                    <!-- <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span> -->
                                                </div>
                                            </div>
                                            <!-- <span class="priceNum"><?php //echo $values['quantity']; ?></span> -->
                                        </td>
                                        <!-- <td>
                                               <a href="product-details.php?id=<?php //echo $values['id']; ?>&action=delete">Remove</a>
                                        </td> -->
                                    </tr>
                                    <?php
                                                $total = $total + ($values['quantity'] * $values['price']);
                                            }
                                        }
                                        else {
                                            $total = 0;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <form action="" method="POST">
                        <div class="cart-summary" id="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>Subtotal:</span> $<span id="subtotal"><?php echo $total; ?></span></li>
                                <li><span>Discount:</span> %<span id="percent">0</span></li>
                                <li><span>Total:</span> $<span id="total"><?php echo $total; ?></span></li>
                                <input type="hidden" id="total_dis" name="total_dis" value="<?php echo $total; ?>">
                                <li><span>Point earned:</span> <span><?php echo (floor(($total/100)) * 3); ?></span></li>
                                <input type="hidden" class="form-control" id="total" name="total" value="<?php echo $total; ?>">
                                <input type="hidden" class="form-control" name="pointReceive" value="<?php echo (floor(($total/100)) * 3); ?>">
                            </ul>
                            </div>
                        </div>
                    </div>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://projectworlds.in">Projectworlds</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Yugesh Verma</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
