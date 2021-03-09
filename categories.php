<?php
include "includes/headers.inc.php"; 
$cat_id = $_GET['id'];
$catname = mysqli_query($conn, "select categories from categories where id='$cat_id' ");
$name  = mysqli_fetch_assoc($catname);
$sortdata = "";
$price_low = "";
$price_high = "";
$new_select = "";
$old_select = "";
if (isset($_GET['sort'])) {
    $sortid = $_GET['sort'];

    if ($sortid == 'price_high') {
        $sortdata = " order by product.price desc ";
        $price_high = "selected";
    }
    if ($sortid == 'price_low') {
        $sortdata = " order by product.price asc ";
        $price_low = "selected";
    }
    if ($sortid == 'new') {
        $sortdata = " order by product.id desc ";
        $new_select = "selected";
    }
    if ($sortid == 'old') {
        $sortdata = " order by product.id asc ";
        $old_select = "selected";
    }
} else {
    $sortdata = " order by product.id desc ";
}
?>
<!-- welcome image  -->

<div id="cartImage">
    <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a> <?php echo $name['categories']; ?></h4>
</div>

<!-- welcome image   ends -->
<!-- Featured Products start here -->

<div class="container px-5">
    <div class="row py-5">
        <div class="col-lg-6 col-6">
            <h3>All Headset collection </h3>
        </div>
        <div class="col-lg-6 col-6">
            <select class="custom-select w-75 float-right" onchange="sortProduct(<?php echo $cat_id; ?>)" id="filter">
                <option>Filter Products</option>="";
                <option value="price_low" <?php echo $price_low; ?>>Filter by Price low to High</option>
                <option value="price_high" <?php echo $price_high; ?>>Filter by Price High to low</option>
                <option value="new" <?php echo $new_select; ?>>Filter by New products </option>
                <option value="old" <?php echo $old_select; ?>>Filter by old products</option>
            </select>
        </div>
    </div>
    <!-- Row one -->
    <div class="row " id="featured-product">
        <?php
        $catData = get_product($conn, '', $cat_id, '', '', $sortdata);
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
<!-- Featured Products start here -->
<div class="container " id="featured">
    <h3 class=" text-center my-5 border-bottom"> Popular Products</h3>
    <div class="row ">
        <div class="col-lg-3 col-sm-3 col-6">
            <img src="https://m.media-amazon.com/images/I/31JlzuFiFgL._AC_SR160,160_.jpg" alt="product1" class="img-fluid">
            <p>pTron BassFest Stereo in-Ear </p>
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
            <img src="https://m.media-amazon.com/images/I/41i3BkFyqdL._AC_SR160,160_.jpg" alt="product1" class="img-fluid">
            <p> pTron Bassbuds in-Ear</p>
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
            <img src="https://images-eu.ssl-images-amazon.com/images/I/61pio7PNxFL._AC_UL160_SR160,160_.jpg" class="img-fluid">
            <p> JBL Tune 500 Powerful </p>
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
            <img src="https://images-eu.ssl-images-amazon.com/images/I/61US9yCTRJL._AC_UL160_SR160,160_.jpg" class="img-fluid">
            <p> boAt Rockerz 400 Headphone</p>
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
<!-- collection starts here -->
<!--  Second Slider -->
<div class="container-fluid my-5  " id="collection">
    <h3 class="font-roboto text-info text-center my-5 border-bottom"> Our Collection </h3>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner  ">
            <div class="carousel-item active">
                <div class="row slider-two text-center   ">
                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                        <img src="https://images.pexels.com/photos/923192/pexels-photo-923192.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid">
                        <span class="border site-btn btn-span"> SOFA & CHAIR</span>
                    </div>

                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                        <img src=" https://images.pexels.com/photos/276583/pexels-photo-276583.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid">
                        <span class="border site-btn btn-span text-uppercase"> Furniture</span>
                    </div>

                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                        <img src=" https://images.unsplash.com/photo-1517991104123-1d56a6e81ed9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="img-fluid">
                        <span class=" border site-btn btn-span text-uppercase"> lighting</span>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row slider-two text-center ">
                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                        <img src="  https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="img-fluid">
                        <span class="border site-btn btn-span text-uppercase"> Beats </span>
                    </div>

                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                        <img src=" https://images.pexels.com/photos/1287150/pexels-photo-1287150.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid">
                        <span class="border site-btn btn-span text-uppercase"> appliances</span>
                    </div>

                    <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4 ">
                        <img src=" https://images.pexels.com/photos/237997/pexels-photo-237997.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="img-fluid">
                        <span class="border site-btn btn-span text-uppercase"> Hardware</span>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--  Second Slider Ends -->
<!--collection ends-->
<!-- pGINation Buttons -->
<div class="container px-5">
    <nav aria-label="Page navigation example ">
        <ul class="pagination justify-content-center ">
            <li class="page-item">



                </a>
            </li>
            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">4</a></li>
            <li class="page-item"><a class="page-link text-dark" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">→</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- pAgination buttons-->
</main>
<?php
include "includes/footer.inc.php";
?>