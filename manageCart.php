<?php 
 include "includes/connection.inc.php";
 include "includes/function.inc.php";
 include "includes/cart.inc.php";

$qty = $_POST['qty'];
$pid = $_POST['id'];
$type = $_POST['type'];

echo $qty . " " . $pid . " " .$type;
 
$object = new add_cart();
$object->add_to_cart($pid,$qty);

echo  $object->totalProduct();
 
?>