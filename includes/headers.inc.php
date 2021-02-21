<?php
session_start();
include "connection.inc.php";
include "function.inc.php"; 
 
$msg = "";
if(isset($_SESSION['username'])){
    $userName = $_SESSION['username'];
}else {
     $userName= "SignIn/Register";
}


 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://i.pinimg.com/236x/2d/96/4a/2d964a6bf37d9224d0615dc85fccdd62--shopping-cart-logo-info-graphics.jpg" type="image/x-icon">
    <title>Online Store</title>
    
    <!-- jQuery cdn-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

<body class="bg-light">
    <!--- Header  -->

    <header>
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-12 text-start">
                    <h2 class="my-md-3 site-title primary-color text-white"> <span class="font-sofia"> S</span>amagra
                        Store</h2>
                </div>
                <div class=" col-lg-9 col-md-6 col-12 text-right links  ">
                    <p class="text-white  site-title my-3 text-capitalize d-inline" style="position: relative;top: 22px;font-weight: normal; text-decoration:none"><a href="registerSignup.php" class="text-white" style="text-decoration:none"> <?php echo $userName; ?></a>
                    </p>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
        </div>
        <!--  Navbar   -->
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="nav">
                            <li ><a class=" nav-link  text-uppercase" href="index.php">Home <span class="sr-only">(current)</span></a></li>

                             
                            <?php 
                            $getcatquerry = "select * from categories where status = 'active'";
                            $cat_res = mysqli_query($conn, $getcatquerry);
                            while ($row = mysqli_fetch_assoc($cat_res)) { ?>
                            <li><a class="  nav-link text-uppercase" href="categories.php?id=<?php echo $row['id'];?>"><?php echo $row['categories']?></a> </li>
                            <?php  } ?>
                            <li ><a class="  nav-link text-uppercase" href="product.php">Products</a>
                            </li>
                            <li ><a class=" nav-link text-uppercase" href="#contactus">Contact us</a>
                            </li>
                            <li  ><a class="  nav-link text-uppercase" href="#aboutus"> About us</a></li>
                        </ul>
                    </div>

                </div>

                <div class="navbar-nav " id="search">
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                        <a href="cart.php" target="_blank"><i class="fas fa-shopping-cart p-2 text-secondary"></i></a>
                    </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here --> 