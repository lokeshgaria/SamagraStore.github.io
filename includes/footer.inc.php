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
                        <h4 class="text-white font-gugi">Samagra Store</h4>
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
                <h6 class="text-white font-roboto text-center"> Copyright &copy; Samagra Store Made by Lokesh Garia
                </h6>
            </div>

        </div>
    </footer>
    <!-- Bootstrap js cdn -->
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
   
        function manage_cart(pid, type) {
            var qty = $('#qty').val();
            console.log(qty);
            $.ajax({
                url: "manageCart.php",
                type: "POST",
                data: {
                    qty: qty,
                    id: pid,
                    type: type
                },
                success: function (params) {
                    $('#cartNotification').html(params);
                }
            })
        }
  
</script>
</body>

</html>