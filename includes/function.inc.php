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

function get_product($conn, $limit='' , $cat_id='', $product_id=''){
    
    $sql = "select product.* , categories.categories from product , categories where product.status='active' ";
   
    if ($cat_id !="") {
        $sql = $sql ." and product.categories_id = $cat_id ";
    }
    if ($product_id !="") {
        $sql = $sql ." and product.id = $product_id ";
    }
    $sql = $sql." and product.categories_id=categories.id ";
    $sql = $sql." order by product.id desc ";
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

 
?>