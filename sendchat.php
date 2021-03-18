<?php 
$question = $_POST['chat'];
 
$conn  = mysqli_connect("localhost" , "root" , "" , "chatbot");

$select = mysqli_query($conn,"SELECT replies from chats where questions LIKE '%$question%'");
 $countreplies = mysqli_num_rows($select);
 if ($countreplies>0) {
     $answer = mysqli_fetch_assoc($select);
     date_default_timezone_set('Asia/Kolkata');
     $time = date('h:i');
   
      
      
     $newtime = date("g:i A", strtotime($time));
     $value = $answer['replies'];
     echo $value;
 }else{
   echo "sorry not able to understand";
 }
