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
else { echo "connection failed";} 
$value = $_POST['value'];
$id    = $_POST['id'];

if (isset($_POST['id'])) {
     
    if ($value == "active") {
         
        $selQry = mysqli_query($conn," UPDATE `categories` SET `status` = 'deactive' WHERE `categories`.`id` = $id");
        if ($selQry) {
            echo 1;
        }
        
    }else if ($value=="deactive") {
        $id    = $_POST['id'];
        $selQry = mysqli_query($conn,"UPDATE `categories` SET `status` = 'active' WHERE `categories`.`id` = $id");
        if ($selQry) {
            echo 2;
        }
    }
    
}else{
   echo "no data";
}

?>