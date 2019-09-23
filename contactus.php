<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   include_once("connection.php"); 

   $name= $_POST['name'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];
$query = "INSERT INTO Message(Name,Message,Email,Phone) VALUES ('$name','$msg','$email','$phone')";  
$res= mysqli_query($connection, $query);

if($res){
     header('Location: index.html'); 
     
}
else{
     die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($connection);
?>
