<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server, $username, $password, $database);

$pname = $_POST['pname'];
$category = $_POST['categories_id'];
$mrp = $_POST['mrp'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$shortDesc = $_POST['short_desc'];
$description = $_POST['description'];
$meta_title = $_POST['meta_title'];
$metaDesc = $_POST['meta_desc'];
$metaKeyword = $_POST['meta_keyword'];
$id = $_POST['id'];


$filename = $_FILES['image']['name'];
$fileTempPath = $_FILES['image']['tmp_name'];


if (!empty($pname) || !empty($category) || !empty($mrp) || !empty($price) || !empty($qty) || !empty($shortDesc) || !empty($description) || !empty($meta_title) || !empty($metaDesc)) {

    if (!empty($id)) {

        if ($_FILES['image']['name'] == "") {

            $updateProduct = mysqli_query($conn, "UPDATE `product` SET  `categories_id`='$category',`name`='$pname',`mrp`='$mrp',`price`='$price',`qty`='$qty', `short_desc`='$shortDesc',`description`='$description',`meta_title`='$meta_title',`meta_desc`='$metaDesc',`meta_keyword`='$metaKeyword' WHERE product.id=$id");


            if ($updateProduct) {
                echo 3;
            } else {
                echo mysqli_error($conn);
            }
        } else {
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $validExt  = ['jpeg', 'png', 'jpg'];

            if (in_array($extension, $validExt)) {

                $newFilename = rand(1111, 999) . $filename;
                $uploadPath = "products/" . $newFilename;
              

                $updateProduct = mysqli_query($conn, "UPDATE `product` SET  `categories_id`='$category',`name`='$pname',`mrp`='$mrp',`price`='$price',`qty`='$qty',`img`='$uploadPath',`short_desc`='$shortDesc',`description`='$description',`meta_title`='$meta_title',`meta_desc`='$metaDesc',`meta_keyword`='$metaKeyword' WHERE product.id=$id");


                if ($updateProduct) {
                    move_uploaded_file($fileTempPath, $uploadPath);
                    echo 3;
                } else {
                    echo mysqli_error($conn);
                }
            } else {
                echo 6;
            }
        }
    } else {

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $validExt  = ['jpeg', 'png', 'jpg'];

        if (in_array($extension, $validExt)) {
            $newFilename = rand(1111, 999) . $filename;
            $uploadPath = "products/" . $newFilename;
         

            $insertQry = mysqli_query($conn, "INSERT INTO `product`(`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `img`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES (Null,$category,'$pname','$mrp','$price','$qty','$uploadPath','$shortDesc','$description','$meta_title','$metaDesc','$metaKeyword','active')");

            if ($insertQry) {
                echo 1;
                move_uploaded_file($fileTempPath, $uploadPath);
            } else {
                echo 0;
            }
        } else {
            echo 6;
        }
    }
} else {
    echo 404;
}
