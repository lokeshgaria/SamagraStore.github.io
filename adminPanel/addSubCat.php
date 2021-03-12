<?php 
 session_start(); 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

 
 
$subcat = $_POST['subcat'];
$subcat = trim($subcat);
$parentCat = $_POST['parentCat'];
$setID    = $_POST['setId'];
 
 
 
if ($setID=="0") {
  $runQry = mysqli_query($conn,"INSERT INTO `sub_categories` (`id`, `subCat`, `category_id`, `status`) VALUES (NULL , '$subcat', '$parentCat' , 'active' )");
        
      
 if($runQry){
            echo 1;
        }else{
            echo "due to " . mysqli_error($conn);
        }
}
else{
  $runQry = mysqli_query($conn," UPDATE `sub_categories` set  `subCat`='$subcat'  , `category_id`='$parentCat' where `id`='$setID' ");
        
      
 if($runQry){
           echo 2;
        }else{
            echo "due to " . mysqli_error($conn);
        }
}
