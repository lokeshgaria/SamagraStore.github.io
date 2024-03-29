<?php
include "includes/headers.inc.php";
$product_id = $_GET['product_id'];

?>
<main>

    <!-- Single product deails start-->
    <div class="container px-5 mt-5">
        <div class="row">
            <?php $productDetail = get_product($conn, '', '', $product_id);

            ?>
            <div class="col-lg-6 col-12 py-5 px-5">
                <img src="adminPanel/<?php echo $productDetail[0]['img'];   ?>" alt="<?php echo $productDetail[0]['name']; ?>" id="productimg" class="img-fluid ">
            </div>
            <div class="col-lg-6 col-12 ">
                <p class="my-5 font-weight-bold text-capitalize font-roboto"><a href="index.php" class=" text-dark ">Home</a> / <a href="categories.php?id=<?php echo $productDetail[0]['categories_id'] ?>" class="text-dark "> <?php echo $productDetail[0]['categories'];  ?></a> / <?php echo $productDetail[0]['name'];    ?> </p>
                <h1 class="text-bold text-capitalize"> <?php echo $productDetail[0]['name']; ?></h1>
                <h5 class="font-weight-bold"><span class="text-muted">₹<del><?php echo $productDetail[0]['mrp']; ?> </del> </span> &nbsp;₹<?php echo $productDetail[0]['price']; ?></h5>

                <div>
                    <?php

                    $showcart = '';
                    $pid = $productDetail[0]['id'];
                    $productQty = getProductByProductid($conn, $pid);

                    if ($productDetail[0]['qty'] > $productQty) {
                        $stock = "in stock";
                    } else {
                        $stock = "not in stock";
                        $showcart = "no";
                    }
                    ?>
                    <p class="my-2 text-capitalize font-weight-bold">Availability : <?php echo $stock; ?></p>
                    <?php
                    $loopTill = $productDetail[0]['qty'] - $productQty;
                    
                    ?>
                    <?php
                    if ($showcart == "") { ?>
                        <p><span>Qty:</span>
                            <select name="" id="qty">
                             
                                <?php
                                for ($i = 1; $i <= $loopTill; $i++) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo  $i; ?></option>
                                <?php } ?>


                            </select><br>
                        </p>
                    <?php } else {
                        echo "";
                    }
                    ?>

                </div>
                <?php
                if ($showcart == "") { ?>
                    <a href="javascript:void(0)" onclick="manage_cart(<?php echo $productDetail[0]['id']; ?>,'add')" class="btn btn-danger my-3 text-uppercase font-weight-bold" style="letter-spacing:1px;">Add to cart</a>
                <?php } else {
                    echo "";
                }
                ?>


                <br>
                <h3 class="my-3">Product Description <i class="fas  fa-indent" class="float-right"></i></h3>
                <p class="text-capitalize my-3 font-roboto"><?php echo $productDetail[0]['short_desc'];   ?></p>
                <h5 class="my-3 text-capitalize font-roboto "> <span class="text-muted ">Category : </span><?php echo $productDetail[0]['categories'];   ?> </h5>
            </div>

        </div>
        <div class="container">
            <h4 class="text-dark font-weight-bold ">Description</h4>
            <div>
                <p><?php echo $productDetail[0]['description']; ?></p>
            </div>
        </div>
    </div>
    <!-- Single product deails ends-->

   
    <!-- Featured Products ends here -->

</main>
<?php
include "includes/footer.inc.php";

?>