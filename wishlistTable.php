<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);

if (!isset($_SESSION['username'])) {
   
   
?> <script>
        window.location.replace('registerSignup.php');
    </script><?php
            } 
            if (isset($_GET['wishId'])) {
                $uid = $_SESSION['user_id'];
                $did = $_GET['wishId'];
                $delQuery = mysqli_query($conn ,"delete from wishlist where id=$did and user_id ='$uid'");
            }       

             if ($wishCount<1) {
                 $display="block";
                 $button = "visible";
             }else{
                $display="none";
                $button = "visible"; 
             }
 ?>  

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a> wishlist</h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid ">
        <div class="row w-100 px-4 my-3">
            <div class="col-lg-12 col-12 p-0 table-responsive ">
                <table class=" table font-roboto border ">
                    <tr class="bg-light text-center">
                        <th>#</th>
                        <th>image</th>
                        <th>Name of Product</th>


                        <th>Remove</th>
                    </tr>

                    <?php
                    $uid = $_SESSION['user_id'];
                    $wishlistdata = mysqli_query($conn, "select product.name , product.img , product.price ,product.mrp ,wishlist.id from product , wishlist where product.id =wishlist.product_id and wishlist.user_id ='$uid' ");
                    $i=0;
                    while ($getAll = mysqli_fetch_assoc($wishlistdata)) {  $i++;?>
                        
                     
                        <tr class="bg-light text-center">
                            <td><?php echo $i; ?></td>
                            <td><img src="./adminPanel/<?php echo $getAll['img']; ?>" alt="productimage" width="100px" height="90px"></td>
                            <td>
                                <p><?php echo $getAll['name']; ?></p>
                                <span><s><?php echo $getAll['mrp']; ?></s> <?php echo $getAll['price']; ?></span>
                            </td>


                            <td><a href="wishlistTable.php?wishId=<?php echo $getAll['id']; ?>" ><i class="fas fa-trash-alt text-dark cursor-pointer" style="cursor:pointer"></i></a></td>
                        </tr>

                    <?php } ?>
                </table>
            </div>
             
        </div>
        <div id="empty_cart" style="display:  <?php echo $display; ?>;">
            <div class="d-flex justify-content-center py-3 " style="position: absolute;left: 51%; top: 65%;">
                <h4 class="text-capitalize font-roboto">your wishlist is  empty. </h4>
                <a href="index.php" class="btn btn-outline-primary font-roboto  " style="position: absolute;top: 48px;left: 2px;">Return to shop</a>
            </div>
        </div>


    </div>

</main>
<?php include "includes/footer.inc.php"; ?>