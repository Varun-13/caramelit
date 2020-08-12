<?php
require 'helper.php';
require 'mail.php';
$error=array();

$fullname=validate_input_text($_POST['fname']);
if(empty($fullname)){
	$error[]="You forgot to enter your full name";
}


$email=validate_input_email($_POST['email']);
if(empty($email)){
	$error[]="You forgot to enter your Email";
}
$mobile=validate_input_text($_POST['phone']);
if(empty($mobile)){
	$error[]="You forgot to enter your Mobile Number";
}


$country=validate_input_text($_POST['country']);
if(empty($country)){
	$error[]="You forgot to enter your Country";
}
$state=validate_input_text($_POST['state']);
if(empty($state)){
	$error[]="You forgot to enter your State";
}
$zipcode=validate_input_text($_POST['pincode']);
if(empty($zipcode)){
	$error[]="You forgot to enter your Zipcode";
}
$cate=validate_input_text($_POST['cate']);
if(empty($cate)){
	$error[]="You forgot to select your category";
}
$subcate=validate_input_text($_POST['subcate']);
if(empty($subcate)){
	$error[]="You forgot to select your sub category";
}

$budget=validate_input_text($_POST['budget']);
if(empty($budget)){
	$error[]="You forgot to select your budget";
}
$service=validate_input_text($_POST['service']);
if(empty($service)){
	$error[]="You forgot to select your service";
}
$userexp=validate_input_text($_POST['userexp']);
if(empty($userexp)){
	$error[]="You forgot to enter your experience";
}



if(empty($error)){
	
	require('contactmysqlconn.php');


	//make a query

	$query="INSERT INTO contact_form(id,fullname,email,mobile,country,state,zipcode,cate,subcate,budget,service,userexp)";
	$query.="VALUES('',?,?,?,?,?,?,?,?,?,?,?)";

	$q=mysqli_stmt_init($conn);

	//prepare sql statement
	mysqli_stmt_prepare($q,$query);

	//bind values
	mysqli_stmt_bind_param($q,'sssssssssss',$fullname,$email,$mobile,$country,$state,$zipcode,$cate,$subcate,$budget,$service,$userexp);

	//execute statement
	mysqli_stmt_execute($q);
	if(mysqli_stmt_affected_rows($q)==1){
	header('location:contact_success.php');
		exit();
	}else{
		print "some error";
	}
}
else{
	print("some error");
}

