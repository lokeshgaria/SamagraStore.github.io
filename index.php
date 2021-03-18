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
    <!-- New Arrivals start here -->
    <div class="container " id="featured-product">
        <h3 class=" text-center font-gugi text-capitalize my-5 border-bottom">new arrivals</h3>
        <div class="row ">
            <?php
            $productData = get_product($conn, 6);
            foreach ($productData as  $value) {  ?>

                <div class="col-lg-2 col-sm-2 text-center col-6">

                    <a href="categories.php?id=<?php echo $value['categories_id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>" class="img-fluid"> </a>
                    <div>
                        <input type="hidden" name="" id="qty" value="1">
                        <ul class="" id="hoverList">
                            <li class="nav-item"><a href="javascript:void(0)" onclick="wishlist(<?php echo $value['id']; ?>,'add')" style="display: <?php echo $display; ?>"><i class="fas text-danger fa-heart"></i></a></li>
                            <li class="nav-item"><a href="javascript:void(0)" onclick="manage_cart(<?php echo  $value['id']; ?>,'add')"><i class="fas text-secondary fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
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
    <!-- New Arrivals ends here -->


    <!-- New Arrivals start here -->
    <div class="container " id="featured-product">
        <h3 class=" text-center font-gugi text-capitalize my-5 border-bottom">best Seller</h3>
        <div class="row ">
            <?php
            $productData = get_product($conn, '6', '', '', '', '', 'yes');
            foreach ($productData as  $value) {  ?>

                <div class="col-lg-2 col-sm-2 text-center col-6">
                    <a href="categories.php?id=<?php echo $value['categories_id']; ?>"><img src="adminPanel/<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>" class="img-fluid"> </a>
                    <div>
                        <input type="hidden" name="" id="qty" value="1">
                        <ul class="" id="hoverList">
                            <li class="nav-item"><a href="javascript:void(0)" onclick="wishlist(<?php echo $value['id']; ?>,'add')" style="display: <?php echo $display; ?>"><i class="fas text-danger fa-heart"></i></a></li>
                            <li class="nav-item"><a href="javascript:void(0)" onclick="manage_cart(<?php echo  $value['id']; ?>,'add')"><i class="fas text-secondary fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
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
    <!-- New Arrivals ends here -->

    <!--  about us  Starts here -->
    <div class="container" id="aboutus">
        <h3 class="font-gugi   text-center my-5  "> About Us </h3>
        <div class="row py-3">
            <div class="col-lg-4 col-sm-3 col-12 shift">
                <img src="./images/freelancer.jpg " alt="" class="img-fluid ">

            </div>
            <div class="col-lg-8 col-sm-8 col-12 shift ">
                <h4 class=" font-weight-bold mx-5 py-3">Hello , I am Lokesh </h4>
                <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi odio sit velit in
                    architecto
                    maiores? Nihil quod quaerat repellendus reiciendis, culpa ex pariatur?</p>
                <div class="mx-5">
                    <h6 class="  font-roboto text-capitalize font-weight-bold my-3">Let's share some ideas</h6>
                    <a href="https://www.facebook.com/lokesh.on.9" class="nav-link d-inline text-primary"><i class="fab fa-2x fa-facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"></i></a>

                    <a href="https://www.instagram.com/web_tag_/" class="nav-link d-inline text-danger "><i class="fab fa-2x fa-instagram" data-toggle="tooltip" data-placement="bottom" title="instagram!"></i></a>

                    <a href="#" class="nav-link d-inline"><i class="fab fa-twitter fa-2x" data-toggle="tooltip" data-placement="bottom" title="twitter"></i></a>

                    <a href="https://github.com/lokeshgaria" class="nav-link d-inline text-dark"><i class="fab fa-2x fa-github" data-toggle="tooltip" data-placement="bottom" title="GitHub"></i></a>
                </div>

            </div>


        </div>
    </div>
    <!--  feedback  ends here -->


    <!--contact us -->
    <div class="container-fluid bg-light  primary-color py-5 " id="contactus">
        <h3 class="font-gugi font-weight-bold text-dark text-center">Contact Us </h3>
        <hr class="bg-white">
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98154.8052501477!2d-75.56300484770905!3d39.75452647939008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6e310ebe2e5bf%3A0xdc0ef3758b2a693b!2sEdgemoor%2C%20DE%2019809%2C%20USA!5e0!3m2!1sen!2sin!4v1608631824500!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
        </div>
        <div class="row my-4">

            <div class="col-lg-3 col-12 bg-dark mx-5 pt-5 text-center ml-auto font-lato">

                <div class="  font-sofia  text-start">
                    <h4>Connect With Us</h4>

                </div>

                <div class="featured-content">
                    <div class="featured-desc  d-flex ">
                        <i class="fas fa-2x mt-3 fa-map-marker-alt"></i>
                        <p class="mx-4" style="color:#fff">501, Silverside Road,<br>
                            105 Suite Nos.Wilmington City,<br>
                            Delaware 19809 USA</p>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="featured-content">
                    <div class="featured-desc d-flex ">
                        <i class="fas fa-2x fa-phone-alt"></i>
                        <p class="mx-4" style="color:#fff"> 24/7 Support<br>
                            +91-XXXX-XXXX</p>
                    </div>
                </div>
                <hr class="bg-white">
                <div class="featured-content">
                    <div class="featured-desc d-flex ">
                        <i class="far fa-2x fa-envelope"></i>
                        <p class="mx-4" style="color:#fff">shoponline@gmail.com<br>

                    </div>
                </div>
                <hr class="bg-white">

                <div class="d-flex justify-content-start">
                    <a class="nav-link text-white" href=""><i class="fab fa-linkedin-in" data-toggle="tooltip" data-placement="bottom" title="
                    
                    linkedIn!"></i></a>
                    <a class="nav-link   text-white" href=""><i class="fab fa-google-plus" data-toggle="tooltip" data-placement="bottom" title="Gmail"></i></a>
                    <a class="nav-link text-white" href=""><i class="fab fa-twitter" data-toggle="tooltip" data-placement="bottom" title="twitter"></i></a>
                    <a class="nav-link text-white" href=""><i class="fab fa-facebook" data-toggle="tooltip" data-placement="bottom" title="HoFacebook"></i></a>

                </div>

            </div>
            <div class="col-lg-5 mr-auto">

                <form class="mt-3" id="feedbackForm" method="post">

                    <div class="form-group font-sofia ">
                        <!-- first row -->
                        <h4 class="text-capitalize"> Give feedback to us ..</h4>
                        <div class="row  ">
                            <div class="col-lg-12 col-12">
                                <input type="text" name="newname" class="form-control" id="username" placeholder="Enter Your Name" value="<?php echo  $attr = "$username"; ?>">

                            </div>
                            <div class="col-lg-12 col-12 my-2">
                                <input type="email" class="form-control" id="email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" value="<?php echo $attr = "$email";  ?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" placeholder="Contact Number" value="<?php echo  $attr = "$phone"; ?>">

                            </div>
                            <div class="col-lg-12 col-12 my-3">
                                <h5 class="text-capitalize">write here..</h5>
                                <p id="error" class="text-capitalize"></p>
                                <textarea name="comment" class="form-control" id="message" cols="200" name="comment" rows="5"></textarea>
                            </div>
                        </div>
                        <!-- third row -->
                        <div class="row">

                            <div class="col-lg-12 col-12">
                                <input type="button" class="btn btn-primary w-25 text-uppercase font-weight-bold font-roboto " id="feedbackbutton" style=" letter-spacing: 5px; " name="submit" value="submit">
                            </div>
                        </div>


                    </div>



                </form>
            </div>

        </div>

    </div>

    <!-- Brands start here -->
    <div class="brand bg-light  my-5">
        <h3 class="font-gugi text-success text-capitalize text-center py-3 border-bottom "> our business partners
        </h3>
        <div class="container-fluid py-5 col-11">

            <div class="row">
                <div class="col-2 col-lg-1">
                    <img src="https://banner2.cleanpng.com/20180802/lwr/kisspng-armani-logo-portable-network-graphics-fashion-desi-ga-logosu-4-y%C4%B1ld%C4%B1z-252-252-drm-pictures-free-5b631c6946e523.5793332515332219932904.jpg" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="http://assets.stickpng.com/thumbs/585990234f6ae202fedf28cf.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://www.iconicopticians.co.uk/images/uploads/logos-slider/VERSACE.jpg" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src=" https://freepngimg.com/thumb/burberry/33068-6-burberry-logo-photos.png" alt=" brand logo" class="img-fluid mt-5">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://i.pinimg.com/originals/ac/37/53/ac37539083035da7f45bc6dd29424187.jpg" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://www.pngfind.com/pngs/m/551-5510928_prada-logo-png-prada-logo-transparent-png.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://www.iconicopticians.co.uk/images/uploads/logos-slider/VERSACE.jpg" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src=" https://freepngimg.com/thumb/burberry/33068-6-burberry-logo-photos.png" alt=" brand logo" class="img-fluid mt-5">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="http://assets.stickpng.com/thumbs/585990234f6ae202fedf28cf.png" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://www.iconicopticians.co.uk/images/uploads/logos-slider/VERSACE.jpg" alt="brand logo" class="img-fluid">
                </div>
                <div class="col-2 col-lg-1">
                    <img src=" https://freepngimg.com/thumb/burberry/33068-6-burberry-logo-photos.png" alt=" brand logo" class="img-fluid mt-5">
                </div>
                <div class="col-2 col-lg-1">
                    <img src="https://www.pngfind.com/pngs/m/551-5510928_prada-logo-png-prada-logo-transparent-png.png" alt="brand logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Brands ends start here -->
  
</main>

<?php
include "includes/footer.inc.php";
?>