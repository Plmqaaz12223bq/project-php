<?php
include_once 'connect.php';
// unset($_POST["submit"]);
if(isset($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];


  $sql="INSERT INTO contact (namee,email,subjectt,messagee) VALUES ('$name','$email','$subject','$message');";
  mysqli_query($conn, $sql);




}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./CSS/contactUs.css">
</head>
<body>

<!-- ghufran -->
<nav>
        <div class="logo">
            <img src="./img/Capture-removebg-preview.png" width="200px" alt="">
        </div>
        <div class="tab1">
            <a href="">HOME</a>
            <a href="">PRODUCTS</a>
            <a href="">CART</a>
            <a href="">CONTACT US</a>
            <a href="">ABOUT US</a>
        </div>
        <div class="tab2">
           
            <a href="">REGISTER</a>
        </div>
    </nav>


    <div class="container my-4">

       
        <!-- Section: Contact v.1 -->
    <section class="my-5">
    
      <!-- Section heading -->
      <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
      <!-- Section description -->
      
    
      <!-- Grid row -->
      <div class="row">
    
        <!-- Grid column -->
        <div class="col-lg-5 mb-lg-0 mb-4">
    
          <!-- Form with header -->
          <div class="card">
            <div class="card-body">
              <!-- Header -->
              <div class="form-header blue accent-1">
                <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
              </div>
             
              <!-- Body -->
              <form method="post">
              <div class="md-form">
                <i class="fas fa-user prefix grey-text"></i>
                <label for="form-name">Your name</label>
                <input name="userName" type="text" id="form-name" class="form-control">
                
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label for="form-email">Your email</label>
                <input name="userEmail" type="text" id="form-email" class="form-control">
              
              </div>
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <label for="form-Subject">Subject</label>
                <input name="subject" type="text" id="form-Subject" class="form-control">
               
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <label for="form-text">Send message</label>
                <textarea name="message" id="form-text" class="form-control md-textarea" rows="3"></textarea>
               
              </div>
              <div class="text-center">
              
                <button name="submit" type="submit" class="btn btn-light-blue">Submit</button>
                
              </div>
            </div>
          </div>
</form>
          <!-- Form with header -->
    
        </div>
        <!-- Grid column -->
    
        <!-- Grid column -->
        <div class="col-lg-7">
    
          <!--Google map-->
          <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Buttons-->
          <div class="row text-center">
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-map-marker-alt"></i>
              </a>
              <p>New York, 94126</p>
              <p class="mb-md-0">United States</p>
            </div>
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-phone"></i>
              </a>
              <p>+ 01 234 567 89</p>
              <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
            </div>
            <div class="col-md-4">
              <a class="btn-floating blue accent-1">
                <i class="fas fa-envelope"></i>
              </a>
              <p>info@gmail.com</p>
              <p class="mb-0">sale@gmail.com</p>
            </div>
          </div>
    
        </div>
        <!-- Grid column -->
    
      </div>
      <!-- Grid row -->
    
    </section>
    <!-- Section: Contact v.1 -->
    
      </div>
      <!-- ghufran -->
      <footer>
    <div id="footerdiv">
        <div class="col-3">
            <img src="./Images/logo.png">
        </div>
        <div class="col-3">
            <h1 style="text-align: center;">Follow US</h1><br>
            <p style="text-align: center;">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-linkedin"></i>
            </p>
            <br>
            <p style="text-align: center;">copyright <i class="fa-solid fa-copyright"></i> 2022 BeautyCare</p>
        </div>
        <div class="col-3">
            <a href="">Home</a>
            <a href="">Shop</a>
            <a href="">Contact Us</a>
            <a href="">Login</a>
            <a href="">Register</a>
        </div>
    </div>
    </footer>
</body>
</html>