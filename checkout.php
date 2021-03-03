<?php include "includes/headers.inc.php";
// pre($_SESSION['cart']);
$collapse = "";
error_reporting(0);
if (!isset($_SESSION['username'])) {
    $collapse = "";
    $display = "block";
} else {
    $collapse = "collapse";
    $display = "none";
}
if (count($_SESSION['cart']) == "0") {
?>
    <script>
        window.location.replace('index.php');
    </script>
<?php
}
?>

<main>
    <!--cart image -->
    <div id="cartImage">
        <h4 class="text-capitalize text-center   font-roboto py-5 color "><a href="index.php" class=" color link">Home
                ></a> CheckOut</h4>
    </div>
    <!--cart stated-->
    <div class="container-fluid my-4 ">
        <div class="row">
            <div class="col-lg-7">
                <!--check out form -->


                <div class="col-lg-12" style="display: <?php echo $display; ?>;">
                    <div class="row">
                        <h5 class="bg-color text-roboto text-uppercase text-muted p-2  w-100 "> <span>+</span> checkout
                            Method </h5>
                        <div class="col-lg-6">
                            <form action="" id=" " method="post" class="form-group font-roboto">
                                <h6>LOGIN </h6>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="email" name="email" class="form-control " id="emailLogin" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" class="form-control my-3" id="passLogin" placeholder="password">
                                    </div>
                                    <input type="hidden" name="check" id="check" value="1">
                                </div>
                                <h6 class="text-danger font-roboto text-capitalize" id="passMsg">* Required Fields</h6>

                                <input type="button" id="login" class="btn btn-outline-dark" value="LOG IN">
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form action="" id="register" method="post" class="form-group font-roboto">
                                <h6>REGISTER </h6>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="name" class="form-control  " id="name" placeholder="Name">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="email" name="email" class="form-control my-3" id="emailregister" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="number" class="form-control  " id="number" placeholder="Phone number">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" class="form-control my-3" id="pass" placeholder="Password">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="password" name="password" class="form-control " id="cpass" placeholder="confirm Password">
                                    </div>


                                </div>
                                <input type="button" class="btn btn-outline-dark my-2" id="create" value=" REGISTER">
                            </form>
                        </div>

                    </div>
                </div>
                <!--address details -->
                <div class="bg-color ">
                    <a class=" text-roboto text-uppercase text-muted nav-link   " data-toggle="<?php echo $collapse; ?>" href="#multiCollapseExample1" role="button" aria-expanded="true" aria-controls="multiCollapseExample1">
                        <h5>+ Address Details</h5>
                    </a>
                </div>
                <div class="col-lg">
                    <p class="text-capitalize" id="insertMsg"></p>
                </div>

                <div class="row my-1">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <form action="" id="login" method="post" class="form-group font-roboto">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="name" class="form-control  " id="name" placeholder="First Name">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="street" class="form-control my-2 " id="street" placeholder="Street Address">
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" name="block" class="form-control  " id="block" placeholder="Apartment Block House (optional)">
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-6">
                                        <input type="text" name="city" class="form-control" id="city" placeholder="City /State">
                                    </div>
                                    <div class="col-lg-6  ">
                                        <input type="text" name="zip" class="form-control   " id="zip" placeholder="Postal code / Zip">
                                    </div>
                                </div>

                                <div class="row my-3">
                                    <div class="col-lg-6">
                                        <input type="email" name="email" class="form-control  " id="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-lg-6  ">
                                        <input type="text" name="phone" class="form-control   " id="phone" placeholder="Phone Number">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <!--payment details -->
                <div class="bg-color">
                    <a class=" text-roboto text-uppercase text-muted nav-link   " data-toggle="<?php echo $collapse; ?>" href="#paymentDiv" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                        <h5>+ Payment Details</h5>
                    </a>
                </div>


                <div class="row my-2">
                    <div class="col">
                        <div class="collapse multi-collapse" id="paymentDiv">
                            <form action="" id="login" method="post" class="form-group font-roboto">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="">
                                            <div class="d-flex">
                                                <div class="mx-3">
                                                    <input type="radio" id="cod" name="payment" value="cod">
                                                    <label for="male"> COD</label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="paypal" name="payment" value="paypal">
                                                    <label for="PAYPAL"> PAYPAL</label><br>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>

                </div>

                <a href=" " class="btn font-roboto btn-outline-dark my-2">SUBMIT</a>
            </div>

            <!--your order -->
            <div class="col-lg-4  ml-5   bg-color" style="position: relative;
    left: 0%;">
                <!--cart items -->
                <h5 class="bg-color text-roboto text-center text-uppercase text-muted p-2 my-2 w-100 ">Your orders</h5>

                <div class="col-lg-12  ">
                    <table class="table text-center">
                        <?php
                        $cart_total = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $cartdata = get_product($conn, "", "", $key);
                            $pname = $cartdata[0]['name'];
                            $mrp = $cartdata[0]['mrp'];
                            $price = $cartdata[0]['price'];
                            $img = $cartdata[0]['img'];
                            $qty = $value['qty'];
                            $cart_total = $cart_total + ($price * $qty);
                        ?>
                            <tr>
                                <td>
                                    <img src="./adminPanel/<?php echo $img; ?>" alt="sdd" style="width: 59px; height:70px">

                                </td>
                                <td>
                                    <h6 class="my-3"> <?php echo $pname; ?> <br>
                                        <span> ₹ <?php echo $price * $qty ?></span>
                                    </h6>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" onclick="manage_cart(<?php echo $key ?>, 'remove') " class="text-muted my-3 nav-link"><i class="far  fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php  } ?>

                    </table>
                </div>
                <div>
                    <table class="table   text-muted font-weight-bold">
                        <tr>
                            <td class="text-dark text-start text-uppercase font-roboto">
                                Subtotal
                            </td>
                            <td class="text-end">
                                ₹ <?php echo $cart_total ?>
                            </td>

                        </tr>
                        <tr>
                            <td class="text-dark text-start text-uppercase font-roboto">
                                tax
                            </td>
                            <td>
                                ₹ 45
                            </td>
                        </tr>

                        <tr>
                            <td class="text-dark text-start text-uppercase font-roboto">
                                order total
                            </td>
                            <td>
                                ₹ <?php echo $cart_total + 45; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>



</main>
<?php include "includes/footer.inc.php"; ?>