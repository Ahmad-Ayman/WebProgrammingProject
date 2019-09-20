<?php

        
          require 'register_server.php';
         include 'connection.php';
?>

<html>
    <head>
         <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/3d4d1e263c.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <link rel="stylesheet" type="text/css" href="css/masterlayout.css" />

    <script src="js/jquery.slicknav.min.js"></script>


    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="css/profile.css">
<style>
    .fieldset-title{
        margin-top: 4%;
        font:#d291bc;
    }
    
</style>
    </head>
    <body class="body">
        <!-- Header -->
 <!-- Header section -->
    <header class="header-section asda">
        <a class="site-logo">
            <img src="./images/logo.png" alt="">
        </a>
        <div class="header-socil-links">
            <a href="https://www.facebook.com/Busy-Bee120319176021811/?view_public_for=120319176021811"><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>

        </div>
        <ul id="menu">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Nutration</a></li>
            <li><a href="sign_in.php">Login / Register</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </header>
    
    <section class="hero-section section-one-master">
        <div class="hero-content-warp">
            <div class="container">
                <div class="hero-content">

                    <h2>
                        <span class="wrap">About Us</span>
                    </h2>
                  
                </div>
            </div>
            <img src="./images/pic.png" class="headerPic" alt="" style="height: 400px;width: 500px;position: absolute; right: 150px;bottom: 10px;" >
        </div>
    </section>

   <!-- Place Your Design Here -->
    
    
<div class="container">
   <html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="css/final.css">
<style>
    
    
</style>
    </head>
    <body class="body">
        
<div class="container">
    
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
               
                <div class="content-panel">
                   
                    <form class="form-horizontal">
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title" style="color:#d291bc">Edit Your Profile</h3>
                           
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label" style="color:#d291bc">User Name</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="Username" class="form-control" value="">
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label" style="color:#d291bc">Weight</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="Weight" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 col-sm-3 col-xs-12 control-label" style="color:#d291bc">Height</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="Height" class="form-control" value="">
                                </div>
                            </div>
                            
                            </div>
                        </fieldset>
                        <fieldset class="fieldset">
                            <h3 class="fieldset-title" style="color:#d291bc">Contact Info</h3>
                           
                            <div class="form-group">
                                <label class="col-md-2  col-sm-3 col-xs-12 control-label" style="color:#d291bc">Phone Number</label>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <input type="text" name="PhoneNumber" class="form-control" value="">
                                    
                                </div>
                            </div>
                            
                        </fieldset>
                        <hr>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0">
                                <input class="btn btn-primary" style="background-color:#d291bc;" type="submit" name="Update" value="Update">
                            </div>
                        </div>
                   
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
        <!-- subscribe and footer -->
     <section class="subscribe-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="subscribe-text text-center">
                        <h1>Subscribe with Us to get all the News</h1>
                        <p>Your Health is our Duty </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <form class="subscribe-form" action="#">
                        <input type="email" class="form-control" placeholder='Enter Email Address' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'">

                        <button type="submit" class="btn_2 subscribe-btn" value="Subscribe">
                            <b>Subscribe</b></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
         <footer class="footer-master" style=" padding: 90px 0px;">
        <div class="container footer-container">
            <div class="row footer-row ">
                <div class="col-md-4 col-sm-12 col-xs-12 aboutus-part footer-column text-center">
                    <h4>About Busy-Bee</h4>
                    <p>
                        “Busy-Bee” is a women online fitness club totally focused on mummies staying fit and healthy whilst pregnant and beyond.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 footer-column text-center">
                    <h4>Site Map</h4>
                    <div class="site-map  ">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Classes</a></li>
                            <li><a href="#">Nutration</a></li>
                            <li><a href="#">Login / Register </a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12  footer-column text-center">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span>215 El-Nasr Street,  Mo’men Square, Maadi, Cairo </p>
                        <p><span> Phone :</span> +20 123456789</p>
                        <p><span> Email : </span>info@busy-bee.com </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-center" style="margin-top: 20px; color: #f7ffa0;">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Web Programming Course Project

                </div>
            </div>

        </div>
    </footer>
    </body>
</html>



 <?php
    if(isset($_POST['Update']))
    {
        $query = mysqli_query("update User set
            Username='$Username', email = '$Email',password='$Password','Weight='$Weight',Height='$Height',PhoneNumber='$PhoneNumber',
            PhoneNumber='$PhoneNumber' WHERE UserID='$UserID'", $connection);
        
        ?>
        <script type="text/javascript">
            alert("Updated Successfully")
        </script>    
      <?php
    }
 
 
 
 ?>
    </body>
</html>



