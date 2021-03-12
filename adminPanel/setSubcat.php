<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

$subId = $_POST['catid'];
$getquerry = mysqli_query($conn , "select * from sub_categories where category_id = $subId");

if (mysqli_num_rows($getquerry)>0) {
    while ($alldata = mysqli_fetch_assoc($getquerry)) {
        echo ' 
              <option  id="'.$alldata['id'].'"  value="'.$alldata['id'].'">'.$alldata['subCat'].'</option>
               ';
  }
}else{
    echo ' 
    <option >No sub category found</option>
     ';
}

?>
   