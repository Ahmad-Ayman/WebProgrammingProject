<?php
  session_start();
 include 'connection.php';
 // initializing variable 
   
  $Username        = "";
  $Email           = "";
  $Password        = "";
  $Birthday        = "";
  $Country        = "";
  $Area            = "";
  $PhoneNumber     = "";
  $errors          = array();
  
  //user Register 
 if(isset($_POST['register']))
         {    
                   $Username = mysqli_real_escape_string($connection, $_POST['Username']); 
                   $Email   = mysqli_real_escape_string($connection, $_POST['Email']);
                   $Password  = mysqli_real_escape_string($connection, $_POST['Password']);
                   $Birthday = mysqli_real_escape_string($connection, $_POST['Birthday']);
                   $Country  = mysqli_real_escape_string($connection, $_POST['Country']);
                   $Area = mysqli_real_escape_string($connection, $_POST['Area']);
                   $PhoneNumber = mysqli_real_escape_string($connection, $_POST['PhoneNumber']);
                   
                   
                   
                   // form validation: ensure that the form is correctly filled ...
                 // by adding (array_push()) corresponding error unto $errors array
                    if (empty($Username)) { array_push($errors, "<div class='alert alert-danger'>Username is required</div>"); }
                    if (empty($Email)) { array_push($errors, "<div class='alert alert-danger'>Email is required</div>"); }
                    if (empty($Password)) { array_push($errors, "<div class='alert alert-danger'>Password is required</div>"); }
                    if (empty($Birthday)) { array_push($errors, "<div class='alert alert-danger'>Birthday  is required</div>"); }
                    if (empty($Country)) { array_push($errors, "<div class='alert alert-danger'>Country  is required</div>"); }
                    if (empty($Area)) { array_push($errors, "<div class='alert alert-danger'>Area  is required</div>"); }
                    if (empty($PhoneNumber)) { array_push($errors, "<div class='alert alert-danger'>PhoneNumber  is required</div>"); }
                    
                     
                  

// Validate password strength
$uppercase = preg_match('@[A-Z]@',$Password);
$lowercase = preg_match('@[a-z]@',$Password);
$number    = preg_match('@[0-9]@',$Password);
$specialChars = preg_match('@[^\w]@',$Password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($Password) < 8) {
    array_push($errors, "<div class='alert alert-danger'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>");
    
}else{
    array_push($errors, "<div class='alert alert-danger'>Strong password.</div>");
}
                    
                      
                    
                    // first check the database to make sure 
                  // a user does not already exist with the same ID
                    $user_check_query = "SELECT * FROM User WHERE Email='$Email' OR PhoneNumber='$PhoneNumber'";
                    $result = mysqli_query($connection,$user_check_query);
                    $user = mysqli_fetch_assoc($result);
                    
                    if ($user) { // if nationality_id exists
           
                                        if ($user['Email'] === $Email) {
                                          array_push($errors, "<div class='alert alert-danger'> Email already exists</div>");
                                        }
                                        if ($user['PhoneNumber'] === $PhoneNumber) {
                                          array_push($errors, "<div class='alert alert-danger'> PhoneNumber already exists</div>");
                                        }

                    
                                     } // end of nationality chek if condition
  
                    if (count($errors) == 0) {
                                        $Password = md5($Password);//encrypt the password before saving in the database

                                        $query = "INSERT INTO User 
                                                          VALUES('',$Username','$Email','$Password','','','1',$Birthday','$Country','$Area','$PhoneNumber','','')";
                                        mysqli_query($connection, $query);

                                        $_SESSION['success'] = "You are now logged in";
                                        header('location: home.php');
                                  }

  
                   
                   
         }  // end of the main if  
   //End Of User Register 
         
         //Start User Login
         
         if(isset($_POST['login_user']))
        {
              $Username = mysqli_real_escape_string($connection, $_POST['Username']);
              $Email = mysqli_real_escape_string($connection, $_POST['Email']);
              $Password = mysqli_real_escape_string($connection, $_POST['Password']);
             
              
              
             if (empty($Password)) {
  	array_push($errors, "<div class='alert alert-danger'> Password is required </div>");
                                   }
            if (empty($Email)) {
                  array_push($errors, "<div class='alert alert-danger'> Email is required </div>");
                                        }
            if(count($errors) == 0)
            {
                $Password = md5($Password);
                $query = "SELECT * FROM User WHERE Email='$Email' AND Password='$Password' AND Username='$Username'";
                $results = mysqli_query($connection,$query);
                if(mysqli_num_rows($results) == 1)
                {
                    $_SESSION['UserID'] = $UserID;
                    $_SESSION['success'] = "You are now logged in";
                     header('location: home.php');
                    
                    
                }else{
                    array_push($errors, "Wrong password/Email combination");
                }
            }
                                  
 
        }//end main f 
      
        mysqli_close($connection);
?>






