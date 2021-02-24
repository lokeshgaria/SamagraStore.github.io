<?php 
require 'function.inc.php';
   require 'connection.inc.php';

    $cat_id=mysqli_real_escape_string($conn,$_GET['id']);
   if ( $cat_id>0) {
    $get_product=get_product($conn,'',$cat_id);  
   }else {
         ?><script>window.location.href='mystore.php';</script><?php
        die();
   }
   
   
    $msg="";
                
    $getcatquerry = "select * from categories where status = 1";
    $cat_res = mysqli_query($conn,$getcatquerry);
   
    $cat_array = array();

    while ( $row = mysqli_fetch_assoc($cat_res)) {
        $cat_array[] = $row;
    }

    if (isset($_POST['submit'])) {
     $name = $_POST['newname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $comment = $_POST['comment'];
     $date = $_POST['date'];
 
                       
     $sql = "INSERT INTO `contactus` (`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES (NULL, '$name', '$email', '$phone', '$comment', '$date')";
 
      $res = mysqli_query($conn , $sql);
 
     if ($res) {
         ?>
         <script>alert("Feedback sent Mystore Thankyou for your feedback ..");</script>
         <?php          
     }else {
            ?>
             <script>alert(" oops please try again...");</script>
            <?php               
        }
                       
    }

    if (isset($_POST['create'])) {


        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $usernumber = $_POST['usernumber'];
        $userdate = $_POST['userdate'];

        $_SESSION['customer'] = $username;

        $sqlinsert = " INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `added_on`) VALUES (NULL, '$username', '$useremail', '$usernumber', '$userdate')";
      
        $res = mysqli_query($conn ,$sqlinsert);
        if ($res) {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thankyou!</strong> Your Account is registered with us.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>
            <?php
        }else {?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>oops!</strong> Your Account is not registered Try Again!!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>
<?php        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href=" https://booster.io/wp-content/uploads/empty-cart-button-e1438361855330.png"
        type="image/x-icon">
    <title> Beats - Samagra |Online Store</title>

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
                    <h2 class="my-md-6 site-title primary-color text-white"> <span class="font-sofia"> S</span>amagra
                        Store</h2>
                </div>
                <div class="col-md-4 col-12 my-3 text-right links">
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
                    <ul class="nav">
                    <li class="nav-item"><a class=" nav-link  text-uppercase" href="mystore.php">Home <span
                                class="sr-only">(current)</span></a></li>    

                         <?php foreach ($cat_array as $value) { ?>
                          <li class="nav-item"><a class="nav-link text-uppercase" href="categories.php?id=<?php echo $value['id'];?>"><?php echo $value['categories'];?></a></li>
                         <?php } ?>
                        <li class="nav-item"><a class="  nav-link text-uppercase" href="product.php">Products</a></li>
                        <li class="nav-item"><a class=" nav-link text-uppercase" href="#contactus">Contact us</a></li>
                        <li class="nav-item"><a class="  nav-link text-uppercase" href="#aboutus"> About us</a></li>
                    </ul>
                    </div>

                   

                </div>

                <div class="navbar-nav " id="search">
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <a href="cart.html"><i class="fas fa-shopping-cart p-2 text-muted"></i>
                        </a> </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here -->
    <main>


        <!-- welcome image  -->
        <div class="container-fluid welcome">
            <div class="line">
                <h1 class="text-uppercase text-white text-weight-bold text-center beats-heading ">Pump up the music</h1>
                <h2 class="text-capitalize text-white text-center sub-heading">one-stop Shop for the the best headsets!
                </h2>
            </div>
        </div>
        <!-- welcome image   ends -->
        <!-- Featured Products start here -->

        <div class="container px-5">
            <div class="row py-5">
                <div class="col-lg-6 col-6">
                    <h3>All Headset collection </h3>
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
            <?php if (count($get_product)>0){
                  foreach ($get_product as $list) {?>
                    <div class="col-lg-3 col-sm-3 col-6">
                       <a href="product1.php?id=<?php echo $list['id']; ?> "><img src="adminPanel/<?php echo $list['img']?>"  class="img-fluid" style="height:310px; width:240px;"></a> 
                        <p class="text-capitalize font-weight-bold text-center my-2"> <?php echo $list['name']?></p>
                        <div class="rating text-center">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <p class="font-weight-bold"> <span class="text-muted text-center"> ₹<?php echo $list['mrp']?></span> &nbsp;  ₹<?php echo $list['price']?></p>
                        </div>
                    </div>
                    <?php } ?>
            <?php } else {
                 $msg = "No products added  yet!!";
            ?> <p class="text-danger font-weight-bold text-capitalize"><?php echo $msg; ?></p>       
            <?php } ?>
          
            </div>
        </div>
        <!-- All Products ends here -->
        <!-- Featured Products start here -->
        <div class="container " id="featured">
            <h3 class=" text-center my-5 border-bottom"> Popular Products</h3>
            <div class="row ">
                <div class="col-lg-3 col-sm-3 col-6">
                    <img src="https://m.media-amazon.com/images/I/31JlzuFiFgL._AC_SR160,160_.jpg" alt="product1"
                        class="img-fluid">
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
                    <img src="https://m.media-amazon.com/images/I/41i3BkFyqdL._AC_SR160,160_.jpg" alt="product1"
                        class="img-fluid">
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
                    <img src="https://images-eu.ssl-images-amazon.com/images/I/61pio7PNxFL._AC_UL160_SR160,160_.jpg"
                        class="img-fluid">
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
                    <img src="https://images-eu.ssl-images-amazon.com/images/I/61US9yCTRJL._AC_UL160_SR160,160_.jpg"
                        class="img-fluid">
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