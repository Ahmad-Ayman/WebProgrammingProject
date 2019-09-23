<?php
 
 include 'register_server.php';
?>

<html>

<head>
    <meta charset="UTF-8">
     <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kit.fontawesome.com/3d4d1e263c.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <link rel="stylesheet" type="text/css" href="css/masterlayout.css" />

    <script src="js/jquery.slicknav.min.js"></script>


    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="jquery.js"></script>
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
            <li><a href="index.html">Home</a></li>
            <li><a href="Targets.html">Targets</a></li>
            <li><a href="#">Nutration</a></li>
             <li><a href="TrainingPage.html">Trainings</a></li>
            <li  class="active"><a href="sign_in.php">Login / Register</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
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
    
    

     <div class="container h-100">
<div class="row  h-100 align-items-center">
 
   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
       
            <div class="ifstat">
                <h3 style="color:#d291bc">    Create An Account  </h3>

       </div>
       </br> </br>
       <form method="POST" action="gym_details.php"> <!-- start form --------------->
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationCustom01"> User name </label>
      <input type="text" name="Username" class="form-control" id="validationCustom01" placeholder= "Username">
      
    </div>
   <div class="form-group col-md-6">
      <label for="inputEmail4"> Email</label>
      <input type="email" name="Email" class="form-control" id="inputEmail4" placeholder="name@gmail.com">
    </div>
  </div>
          <div class="form-group">
    <label for="inputNumber"> Password </label>
    <input type="Password" name="Password" class="form-control" id="inputNumber" placeholder="Password">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
       <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" name="Birthday" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth">
    </div>
    </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Country</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Country">
            <option>Cairo</option>
            <option>Cairo</option>
            <option>Cairo</option>
            <option>Cairo</option>
            <option>Cairo</option>
    </select>
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"> Area</label>
    <input type="text" name="Area" class="form-control" id="inputAddress" placeholder="Area ">
  </div>
  <div class="form-group">
    <label for="inputAddress2"> PhoneNumber</label>
    <input type="text"  name="PhoneNumber" class="form-control" id="inputAddress2" placeholder="PhoneNumber">
  </div>
  
          <div class="form-group">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
      <label class="form-check-label" for="invalidCheck3">
              Accept Conditions
        </label> </div> 
 
  </div>
           
           
          <?php include 'errors.php';?>
           <button type="submit" name="register" class="btn btn-warning" style="background-color:#d291bc"> Register </button>

                 
           <button type="button" class="btn btn-primary" style="background-color:#d291bc" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> Login</button>

       </form>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Login Now </h5>
        <button type="button" class="close" style="background-color:#d291bc"data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
          <form method="POST" action=""> <!-- start of login ----------------------->
            <div class="form-group">
    <label for="exampleInputEmail1"> Email </label>
    <input type="email" name="Email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    <small id="emailHelp" class="form-text text-muted"> Will Not Share You're Mail with anyone </small>
  </div>
             
             <div class="form-group">
    <label for="exampleInputPassword1">  Password </label>
    <input type="password"  name="Password" class="form-control" id="exampleInputPassword1">
  </div>
        
               <div class="modal-footer">
       
                   <button type="submit"  name="login_user"  class="btn btn-primary" style="background-color:#d291bc;"> Send </button>
      </div>
        </form> <!----- End of login ------------------------------------------------->
      </div>
        
        
    
    </div>
  </div>
</div>
         </form> </div> </div> </div>
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
                             <li><a href="index.html">Home</a></li>
            <li><a href="Targets.html">Targets</a></li>
            <li><a href="#">Nutration</a></li>
             <li><a href="TrainingPage.html">Trainings</a></li>
            <li><a href="sign_in.php">Login / Register</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
                            
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