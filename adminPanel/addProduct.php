<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

 $pname = $_POST['pname'];
$category = $_POST['category'];
$mrp = $_POST['mrp'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$shortDesc = $_POST['shortDesc'];
$description = $_POST['description'];
$meta_title = $_POST['meta_title'];
$metaDesc = $_POST['metaDesc'];
$metaKeyword = $_POST['metaKeyword'];
 
if (!empty($pname) || !empty($category) || !empty($mrp) || !empty($price) || !empty($qty) || !empty($shortDesc) || !empty($description) || !empty($meta_title) || !empty($metaDesc)) {
    
    $insertQry = mysqli_query($conn , "INSERT INTO `product`(`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `img`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES (Null,$category,'$pname','$mrp','$price','$qty','e','$shortDesc','$description','$meta_title','$metaDesc','$metaKeyword','active')");

    if ($insertQry) {
        echo 1;
    }
    else{
        echo 0;
    }


}else{
    echo 404;
}
?>