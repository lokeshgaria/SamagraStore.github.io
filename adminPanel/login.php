<?php 
 $server = "localhost";
 $username = "root";
 $password = "";
 $database = "mystore";
 
 $conn = mysqli_connect($server , $username , $password , $database);
 
 if ($conn) {
   echo " ";
 ?>
  
 <?php
 }
 else {
      echo "connection failed";
 }
$msg = "";
session_start();
?>
 <?php 
     if (isset($_POST['submit'])){
      $username = $_POST["username"];
                            $password = $_POST["password"];
                             
                             $sql = "select * from  admin_users where username = '$username' and password = '$password' ";

                            $res = mysqli_query($conn , $sql);
                            $count = mysqli_num_rows($res);

                            if ($count) {
                                 header('location:admin.php');
                                 $_SESSION['username'] = $username;
                                 die();
                            }
                            else{ 
                                $msg = "Please Enter Correct Login Details!!";
                            }
                        }
                        ?>

<!doctype html>
<html lang="en">
  <head>
  <style>
  .align-items{
   position : absolute;
   top : 50%;
   left : 50%;
   transform:translate(-50% , -50%);
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title> Admin Panel Login</title>
  </head>
  <body class="bg-dark text-white">
     <div class="container w-50 bg-light align-items " >
     <form class="p-3  " action="login.php" method="post">
     <h2 class="text-info "> Admin Login </h2>
        
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-dark">UserName</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required>
     
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-dark">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password" required>
  </div>
   
  <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
</form>
    <div class="container-fluid">
        <p class="text-danger font-weight-bold py-2"><?php echo $msg ?></p>
    </div>
     </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>