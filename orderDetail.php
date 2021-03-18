<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);
 
$display = "none";

?>

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a>  <a href="myorder.php" class=" color link">MyOrder</a>  > Order Details</h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid ">
        <div class="row w-100 px-4 my-3">
            <div class="col-lg-12 col-12 p-0 table-responsive ">
                <table class=" table font-roboto border ">
                    <tr class="bg-light text-center">
                        <th>#</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Price</th>

                    </tr>
                    <?php
                    $oderId = $_GET['id'];
                    $uid    = $_SESSION['user_id'];


                    $selectOrder = mysqli_query($conn, "select DISTINCT(orders_details.id),orders_details.*,product.name,product.img from orders_details,product,`orders` where orders_details.order_id='$oderId' and orders.user_id='$uid' and orders_details.product_id=product.id");
                    $i = 0;
                    $totalprice = 0;
                    while ($orderdata = mysqli_fetch_assoc($selectOrder)) {
                        $i++;
                         
                      
                        $totalprice = $totalprice + ($orderdata['qty'] * $orderdata['price']);
                         
                         

                    ?>


                        <tr class="bg-light text-center font-roboto">

                            <td><?php echo $i; ?></td>
                            <td><img src="adminPanel/<?php echo $orderdata['img']; ?>" alt="<?php echo $orderdata['name']; ?>" width="47px" height="50px"></td>
                            <td>
                                <p><?php echo $orderdata['name']; ?></p>

                            </td>
                            <td><?php echo $orderdata['qty'] ?></td>
                            <td>
                                <p><?php echo $orderdata['price']; ?></p>
                            </td>
                            <td>
                                <p><?php echo $orderdata['qty'] * $orderdata['price'] ?></p>
                            </td>


                        </tr>


                    <?php } ?>
                    <tr class="text-center font-roboto font-weight-bold">
                        <td colspan=4>
                        </td>
                        <td>Total Price</td>
                        <td><?php echo $totalprice ; ?></td>
                    </tr>

                </table>
            </div>
            
        </div>
        <div id="empty_cart" style="display:  <?php echo $display; ?>;">
            <div class="d-flex justify-content-center  " style="position: absolute;left: 51%; top: 65%;">
                <h4 class="text-capitalize font-roboto">your cart is currently empty. </h4>
                <a href="index.php" class="btn btn-outline-primary font-roboto  " style="position: absolute;top: 48px;left: 2px;">Return to shop</a>
            </div>
        </div>


    </div>

</main>
<?php include "includes/footer.inc.php"; ?>