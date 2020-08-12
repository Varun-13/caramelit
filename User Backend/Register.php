<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		require 'reg_proc.php';
	}
?>	
	
</head>
<body class="light-bg">
	
	<nav class="navbar navbar-expand-sm">
		
		<a class="navbar-brand"  href="#" >
			<img src="Caramel-Horz.png" style="width:240px; height:65px; margin:0px 0px 0px 0px;">
		</a>
		<ul class="nav navbar-nav navbar-right" id="phpmysql">
			<li><img src="php-mysql-logo.jpg" class="pull-right" style="width:140px; height:35px; "></li>
		</ul>
	</nav>

	<br><br>
	




  <div class="container" style="margin-top:-70px;">
	<div class="row">
		<div class="col-md-3"></div>
			<div class="col-md-6">
      			<h2 align=center style="color:#ADD8E6;"><b>Student Registration</b></h2><br>
      				<div id="form">
      				<form autocomplete="off" action="Register.php" method="post"  role="form" data-toggle="validator" id="reg-form">
    
		          		<div class="row">
							 <div class="col-md-6">
						        <div class="form-group input-group has-feedback ">
						          <label 
						             class="validation-message"></label>
						          
						          
						          <input name='fname' type="text"  
						            placeholder="First Name...." class="form-control stureg" required />
						          
						        </div>
							</div>
							<div class="col-md-6">
						        <div class="form-group input-group has-feedback">
						          
						             <input name='lname' type="text" placeholder="Last Name...." class="form-control stureg" required/>
						          
						        </div>
							</div> 
					    </div>
					        <div class="form-group input-group has-feedback">
					          <select name='typeUser' class="form-control stureg"  required>
					            <option value="">- - - Select Type - - -</option>
					            <option value="student">Student</option>
					            <option value="professional">Working Professional</option>
					          </select>
					        </div>


					        <div class="form-group input-group has-feedback">
					         
					          	<input name='email' type="email" placeholder="Email Address...." class="form-control stureg" data-error="This email address is invalid" required />
					          
					        </div>

					        <div class="form-group input-group has-feedback">
					          
					          	<input name='phone' type="number" placeholder="Your Mobile Number...." class="form-control stureg" data-error="This Mobile Number is invalid" required />
					          
					        </div>
					        <div class="form-group input-group has-feedback">
					          
					          	<input name='birthDate' type="date" class="form-control stureg" data-error="Date Of Birth is invalid" required />
					          
					        </div>

					        <div>
					          <div class="form-group input-group has-feedback ">
					            
					            <input name='password' type="password" id="password" 
					              placeholder="Password...." class="form-control stureg" required />
					            
					          </div>
					      </div>

					      <div>
					        <div class="form-group input-group has-feedback ">
					          
					          <input name='repassword' type="password" id="repassword" 
					            placeholder="Re-type Password...." class="form-control stureg" required />
					          
					        </div>
					        <small id="#confirmerror" class="text-danger "></small>
					      </div>
					        
					       <div class="form-group input-group has-feedback">
					      		
					         
					      		<select name='country' class="form-control stureg" required>
					       			<option value="" >- - - Select Your Country - - -</option>
					        		<option value="Australia">Australia</option>
					        		<option value="India">India</option>
					        		<option value="UK">UK</option>
					        		<option value="USA">USA</option>
					        		<option value="others">Others</option>
					      		</select>
					      		
					    	</div>
							
							<div class="form-group input-group has-feedback">
					          
					          		<input name='state' type="text" class="form-control stureg" placeholder="Enter Your State..." data-error="State is invalid" required />
					          
					        </div>
					        
					        <div class="form-group input-group has-feedback">
					          
					          	<input name='college' type="text" class="form-control stureg" placeholder="Your College/University Name..." data-error="College is invalid" required />
					          
					        </div>       
					        
					        <div class="form-group input-group has-feedback">
					          
					          	<input name='skill' type="text" class="form-control stureg" placeholder="Skill Set if you have any... EX: C, C++,java" data-error="Skill Set is invalid" required />
					          
					        </div>
					     	
					          <br>
					        
					        <button type="submit" id="submitButton"
					          class="btn btn-primary full-width m-b">Register</button>
							<br>
							
					<h3 style="text-align: center" ><a href="login.php" style="color:#111111 ">Already Registered? Please Login</a></h3><br>
					
      </form>
  </div>
      <script type="text/javascript" src="reg.js"></script>
</body>

</html>
<style type="text/css">
	body {
	background-image: url(reg2.jpg) ;
	background-size:cover;
	background-repeat: no-repeat;


}
.nav>li{
	text-align:  right;
}

</style>