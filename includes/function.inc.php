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

function get_product($conn, $limit='' , $cat_id=''){
    
    $sql = "select * from product where status='active'";
   
    if ($cat_id !="") {
        $sql = $sql ." and categories_id = $cat_id ";
    }
    $sql = $sql." order by id desc ";
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