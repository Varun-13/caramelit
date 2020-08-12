<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
  xmlns:th="http://www.thymeleaf.org">

<head>
  	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link rel="icon" href="favicon.ico" />

	<title>Admin Registration </title>

<!-- Bootstrap core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"rel="stylesheet"
  	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
  	crossorigin="anonymous" />

	<link href="loginRegister/css/style.css" rel="stylesheet" />
<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		require 'admin_reg_proc.php';
	}
?>
</head>

<body>
<!--  -->
<nav class="navbar navbar-expand-sm">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="">
    <img src="Caramel-Horz.png" alt="logo" style="width:240px; height:65px; margin:0px 0px 0px 0px;">
  </a>
 </nav>
  <!-- <div class="middle-box text-center loginscreen animated fadeInDown">
    <div> -->
      
  <br><br>
  <div class="container" style="margin-top:-40px;">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
      <h2 align=center style="color:#111;"><b>Admin Registration</b></h2><br>

      <form autocomplete="off" action="admin_register.php" method="post" class="m-t" role="form" data-toggle="validator">
    
        
	    <div class="form-group input-group has-feedback">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-user stugl"></span>
          </span>
          <input name="name" type="text"  
            placeholder="Enter Your Name...." class="form-control stureg"
            data-error="This email address is invalid" required />
          <span class="glyphicon form-control-feedback"
            aria-hidden="true"></span>
        </div>
	
	    <div class="form-group input-group has-feedback">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-envelope stugl"></span>
          </span>
          <input name="email" type="email"  
            placeholder="Email Address...." class="form-control stureg"
            data-error="This email address is invalid" required />
          <span class="glyphicon form-control-feedback"
            aria-hidden="true"></span>
        </div>
      <!--         -------email closes--------           -->
        <div class="form-group input-group has-feedback">
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-earphone stugl"></span>
          </span>
          <input name="phone" type="number" 
            placeholder="Your Mobile Number...." class="form-control stureg"
            data-error="This Mobile Number is invalid" required />
          <span class="glyphicon form-control-feedback"
            aria-hidden="true"></span>
        </div>
        <!--         -------mobile closes--------           -->
      	<div>
          <div class="form-group input-group has-feedback ">
            
            <input name="password" type="password" id="password"  
              placeholder="Password...." class="form-control stureg" required />
            <span
              aria-hidden="true"></span>
          </div>
      </div>

      <div>
        <div class="form-group input-group has-feedback ">
          
          <input name="repassword" type="password" id="rePassword" 
            placeholder="Re-type Password...." class="form-control stureg" required />
          <span
            aria-hidden="true"></span>
        </div>
      </div>
      	
        
        
          <br>
        
        <button type="submit"
          class="btn btn-primary full-width m-b">Register</button>
		<br>
		<h3><a href="admin_login.php" style="color:#111;">Already Registered? Please Login</a></h3><br><br>
      </form>
      <script>
        var password = document.getElementById('password');
        var rePassword = document.getElementById('rePassword');

        var passwordVal = false;
        var rePasswordVal = false;

        function submitButton() {
          if(passwordVal & rePasswordVal) {
              document.getElementById('submitButton').disabled = false;
          } else {
              document.getElementById('submitButton').disabled = true;
          }
        }

        function validatepassword(e) {
          if(password.value.length < 8) {
            password.style.borderColor = 'red';
            passwordVal = false;
          } else {
            password.style.borderColor = 'green';
            passwordVal = true;
          }

          submitButton();
        }

        function validateRePassword(e) {
          if(rePassword.value.localeCompare(password.value) != 0) {
            rePassword.style.borderColor = 'red';
            rePasswordVal = false;
          } else {
            rePassword.style.borderColor = 'green';
            rePasswordVal = true;
          }

          submitButton();
        }

        password.addEventListener("keyup", validatepassword);
        rePassword.addEventListener("keyup", validateRePassword);  
      </script>
      </div>
      <div class="col-md-3"></div>
     </div>
    </div>
       <p class="m-t">
      
      </p>
    </div>
  </div>


  <!-- jQuery-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Bootstrap Validator plugin -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

 
</body>

</html>

	<style>
		.stureg{
			height:40px;
		}
		.stugl{
		
		width:30px;
		height:26px;
		font-size:20px;
		}
		.stucheck{
			width:20px;
			height:20px;
			color:blue;
		}
		body{
			background-image: url(adminbg.png);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>