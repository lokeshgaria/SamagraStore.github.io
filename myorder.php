<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);
 

?>

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a> MyOrders</h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid ">
        <div class="row w-100 px-4 my-3">
            <div class="col-lg-12 col-12 p-0 table-responsive ">
                <table class=" table font-roboto border ">
                    <tr class="bg-light text-center">
                        <th>#</th>
                        <th>Order_id</th>
                        <th>Order BY</th>
                        <th>Address</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                        <th>Date </th>
                    </tr>
                    <?php
                    $userId = $_SESSION['user_id'];
                    $selectOrder = mysqli_query($conn, "select * from orders where user_id ='$userId'");
                    $orderRow = mysqli_num_rows($selectOrder);
                   
                    if ($orderRow<1) {
                         $display ="block";
                    }
                    else {
                         $display ="none";
                    }
                    $i = 0;
                    while ($orderdata = mysqli_fetch_assoc($selectOrder)) {  $i++;
                        
                    ?>
                     
                        <tr class="bg-light text-center text-capitalize">
                          
                            <td><?php echo $i; ?></td>
                            <td><a class="nav-link text-white btn-secondary" href="orderDetail.php?id=<?php echo $orderdata['id']; ?>">View More</a> </td>
                            <td>
                                <p><?php echo $orderdata['username']; ?></p>
                                 
                            </td>
                            <td><?php echo $orderdata['adddress'] ?></td>
                            <td>
                                 <p><?php echo $orderdata['payment_type']; ?></p>
                            </td>
                            <td>
                            <p><?php  echo $orderdata['payment_status']; ?></p></td>

                            <td>
                            <p><?php  echo $orderdata['order_status']; ?></p>
                            </td>
                            <td>
                            <p><?php  echo $orderdata['added_on']; ?></p>
                            </td>
                        </tr>


                    <?php } ?>


                </table>
            </div>
            
        </div>
        <div id="empty_cart" class="my-4" style="display:  <?php echo $display; ?>;">
            <div class="d-flex justify-content-center py-3  " style="position: absolute;left: 51%; top: 65%;">
               <div>
               <h4 class="text-capitalize font-roboto">No order found. </h4>     
               <h6 class="text-capitalize font-roboto">looks like you haven't made your order yet .</h6>
               </div>
                
              
                <a href="index.php" class="btn btn-outline-primary font-roboto  " style="position: absolute;top: 78px;left: 2px;">Return to shop</a>
            </div>
        </div>


    </div>

</main>
<?php include "includes/footer.inc.php"; ?>