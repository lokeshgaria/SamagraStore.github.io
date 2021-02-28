<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server , $username , $password , $database);

if ($conn) {
  echo " ";
?>
 
<?php
}
else {
     echo "connection failed";
}
 
?>

 