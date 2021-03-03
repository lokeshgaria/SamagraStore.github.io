<?php

include "includes/headers.inc.php";
$msg = "";
$loginmsg = "";


?>
<main>
    <div class="container-fluid  " id="registerDiv">
        <div class="container py-5">
            <div class="row">
                <!-- Register modal -->
                <div class="col-lg-6">

                    <!-- Modal -->
                    <div class="modal-content  ">
                        <div class="modal-header">
                            <h5 class="modal-title text-info  font-gugi" id="exampleModalLabel ">Create Your
                                Account </h5>
                        </div>
                        <div class="modal-body">
                            <form action=" " method=" " id="registerform">
                                <input class="form-control form-control-sm my-3" type="text" placeholder="Enter your Name" id="name">

                                <input class="form-control form-control-sm " type="text" placeholder="Enter Your Email " id="emailregister">

                                <input class="form-control form-control-sm my-3" type="text" placeholder="Your Contact number" id="number">

                                <input class="form-control form-control-sm my-3" type="password" placeholder=" Enter Password" id="pass">

                                <input class="form-control form-control-sm my-3" type="password" placeholder=" Confirm Password " id="cpass">


                                <div>
                                    <p class="text-danger font-weight-bold text-capitalize  my-2 " id="msgerror"></p>
                                </div>
                                <div class="modal-footer my-2">

                                    <input type="button" value="Create Account" id="create" class="btn btn-success w-100">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <!--Login Modal -->
                    <div class="modal-dialog " role="document">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title font-gugi primary-color" id="exampleModalLabel">Sign in to
                                    your Account</h5>
                            </div>
                            <div class="modal-body">
                                <form action=" " method="post">
                                    <input class="form-control form-control-sm my-3" id="emailLogin" type="text" placeholder="Enter Email Id " value="<?php
                                                                                                                                                        if (isset($_COOKIE['email'])) {
                                                                                                                                                            echo $_COOKIE['email'];
                                                                                                                                                        }
                                                                                                                                                        ?>" id="email">
                                    <input class="form-control form-control-sm " id="passLogin" type="password" placeholder="Enter Password" id="password" value="<?php
                                                                                                                                                                    if (isset($_COOKIE['pass'])) {
                                                                                                                                                                        echo $_COOKIE['pass'];
                                                                                                                                                                    }
                                                                                                                                                                    ?>">
                                    <div class="" style="margin: 6px 1px 3px;">
                                        <input type="checkbox" class=" " name="check" id="check" <?php if (isset($_COOKIE['check'])) {
                                                                                                        echo $_COOKIE['check'];
                                                                                                    } ?>> Remember me
                                    </div>


                                    <div>
                                        <p class="text-danger m-0 p-0 font-weight-bold  text-capitalize" id="passMsg"> </p>
                                    </div>
                                    <div>
                                        <span><a class="nav-link m-0 p-0" href="forgit.php">Forgot Password? </a></span>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="login" class="btn btn-success w-100  ">Log In</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p id="insertMsg" class="text-center text-capitalize">hello</p>
    </div>
</main>

<?php include "includes/footer.inc.php"; ?>
<!---insert data in database --->
