<?php
 
function pre($arr){
    echo '<pre>';
    print_r($arr);
}

function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}

function get_product($conn, $limit='' , $cat_id='', $product_id='' , $str='',$sort='',$bestSeller='' ,$subCatId=''){
    
    $sql = "select product.* , categories.categories from product , categories where product.status='active' ";
   
    if ($cat_id !="") {
        $sql = $sql ." and product.categories_id = $cat_id ";
    }
    if ($product_id !="") {
        $sql = $sql ." and product.id = $product_id ";
    }

    if ($subCatId !="") {
        $sql = $sql ." and product.subCategory = $subCatId ";
    }

    if ($bestSeller !="") {
        $sql = $sql ." and product.best_seller = '1' ";
    }

    $sql = $sql." and product.categories_id=categories.id ";

    if ($str !="") {
        $sql = $sql ." and (product.name like '%$str%' or product.description like '%$str%') ";
    }

    if ($sort !="") {
        $sql = $sql.$sort;
    }
    else{
        $sql = $sql." order by product.id desc ";

    }
    
    if ($limit !="") {
        $sql = $sql." limit $limit ";
    }
 
     
    $run = mysqli_query($conn , $sql);
    $productData = array();
    while($row = mysqli_fetch_assoc($run)){
          $productData[] = $row;
    };
    return $productData;
}

function getProductByProductid($conn , $pid){
$sql = "select sum(orders_details.qty) as qty from orders_details , orders where orders_details.order_id =orders.id and orders_details.product_id='$pid' and orders.order_status!='canceled'";
 
$run = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($run);
return $row['qty'];
}