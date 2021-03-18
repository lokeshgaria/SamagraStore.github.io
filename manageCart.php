<?php 
 include "includes/connection.inc.php";
 include "includes/function.inc.php";
 include "includes/cart.inc.php";
 
$qty = $_POST['qty'];
$pid = $_POST['id'];
$type = $_POST['type'];
$saledproduct = getProductByProductid($conn , $pid);
  

$selectProductQuantity = mysqli_query($conn ,"select qty from product where  id =$pid ");
$get = mysqli_fetch_assoc($selectProductQuantity);
 $qtyDb = $get['qty'];
 
 $availableQty = $qtyDb-$saledproduct;

 $object = new add_cart();

 if($availableQty>0){
    if ($type=='add') {
        $object->add_to_cart($pid,$qty);
       
    }
    echo  $object->totalProduct();
} else{
   echo "0";
   die();
}



if ($type=='remove') {
    $object->remove_fromCart($pid);
}
if ($type=='update') {
    $object->update_cart($pid,$qty);
}



  


?>