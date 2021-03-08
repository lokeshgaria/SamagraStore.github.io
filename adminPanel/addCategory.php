<?php 
 session_start(); 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

if ($conn) {
  echo " ";
 
 
 
}
else {
     echo "connection failed";
}
$category = $_POST['cat'];


if (!empty($category)) {
    $category = $_POST['cat'];  
    $category = trim($category);
    $checkCat = mysqli_query($conn,"select * from categories where categories = '$category'");
    $count = mysqli_num_rows($checkCat);
    if ($count>0) {
        echo 22;
    }else{
        $runQry = mysqli_query($conn,"INSERT INTO `categories` (`id`, `categories`, `status`) VALUES (NULL, '$category', 'active')");
        if($runQry){
            echo 1;
        }else{
            echo 0;
        }
    }  

}else{
    echo 33;
}
?>