<?php
require 'helper.php';
require 'mail.php';
$error=array();

$fullname=validate_input_text($_POST['name']);
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

$password=validate_input_text($_POST['password']);
if(empty($password)){
	$error[]="You forgot to enter your password";
}
$confirmpassword=validate_input_text($_POST['repassword']);
if(empty($confirmpassword)){
	$error[]="You forgot to enter your Confirm password";
}



if(empty($error)){
	$hashed_pass=password_hash($password,PASSWORD_DEFAULT);
	require('adminmysqlconn.php');


	//make a query

	$query="INSERT INTO admin_reg(id,name,email,mobile,password)";
	$query.="VALUES('',?,?,?,?)";

	$q=mysqli_stmt_init($conn);

	//prepare sql statement
	mysqli_stmt_prepare($q,$query);

	//bind values
	mysqli_stmt_bind_param($q,'ssss',$fullname,$email,$mobile,$hashed_pass);

	//execute statement
	mysqli_stmt_execute($q);
	if(mysqli_stmt_affected_rows($q)==1){
	header('location:adminsuccessreg.php');
		exit();
	}else{
		print "";
	}



}else{
	echo "not validate";
}