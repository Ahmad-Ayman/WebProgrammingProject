<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
   include_once("connection.php"); 

   
$query = "INSERT INTO Subscribe(Email) VALUES ('$_POST[email]')";  
$res= mysqli_query($connection, $query);

if($res){
     header('Location: index.html'); 
     
}
else{
     die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($connection);
?>
