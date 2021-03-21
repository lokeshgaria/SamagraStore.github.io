<footer>
      <!-- Our collection --->
      <div class="container-fluid col-lg-11 my-5">
        <h3 class="font-gugi"> Our collections</h3>
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
    <div  class="container mr-3">
       <img src="./images/chat.png" alt="chat logo" class="chat btn box bounce-7" data-toggle="modal" data-target="#exampleModalCenter">
    </div>
    <!-- Button trigger modal -->
 

    
             
                <!-- Button trigger modal -->
                 

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-capitalize font" id="exampleModalLongTitle">start your conversation here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body ModelBody font">
                                    <ul class="list-group m-2" id="chatwindow">





                                    </ul>
                                    <img src="https://thumbs.gfycat.com/MilkyLateDuiker-size_restricted.gif" alt="" id="typing" width="50px">
                                    <div class="container-fluid d-flex my-3">
                                        <input type="text" class="form-control w-100 radius" name="value" id="chat"><span> <button type="button" class="btn btn-primary radius   font" onclick="chatbot()">Send</button></span>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

  

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
            <h6 class="text-white font-roboto text-center"> Copyright &copy; Apex Store <?php echo date('Y') ?> Made by Lokesh Garia ♈
            </h6>
        </div>

    </div>
</footer>
<!-- Bootstrap js cdn -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function manage_cart(pid, type) {
        if (type == "update") {

            var qty = $("#" + pid + "qty").val();
            console.log(qty);

        } else {
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
                if (type == 'update' || type == 'remove') {
                    window.location.reload();
                }
                if (params == 0) {
                    alert("Out of stock ");
                    return false;
                } else {
                    $('#cartNotification').html(params);
                }

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

            if (name == "" || phone == "" || email == "" || msg == "") {
                $('#error').text("ERROR ,  please fill the form completely");
            } else {
                $.ajax({
                    url: "feedback.php",
                    type: "POST",

                    data: {
                        name: name,
                        phone: phone,
                        email: email,
                        feedback: msg
                    },
                    success: function(params) {
                        if (params == 1) {
                            $('#error').text("Thankyou for your feedback");
                        }
                    }
                })
            }


        })
        $('#profile').hover(

            function() {
                $('#dropdownProfile').css({
                    "visibility": "visible"
                });
            },

            function() {
                $('#dropdownProfile').css({
                    "visibility": "hidden"
                });
            }
        );

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
            var email = $('#emailLogin').val().trim();
            var password = $('#passLogin').val().trim();
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
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    function wishlist(id, type) {
        var ids = id;
        var types = type;

        $.ajax({
            url: "wishlist.php",
            type: "POST",
            data: {
                id: ids,
                type: type
            },
            success: function(data) {
                window.location.reload();
            }
        })

    }
</script>
<script>
        function chatbot() {
            let date = new Date();
            var currHour = date.getHours();
            var currMin = date.getMinutes();
            var end = "";
            if (currHour > 12) {
                end = "pm";
                currHour = currHour - 12;
                currHour = currHour + ":" + currMin + " " + end;
            } else {
                end = "am";
                currHour = currHour + ":" + currMin + " " + end;
            }

            var chatValue = document.getElementById('chat').value;
            if (chatValue) {
                var tag = `<li class="  text-right">
                                    <span class="text-muted mx-3">${currHour}</span><span class="font-weight-bold">Me</span>
                                    <img src="https://cdn2.vectorstock.com/i/1000x1000/20/76/man-avatar-profile-vector-21372076.jpg" alt="" width="50px" class="my-2">
                                    <br>
                                    <p class="userMsg ">${chatValue}</p>
                                </li>`;

                $('#chatwindow').append(tag);

                $.ajax({
                    url: 'sendchat.php',
                    type: "POST",
                    data: {
                        chat: chatValue
                    },
                    success: function(result) {
                        var tag = `<li class="  text-left"><img src="https://image.freepik.com/free-vector/cute-smiling-robot-bot-modern-flat-cartoon-character-illustration-isolated-white-background-friendly-robot-chat-bot-concept_92289-1389.jpg" alt="" width="50px" class="my-2"><span class="font-weight-bold">Bot</span> <span class="text-muted mx-3">${currHour}</span><br><p class="userMsg text-capitalize ">${result}</p></li>`;
                        
                        $('#typing').css("display","block");
                        setTimeout(function  () {
                         $('#typing').css("display","none");
                        },700);
                        $('#chatwindow').append(tag).delay(2000);
                        $('.ModelBody').scrollTop($('.ModelBody')[0].scrollHeight);
                        $('#chat').val('');
                    }
                })
            } else {
                alert("please enter some text");
            }


        }
    </script>
</body>

</html>