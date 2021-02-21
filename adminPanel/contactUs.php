<?php include "includes/headers.php" ?>

    <!-- profile starts here -->
    <section>


        <div class="container-fluid ">
            
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
                                        <th>SUBJECT</th>
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
  <?php include "includes/footer.inc.php"; ?>