 <?php

    include "includes/headers.php";
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
                         <form class="mx-3" action="manageproduct.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group ">
                                         <label for="exampleInputEmail1"> Select Category</label>
                                         <select name="categories_id" class="form-control" id="Selectcategory">
                                             <option value="">Select Category</option>
                                             <?php
                                                $selectCat = mysqli_query($conn, "select * from categories where status='active'");
                                                while ($dataCat = mysqli_fetch_assoc($selectCat)) { ?>
                                                 <option value="<?php echo $dataCat['id']; ?>"><?php echo $dataCat['categories']; ?></option>
                                             <?php } ?>
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group ">
                                         <label for="exampleInputEmail1"> Name of Product</label>
                                         <input type="text" class="form-control" name="name" aria-describedby="emailHelp" id="productName" placeholder="  Enter Product Name" required value=" ">

                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for=""> MRP</label>
                                         <input type="text" class="form-control" name="mrp" aria-describedby="emailHelp" id="mrp" placeholder="  Enter MRP" required value=" ">
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Price oF Product</label>
                                         <input type="text" class="form-control" name="price" aria-describedby="emailHelp" id="price" placeholder="  Enter Price" value=" ">
                                     </div>
                                 </div>

                             </div>
                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Quantity</label>
                                         <input type="text" class="form-control" name="qty" aria-describedby="emailHelp" id="qty" placeholder="  Enter Quantity" required value=" ">

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">

                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Image</label>
                                         <input type="file" class="form-control" name="image" aria-describedby="emailHelp">


                                     </div>

                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1"> Short Desc</label>
                                         <textarea class="form-control" id="shortDesc" name="short_desc" placeholder="Enter product short description" value=""> </textarea>

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Description</label>
                                         <textarea class="form-control" id="description" name=" description" placeholder="Enter product  description" required> </textarea>

                                     </div>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta_Title</label>
                                         <textarea class="form-control" id="meta_title" name="meta_title" placeholder="Enter product Meta Title" placeholder="Meta Title"></textarea>

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta Description</label>
                                         <textarea class="form-control" id="metaDesc" name="meta_desc" placeholder="Enter product Meta Description" placeholder="Meta Title"> </textarea>


                                     </div>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-lg-6 col-12">
                                     <div class="form-group">
                                         <label for="exampleInputEmail1">Meta keyword</label>
                                         <textarea class="form-control" id="metaKeyword" name="meta_keyword" placeholder="Enter  Meta keyword Description" placeholder="Meta Title" value=""> </textarea>


                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <h6 class="text-danger text-capitalize font-weight-bold"> </h6>
                                     <h6> Add product </h6>
                                     <button name="submit" id="addproduct" class="btn text-uppercase font-weight-bold btn-primary  w-100" style=" letter-spacing: 5px; padding:15px 0;"> Add product</button>

                                 </div>
                             </div>
                             <p id="msgPara" class="text-capitalize">hello </p>
                         </form>
                     </div>


                 </div>
                 <?php include "includes/footer.inc.php"; ?>
                 <script>
                     $(document).ready(function() {
                         $('#addproduct').on("click", function() {
                             var productName = $('#productName').val();
                             var Selectcategory = $('#Selectcategory').val();
                             var mrp = $('#mrp').val();
                             var price = $('#price').val();
                             var qty = $('#qty').val();
                             var shortDesc = $('#shortDesc').val();
                             var description = $('#description').val();
                             var meta_title = $('#meta_title').val();
                             var metaDesc = $('#metaDesc').val();
                             var metaKeyword = $('#metaKeyword').val();

                             console.log(productName + " " + Selectcategory + " " + mrp + " " + price + " " + qty + " " + shortDesc + " " + description + " " + meta_title + " " + metaDesc + " " + metaKeyword);
                             if (productName == "" || Selectcategory == "" || mrp == "" || price == "" || qty == "" || shortDesc == "" || description == "" || meta_title == "" || metaDesc == "" || metaKeyword == "") {
                                 $('#msgPara').text("Fill All details ");
                                 $('#msgPara').fadeIn(1000);
                                 setTimeout(() => {
                                     $('#msgPara').fadeOut(1000);
                                 }, 2000);
                             } else {
                                 $.ajax({
                                     url: "addProduct.php",
                                     type: "POST",
                                     data: {
                                         pname: productName,
                                         category: Selectcategory,
                                         mrp: mrp,
                                         price: price,
                                         qty: qty,
                                         shortDesc: shortDesc,
                                         description: description,
                                         meta_title: meta_title,
                                         metaDesc: metaDesc,
                                         metaKeyword: metaKeyword
                                     },
                                     success: function(data) {
                                         if (data == 1) {
                                             $('#msgPara').text("Product added to database");
                                             $('#msgPara').fadeIn(1000);
                                             setTimeout(() => {
                                                 $('#msgPara').fadeOut(1000);
                                             }, 2000);
                                         } else if (data == 0) {
                                             $('#msgPara').text("Product Not added to database");
                                             $('#msgPara').fadeIn(1000);
                                             setTimeout(() => {
                                                 $('#msgPara').fadeOut(1000);
                                             }, 2000);
                                         } else if (data == 404) {
                                             $('#msgPara').text("Fill All details ");
                                             $('#msgPara').fadeIn(1000);
                                             setTimeout(() => {
                                                 $('#msgPara').fadeOut(1000);
                                             }, 2000);
                                         }
                                     }
                                 })
                             }

                         })



                     });
                 </script>