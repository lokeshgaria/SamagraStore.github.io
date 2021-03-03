<?php

session_start();

$server = "localhost";
$username = "root";
$password = "";
$database = "mystore";

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn) {
    echo " ";
?>
 
<?php
} else {
    echo "connection failed"; 
}

$email = $_POST['email'];
$password = $_POST['password'];
$check    = $_POST['check'];
if (!empty($email) && !empty($password)) {
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' and password ='$password' ");
    $usercount = mysqli_num_rows($select);

    if ($usercount > 0) {
        if (!empty($_POST['check'])) {
            $userData = mysqli_fetch_assoc($select);
            $_SESSION['username'] = $userData['name'];
            $_SESSION['email'] = $userData['email'];

            setcookie("email" , "$email" , time()+3600 );
            setcookie("pass" , "$password" , time()+3600 );
            setcookie("check" ,"checked" , time()+3600);
            echo 1;
        }
        else{
            
            setcookie("email", "" ,time()-100 );
            setcookie("pass", "" ,time()-100);
            setcookie("check","");
        }
    } else {
        echo "* invalid email or password";
    }
}
?>