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
                <select name="" id="">
                    <option value="1">Select Size</option>
                    <option value="2"> Small</option>
                    <option value="3">Medium</option>
                    <option value="4">Large</option>
                    <option value="5">x-Large</option>
                </select>
                <div>

                    <p class="my-2 font-weight-bold">Availability : in stock</p>
                    <p><span>Qty:</span>
                        <select name="" id="qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select><br>
                    </p>
                </div>

                <a href="javascript:void(0)" onclick="manage_cart(<?php echo $productDetail[0]['id']; ?>,'add')" class="btn btn-danger my-3 text-uppercase font-weight-bold" style="letter-spacing:1px;">Add to cart</a><br>
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

    <!-- title-->
    <div class="container px-5">
        <div class="row">
            <div class="col-lg-6 col-6">
                <h4>
                    <ul>Related Products</ul>
                </h4>
            </div>
            <div class="col-lg-6 col-6">
                <a href="#" class="nav-link text-muted float-right">View More</a>
            </div>
        </div>
    </div>
    <!-- Featured Products start here -->
    <div class="container px-5 mt-5">

        <div class="row " id="featured-product">
            <div class="col-lg-3 col-sm-3 col-6">
                <img src="images/product-2.jpg" alt="product1" class="img-fluid">
                <p> Mens Cotton Hooded T-Shirt</p>
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-warning"></i>
                    <p>₹ 291.00 - ₹ 649.00</p>
                </div>

            </div>

            <div class="col-lg-3 col-sm-3 col-6">
                <img src="images/product-3.jpg" alt="product1" class="img-fluid">
                <p>Women Printed Rayon Kurta</p>
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-warning"></i>

                    <p>₹650.00</p>
                </div>

            </div>

            <div class="col-lg-3 col-sm-3 col-6">
                <img src="images/product-6.jpg" class="img-fluid">
                <p> Men Sweatshirt </p>
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-warning"></i>
                    <p>₹ 490.00</p>
                </div>

            </div>

            <div class="col-lg-3 col-sm-3 col-6">
                <img src="images/product-8.jpg" class="img-fluid">
                <p> Men Solid Casual Shirt</p>
                <div class="rating">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <p>₹ 399.00</p>
                </div>

            </div>
        </div>


    </div>
    <!-- Featured Products ends here -->

</main>
<?php
include "includes/footer.inc.php";

?>
