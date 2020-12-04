<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.materialdesignicons.com/5.5.55/css/materialdesignicons.min.css"></script>
    
    <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>

<style type="text/css">
body {
  background-image: url(cntcbg.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
  </head>


<body>
   

<!-- loginForm -->
<section class="section" id="SignInCon">
  <div class="container">
  <div class="row justify-content-sm-center section-34">
    <div class="col-sm-8 col-md-6 col-lg-5">
   <a style="color:white;"><h1>Sign In or Sign Up</h1></a>
   <hr class="divider bg-madison" id="line1">
   <div class="offset-sm-top-45 text-center">
<!--Bootstrap tabs-->
  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
  
  <!--Nav tabs-->
  <ul class="nav nav-tabs" id="navTabs">
    <li class="nav-item" role="presentation"><a class="nav-link active show" href="#tabs-login-1" data-toggle="tab">Login</a></li>
    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-login-2" data-toggle="tab">Registration</a></li>
  </ul>

  <!--Tab panes-->
  <div class="tab-content">
  <div class="tab-pane fade active show" id="tabs-login-1">
    
  <form id="form" class="text-left" method="POST" action="includes/login.inc.php" >
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<div class="alert alert-danger" role="alert">Fill all the 
      fields  
  </div>';

 }
 elseif($_GET['error'] == "invaliduidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username and email
  </div>';  
}
elseif($_GET['error'] == "invaliduid"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username
  </div>';  

}
elseif($_GET['error'] == "invalidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Email  
  </div>';
}
elseif($_GET['error'] == "passwordcheck"){
   echo '<div class="alert alert-danger" role="alert">Password does not match
  </div>';
}
elseif($_GET['error'] == "usertaken"){
   echo '<div class="alert alert-danger" role="alert">Username is already taken  
  </div>';

}
}
?>
  <div class="form-group">
    <label>Email:</label>
    <input id="name" type="email" class="form-control" name="mailuid" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" class="form-control"  id="psw" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <button type="submit" class="btn btn-primary" name = "login-submit" id="signUp" >Sign In</button>
  </form>
  </div>
  <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
  
  <div class="tab-pane fade" id="tabs-login-2">

  <form id="form" class="text-left" method="POST" action="includes/signup.inc.php">

  <!-- php For error -->
  <?php
  if(isset($_GET['error'])){
    if($_GET['error'] == "emptyfields"){
      echo '<div class="alert alert-danger" role="alert">Fill all the 
      fields  
  </div>';

 }
 elseif($_GET['error'] == "invaliduidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username and email
  </div>';  
}
elseif($_GET['error'] == "invaliduid"){
   echo '<div class="alert alert-danger" role="alert">Invalid Username
  </div>';  

}
elseif($_GET['error'] == "invalidmail"){
   echo '<div class="alert alert-danger" role="alert">Invalid Email  
  </div>';
}
elseif($_GET['error'] == "passwordcheck"){
   echo '<div class="alert alert-danger" role="alert">Password does not match
  </div>';
}
elseif($_GET['error'] == "usertaken"){
   echo '<div class="alert alert-danger" role="alert">Username is already taken  
  </div>';

}
}
?>
<?php
if(isset($_GET['signup'])){
    if($_GET['signup'] == "success"){
      echo '<div class="alert alert-success" role="alert">Success  
  </div>';
  }
 } 
?>

  <div class="form-group" >
    <label>Name:</label>
    <input class="form-control" name="uid" type="text" required >
    <div class="invalid-feedback">
        Please provide a Name.
      </div>
  </div>
  <div class="form-group">
    <label for="validationCustom02">Email:</label>
    <input type="email" id="name" name="mail" class="form-control" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="validationCustom02">Phone No:</label>
    <input type="text" id="phone" name="phoneno" class="form-control"  required>
  </div>
  <div class="form-group">
    <label for="validationCustom03">Password:</label>
    <input type="password" id="psw" name="pwd" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
  <input type="password" name="confirm-pwd" class="form-control" required>
</div>
<button type="submit" name = "signup-submit" class="btn btn-primary" id="signUp" >Sign up</button>
  </form>
  </div>

  </div>
   </div>
  </div>
</section>

<br><br><br><br>

    </body>
</html>