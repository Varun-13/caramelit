<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%CPT+Serif:400,700,400italic' rel='stylesheet'>
	<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		require 'contact_reg_proc.php';
	}
?>
</head>
<body>
	<div >
		<div class="acaheader" id="topheader">
		<div class="contai">
			<nav class="navbar navbar-expand-lg bg ">
				<!-- Brand-->
				<a class="navbar-brand" href=""><img src="Caramel-Horz.png" width="200px" height="70px"></a>

				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="background-color: none">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav ml-auto font-weight-bold">
						<li class="nav-item ">
							<a class="nav-link px-lg-4" href="">IT Services Home</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link px-lg-4" href="">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<div class="container-fluid" class="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-1">
				
			</div>
			<div class="col-lg-10 contact">
				<h1 id="cname">Caramel Services</h1>
				<h1 id="coname" style="text-align: center;">Contact Us</h1>
				<div class="row" class="contact5">
					<div class="col-lg-6" >
						<h2 style="color: #00FF6C">User Information</h2>
					<div id="first2" >
						<form name="frm" action="contactus.php"  method="post">
                        <div  class="form-group">
                            		<label for="fullname" name="fname">Full Name</label>
                           				 <input type="text" class="form-control bg bg-light" id="fname" name="fname" required/>
                            			 <i id="fname error"></i>
                        </div>
                        <div  class="form-group">
                            <label for="fullname">Email</label>
                            
                            <input type="text"  class="form-control bg bg-light" id="email" name="email" required/>
                            <i id="emailerror"></i>
                        </div>
                        <div  class="form-group">
                            <label for="fullname">Phone Number</label>
                            <input type="text"  class="form-control bg bg-light" id="phone" name="phone" required/>
                            <i id="phoneerror"></i>
                        </div>
                           <div class="form-group">
                        	<label>Country</label>
                        	<select class="form-control bg bg-light" name="country">
                        		<option>Select Country</option>
                        		<option>INDIA</option>
                        		<option>U.S.A</option>
                        		<option>UK</option>
                        		<option>AUSTRALIA</option>
                        		<option>GERMANY</option>
                        	</select>
                        </div>
                        <div class="form-group">
                        	<label>State:</label>
                        	<input type="text" class="form-control bg bg-light" name="state">
                        </div>
                        <div class="form-group">
                        	<label>Zipcode/Pincode</label>
                        	<input type="text" class="form-control bg bg-light" name="pincode">
                        </div>
                    
					</div>

				</div>
				<div class="col-lg-6">
					<h2 style="color: #00FF6C">Academy Services</h2>
				<div class="form-group">
                            <label for="fullname">Category</label>
                            <select class="form-control bg bg-light" id="s1" name="cate">
                                <option>Core UI</option>
                                <option>Backend</option>
                                <option>Full Stack</option>
                                <option>Mobility</option>
                                <option>DevOps</option>
                                <option>Data Science & AI/ML</option>
                                <option>Digital Marketing</option>
                                <option>Cloud Computing</option>
                                <option>Cyber Security</option>
                                <option>ERP</option>
                                <option>IT</option>
                                <option>IT Certifications</option>

                            </select>
                        </div>
                       
                        <div class="form-group">
                        	<label for="fullname">Sub Category</label>
                        	<select class="form-control bg bg-light" name="subcate">
                        		<option>Core UI</option>
                        		<option>Advanced UI</option>
                        		<option>Angular JS</option>
                        		<option>React JS</option>
                        		<option>Vue JS</option>
                        		<option>Java</option>
                        		<option>.Net</option>
                        		<option>Node JS</option>
                        		<option>Ruby</option>
                        		<option>Python</option>
                        		<option>Core Java</option>
                        		<option>Advance Java</option>
                        		<option>.Net</option>
                        		<option>.Net Core</option>
                        		<option>MEAN</option>
                        		<option>MESN</option>
                        		<option>MEVN</option>
                        		<option>GoLang</option>
                        		<option>Ruby</option>
                        		<option>Flutter</option>
                        		<option>Ionic</option>
                        		<option>React Native</option>
                        		<option>Xamarin</option>
                        		<option>Onsen UI</option>
                        		<option>IOS</option>
                        		<option>Android</option>
                        		<option>DevOps Foundation</option>
                        		<option>DevOps Expert</option>
                        		<option>Ansible</option>
                        		<option>Chef</option>
                        		<option>Docker</option>
                        		<option>Kubernets</option>
                        		<option>Open Stack</option>
                        		<option>DS Boot Camp</option>
                        		<option>ML With Python</option>
                        		<option>Deep Learning</option>
                        		<option>Data Analytics</option>
                        		<option>Data Scientist Certification</option>
                        		<option>Natural Language Processing</option>
                        		<option>R Programming</option>
                        		<option>AI/ML Foundation Course</option>
                        		<option>AI/ML Expert Course</option>
                        		<option>Hadoop</option>
                        		<option>AWS Technical Essentials</option>
                        		<option>AWS Cloud Practitioner</option>
                        		<option>AWS Solution Architect Associate</option>
                        		<option>AWS Developer Associate</option>
                        		<option>AWS SysOps Associate Administrator</option>
                        		<option>Microsoft Azure Fundamentals</option>
                        		<option>Microsoft Azure Expert Certification</option>
                        		<option>CISSP</option>
                        		<option>CISA</option>
                        		<option>CEH</option>
                        		<option>COMPTIA Security++</option>
                        		<option>CISM</option>
                        		<option>CSA</option>
                        		<option>CAP</option>
                        		<option>CCSP</option>
                        		<option>CALIFORNIA PRIVACY LAW</option>
                        		<option>CIPP/US</option>
                        		<option>CIPP/EUROPE</option>
                        		<option>Digital Marketing Foundation</option>
                        		<option>Digital Marketing Expert</option>
                        		<option>SEO</option>
                        		<option>SMO</option>
                        		<option>SCM</option>
                        		<option>SMM</option>
                        		<option>Adwords Foundation</option>
                        		<option>Adwords Expert</option>
                        		<option>Content Marketing</option>
                        		<option>Branding</option>
                        		<option>SAP</option>
                        		<option>Oracle</option>
                        		<option>Infor LN</option>
                        		<option>RootStack</option>
                        		<option>Salesforce</option>
                        		<option>Service Now</option>
                        		<option>Remedy</option>
                        		<option>Microsoft Dynamics</option>
                        		<option>ITIL Foundation</option>
                        		<option>PMP</option>
                        		<option>PMI-ACP</option>
                        		<option>Agile</option>
                        		<option>Prince</option>
                        	</select>
                        </div>
					
					<br><br>
					<h2 style="color: #00FF6C">IT Services</h2>
					<div class="form-group">
                        	<label >Budget</label>
                        	<select class="form-control bg bg-light" name="budget">
                        		<option>25000 - 50000</option>
                        		<option>50000 - 100000</option>
                        		<option>100000 - 150000</option>
                        		<option>150000 - 200000</option>
                        		<option>200000 - 250000</option>
                        		<option>250000 - 300000</option>
                        		<option>>300000</option>
                        	</select>
                        </div>
                        <div class="form-group">
                        	<label>Service</label>
                        	<select  class="form-control bg bg-light" name="service">
                        		<option>Mobile App</option>
                        		<option>Wed Development</option>
                        		<option>Digital Marketing</option>
                        		<option>DevOps</option>
                        		<option>Python Development</option>
                        	</select>
                        </div>
                        <div class="form-group">
                        	<label>User Experience</label>
                        	<input type="text" class="form-control bg bg-light" name="userexp">
                        </div>
                     </div>
                   <!--      <div class="form-group">
                            <label for="fullname">Interested Course:</label>
                            <select class="form-control bg bg-light" id="s1">
                                <option>Full Stack Development</option>
                                <option>Data Science</option>
                                <option>Big Data</option>
                                <option>Devops</option>
                                <option>Digital Marketing</option>
                                <option>IoT</option>
                                <option>Python</option>
                                <option>Blockchain</option>
                                <option>Game Development</option>
                                <option>AWS</option>
                                <option>Data Analysis</option>
                                <option>Service Now</option>
                                <option>Azure</option>
                                <option>Angular</option>
                                <option>Node JS</option>
                                <option>React js</option>
                                <option>POWER BI</option>
                                <option>Tableau</option>
                            </select>
                        </div> -->
				
				 <div class="form-group" >
                            <button type="submit" value="submit" class="csub">SUBMIT</button>

                        </div>
					</form>
					</div>
			</div>
			<div class="col-lg-1">
				
			</div>
		</div>
	</div>
</div>
<section class="footer-section " id="foot-sec">
	<div class="cont">
		<div class="footer py-5 text-center">
			<div class="cont">
				<div class="row mb-1">
					<div class="col-12">
						<p class="mb-0">
							<a href="https://www.facebook.com/caramelitserviceshyderabad/" class="p-2"><span class="fa fa-facebook-square social-icons" style="font-size:36px;color:#731a14"></span></a>
							<a href="https://twitter.com/ItCaramel" class="p-2"><span class="fa fa-twitter-square social-icons" style="font-size:36px;color:#731a14"></span></a>
							<a href="https://www.instagram.com/caramelitservices/" class="p-2"><span class="fa fa-instagram social-icons" style="font-size:36px;color:#731a14"></span></a>
							<a href="https://www.linkedin.com/in/caramel-it-services/" class="p-2"><span class="fa fa-linkedin-square social-icons" style="font-size:36px;color:#731a14"></span></a>
							<a href="https://in.pinterest.com/caramelitservices/" class="p-2"><span class="fa fa-pinterest-square social-icons" style="font-size:36px;color:#731a14"></span></a>
							<a href="https://api.whatsapp.com/send?phone=+918886660461&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="p-2"><span class="fa fa-whatsapp" style="font-size:36px;color:#731a14"></span></a>
							</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="mb-1" style="font-size: 20px;">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved By Caramel IT Services Pvt.Ltd.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div> 
 </div>
</section>
	</div>
</body>
</html>
<style type="text/css">
	html,body{margin: 0;padding: 0;overflow-x: hidden;width: 100%;height: 100%;}
		.contact{
			margin-top: 20px;
		}
		#cname{
			font-weight: bold;
			color: #46324D;
			text-align: center;
			padding: 10px 0px 10px 0px;

		}
		.csub{
			margin-left: 400px;
			background-color: #D99539;
			width: 100px;
			height: 50px;
			font-weight: bold;
			border:none;
			border-radius: 10px;
			box-shadow: 0px 2px 2px 0px;

		}

		.contact5{
			margin-top: 20px;
		}
		.form-group{
		padding-top: 20px;
		font-weight: bold;
		}
		

				@media (max-width: 500px){
			#first2 input{
				width: 100%;
			}
			#cname{
				font-size: 30px !important;
			}
			#coname{
				font-size: 20px;
			}
			.csub{
			margin-left: 130px;
		}

		}
		body{
			background-image: url(contact.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(1,1,1,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
}
	</style>






































