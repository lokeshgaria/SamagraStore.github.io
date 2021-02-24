<?php include "includes/headers.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $seleQry = mysqli_query($conn,"select * from categories where id='$id'");
    $check = mysqli_num_rows($seleQry);
    echo $check;
     
    if ($check>0) {
     $catData = mysqli_fetch_assoc($seleQry);
     $catname = $catData['categories']; 
    $btnName = "Add Category";    
   }
   else{ ?>
    <script>window.location.replace('http://localhost/SamagraStore.github.io/adminPanel/admin.php'); </script>
    <?php }
} else{
    $catname="";
    $btnName="Update Category";
}
?>

<!-- cards ends here -->
<!--tables start -->
<section>

    <div class="container-fluid ">
        <div class="row mb-5 ">
            <div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                <div class="row">
                    <div class="col-12 my-3">
                        <h3 font-weight-light>Enter New Category </h3>
                        <h6 class="text-muted text-capitalize mx-3 text-start font-weight-bold my-3 mb-3"> <a
                                href="admin.php">
                                Back to Categories</a></h6>
                        <form class="mx-3 w-50" method="post">

                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name of Category</label>
                                <input type="text" class="form-control" name="newCat" aria-describedby="emailHelp"
                                    placeholder=" Enter Category" id="Updatecategory" required
                                    value="<?php echo $catname; ?> ">

                            </div>

                            <h6 class="text-danger text-capitalize font-weight-bold"> </h6>
                            <button type="button" name=" " id="add"
                                class="btn text-uppercase font-weight-bold btn-primary "
                                style=" letter-spacing: 5px; ">Update Category</button>


                        </form>
                    </div>

                    <p id="msg" class="text-capitalize">hello</p>
                </div>
            </div>
            <?php include "includes/footer.inc.php"; ?>
            <script>
            $('#add').on("click", function() {
                var cat = $('#Updatecategory').val();
                var id = <?php echo $_GET['id']; ?>;
                $.ajax({
                    url: " updateCat.php",
                    type: "POST",
                    data: {
                        cat: cat,
                        id: id
                    },
                    success: function(data) {
                        if (data == 1) {
                            $('#msg').text("Category  updated");
                            $('#msg').fadeIn(1000);
                            setTimeout(() => {
                                $('#msg').fadeOut(1000);
                            }, 1000);
                        } else if (data == 0) {
                            $('#msg').text("Category not added");
                            $('#msg').fadeIn(1000);
                            setTimeout(() => {
                                $('#msg').fadeOut(1000);
                            }, 1000);
                        } else {
                            $('#msg').text("Fill input field");
                            $('#msg').fadeIn(1000);
                            setTimeout(() => {
                                $('#msg').fadeOut(1000);
                            }, 1000);
                        }

                    }
                })
            });
            </script>