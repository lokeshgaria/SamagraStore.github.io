 <?php
    $getData = "";
    $btnName = "Add Product";
    $name = "";
    $mrp = "";
    $price = "";
    $qty = "";
    $meta_desc = "";
    $meta_title = "";
    $meta_keyword = "";
    $description = "";
    $short_desc = "";
    $bestSeller = "22";
    $id = "";
    include "includes/headers.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $attr = "value";
        $btnName = "Update Product";
        $selectData = mysqli_query($conn, "select product.* , sub_Categories.subCat FROM product , sub_categories where sub_Categories.id=product.subCategory and product.id='$id'");
           $count = mysqli_num_rows($selectData);
        if ($count > 0) {
            $getData = mysqli_fetch_assoc($selectData);
            
         
            $subCategory = $getData['subCat'];
            $subCategoryId = $getData['subCategory'];
            $name = $getData['name'];
            $mrp = $getData['mrp'];
            $price = $getData['price'];
            $qty = $getData['qty'];
            $meta_desc = $getData['meta_desc'];
            $meta_title = $getData['meta_title'];
            $meta_keyword = $getData['meta_keyword'];
            $description = $getData['description'];
            $short_desc = $getData['short_desc'];
            $bestSeller = $getData['best_seller'];
        } else { ?>
         <script>
            // window.location.replace('http://localhost/SamagraStore.github.io/adminPanel/admin.php');
         </script>
 <?php    }
    }
    if (!isset($_GET['id'])) {
        $attr = "";
    }

    ?>

 <!-- cards ends here -->
 <!--tables start -->
 <section>

     <div class="container-fluid my-4">
         <div class="row mb-5 ">
             <div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                 <div class="row">
                     <div class="col-12 ">
                         <h3 font-weight-light>Enter New Product </h3>
                         <h6 class="text-muted text-capitalize mx-3 text-start font-weight-bold my-3 mb-3"> <a href="admin.php">
                                 Back to Product</a></h6>  
                         <form class="mx-3" id="productForm" method="post" enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group ">
                                         <label for="exampleInputEmail1"> Select Category</label>
                                         <select name="categories_id" class="form-control" id="Selectcategory">
                                             <option value="">select category </option>
                                             <?php
                                                $selectCat = mysqli_query($conn, "select * from categories where status='active'");

                                                while ($dataCat = mysqli_fetch_assoc($selectCat)) {
                                                    if ($getData['categories_id'] == $dataCat['id']) { ?>
                                                     <option selected value="<?php echo $dataCat['id']; ?>"><?php echo $dataCat['categories']; ?></option>

                                                 <?php } else { ?>
                                                     <option value="<?php echo $dataCat['id']; ?>"><?php echo $dataCat['categories']; ?></option>
                                                 <?php }
                                                    ?>

                                             <?php } ?>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group " id="subcat">
                                         <label for="exampleInputEmail1"> Select SubCategory</label>
                                         <select name="subCategory" class="form-control" id="SelectSubcategory">
                                          <?php 
                                          if (isset($subCategory)) { ?>
                                               <option value="<?php echo $subCategoryId; ?>"><?php echo $subCategory; ?></option>
                                          <?php }
                                          else{ 
                                             
                                              ?>
                                            <option value=" ">select Sub Category</option> 
                                       
                                       <?php   }
                                          ?>
                                             
                                            
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group ">
                                         <label for="exampleInputEmail1"> Name of Product</label>
                                         <input type="text" class="form-control" name="pname" aria-describedby="emailHelp" id="productName" placeholder="  Enter Product Name" required <?php echo "$attr = $name "; ?>>
                                         <input type="hidden" name="id" id="updateId" value="<?php echo $id; ?>">

                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for=""> MRP</label>
                                         <input type="text" class="form-control" name="mrp" aria-describedby="emailHelp" id="mrp" placeholder="  Enter MRP" required <?php echo "$attr = $mrp" ?>>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Price oF Product</label>
                                         <input type="text" class="form-control" name="price" aria-describedby="emailHelp" id="price" placeholder="  Enter Price" <?php echo "$attr = $price" ?>>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Quantity</label>
                                         <input type="text" class="form-control" name="qty" aria-describedby="emailHelp" id="qty" placeholder="  Enter Quantity" required <?php echo "$attr =  $qty" ?>>

                                     </div>
                                 </div>
                                 <div class=" col-lg-6 col-12">
                                     <label for="exampleInputEmail1"> Image <span class="text-info" style="font-size: 12px;margin: 0 10px;"> Allowed type : JPEG , PNG , JPG Only.</span></label>

                                     <div class="row">
                                         <div class="form-group  col-lg-6 w-100">
                                             <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp" value="<?php echo $getData['img']; ?>">
                                         </div>
                                         <div class="form-group col-lg-6 w-100" id="previewImg">
                                             <img src="<?php echo $getData['img']; ?>" alt="" class="img-fluid" width="50px" height="44px">
                                         </div>


                                     </div>


                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Short Desc</label>
                                         <textarea class="form-control" id="shortDesc" name="short_desc" placeholder="Enter product short description"><?php echo "$short_desc" ?> </textarea>

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Description</label>
                                         <textarea class="form-control " id="description" name="description" placeholder="Enter product  description" required><?php echo "  $description " ?> </textarea>

                                     </div>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta_Title</label>
                                         <textarea class="form-control" id="meta_title" name="meta_title" placeholder="Enter product Meta Title" placeholder="Meta Title"><?php echo " $meta_title " ?></textarea>

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta Description</label>
                                         <textarea class="form-control" id="metaDesc" name="meta_desc" placeholder="Enter product Meta Description" placeholder="Meta Title"><?php echo "  $meta_desc " ?></textarea>


                                     </div>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta keyword</label>
                                         <textarea class="form-control" id="metaKeyword" name="meta_keyword" placeholder="Enter  Meta keyword Description" placeholder="Meta Title"><?php echo "$meta_keyword " ?></textarea>


                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Best Seller</label>
                                         <select name="bestSeller" id="bestSeller" class="form-control">
                                          
                                          <?php 
                                          if ($bestSeller==1) {
                                              echo '<option selected value="1">Yes</option>
                                                    <option value="0">No</option>';
                                          }elseif ( $bestSeller ==0) {
                                            echo '<option  value="1">Yes</option>
                                                   <option selected value="0">No</option>';
                                          }elseif ($bestSeller=="22"){
                                            echo '
                                                  <option selected >Select</option>
                                                  <option   value="1">Yes</option>
                                                  <option   value="0">No</option>';   
                                          }
                                          ?>
                                         </select>
                                     </div>


                                 </div>
                                 <h6 class="text-danger text-capitalize font-weight-bold"> </h6>
                                
                                 <button name="submit" id="addproduct" class="btn text-uppercase my-3 font-weight-bold btn-primary  w-25" style=" letter-spacing: 5px; padding:15px 0;"><?php echo $btnName; ?></button>
                             </div>
                             <p id="msgPara" class="text-capitalize">hello </p>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <?php include "includes/footer.inc.php"; ?>
     <script>
         $(document).ready(function() {

            $('#Selectcategory').on("change" , function  () {
                var catid = this.value;
                $.ajax({
                    url :"setSubcat.php",
                    type : "POST",
                    data : {
                        catid : catid
                    },
                    success: function  (result) {
                        $('#SelectSubcategory').html(result);
                    }
                })
            })
             //add new product to database 

             $('#addproduct').on("click", function() {
                 $('#productForm').submit(function(e) {
                     e.preventDefault();


                     $('#addproduct').attr("disabled", "disabled");
                     $('#addproduct').css({
                         "cursor": "not-allowed",
                         "background-color": "#969fa9",
                         "border-color": "#606f7e"
                     });

                     $.ajax({
                         url: "addProduct.php",
                         type: "POST",
                         async: "true",
                         data: new FormData(this),
                         contentType: false,

                         processData: false,
                         success: function(data) {
                             if (data == 1) {
                                 $('#msgPara').text("Product added to database");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);

                             } else if (data == 0) {
                                 $('#msgPara').text("Product Not added to database");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);
                             } else if (data == 3) {
                                 $('#msgPara').text("Product Updated Successfully");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);
                             } else if (data == 4) {
                                 $('#msgPara').text("Product not Updated ");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);
                             } else if (data == 404) {
                                 $('#msgPara').text("Fill All details ");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);
                             } else if (data == 6) {
                                 $('#msgPara').text("Invalid Image Selected ");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                                 setTimeout(function() {
                                     location.reload();
                                 }, 3000);
                             }
                         }


                     })
                 });

             })

             //update new Product to database

         });
     </script>