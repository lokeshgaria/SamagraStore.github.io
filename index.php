<?php
include "includes/headers.inc.php";
?>
<main>

    <!-- first slider-->
    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-slider-1 img-fluid" src=" https://rukminim1.flixcart.com/flap/1800/1800/image/f6fae4.jpg?q=80">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider-1 img-fluid" src="  https://rukminim1.flixcart.com/flap/960/960/image/b34e13.jpg?q=75">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-slider-1 img-fluid" src=" https://m.media-amazon.com/images/S/aplus-media/sota/5722e8f3-329b-469a-a387-8bedc8c02f19.__CR0,0,1464,600_PT0_SX1464_V1___.jpg" alt="Third slide">
                </div>
            </div>

        </div>
    </div>
    <!-- first slider ends-->
    <!-- Featured Products start here -->
    <div class="container " id="featured-product">
        <h3 class=" text-center text-capitalize my-5 border-bottom">new arrivals</h3>
        <div class="row ">
            <?php
            $productData = get_product($conn, 4);
            foreach ($productData as  $value) {  ?>

                <div class="col-lg-3 col-sm-3 text-center col-6">
                    <a href="categories.php?id=<?php echo $value['categories_id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>" class="img-fluid"> </a>
                    <div>
                        <p class="text-capitalize font-weight-bold m-2"><?php echo $value['name']; ?></p>
                        <div class="flex justify-content-end ">
                            <span class="text-muted nav-item mx-3"> ₹ <s><?php echo $value['mrp']; ?></s></span>
                            <span class="text-dark nav-item mx-3">₹<?php echo $value['price']; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Featured Products ends here -->

    <!-- Offer Product starts-->

    <div class="container-fluid my-5  band" id="band">
        <div class="row ">
            <div class="col-lg-6 col-sm-6 col-6">
                <img src="images/exclusive.png " alt="offer" class="img-fluid">
            </div>

            <div class="col-lg-6 col-sm-6 col-6 " id="ex-offer">
                <p class=" ">Exclusively Available on <span class="  text-uppercase   font-roboto text-dark">Samagra
                        store</span> </p>
                <h1><b>Mi Smart Band 4 </b> </h1>
                <p>The Mi Smart Band 4 comes with an attractive full-colour AMOLED touchscreen display.With
                    a range of pre-loaded watch faces to choose from, you can also personalize the display’s
                    look with images from your smartphone’s gallery. </p>
                <a class="btn btn-danger my-2 font-sofia w-25" href="">Buy Now</a>
            </div>
        </div>
    </div>

    <!-- Offer Product  Ends here-->

    <!--  about us  Starts here -->
    <div class="container" id="aboutus">
        <h1 class="font-gugi text-success text-center my-5  "> About Us </h1>
        <div class="row py-3">
            <div class="col-lg-4 col-sm-3 col-12 shift">
                <img src="./images/gallery-1.jpg" alt="" class="img-fluid " style="border-radius:972px;">

            </div>
            <div class="col-lg-8 col-sm-8 col-12 shift ">
                <h4 class=" font-weight-bold mx-5 py-3">Hello , I am Lokesh </h4>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi odio sit velit in
                    architecto
                    maiores? Nihil quod quaerat repellendus reiciendis, culpa ex pariatur?</p>
                <div class="mx-5">
                    <h6 class="  font-roboto text-capitalize font-weight-bold my-3">Let's share some ideas</h6>
                    <a href="https://www.facebook.com/lokesh.on.9" class="nav-link d-inline text-primary"><i class="fab fa-2x fa-facebook"></i></a>
                    <a href="https://www.instagram.com/web_tag_/" class="nav-link d-inline text-danger "><i class="fab fa-2x fa-instagram"></i></a>
                    <a href="#" class="nav-link d-inline"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://github.com/lokeshgaria" class="nav-link d-inline text-dark"><i class="fab fa-2x fa-github"></i></a>
                </div>

            </div>


        </div>
    </div>
    <!--  feedback  ends here -->
    <!-- collection starts here -->
    <!--  Second Slider -->
    <div class="container-fluid py-5  " style="background-color:#dff9fb;">
        <h1 class="font-roboto text-info text-center   "> Our Collection </h1>
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
                            <a href="beats.php"><span class="border site-btn btn-span text-uppercase"> Beats
                                </span>
                            </a>
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
    <!-- Brands start here -->
    <div class="brand bg-light  my-5">
        <h3 class="font-gugi text-success text-capitalize text-center py-3 border-bottom "> our business partners
        </h3>
        <div class="container-fluid py-5">

            <div class="row">
                <div class="col-2 col-lg-2">
                    <img src="images/logo-coca-cola.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-2">
                    <img src="images/logo-godrej.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-2">
                    <img src="images/logo-paypal.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-2">
                    <img src=" images/logo-coca-cola.png" alt=" brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-2">
                    <img src="images/logo-oppo.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-2">
                    <img src="images/logo-godrej.png" alt="brand logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Brands ends start here -->

    <!--contact us -->
    <div class="container-fluid bg-light font-sofia primary-color py-5 " id="contactus">
    <h2 class="font-weight-bold">Contact Us </h2>
                        <hr>
        <div class="row">

            <div class="col-lg-6 col-12">
             <div class="container">
             <iframe class="m-0 img-fluid"  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13993.025392856549!2d77.1370109!3d28.7417623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1614342549969!5m2!1sen!2sin" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
             </div>
          
            </div>
            <div class="col-lg-6">
                <form class="w-75" action="index.php" method="post">

                    <div class="form-group ">
                       <!-- first row -->
                       <div class="row  ">
                            <div class="col-lg-12 col-12">
                                <input type="text" name="newname" class="form-control" id="" placeholder="Enter Your Name" value="<?php echo  $attr = "$username"; ?>">

                            </div>
                            <div class="col-lg-12 col-12 my-2">
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="<?php echo $attr = "$email";  ?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" id="" name="phone" aria-describedby="emailHelp" placeholder="Contact Number" value="<?php echo  $attr = "$phone"; ?>">

                            </div>
                            <div class="col-lg-12 col-12 my-3">
                                <h5 class="text-capitalize">any suggestions for us?</h5>
                                <textarea name="comment" class="form-control" id="" cols="200" name="comment" rows="5"></textarea>
                            </div>
                        </div>
                        <!-- third row -->
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="btn btn-primary w-100 text-uppercase font-weight-bold font-roboto " style=" letter-spacing: 5px; " name="submit">Submit</button>
                            </div>
                        </div>


                    </div>



                </form>
            </div>

        </div>

    </div>
</main>

<?php
include "includes/footer.inc.php";
?>