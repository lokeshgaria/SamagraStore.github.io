<?php

include "connection.inc.php";
include "includes/function.inc.php";
include "includes/cart.inc.php";

$object = new add_cart();


$totalCount = $object->totalProduct();



if (isset($_SESSION['username'])) {
    $userName = $_SESSION['username'];
    $toggle = '<i class="fas fa-sign-out-alt" data-toggle="tooltip" title="logout" data-placement="bottom" > </i>';
    $display = "inline-block";
    $uid = $_SESSION['user_id'];
    $seleWish = mysqli_query($conn, "select * from wishlist where user_id='$uid'");
    $wishCount = mysqli_num_rows($seleWish);
} else {
    $userName = "SignIn/Register";
    $toggle = "";
    $wishlist = "none";
    $display = "none";
    $wishCount = "";
}
if (isset($_SESSION['email'])) {
    $email =   $_SESSION['email'];
    $selectUserData = mysqli_query($conn, "select * from users where email ='$email'");
    $userData = mysqli_fetch_assoc($selectUserData);
    $username = $userData['name'];
    $phone = $userData['mobile'];
    $email = $userData['email'];

    $attr = "value";
} else {
    $email = "";
    $username = "";
    $phone = "";
    $attr = "";
}
$metatitle = "";
$metaDesc = "";
$metaKey = "";
if (isset($_GET['id'])) {
    $cat_id = $_GET['id'];
    $select = mysqli_query($conn, "select * from product where categories_id = '$cat_id'");
    $fetdata = mysqli_fetch_assoc($select);

    $metatitle = $fetdata['meta_title'];
    $metaDesc = $fetdata['meta_desc'];
    $metaKey = $fetdata['meta_keyword'];
} else {
    $metatitle = "Apex Mart";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $metaDesc; ?>">
    <meta name="keywords" content="<?php echo $metaKey; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://image.freepik.com/free-vector/aries-head-symbol_91-8232.jpg" type="image/x-icon">
    <title><?php echo $metatitle; ?></title>

    <!-- jQuery cdn-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="includes/main.js"></script>
    <!-- Custom Style Sheet-->
    <link rel="stylesheet" href="style/style.css">
    <!--sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-6 col-3 text-start d-flex">
                    <img src="https://image.freepik.com/free-vector/aries-head-symbol_91-8232.jpg" alt="" class="store-logo" style="    width: 39px; height: 39px; border-radius: 39px; margin: 13px">
                    <h2 class="my-md-3  site-title primary-color text-white" id="title"> <span class="font-sofia"> A</span>pex Mart</h2>

                </div>
                <div class=" col-lg-6 col-md-6 col-9 text-right links ml-auto ">
                    <div>
                        <p class="text-white  site-title m-3 text-capitalize d-inline" style="position: relative;top: 22px;font-weight: normal; text-decoration:none"><a href="registerSignup.php" class="text-white" style="text-decoration:none"> <?php echo $userName; ?></a>

                        <p class="text-white  site-title text-capitalize d-inline" style="position: relative;top: 22px;font-weight: normal; text-decoration:none"><a href="myorder.php" class="text-white" style="text-decoration:none ; display: <?php echo $display; ?>">My order</a>



                            <a href="logout.php" class="text-white  m-3 "><?php echo $toggle; ?></a>
                        </p>


                    </div>

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
                            <li><a class=" nav-link  text-uppercase" href="index.php">Home <span class="sr-only">(current)</span></a></li>


                            <?php
                            $getcatquerry = "select * from categories where status = 'active'";
                            $cat_res = mysqli_query($conn, $getcatquerry);
                            while ($row = mysqli_fetch_assoc($cat_res)) { ?>
                                <li id="<?php echo $row['id']; ?>"><a class="  nav-link text-uppercase" href="categories.php?id=<?php echo $row['id']; ?>"><?php echo $row['categories'] ?>
                                        <ul id="subCatDrop">
                                            <?php
                                            $cat_id = $row['id'];
                                            $select = mysqli_query($conn, "select * from sub_categories where category_id=$cat_id");

                                            while ($getSub = mysqli_fetch_assoc($select)) { ?>
                                                <li><?php  echo $getSub['subCat'] ?></li>
                                            <?php } ?>
                                        </ul>
                                    </a> </li>
                            <?php  } ?>

                            <li><a class=" nav-link text-uppercase" href="#contactus">Contact us</a>
                            </li>
                            <li><a class="  nav-link text-uppercase" href="#aboutus"> About us</a></li>
                        </ul>
                    </div>

                </div>

                <div class="navbar-nav " id="search">
                    <form action="search.php" class="form-inline my-2 my-lg-0 " method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search.." aria-label="Search" name="value" required id="searchinput">

                        <!--<button type="submit" class=" border rounded-circle bg-light " id="submitsearch" style="outline: none;"> <i style="padding: 8px 3px;" class="fas text-muted fa-search"></i></button> -->
                    </form>
                    <li class="nav-item  ">

                        <a href="cart.php" style="text-decoration: none;"><i class="fas   border rounded-circle fa-shopping-cart p-2 text-secondary"></i> </a><span id="cartNotification" class="bg-danger   text-white"><?php echo $totalCount; ?></span>

                        <a href="wishlistTable.php" class="border rounded-circle p-2" style="display: <?php echo  $wishlist; ?>"><i class="fas text-danger fa-heart"></i></a><span id="wishlistnotification" style="display :<?php echo $display; ?>" class="bg-danger   text-white"><?php echo  $wishCount; ?></span>

                    </li>

                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here -->