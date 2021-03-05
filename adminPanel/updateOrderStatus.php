<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

$status = $_POST['status'];
$id     = $_POST['id'];
 
$updateStatus = mysqli_query($conn ,"update orders set order_status ='$status' where id = $id");
if ($updateStatus) {
    echo "status changed to $status";
}else{
    echo "status not changed" .mysqli_error($conn);
}
?>