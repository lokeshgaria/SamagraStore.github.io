<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href="   https://booster.io/wp-content/uploads/empty-cart-button-e1438361855330.png"
        type="image/x-icon">
    <title>  All products - Samagra |Online Store</title>

    <!-- jQuery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome cdn -->
    <script src="https://kit.fontawesome.com/93e0313e1a.js" crossorigin="anonymous"></script>


    <!-- Custom Style Sheet-->
    <link rel="stylesheet" href="style/style.css">



    <!-- fonts style
       font-family: 'Anton', sans-serif;
       font-family: 'Gugi', cursive;
       font-family: 'Lato', sans-serif;
       font-family: 'Roboto', sans-serif;
       font-family: 'Sofia', cursive;
    -->
</head>

<body>
    <!--- Header  -->
    <header>
        <div class="container">
            <div class="row">
                 
                <div class="col-md-6 col-12 text-start">
                    <h2 class="my-md-3 site-title primary-color text-white"> <span class="font-sofia"> S</span>amagra
                        Store</h2>
                </div>
                <div class="col-md-6 col-12 text-right links my-3">
                    <!-- Button trigger modal -->
                  <button type="button" class="btn primary-color mx-3" data-toggle="modal" data-target="#exampleModal">
                      Create Account
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title text-info  font-gugi" id="exampleModalLabel ">Create your Account </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <form action="" method="post">
                                      <input class="form-control form-control-sm my-3" type="text" placeholder="Enter your Name">
                                      <input class="form-control form-control-sm " type="text" placeholder="Enter Your Email ">
                                      <input class="form-control form-control-sm my-3" type="text" placeholder="Your Contact number">
                                      <input class="form-control form-control-sm " type="text" placeholder="Enter Password">
                                      <input class="form-control form-control-sm my-3" type="text" placeholder="Confirm Paasword ">
                                        
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button type="submit" name="submit" class="btn btn-success">Create Account</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn primary-color" data-toggle="modal" data-target="#exampleModa2">
                      Log In
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title font-gugi primary-color" id="exampleModalLabel">Sign in to your Account</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <form action="" method="post">
                                      
                                      <input class="form-control form-control-sm my-3" type="text" placeholder="Enter Your Email ">
                                      
                                      <input class="form-control form-control-sm " type="password" placeholder="Enter Password">
                                     
                                        
                                  </form>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-success">Log In</button>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <!--  Navbar   -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link  text-uppercase" href="mystore.php">Home <span
                                class="sr-only">(current)</span></a>
                        
                        <a class="nav-item nav-link text-uppercase" href="#collection">Collection</a>
                        <a class="nav-item nav-link text-uppercase" href="#">Store</a>
                        <a class="nav-item nav-link text-uppercase" href="#featured">Feature Products</a>
                        
                    </div>

                </div>

                <div class="navbar-nav " id="search">
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                       <a href="cart.html"><i class="fas fa-shopping-cart text-secondary p-2"></i>
                       </a>  </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here -->
    <main>

       
        
        <!-- All Products start here -->

        <div class="container px-5">
            <div class="row py-5">
                 <div class="col-lg-6 col-6">
                     <h3>All Products </h3>
                 </div>
                 <div class="col-lg-6 col-6">
                    <select class="custom-select w-75 float-right">
                        <option selected>Filter Products</option>
                        <option value="1">Filter by Price</option>
                        <option value="2">Filter by Brand</option>
                        <option value="3">Filter by Rating</option>
                        <option value="4">Filter by Popularity</option>
                      </select>
                </div>
            </div>
            <!-- Row one -->
            <div class="row " id="featured-product">
                <div class="col-lg-3 col-sm-3 col-6">
                    <img src="images/product-2.jpg"
                        alt="product1" class="img-fluid">
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
                    <img src="images/product-3.jpg"
                        alt="product1" class="img-fluid">
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
            <img src="images/product-6.jpg"
                    class="img-fluid"> 
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
                    <img src="images/product-8.jpg"
                        class="img-fluid">
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

            <!-- Second row starts here -->
            <div class="row " id="featured-product">
                <div class="col-lg-3 col-sm-3 col-6">
                    <img src="images/product-4.jpg"
                        alt="product1" class="img-fluid">
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
                    <img src="images/product-5.jpg"
                        alt="product1" class="img-fluid">
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
                    <img src="images/product-7.jpg"
                        class="img-fluid">
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
                    <img src="images/product-9.jpg"
                        class="img-fluid">
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
            <!-- Second row ends here -->
        
            <!-- Third row starts here -->
            <div class="row " id="featured-product">
                <div class="col-lg-3 col-sm-3 col-6">
                    <img src="images/product-10.jpg"
                        alt="product1" class="img-fluid">
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
                    <img src="images/product-11.jpg"
                        alt="product1" class="img-fluid">
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
                    <img src="images/product-12.jpg"
                        class="img-fluid">
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
                    <a href="product-detailes.php" target="_blank"><img src="images/product-1.jpg"
                        class="img-fluid"></a>
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
            <!-- Third row ends here -->
        </div>
<!-- All Products ends here -->
       <!-- Featured Products start here -->
       <div class="container " id="featured">
        <h3 class=" text-center my-5 border-bottom"> Featured Products</h3>
        <div class="row " >
            <div class="col-lg-3 col-sm-3 col-6">
                <img src="  https://rukminim1.flixcart.com/image/495/594/k7531jk0/t-shirt/z/c/a/s-rh-roundnck-x-hlfslv-blk-org-skin-rockhard-original-imafpfvkfnzcegcn.jpeg?q=50"
                    alt="product1" class="img-fluid">
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
                <img src=" https://rukminim1.flixcart.com/image/495/594/k687wy80/kurti/a/v/w/3xl-pankhuripink-stylum-original-imafjvzfyrehhtaf.jpeg?q=50"
                    alt="product1" class="img-fluid">
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
                <img src="  https://rukminim1.flixcart.com/image/495/594/k05ljm80/sweatshirt/n/7/h/l-ts914503-ghpc-original-imafkygfnuz8se3g.jpeg?q=50"
                    class="img-fluid">
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
                <img src=" https://rukminim1.flixcart.com/image/495/594/k55n0y80/shirt/z/3/k/m-hlsh009425-highlander-original-imafnwmzffusge6z.jpeg?q=50"
                    class="img-fluid">
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
  <!-- collection starts here -->
        <!--  Second Slider -->
        <div class="container-fluid my-5  " id="collection">
            <h3 class="font-roboto text-info text-center my-5 border-bottom"> Our Collection </h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner  ">
                    <div class="carousel-item active">
                        <div class="row slider-two text-center   ">
                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                                <img src="https://images.pexels.com/photos/923192/pexels-photo-923192.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="" class="img-fluid">
                                <span class="border site-btn btn-span"> SOFA & CHAIR</span>
                            </div>

                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                                <img src=" https://images.pexels.com/photos/276583/pexels-photo-276583.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="" class="img-fluid">
                                <span class="border site-btn btn-span text-uppercase"> Furniture</span>
                            </div>

                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                                <img src=" https://images.unsplash.com/photo-1517991104123-1d56a6e81ed9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="" class="img-fluid">
                                <span class=" border site-btn btn-span text-uppercase"> lighting</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row slider-two text-center ">
                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                                <img src="  https://images.unsplash.com/photo-1505751171710-1f6d0ace5a85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="" class="img-fluid">
                                <span class="border site-btn btn-span text-uppercase"> Beats </span>
                            </div>

                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4">
                                <img src=" https://images.pexels.com/photos/1287150/pexels-photo-1287150.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="" class="img-fluid">
                                <span class="border site-btn btn-span text-uppercase"> appliances</span>
                            </div>

                            <div class="col-md-4 col-4 col-lg-4 poduct pt-md-5 pt-4 ">
                                <img src=" https://images.pexels.com/photos/237997/pexels-photo-237997.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                    alt="" class="img-fluid">
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
    <footer>
        <div class="footer bg-dark">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-12" >
                      <h6 class="text-white">Download our App</h6>
                      <small class="text-muted">Download our App for Android and Apple IOS devices.</small><br>
                      <img src="images/play-store.png " class="img-fluid d-inline w-25 mx-3" alt=""><img src="images/app-store.png" alt="" class="img-fluid d-inline w-25">
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 my-3" >
                        <h4 class="text-white font-gugi">Samagra Store</h4>
                        <small class="text-muted"> Our Purpose is to provide best Quality products at fair prices.</small>
                         
                      </div>

                      <div class="col-lg-4 col-sm-4 col-12" >
                        <h6 class="text-white font-roboto">Follow Us</h6>
                        <a href="#" class="nav-link d-inline text-white"><i class="fab fa-facebook"></i></a>
                         <a href="#" class="nav-link d-inline text-danger "><i class="fab fa-instagram"></i></a>
                         <a href="#" class="nav-link d-inline"><i class="fab fa-twitter"></i></a>
                         <a href="#" class="nav-link d-inline text-danger"><i class="fab fa-youtube"></i></a>
                      </div>

                </div>
                <h6 class="text-white font-roboto text-center"> Copyright &copy; Samagra Store Made by Team-3 </h6>
            </div>
           
        </div>
    </footer>
    <!-- Bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>