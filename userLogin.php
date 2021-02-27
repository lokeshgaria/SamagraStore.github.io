<?php 
 
session_start();

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

$email = $_POST['email'];
$password = $_POST['password'];

if(!empty($email) && !empty($password)){
    $select = mysqli_query($conn,"SELECT * FROM `users` WHERE email='$email' and password ='$password' ");
    $usercount = mysqli_num_rows($select);
   
    if ($usercount>0) {
        $userData = mysqli_fetch_assoc($select);
        $_SESSION['username'] = $userData['name'];
        $_SESSION['email'] = $userData['email'];
         echo 1;
    }else{
        echo "invalid email or password";
    }
}
?>