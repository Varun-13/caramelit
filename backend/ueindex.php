
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
	<title>Login page</title>
</head>
<body class="body-overflow">

	
<section class="nav-sec" id="navbar-sec">
<nav class="navbar">
		<a class="navbar-brand"  href="#" >
			<img src="caramelacademy.jpeg" style="width:240px; height:65px; margin:0px 0px 0px 0px;">
		</a>
		<img src="php-mysql-logo.jpg" class="pull-right" style="width:140px; height:35px; ">
		
  		
		<ul class="navbar-nav ml-auto">
			

			<li class="nav-item">
					<form method="post" action="login.php" >
						
				      	<div class="container">
				        				<a href="uentitylogin.php" class="btn btn-info btn-md" class="nav-link px-lg-5 link-nav-index font-weight-bold">
				          					 Log out
				        				</a>
				      	</div>
	    				
					</form>
			</li>
		</ul>
		
	
	
	</nav>
</section>
<br><br>

<center>
	<input type="text" name="explore" placeholder="Explore courses" class="nav-link px-lg-5 link-nav-index font-weight-bold" style="margin-left: 20px;">
</center>



	<?php
	session_start();
	if(isset($_SESSION['uemail'])&&isset($_SESSION['ufirstname'])&&isset($_SESSION['ulastname'])){
		echo "";
	}
	

	?><br>
	<h1 style="text-align: center ;color:#000066;">Welcome <?php echo " ,"?><?php echo $_SESSION['ufirstname'];?><?php echo " "?><?php echo $_SESSION['ulastname'];?>(University)<?php echo " "?>to Caramel IT Academy! </h1>
</div>
</body>

</html>
<style type="text/css">
	
		
body { 
    background: url(reg2.jpg) no-repeat center center fixed #000; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
ul li {
		list-style: none;
	}
	
</style>