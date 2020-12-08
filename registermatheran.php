<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/all.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
  

    <title>Register Matheran</title>

   

  </head>


  <body>
    <div id="bottomheader">
      <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-md" style="background-color: rgb(0, 0, 0);">
          <a class="navbar-brand" href="home.html">
            <img src="imgs/bikinglogo2.png" width="120px" height="50px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
    <span class="navbar-toggler-icon"></span>
  </button>
          
          <div class="collapse navbar-collapse" id="navbarToggler">
          
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link" href="home.html">Home</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="webdevelopment.html">Rides</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="completedrides.html" style="color: black;">Completed</a>
                <a class="dropdown-item" href="upcomingrides.html" style="color: black;">Upcoming</a>
              </div>
            </li>


            <li class="nav-item active">
              <a class="nav-link" href="aboutus.html">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contactus.html">Contact Us</a>
            </li>

            
     

            <li class="nav-item">
              <a class="nav-link" href="Logout.php">Logout</a>
            </li>

          </ul>

          </div>
        </nav>
        
      </div>
    </div>

   </header>

   <section class="breadcrumbs-section">
    <div class="container pl-3 p-sm-3">
      <div class="row">
        <div class="col-12">
          <h2>Lavasa</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="default.html">Home</a></li>
            <li class="breadcrumb-item">Rides</li>
            <li class="breadcrumb-item"><a href="upcomingrides.html">Upcoming</a></li>
            <li class="breadcrumb-item"><a href="upcomingrides.html">Matheran</a></li>
            <li class="breadcrumb-item active">Register</li>
          </ol>
        </div>
      </div>
    </div>

  </section>



  <form method="POST" action="includes/matheran.inc.php">      
    <input name="license" type="text" class="feedback-input" placeholder="License Number" />   
    <input name="bikename" type="text" class="feedback-input" placeholder="Bike Name" />
    <input name="bikevin" type="text" class="feedback-input" placeholder="Bike VIN" />
    <input name="bloodgroup" type="text" class="feedback-input" placeholder="Blood Group" />
    
    <button name="matheran-submit" type="submit">Register</button>
  </form>


   
   <footer class="full-footer">
    <div class="container top-footer p-md-3 p-1">
      <div class="row">
        
        <div class="col-md-3 p-4">
          <a href="home.html">
        <img class="img-fluid" src="imgs/bikinglogo2.png">
        </a>

        </div>

        <div class="col-md-3 p-4">
          <a style="color: white;" class="p-2" href="https://www.facebook.com/pillaicollege/"><i class="fab fa-2x fa-facebook-square"></i></a>
        <a style="color: white;" class="p-2" href="https://www.google.com"><i class="fab fa-2x fa-youtube"></i></a>
        <a style="color: white;" class="p-2" href="https://www.instagram.com/nakul1405/"><i class="fab fa-2x fa-instagram"></i></a>
        <a style="color: white;" class="p-2" href="https://twitter.com"><i class="fab fa-2x fa-twitter-square"></i></a><br><br>
        <a class="p-2" href="">Privacy policy</a>
          <br>
          <a class="p-2" href="https://www.youtube.com/user/pillaisalegria">Youtube Channel</a>
        </div>

        <div class="col-md-3 p-4">
          <h3 class="p-2">Contact Us</h3>
          <a class="p-2" href="tel:+919022154219"><i class="fas fa-phone"></i> +917021438304</a>
          <br>
            <a class="p-2" href="mailto:enquiry@bbg.com"><i class="fas fa-envelope-square"></i> enquiry@bbg.com</a>
        </div>

       <div class="col-md-3 p-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26140.824697689095!2d80.17068776016484!3d13.108254288411697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52638af947b22f%3A0x3f49103a87667270!2sBiking%20brotherhood!5e0!3m2!1sen!2sin!4v1601362585419!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
         </div> 


      </div>
      
    </div>


    

    <div class="container-fluid bottom-footer">
      <div class="row">
        <div class="col-12 text-center">
          <p>copyright © 2020 Biking Brotherhood. All rights reserved</p>
        </div>
      </div> 
    </div>
     

   </footer>

    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"> </script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

 </body>
 </html>