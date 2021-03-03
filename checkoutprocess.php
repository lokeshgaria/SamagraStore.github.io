<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "mystore");
 
$firstname = $_POST['firstName'];
$street = $_POST['street'];
$block = $_POST['block'];
$state = $_POST['state'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$paymentMode = $_POST['paymentMode'];
$user_id  = $_SESSION['user_id'];
$totalprice = $_POST['totalprice'];

if ($paymentMode=="paypal") {
    $paymentStatus ="success";
}else{
    $paymentStatus ="pending";
}

date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
 $datetime =  date('Y-m-d H:i:s');
 $orderStatus = "pending";


$insertData = mysqli_query($conn , "INSERT INTO `orders` (`id`, `user_id`, `username`, `adddress`, `state`, `city`, `pincode`, `payment_type`, `total_price`, `added_on`, `payment_status`, `order_status`) VALUES (NULL, '$user_id', '$firstname', '$street', '$state', '$city', '$zip', '$paymentMode', '$totalprice', '$datetime',' $paymentStatus', '$orderStatus')");

$order_id = mysqli_insert_id($conn);

foreach ($_SESSION['cart'] as $key => $value) {
    $selectProduct = mysqli_query($conn,"select * from product where id='$key' ");
    $productData = array();
     while($row = mysqli_fetch_assoc($selectProduct)){
        $productData[] = $row;
  };
   
    $price = $productData[0]['price'];
    $qty   = $value['qty'];
    
    $orderDetails = mysqli_query($conn , "INSERT INTO `orders_details` (`id`, `order_id`, `product_id`, `qty`, `price`, `added_on`) VALUES (NULL, '$order_id', '$key', '$qty', '$price', '$datetime')");
}
 

if ($insertData || $orderDetails) {
     unset($_SESSION['cart']);
}else{
    echo "dataa not inserted " . mysqli_error($conn);
}

?>