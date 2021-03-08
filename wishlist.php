<?php 
session_start();
$product_id = $_POST['id'];
$type = $_POST['type'];

$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

 if (isset($_SESSION['username'] )) {
     
    $uid =$_SESSION['user_id'];
    date_default_timezone_set('Asia/Kolkata');
    $datetime = date('Y-m-d h:i:s');
    
    $select = mysqli_query($conn , "select * from wishlist where user_id='$uid' and product_id='$product_id'");
    $count = mysqli_num_rows($select);
    if ($count>0) {
        echo "already added";
    }else{
        $insertWish = mysqli_query($conn ,"INSERT INTO `wishlist` (`id`, `product_id`, `user_id`, `added_on`) VALUES (NULL, '$product_id', '$uid', '$datetime')" );
        if ($insertWish) {
            echo 1;
        }else{
            echo 0;
        }
    }
  
 }
 else{
     echo "not login";
 }
 ?>
     
  

