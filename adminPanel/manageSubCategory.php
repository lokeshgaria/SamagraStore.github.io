<?php include "includes/headers.php";

$selId ="0";
if (isset($_GET['catid'])) {
    $selId = $_GET['catid'];
    $getdata = mysqli_query($conn, "select  sub_categories.* , categories.categories from categories , sub_categories where  sub_categories.id='$selId' and categories.id = sub_categories.category_id ");

    $alldata = mysqli_fetch_assoc($getdata);
    
    $catname = $alldata['subCat']; 
     $newname = "value ='$catname'";
}else{
    $catname = ""; 
    $newname = " ";
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
                        <h3 font-weight-light>Enter New Sub Category </h3>
                        <h6 class="text-muted text-capitalize mx-3 text-start font-weight-bold my-3 mb-3"> <a href="admin.php">
                                Back to Categories</a></h6>
                        <form class="mx-3 w-50" method="post">

                            <div class="form-group ">
                                <label for="exampleInputEmail1"> Select Category</label>
                                <select name="categories_id" class="form-control" id="Selectcategory">
                                    <option value="">select category </option>
                                    <?php
                                    $selectCat = mysqli_query($conn, "select * from categories where status='active'");

                                    while ($dataCat = mysqli_fetch_assoc($selectCat)) {
                                        if ($alldata['category_id'] == $dataCat['id']) { ?>
                                            <option selected value="<?php echo $dataCat['id']; ?>"><?php echo $dataCat['categories']; ?></option>
                                        <?php } else { ?>
                                            <option value="<?php echo $dataCat['id']; ?>"><?php echo $dataCat['categories']; ?></option>
                                        <?php  }
                                        ?>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name of Sub Category</label>
                                <input type="text" class="form-control" name="newCat" aria-describedby="emailHelp" placeholder=" Enter Category" id="subCategory"    <?php echo $newname; ?> >

                            </div>

                            <h6 class="text-danger text-capitalize font-weight-bold"> </h6>
                            <button type="button" name=" " id="add" class="btn text-uppercase font-weight-bold btn-primary  " style=" letter-spacing: 5px; ">Add Category</button>


                        </form>
                    </div>

                    <p id="msg" class="text-capitalize">hello</p>
                </div>

            </div>
            <?php include "includes/footer.inc.php"; ?>
            <script>
                $('#add').on("click", function() {
                    var subcat = $('#subCategory').val();
                    var parentCat = $('#Selectcategory').val();
                    var selId   = <?php echo $selId ?>;
                  
                    if (subcat == "") {
                        $('#msg').text("Fill input field");
                        $('#msg').fadeIn(1000);
                        setTimeout(() => {
                            $('#msg').fadeOut(1000);
                        }, 1000);
                    } else {
                        $.ajax({ 
                            url: "addSubCat.php",
                            type: "POST",
                            data: {
                                subcat: subcat,
                                parentCat: parentCat,
                                setId : selId
                            },
                            success: function(data) {
                                if (data == 1) {
                                    $('#msg').text("Category added");
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

                                    
                                }
                                else if (data == 2) {
                                    $('#msg').text("Category Updated");
                                    $('#msg').fadeIn(1000);
                                    setTimeout(() => {
                                        $('#msg').fadeOut(1000);
                                    }, 1000);
                                    
                                }
                                else if (data == 22) {
                                    $('#msg').text("Category Already Exist");
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
                    }



                });
            </script>