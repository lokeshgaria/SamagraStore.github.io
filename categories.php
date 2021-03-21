<?php
include "includes/headers.inc.php"; 
$cat_id   = $_GET['id'];
 
if (isset($_GET['sub_cat'])) {
    $subCatId = $_GET['sub_cat'];
    
}else{
    $subCatId="";
}
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
        <input type="hidden" name="qty" id="qty" value="1">
    </div>
    <!-- Row one -->
    <div class="row " id="featured-product">
        <?php
        $catData = get_product($conn, '', $cat_id, '', '', $sortdata,"",$subCatId);
        if (count($catData) > 0) {
            foreach ($catData as   $value) { ?>

                <div class="col-lg-2 col-sm-3 col-6">
                    <a href="productDetails.php?product_id=<?php echo $value['id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" class="img-fluid" style="height:230px; width:240px;"></a>
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
       
    <?php
      $num = rand(1,3);
        $catData = get_product($conn, '',$num, '', '', $sortdata,"",$subCatId);
        if (count($catData) > 0) {
            foreach ($catData as   $value) { ?>

                <div class="col-lg-2 col-sm-3 col-6">
                    <a href="productDetails.php?product_id=<?php echo $value['id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" class="img-fluid" style="height:230px; width:240px;"></a>
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
<!-- Featured Products ends here -->
 
<!-- pAgination buttons-->
</main>
<?php
include "includes/footer.inc.php";
?>