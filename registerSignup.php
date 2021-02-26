<?php

include "includes/headers.inc.php";
$msg = "";
$loginmsg = "";


?>
 <main>
 <div class="container my-5">
        <div class="row">
            <!-- Register modal -->
            <div class="col-lg-6">
               
                <!-- Modal -->
                <div class="modal-content  ">
                    <div class="modal-header">
                        <h5 class="modal-title text-info  font-gugi" id="exampleModalLabel ">Create Your
                            Account </h5>
                    </div>
                    <div class="modal-body">
                        <form action=" " method=" " id="registerform">
                            <input class="form-control form-control-sm my-3" type="text" placeholder="Enter your Name" id="name">

                            <input class="form-control form-control-sm " type="text" placeholder="Enter Your Email " id="emailregister">

                            <input class="form-control form-control-sm my-3" type="text" placeholder="Your Contact number" id="number">

                            <input class="form-control form-control-sm my-3" type="password" placeholder=" Enter Password" id="pass">

                            <input class="form-control form-control-sm my-3" type="password" placeholder=" Confirm Password " id="cpass">


                            <div>
                                <p class="text-danger font-weight-bold text-capitalize  my-2 " id="msgerror"></p>
                            </div>
                            <div class="modal-footer my-2">

                                <input type="button" value="create account" id="create" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!--Login Modal -->
                <div class="modal-dialog " role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title font-gugi primary-color" id="exampleModalLabel">Sign in to
                                your Account</h5>
                        </div>
                        <div class="modal-body">
                            <form action=" " method="post" >
                                <input class="form-control form-control-sm my-3" id="emailLogin" type="text" placeholder="Enter Email Id " id="email">
                                <input class="form-control form-control-sm " id="passLogin" type="password" placeholder="Enter Password" id="password">
                                <div>
                                    <p class="text-danger font-weight-bold my-2 text-capitalize" id="passMsg"> </p>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="login" class="btn btn-success w-100  ">Log In</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <p id="insertMsg" class="text-center text-capitalize">hello</p>
    </div>
 </main>
    
<?php include "includes/footer.inc.php"; ?>
<!---insert data in database --->
<script>
  // insert data using ajax
    $(document).ready(function() {
        $('#create').on("click", function() {

            var name = $('#name').val();
            var email = $('#emailregister').val();
            var number = $('#number').val();
            var pass = $('#pass').val();

            console.log(name+ " "+email+" "+ number+" "+pass);
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
                    if (data==1) {
                        $('#insertMsg').text("Data inserted successfully").fadeIn(1000)
                        setTimeout(function() {
                            $('#insertMsg').text("Data inserted successfully").fadeOut(1000)
                        }, 2000);
                    }else if (data==0){
                        $('#insertMsg').text("Data not inserted ").fadeIn(1000)
                        setTimeout(function() {
                            $('#insertMsg').text("Data not inserted ").fadeOut(1000)
                        }, 2000);
                    }else{
                        $('#insertMsg').text("Fill All Input Fileds").fadeIn(1000)
                        setTimeout(function() {
                            $('#insertMsg').text("Fill All Input Fields").fadeOut(1000)
                        }, 2000);  
                    }
                }
            })

        })

        $('#login').on("click" ,function  () {
         var email    = $('#emailLogin').val(); 
         var password = $('#passLogin').val(); 
         console.log(email+" "+ password);
         $.ajax({
             url:"userLogin.php",
             type:"POST",
             data : {
                 email : email,
                 password : password
             },
             success : function  (data) {
                 if(data==1){
                     window.location.replace("http://localhost/SamagraStore.github.io/index.php?email="+email);
                 }else{
                    $('#passMsg').text(data);
                 }
                
             }
         }) 
        })
    });
</script>