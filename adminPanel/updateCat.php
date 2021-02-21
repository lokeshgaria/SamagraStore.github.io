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
$id = $_POST['id'];

if (!empty($category)&& !empty($id)) {
    $category = $_POST['cat'];    
    $id=$_POST['id'];
$runQry = mysqli_query($conn,"update categories set categories ='$category' where id=$id");
if($runQry){
    echo 1;
}else{
    echo 0;
}
}else{
    echo 33;
}
?>