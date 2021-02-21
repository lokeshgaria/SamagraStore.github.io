<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href="https://booster.io/wp-content/uploads/empty-cart-button-e1438361855330.png"
        type="image/x-icon">
    <title> Cart - Samagra |Online Store</title>

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
                        
                        <a class="nav-item nav-link text-uppercase" href="product.php">Collection</a>
                        <a class="nav-item nav-link text-uppercase" href="productCopy.php">Store</a>
                        
                    </div>

                </div>

                <div class="navbar-nav " id="search">
                    <form class="form-inline my-2 my-lg-0 ">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    </form>
                    <a href="cart.html">
                        <li class="nav-item border rounded-circle mx-2 search-icon">
                            <i class="fas fa-shopping-cart p-2 text-secondary"></i>
                    </a>
                    </li>
                </div>
            </nav>
        </div>
    </header>
    <!-- /header ends here -->
    <main>
        <!--
    cart items details 
-->
        <div class="container ">
            <div class="row">
              <div class="col-lg-12 col-12 p-0 table-responsive">
                <table class=" table">
                    <tr class="bg-warning text-center class=" text-center">
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td class=" ">
                            <div class="container d-flex flex-wrap flex-column ">
                                <img src="images/product-1.jpg" alt="" class="img-fluid my-3  "
                                    style="width: 100px; height: 100px;">
                                <p>Red printed T-shirt</p>
                                <small>₹ 150.00</small>
                                <a href="">Remove</a>
                            </div>
                        </td>
                        <td> 
                            <ul class="pagination set-quantity my-5">
                                <li class="page-item"><button onclick="decrease( 'input-text','itemvalue')" type="button" class="page-link"><i class="fas fa-minus"></i></button></li>
                                <li class="page-item"><input type="text" style="width: 77px;" class=" text-center form-control" value="1" id="input-text" name=""></li>
                                <li class="page-item"><button onclick="increase('input-text','itemvalue')" type="button" class="page-link"><i class="fas fa-plus"></i></button></li>
                            
                              </ul>
                        </td>
                        <td><h3>₹<span id="itemvalue"> 150.00</span> </h3> </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="container d-flex flex-wrap flex-column">
                                <img src="images/product-2.jpg" alt="" class="img-fluid my-3"
                                    style="width: 100px; height: 100px;">
                                <p>Red printed T-shirt</p>
                                <small>₹ 250.00</small>
                                <a href="">Remove</a>
                            </div>
                        </td>
                        <td>
                            <ul class="pagination set-quantity my-5">
                                <li class="page-item"><button onclick="decrease('input-text1','itemvalue1')" type="button" class="page-link"><i class="fas fa-minus"></i></button></li>
                                <li class="page-item"><input type="text" style="width: 77px;" class=" text-center form-control" value="1" id="input-text1" name=""></li>
                                <li class="page-item"><button onclick="increase('input-text1','itemvalue1')" type="button" class="page-link"><i class="fas fa-plus"></i></button></li>
                            
                              </ul>
                        </td>
                        <td><h3>₹<span id="itemvalue1"> 250.00</span> </h3></td>
    
                    </tr>
                    <tr>
                        <td>
                            <div class="container d-flex flex-wrap flex-column">
                                <img src="images/product-3.jpg" alt="" class="img-fluid my-3"
                                    style="width: 100px; height: 100px;">
                                <p>Red printed T-shirt</p>
                                <small>₹ 150.00</small>
                                <a href="">Remove</a>
                            </div>
                        </td>
                        <td>
                            <ul class="pagination set-quantity my-5">
                                <li class="page-item"><button onclick="decrease('input-text2' ,'itemvalue2')" type="button" class="page-link"><i class="fas fa-minus"></i></button></li>
                                <li class="page-item"><input type="text" style="width: 77px;" class=" text-center form-control" value="1" id="input-text2" name=""></li>
                                <li class="page-item"><button onclick="increase('input-text2','itemvalue2')" type="button" class="page-link"><i class="fas fa-plus"></i></button></li>
                            
                              </ul>
                        </td>
                        <td><h3>₹<span id="itemvalue2"> 150.00</span> </h3></td>
    
                    </tr>
                </table>
              </div>
            </div>
          
            <div class="container">
                <table class="total-amount">
                    <tr>
                        <th>Subtotal</th>
                        <td class="float-right"><p>₹<span id="subtotal">550.00</span></p>  </td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td class="float-right"><p>₹<span id="tax_amount">50.00</span></p> </td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td class="float-right "><strong> <p >₹<span id="total_amount">600.00</span></p></strong></td>
                    </tr>
                </table>
            </div>
        </div>

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
        <script>
          var TotalBill = document.getElementById('total_amount');
          var TaxAmount = document.getElementById('tax_amount');
          var  subtotal = document.getElementById('subtotal');
          function decrease(incdec , itemval){
              var itemvalue = document.getElementById(incdec);
              var itemval = document.getElementById(itemval);  
              if (itemvalue.value < 2) {
                  itemvalue.value = 1;
                  alert("Min quantity allowed is 1 ");
                  itemvalue.style.background = "green";
                  itemvalue.style.color = "white";
              }

              else{
                  itemvalue.value = parseInt(itemvalue.value) -1;
                  itemvalue.style.background = "white";
                  itemvalue.style.color = "black";
                  itemval.innerHTML = parseInt(itemval.innerHTML) - 150;
                  subtotal.innerHTML = parseInt(subtotal.innerHTML) - 150;
                  TotalBill.innerHTML = parseInt(subtotal.innerHTML) + parseInt(TaxAmount.innerHTML);
              }
          }

          function increase(incdec , itemval){
            var itemvalue = document.getElementById(incdec);
            var itemval = document.getElementById(itemval);  
              if (itemvalue.value > 10) {
                  alert("Max quantity allowed is 10 ");
                  itemvalue.style.background = "red";
                  itemvalue.style.color = "white";
                  itemvalue.value = 10;
              }

              else{
                  itemvalue.value = parseInt(itemvalue.value) + 1;
                  itemvalue.style.background = "white";
                  itemvalue.style.color = "black";
                  itemval.innerHTML = parseInt(itemval.innerHTML) + 150;
                  subtotal.innerHTML = parseInt(subtotal.innerHTML) + 150;
                  TotalBill.innerHTML = parseInt(subtotal.innerHTML) + parseInt(TaxAmount.innerHTML);
              }
          }
          
        </script>
</body>

</html>