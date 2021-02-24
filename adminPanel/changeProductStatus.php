<?php 
$conn = mysqli_connect("localhost" , "root" , "" , "mystore");
$id = $_POST['key'];
$value = $_POST['value'];
if($value=='active'){
    $updateStatus = mysqli_query($conn,"update product set `status` ='deactive' where id = $id");
    if ($updateStatus) {
        echo 1;
    }
}

elseif ($value=='deactive') {
    $updateStatus = mysqli_query($conn,"update product set `status` ='active' where id = $id");
    if ($updateStatus) {
        echo 2;
    }
}
?>