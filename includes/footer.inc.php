<footer>
    <div class="footer bg-dark">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-12 my-3">
                    <h5 class="text-white text-left">Download our App</h5>
                    <small class="text-muted ">Download our App for Android and Apple IOS devices.</small><br>
                    <img src="images/play-store.png " class="img-fluid d-inline w-25 mx-3 py-2" alt=""><img src="images/app-store.png" alt="" class="img-fluid d-inline w-25">
                </div>
                <div class="col-lg-4 col-sm-4 col-12 my-3">
                    <div class="d-flex">
                    <h4 class="text-white font-gugi">Apex Mart</h4> <img src="https://image.freepik.com/free-vector/aries-head-symbol_91-8232.jpg" alt="" class="store-logo" style="    width: 39px; height: 39px; border-radius: 39px; margin: -10px 26px">
                    </div>
                    <small class="text-muted"> Our Purpose is to provide best Quality products at fair
                        prices.</small>

                </div>

                <div class="col-lg-4 col-sm-4 col-12 my-3">
                    <h5 class="text-white font-roboto">Follow Us</h5>
                    <a href="#" class="nav-link d-inline text-white"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="nav-link d-inline text-danger "><i class="fab fa-instagram"></i></a>
                    <a href="#" class="nav-link d-inline"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="nav-link d-inline text-danger"><i class="fab fa-youtube"></i></a>
                </div>

            </div>
        <h6 class="text-white font-roboto text-center"> Copyright &copy;  Apex Store  <?php echo date('Y')?> Made by Lokesh Garia ♈
            </h6>
        </div>

    </div>
</footer>
<!-- Bootstrap js cdn -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function manage_cart(pid, type) {
         if(type=="update"){
           
            var qty = $("#"+pid+"qty").val();
            console.log(qty);
           
         }else{
            var qty = $('#qty').val();  
         }
       
        
        $.ajax({
            url: "manageCart.php",
            type: "POST",
            data: {
                qty: qty,
                id: pid,
                type: type
            },
            success: function(params) {
                if(type=='update'|| type=='remove'){
                  window.location.reload();
                }
                $('#cartNotification').html(params);
            }
        })
    }
</script>

<script>
    //add customer feedback

    $(document).ready(function() {
        $('#feedbackbutton').click(function() {
            
                

               var name = $('#username').val();
               var phone = $('#phone').val();
               var email = $('#email').val();
               var msg = $('#message').val();
             
               if (name==""||phone==""||email==""||msg=="") {
                    $('#error').text("ERROR ,  please fill the form completely");
               }else{
                $.ajax({
                    url: "feedback.php",
                    type: "POST",
                     
                    data: {
                        name : name,
                        phone : phone,
                        email : email,
                        feedback : msg
                    },
                    success: function(params) {
                      if(params==1){
                        $('#error').text("Thankyou for your feedback"); 
                      }
                    }
                })
               }
              
            
        })
    });
</script>
<script>
    // insert data using ajax
    $(document).ready(function() {
        $('#create').on("click", function() {

            var name = $('#name').val();
            var email = $('#emailregister').val();
            var number = $('#number').val();
            var pass = $('#pass').val();
            var cpass = $('#cpass').val();

            console.log(name + " " + email + " " + number + " " + pass);

            if (name == "" || email == "" || number == "" || pass == "" || cpass == "") {
                $('#insertMsg').text("Fill All Input Fileds").fadeIn(1000)
                setTimeout(function() {
                    $('#insertMsg').text("Fill All Input Fields").fadeOut(1000)
                }, 2000);
            } else if (pass !== cpass) {
                $('#insertMsg').text("password and confirm password are not equal ").fadeIn(1000)
                setTimeout(function() {
                    $('#insertMsg').text("password and confirm password are not equal").fadeOut(1000)
                }, 2000);
            } else {
                $.ajax({
                    url: "insertUserdata.php",
                    type: "POST",
                    data: {
                        username: name,
                        email: email,
                        contact: number,
                        password: pass
                    },
                    success: function(data) {
                        if (data == 1) {
                            $('#insertMsg').text(" account created successfully").fadeIn(1000)
                            setTimeout(function() {
                                $('#insertMsg').text(" account created successfully").fadeOut(1000)
                            }, 2000);
                        } else if (data == 0) {
                            $('#insertMsg').text("Data not inserted ").fadeIn(1000)
                            setTimeout(function() {
                                $('#insertMsg').text("Data not inserted ").fadeOut(1000)
                            }, 2000);
                        } else {
                            $('#insertMsg').text("email already exist try to login ").fadeIn(1000)
                            setTimeout(function() {
                                $('#insertMsg').text("email already exist try to login ").fadeOut(1000)
                            }, 2000);
                        }
                    }
                })

            }

        })

        $('#login').on("click", function() {
            var email = $('#emailLogin').val();
            var password = $('#passLogin').val();
            var check = $('#check').val();
            console.log(email + " " + password);
            $.ajax({
                url: "userLogin.php",
                type: "POST",
                data: {
                    email: email,
                    password: password,
                    check: check
                },
                success: function(data) {
                    if (data == 1) {
                        window.location.reload();
                    } else {
                        $('#passMsg').text(data);
                    }

                }
            })
        })
    });
</script>
</body>

</html>