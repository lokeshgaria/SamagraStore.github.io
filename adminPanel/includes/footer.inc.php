<div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
    <footer class="p-2 bg-light ">
        <p>copyright &copy; Samagara Store <?php echo date('Y'); ?></p>
    </footer>
</div>
</div>
</div>



</section>

<!--tables ends -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
<script>
    $(document).ready(function() {
        $('.status').click(function() {
            var value = $(this).text();
            var id = $(this).attr("id");
            var element = $(this);
            console.log(value + " " + id + " " + element)
            $.ajax({
                url: "active.php",
                type: "POST",
                data: {
                    value: value,
                    id: id
                },
                success: function(data) {
                    if (data == 1) {
                        element.text("deactive");
                        element.addClass("bg-danger");
                        element.removeClass("bg-info");
                        $('#msgActive').text("deactivated");
                        $('#msgActive').fadeIn(1000);
                        setTimeout(() => {
                            $('#msgActive').fadeOut(1000)
                        }, 1000);
                    } else {
                        element.text("active");
                        element.addClass("bg-info");
                        element.removeClass("bg-danger");
                        $('#msgActive').text("activated");
                        $('#msgActive').fadeIn(1000);
                        setTimeout(() => {
                            $('#msgActive').fadeOut(1000)
                        }, 1000);
                    }
                }
            })
        })

        //on click div display 
        $('#category').on("click", function() {
            $('#category').addClass("current");
            $('#categoryTable').css("display", "block");
            $('#productTable').css("display", "none");
            $('#userTable').css("display", "none");
            $('#product').removeClass('current');
            $('#orderTable').css("display", "none");
            $('#user').removeClass('current');
            $('#contact').removeClass('current');
            $('#order').removeClass('current');
            $('#contactTable').css("display", "none");
            $('#subCat').removeClass('current');
            $('#Sub_categoryTable').css("display", "none");
        })
        $('#product').on("click", function() {
            $('#productTable').css("display", "block");
            $('#product').addClass('current');
            $('#categoryTable').css("display", "none");
            $('#category').removeClass("current");
            $('#user').removeClass("current");
            $('#contact').removeClass("current");
            $('#order').removeClass("current");
            $('#orderTable').css("display", "none");
            $('#userTable').css("display", "none");
            $('#contactTable').css("display", "none");
        })
        $('#user').on("click", function() {
            $('#userTable').css("display", "block");
            $('#productTable').css("display", "none");
            $('#categoryTable').css("display", "none");
            $('#contactTable').css("display", "none");
            $('#orderTable').css("display", "none");
            $('#user').addClass('current');
            $('#category').removeClass("current");
            $('#product').removeClass("current");
            $('#contact').removeClass("current");
            $('#order').removeClass("current");

        });

        $('#contact').on("click", function() {
            $('#contactTable').css("display", "block");
            $('#productTable').css("display", "none");
            $('#contact').addClass('current');
            $('#userTable').css("display", "none");
            $('#categoryTable').css("display", "none");
            $('#orderTable').css("display", "none");
            $('#category').removeClass("current");
            $('#product').removeClass("current");
            $('#user').removeClass("current");
            $('#order').removeClass("current");
        })

        $('#order').on("click", function() {
            $('#contactTable').css("display", "none");
            $('#productTable').css("display", "none");
            $('#orderTable').css("display", "block");
            $('#order').addClass('current');
            $('#userTable').css("display", "none");
            $('#categoryTable').css("display", "none");
            $('#category').removeClass("current");
            $('#product').removeClass("current");
            $('#user').removeClass("current");
            $('#category').removeClass("current");
        })

        $('#subCat').on("click", function() {
            $('#contactTable').css("display", "none");
            $('#productTable').css("display", "none");
            $('#orderTable').css("display", "none");
            $('#order').removeClass('current');
            $('#userTable').css("display", "none");
            $('#categoryTable').css("display", "none");
            $('#category').removeClass("current");
            $('#product').removeClass("current");
            $('#user').removeClass("current");
            $('#category').removeClass("current");
             
            $('#Sub_categoryTable').css("display", "block");
            $('#subCat').addClass("current");
        })
    });
</script>

</div>


</body>

</html>