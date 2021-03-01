<?php 
 include "includes/connection.inc.php";
 include "includes/function.inc.php";
 include "includes/cart.inc.php";
 
$qty = $_POST['qty'];
$pid = $_POST['id'];
$type = $_POST['type'];

 
 
 
$object = new add_cart();
if ($type=='add') {
    $object->add_to_cart($pid,$qty);
   
}

if ($type=='remove') {
    $object->remove_fromCart($pid);
}
if ($type=='update') {
    $object->update_cart($pid,$qty);
}
echo  $object->totalProduct();
?>