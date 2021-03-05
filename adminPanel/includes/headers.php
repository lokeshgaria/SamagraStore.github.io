<?php session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server, $username, $password, $database);
include 'functions.php';

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
//deleting category 
if (isset($_GET['type'])) {

    $type = $_GET['type'];

  if ($type == 'delete') {
        $id = $_GET['id'];
        $delete_sql = "delete  from categories  where id='$id'";
        mysqli_query($conn, $delete_sql);
    }
}
//deleting products 
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $delete_sql = "delete  from product where id='$id'";
    mysqli_query($conn, $delete_sql);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="https://i.pinimg.com/236x/2d/96/4a/2d964a6bf37d9224d0615dc85fccdd62--shopping-cart-logo-info-graphics.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Awesome cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/93e0313e1a.js" crossorigin="anonymous"></script>
    <!--custom style sheet-->
    <link rel="stylesheet" href="style.css">

  
    
    <title>Admin Dashboard |  Apex store </title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light  ">
        <button class="navbar-toggler ml-auto bg-light mb-2" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <div class="container-fluid ">
                <div class="row ">
                    <!--sidebar -->
                    <div class="col-lg-2  sidebar fixed-top ">
                        <a href="http://localhost/SamagraStore.github.io/" class="navbar-brand text-warning d-block mx-auto text-start font-weight-bold py-3 mb-4 bottom-border">Apex Store</a>
                        <div class="bottom-border ">
                            <a href="" class="text-white nav-link  text-capitalize font-weight-bold ">
                                <h5> Hello , <?php echo $_SESSION['username']; ?></h5>
                            </a>
                        </div>
                        <ul class="navbar-nav  flex-column mt-2">
                            <li class="nav-item w-100"><a href="#" id="category" class="text-light nav-link mb-2 current  " style="padding : 7px 0 ;"><i class="fas fa-home  fa-lg mx-2 text-light"></i>Categories Master</a>
                            </li>
                            <li class="nav-item w-100"><a href="#" id="product" class="text-light nav-link mb-2 sidebar-link "> <i class="fas fa-tshirt  fa-lg mx-2 text-light"></i>Product Master</a>
                            </li>

                            </li>
                            <li class="nav-item w-100"><a href="#" id="order" class="text-light nav-link mb-2 sidebar-link "><i class="fas fa-shopping-cart  fa-lg mx-2 text-light"></i>Order Master</a>
                            </li>
                            <li class="nav-item w-100"><a href="#" id="user" class="text-light nav-link mb-2 sidebar-link "><i class="fas fa-tags  fa-lg mx-2 text-light"></i>User Master</a>
                            </li>

                            </li>
                            <li class="nav-item w-100"><a href="#" id="contact" class="text-light nav-link mb-2 sidebar-link "> <i class="fas fa-envelope-open-text fa-lg mx-2 text-light "></i>Contact Us</a>
                            </li>
                            <li class="nav-item w-100"><a href="" class="text-light nav-link mb-2 sidebar-link "><i class="fas fa-cogs  fa-lg mx-2 text-light"></i>Setting</a>
                            </li>

                        </ul>
                    </div>
                    <!--side bar ends-->

                    <!-- top nav-->
                    <div class="col-lg-10 ml-auto bg-dark fixed-top py-3  top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-capitalize"> Dashboard</h4>
                            </div>
                            <div class="col-md-5">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" name="" id="" placeholder="Search ..." class="text-center search-input">
                                        <button type="button" class="btn btn-white search-btn mx-3"><i class="fas fa-search text-danger  " data-toggle="tooltip" data-placement="bottom" title="Search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a href="inbox.html" class="nav-link"><i class="fas fa-lg fa-comments text-muted" data-toggle="tooltip" data-placement="bottom" title="Inbox"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link"><i class="fas fa-bell fa-lg text-muted" data-toggle="tooltip" data-placement="bottom" title="notification"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item ml-md-auto">
                                        <a href="" class="nav-link" data-toggle="modal" data-target="#sign-out"> <i class="fas fa-sign-out-alt fa-lg text-danger" data-toggle="tooltip" data-placement="bottom" title="Log Out"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end of top navbar-->
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end-->
    <!-- Modal starts -->

    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>