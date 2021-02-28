 <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "mystore";
  
  $conn = mysqli_connect($server , $username , $password , $database);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg   = $_POST['feedback'];
    date_default_timezone_set('Asia/Kolkata');

    $date =  date('Y-m-d H:i:s');
     
   
    $insert = mysqli_query($conn, "INSERT INTO `contactus`(`id`, `name`, `email`, `mobile`, `comment`, `added_on`) VALUES (NULL,'$name','$email','$phone','$msg', '$date')");

    if($insert){
        echo 1;

    }else {
        echo mysqli_error($conn);
    }
    ?>