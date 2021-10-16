<?php 
   @include 'connect.php';
   @include 'js.php';
   
   $name = $_REQUEST['name'];
   $email = $_REQUEST['email'];
   $pass = $_REQUEST['pass'];
   $human = $_REQUEST['human'];
   $phone = $_REQUEST['phone'];
   
   $insert = "INSERT INTO login (name, email, pass,human,phone)
        VALUES ('$name', '$email', '$pass','$human',$phone)";
   
    if(mysqli_query($connect, $insert)){
        header('Location: index.php');        
        
   }else{
       echo "insert wrong";
   }
?>