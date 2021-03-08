<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);
$value = $_GET['value'];
?>

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a>Search > <?php echo $value; ?></h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid ">
        <div class="row w-100 px-4 my-3">
            <div class="col-lg-12 col-12 p-0 table-responsive ">
                <!-- Featured Products start here -->

                <div class="container px-5">
 
                        
                    </div>
                    <!-- Row one -->
                    <div class="row " id="featured-product">
                        <?php
                        $catData = get_product($conn, '', '', '', $value);
                        if (count($catData) > 0) {
                            foreach ($catData as   $value) { ?>

                                <div class="col-lg-3 col-sm-3 col-6">
                                    <a href="productDetails.php?product_id=<?php echo $value['id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" class="img-fluid" style="height:310px; width:240px;"></a>
                                    <ul class="" id="hoverList">
                        <li class="nav-item"><a href="javascript:void(0)" onclick="wishlist(<?php echo $value['id']; ?>,'add')" style="display: <?php echo $display; ?>"><i class="fas text-danger fa-heart"></i></a></li>
                        <li class="nav-item"><a href="javascript:void(0)" onclick="manage_cart(<?php echo  $value['id']; ?>,'add')"><i class="fas text-secondary fa-shopping-cart"></i></a></li>
                    </ul>
                                    <p class="text-capitalize font-weight-bold text-center my-2"></p>
                                    <div class="rating text-center">
                                        <p><?php echo $value['name']; ?></p>
                                        <p class="font-weight-bold">
                                            <span class="text-muted text-center"> ₹<s><?php echo $value['mrp']; ?></s> </span> &nbsp; ₹ <?php echo $value['price']; ?>
                                        </p>
                                    </div>
                                </div>
                        <?php   }
                        } else {
                            echo '<p class="text-danger text-center text-capitalize font-weight-bold "> No products related to the selected category. </p>';
                        }
                        ?>
                    </div>
                </div>
                <!-- All Products ends here -->
            </div>

        </div>
    </div>
</main>
<?php include "includes/footer.inc.php"; ?>