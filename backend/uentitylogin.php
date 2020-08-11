<?php


require('uemysqlconn.php');
include 'helper.php';

?>

<?php


if ($_SERVER['REQUEST_METHOD']=='POST') {
    require 'uentitylogin_proc.php';
  }

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="log.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	 
</head>
<body>
	<nav class="navbar navbar-expand-sm">
 
  <a class="navbar-brand" href="uentitylogin.php">
    <img src="Caramellogo.png" alt="logo" style="width:240px; height:65px; margin:0px 0px 0px 0px;">
  </a>
  
</nav>

  <div class="container">
    <?php
    if(!empty($row)){
    //verify password
    if(password_verify($password, $row['password'])){
      header("location:ueindex.php");
      exit();
    } else{  
  
    echo "<h1 style='text-align:center ;'>You are not a member</h1>";
    }
  }

  ?>
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h2 class="card-title text-center"><b>Sign In As University</b></h2>
            	
            <form class="form-signin"  method="post">
              
            
              <div class="form-label-group">

              	<label for="inputEmail">Email address</label>
                <input name="email"  type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                
              </div>

              <div class="form-label-group">

              	<label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                
              </div>

              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              
               <a href="e_register.php" style="font-size: 20px;">Sign Up</a><a class="float-right"  href="/user/forgot-password" style="font-size: 20px;">Forgot password?</a><h6><a href="orgentitylogin.php" class="float-center">Sign in as Organization</a></h6>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<style type="text/css">
  body{
  
  background-image: url(log1.jpg);
  background-size:110%;
}
</style>
</html>