<?php 
session_start();

unset($_SESSION['username']);
unset($_SESSION['email']);
header('location:index.php');
die();
?>