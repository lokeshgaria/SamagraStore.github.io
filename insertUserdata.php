<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

$name = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$datetime =  date('Y-m-d H:i:s');

if (!empty($name) && !empty($email) && !empty($contact) && !empty($password) ){

    $selecEmail = mysqli_query($conn,"select email from users where email='$email'");
    $count = mysqli_num_rows($selecEmail);
    if($count>0){
      echo 404;
      
    }else{
        $insertQry = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `added_on`) VALUES (NULL, '$name', '$email', '$password', '$contact', '$database')";

        $runQry = mysqli_query($conn,$insertQry);
        if($runQry){
            echo 1;
        }else{
            echo 0;
        }
    }
   

}
 
?>