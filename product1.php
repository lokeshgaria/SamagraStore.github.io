<?php 
require 'function.inc.php';
 
require 'connection.inc.php';
 
$product_id =mysqli_real_escape_string($conn , $_GET['id']);
$get_product=get_product($conn,'','', $product_id);
 ?>
 
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href=" https://booster.io/wp-content/uploads/empty-cart-button-e1438361855330.png">
    <title>product Detailes - Samagra |Online Store</title>
  
    <!-- jQuery cdn-->
   <script src="main.js"></script> 
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
                        <a class="nav-item nav-link text-uppercase" href="product.php">Featured Products</a>
                        <a class="nav-item nav-link text-uppercase" href="productCopy.php">Collection</a>
                        <a class="nav-item nav-link text-uppercase" href="#">Store</a>
                       
                    </div>

                </div>

                <div class="navbar-nav " id="search">
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <a href="cart.php"><li class="nav-item border rounded-circle mx-2 search-icon">
                            <i class="fas fa-shopping-cart p-2 text-secondary "></i></a> 
                    </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here -->
    <main>

        <!-- Single product deails start-->
        <div class="container px-5 mt-5">
            <div class="row">
                <div class="col-lg-6 col-12 py-5 px-5">
                    <img src="adminPanel/<?php echo $get_product['0']['img']?>" alt="main" id="productimg" class="img-fluid ">
               </div>
                <div class="col-lg-6 col-12 ">
                    <p class="my-5 font-weight-bold text-capitalize font-roboto"><a href="mystore.php" class=" text-dark ">Home</a>  / <a href="categories.php?id=<?php echo $get_product['0']['categories_id'];?>" class="text-dark "> <?php echo $get_product['0']['categories'];?></a>  / <?php echo $get_product['0']['name']?> </p>
                    <h1 class="text-bold text-capitalize"> <?php echo $get_product['0']['name']?></h1>
                    <h5 class="font-weight-bold"><span class="text-muted">₹<del><?php echo $get_product['0']['mrp']?> </del> </span> &nbsp;₹<?php echo $get_product['0']['price']; ?></h5>
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
                    <select name="" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select><br></p></div>
                    
                     <a href="" onclick="myFunction()" class="btn btn-danger my-3 text-uppercase font-weight-bold" style="letter-spacing:1px;">Add to cart</a><br>
                    <h3 class="my-3">Product Description <i class="fas  fa-indent" class="float-right"></i></h3>
                    <p class="text-capitalize my-3 font-roboto"><?php echo $get_product['0']['description']?></p>
                    <h5 class="my-3 text-capitalize font-roboto "> <span class="text-muted ">Category : </span><?php echo $get_product['0']['categories'];?> </h5>
                </div>
            </div>
        </div>
        <!-- Single product deails ends-->

<!-- title-->
<div class="container px-5">
    <div class="row">
        <div class="col-lg-6 col-6">
            <h4><ul>Related Products</ul></h4>
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
    <footer>
        <div class="footer bg-dark">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-12">
                        <h6 class="text-white">Download our App</h6>
                        <small class="text-muted">Download our App for Android and Apple IOS devices.</small><br>
                        <img src="images/play-store.png " class="img-fluid d-inline w-25 mx-3" alt=""><img
                            src="images/app-store.png" alt="" class="img-fluid d-inline w-25">
                    </div>
                    <div class="col-lg-4 col-sm-4 col-12 my-3">
                        <h4 class="text-white font-gugi">Samagra Store</h4>
                        <small class="text-muted"> Our Purpose is to provide best Quality products at fair
                            prices.</small>

                    </div>

                    <div class="col-lg-4 col-sm-4 col-12">
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