<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);
error_reporting(0);
if (count($_SESSION['cart']) == "0") {
    $display = "block";
} else {
    $display = "none";
}
?>

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home ></a> shoppingcart</h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid ">
        <div class="row w-100 px-4 my-3">
            <div class="col-lg-12 col-12 p-0 table-responsive ">
                <table class=" table font-roboto border ">
                    <tr class="bg-light text-center">
                        <th>#</th>
                        <th>Product</th>
                        <th>Name of Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>

                    <?php
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $cartdata = get_product($conn, "", "", $key);
                        $pname = $cartdata[0]['name'];
                        $mrp = $cartdata[0]['mrp'];
                        $price = $cartdata[0]['price'];
                        $img = $cartdata[0]['img'];
                        $qty = $value['qty'];

                    ?>
                        <tr class="bg-light text-center">
                            <td>1</td>
                            <td><img src="./adminPanel/<?php echo $img; ?>" alt="productimage" width="100px" height="90px"></td>
                            <td>
                                <p><?php echo $pname; ?></p>
                                <span><s><?php echo $mrp; ?></s> <?php echo $price; ?></span>
                            </td>
                            <td><?php echo $price; ?></td>
                            <td>
                                <center><input minlength="1" type="number" name="qty" id="<?php echo $key; ?>qty" value="<?php echo $qty; ?>" class="form-control  " style="width: 59px;" onchange="manage_cart(<?php echo $key; ?>,'update')">

                                </center>
                            </td>
                            <td><?php echo $price * $qty ?></td>

                            <td><a href="javascript:void(0)" onclick="manage_cart(<?php echo $key; ?>,'remove')"><i class="fas fa-trash-alt text-dark cursor-pointer" style="cursor:pointer"></i></a></td>
                        </tr>
                    <?php  } ?>


                </table>
            </div>
            <div class=" w-100 d-flex justify-content-between">
                <div class="link">
                    <a class="link btn btn-dark  text-uppercase font-roboto px-4" href="index.php">Continue Shopping</a>
                </div>
                <div class="link">
                    <a class="link btn btn-dark  text-uppercase font-roboto px-3" href="checkout.php">CheckOut</a>
                </div>
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