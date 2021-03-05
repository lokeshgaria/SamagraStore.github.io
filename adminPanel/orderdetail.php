<?php include "includes/headers.php" ;
error_reporting(0);
  $oderId = $_GET['id'];?>
  
<section>

    <div class="container-fluid " >
        <div class="row mb-5 ">
            <div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-muted text-start font-weight-bold my-3 mb-3"> Order Details </h3>

                        <table class=" table font-roboto border ">
                             <div class="loaderParent">
                             <div class="loader">Loading...</div>
                             </div> 
                            <tr class="bg-light text-center">
                                <th>#</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>

                            </tr>
                            <?php
                          
                            $uid    = $_SESSION['user_id'];



                            $selectOrder = mysqli_query($conn, "select DISTINCT(orders_details.id),orders_details.* ,product.name,product.img from orders_details,product,`orders` where orders_details.order_id='$oderId' and orders_details.product_id=product.id");
                            $i = 0;
                            $totalprice = 0;
                            while ($orderdata = mysqli_fetch_assoc($selectOrder)) {
                                $i++;
                              
                                $totalprice = $totalprice + ($orderdata['qty'] * $orderdata['price']);
                                 
                            ?>


                                <tr class="bg-light text-center font-roboto">

                                    <td><?php echo $i; ?></td>
                                    <td><img src="<?php echo $orderdata['img']; ?>" alt="<?php echo $orderdata['name']; ?>" width="47px" height="50px"></td>
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
                                <td><?php echo $totalprice; ?></td>
                            </tr>


                        </table>
                        <?php
                         $selectOrderStatus = mysqli_query($conn ,"select * from orders where id = '$oderId' ");
                         $data = mysqli_fetch_assoc($selectOrderStatus);
                            
                        ?>
                        <div>
                            <h6><span class="font-weight-bold">Address :</span> <?php echo   $data['adddress'] ?></h6>
                        </div>
                        <div>
                      
                            <h6><span class="font-weight-bold">Order Status :</span> <span id="newStatus"><?php echo  $data['order_status']; ?></span></h6>
                            <div class="d-flex my-4">
                                <p class="font-weight-bold my-2"> Change Status :</p>
                                <select class="form-control w-25 m-0" name="" id="status">
                                    <option value="">select status</option>
                                    <option value="pending">Pending</option>
                                    <option value="Processing">Processing</option>
                                    <option value="shipped">Shipped</option>
                                    <option value="canceled">cancel</option>
                                    <option value="complete">complete</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.inc.php" ?>
    <script>
    $(document).ready(function () {
       $('#status').on("change" , function  () {
           var status = this.value;
           var id     = <?php echo $_GET['id']; ?>;
           

           $('.loaderParent').css("display","block");
           setTimeout(function  () {
            $('.loaderParent').css("display","none");
           },1000);
           $.ajax({
               url : "updateOrderStatus.php",
               type : "POST",
               data : {
                   status : status,
                   id     : id
                },
               success : function  (params) {
                   $('#newStatus').text(status);
               }
           })
       }) 
    });
    </script>