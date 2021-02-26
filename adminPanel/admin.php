<?php include "includes/headers.php" ?>
<!--tables start -->

<!--category table -->
<section>
    <div class="container-fluid " id="categoryTable">
            <div class="row mb-5 ">
                <div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-muted text-start font-weight-bold my-3 mb-3">Categories </h3>
                            <h6 class="text-muted mx-3 text-start font-weight-bold my-3 mb-3"> <a href="manageCategory.php">Add Categories</a></h6>
                            <table class="table table-fluid bg-light text-center  table-striped">
                                <thead>
                                    <tr class="text-muted">
                                        
                                        <th>#</th>
                                        <th>Category ID</th>
                                        <th>Categories</th>
                                        <th>Status</th>
                                         <th colspan="2" width="10%">Operations</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  
                                
                                $sql = "select * from categories";
                           
                                $res = mysqli_query($conn , $sql);
                                   $i = 0;
                                 while ($data = mysqli_fetch_assoc($res)) { 
                                    $i++;
                                     ?>
                                    <tr>
                                        
                                        <td> <?php echo  $i; ?></td>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['categories'] ?></td>
                                        <?php 
                                        $status = $data['status'];
                                        if ($status=="active") {
                                            $bgcolor="bg-info";
                                        }else{
                                            $bgcolor="bg-danger";
                                        }
                                        ?>
                                         <td><p class="status  <?php echo $bgcolor; ?> text-white" style="cursor:pointer; " id="<?php echo $data['id'];?>"><?php echo $data['status']?></p></td>
                                        
                                         <td><a href="updateCategory.php?id=<?php echo $data['id']; ?>" class=" bg-warning link text-white p-2"><i class="fas fa-edit"></i></a></td>

                                         <td><a href="admin.php?type=delete&id=<?php echo $data['id']; ?>" class=" bg-danger link text-white p-2"><i class="fas fa-trash-alt"></i></a></td>
                                        
                                    </tr>
                                  <?php 
                                   } 
                                  ?>  

                                </tbody>

                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
<p id="msgActive" class="text-capitalize"> </p>
<!--Product table--->
<section>
    
    <div class="container-fluid " id="productTable">
        <div class="row mb-5 ">
            <div class="col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-muted text-start font-weight-bold my-3 mb-3"> Products </h3>
                        <h6 class="text-muted mx-3 text-start font-weight-bold my-3 mb-3"> <a href=" manageproduct.php">Add Products </a></h6>
                        <table class="table table-fluid bg-light text-center  table-striped">
                            <thead>
                                <tr class="text-muted">
                                    
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>MRP</th>
                                    <th>PRICE</th>
                                    <th>QTY</th> 
                                     
                                    <th>Description</th>
                                 
                                    <th colspan="3"> OPERATION</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php  
                            
                            $sql = "select  product .* , categories.categories from product , categories where  product.categories_id=categories.id  ";
                              
                            $res = mysqli_query($conn, $sql);
                             $i = 0;
                            while ($data = mysqli_fetch_assoc($res)){ 
                                $i++; 
                              
                                
                             
                                ?>
                                <tr class="font-weight-bold">
                                   
                                    <td> <?php echo  $i; ?></td>
                                    <td><?php  echo $data['categories'] ?></td>
                                    <td><?php  echo $data['name'] ?></td>
                                    <td> <img src="<?php echo $data['img']?>" alt="" width="50" height="43"></td>
                                    <td><?php  echo $data['mrp'] ?></td>
                                    <td><?php  echo $data['price'] ?></td>
                                    <td><?php   echo $data['qty'] ?></td>
                                    
                                    <td><?php   echo $data['description'] ?></td>
                                     

                                    <td class="d-flex justify-content-center"><?php  
                                    
                                    if ($data['status']=='active') {
                                         echo "<span key=".$data['id']." class='bg-primary productStatusActive text-capitalize text-white '>".$data['status']."</span>";
                                    }else{
                                        echo "<span key=".$data['id']." class='bg-secondary productStatusActive text-capitalize text-white ' >".$data['status']."</span>";
                                     }

                                    echo "<a href='?type=delete&id=".$data['id']."' class='nav-link text-white mx-2 btn-danger '><i class='fas fa-trash-alt'></i></a>";

                                    echo "<a href='manageproduct.php?id=".$data['id']."' class='nav-link text-white btn btn-warning '><i class='fas fa-edit'></i></a>";
                                   ?></td>
                                    
                                </tr>
                              <?php 
                               } 
                              ?>  

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- user Master  -->
<section>
        <div class="container-fluid " id="userTable">
            <div class="row ">
                <div class=" col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                    <div class="bg-light" >
                     <div class="container">
                     <h3 class="mx-2 my-3 font-weight-bold text-capitalize text-dark">User's Table </h3>
                        <div class="col-12 " >
                             <table class="table bg-light table-hover text-center  ">
                                <thead>
                                    <tr class="text-warning bg-dark">
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>E-MAIL</th>
                                        
                                        <th>OPERATION</th>
                                    </tr>
                                </thead>
                                <?php 
                                $sql = "select * from  users order by id asc ";
                                $run = mysqli_query($conn , $sql);
                                
                                
                                while ($fetch = mysqli_fetch_assoc($run)
                                ) {?>
                                
                                 <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td><?php  echo $fetch['id']; ?></td>
                                        <td> <?php  echo $fetch['name']; ?></td>
                                        <td> <?php  echo $fetch['email']; ?></td>
                                     
                                        <td> <a href="deletecon.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger" name="delete">Delete</a></td>
                                        
                                    </tr>
                                     
                                     
                                </tbody>
                                <?php
                                }
                                ?>
                               
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- contact Us -->
<section>
<div class="container-fluid " id="contactTable">
            
            <div class="row ">
            
                <div class=" col-xl-10 col-lg-9  col-md-8 ml-md-auto">
                    <div class="bg-light" >
                     <div class="container">
                     <h3 class="mx-2 py-3 font-weight-bold text-capitalize text-dark"> Customer's feedback Table</h3>
                        <div class="col-12 " >
                             <table class="table bg-light table-hover text-center  ">
                                <thead>
                                    <tr class="text-warning bg-dark">
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>E-MAIL</th>
                                        <th></th>
                                        <th> MESSAGE</th>
                                        
                                        <th>OPERATION</th>
                                    </tr>
                                </thead>
                                <?php 
                                $sql = "select * from  contactus order by id desc ";
                                $run = mysqli_query($conn , $sql);
                                
                                
                                while ($fetch = mysqli_fetch_assoc($run)
                                ) {?>
                                
                                 <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td><?php  echo $fetch['id']; ?></td>
                                        <td> <?php  echo $fetch['name']; ?></td>
                                        <td> <?php  echo $fetch['email']; ?></td>
                                        <td> <?php  echo $fetch['mobile']; ?></td>
                                        <td> <?php  echo $fetch['comment']; ?></td>
                                        
                                        <td> <a href="deletecon.php?id=<?php echo $fetch['id']; ?>" class="btn btn-danger" name="delete">Delete</a></td>
                                        
                                    </tr>
                                     
                                     
                                </tbody>
                                <?php
                                }
                                ?>
                               
                            </table>
                           
                        </div>
                    </div>
                    </div>
</section>

<?php include "includes/footer.inc.php"; ?>
<script>
    $(document).ready(function  () {
        $('.productStatusActive').on("click" , function  () {
            var element = $(this);
            var key = $(this).attr("key");
            var value = $(this).text();
           
            console.log(element+' '+ key + ' '+ value );

            $.ajax({
               url : "changeProductStatus.php",
               type : "POST",
               data : {
                   key : key,
                   value : value
               },
               success : function  (data) {
                   if(data==2){
                       element.text("active");
                       element.addClass("bg-primary");
                       element.removeClass("bg-secondary");
                      $('#msgActive').text("Activated");
                      $('#msgActive').fadeIn(1000);
                      setTimeout(function  () {
                          $('#msgActive').fadeOut(1000);
                      },1000); 
                   }
                   if(data==1){
                       element.text("deactive");
                       element.addClass("bg-secondary");
                       element.removeClass("bg-primary");
                      $('#msgActive').text("Deactivated");
                      $('#msgActive').fadeIn(1000);
                      
                      setTimeout(function  () {
                          $('#msgActive').fadeOut(1000);
                      },1000); 
                   }
               }
            });
        })
    });
</script> 