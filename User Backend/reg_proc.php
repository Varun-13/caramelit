<?php
require 'helper.php';
require 'mail.php';
$error=array();

$firstname=validate_input_text($_POST['fname']);
if(empty($firstname)){
	$error[]="You forgot to enter your first name";
}
$lastname=validate_input_text($_POST['lname']);
if(empty($lastname)){
	$error[]="You forgot to enter your last name";
}
$type=validate_input_text($_POST['typeUser']);
if(empty($type)){
	$error[]="You forgot to enter your type";
}
$email=validate_input_email($_POST['email']);
if(empty($email)){
	$error[]="You forgot to enter your Email";
}
$mobile=validate_input_text($_POST['phone']);
if(empty($mobile)){
	$error[]="You forgot to enter your Mobile Number";
}
$dmy=validate_input_text($_POST['birthDate']);
if(empty($mobile)){
	$error[]="You forgot to enter your Birthdate";
}
$password=validate_input_text($_POST['password']);
if(empty($password)){
	$error[]="You forgot to enter your password";
}
$confirmpassword=validate_input_text($_POST['repassword']);
if(empty($confirmpassword)){
	$error[]="You forgot to enter your Confirm password";
}
$country=validate_input_text($_POST['country']);
if(empty($country)){
	$error[]="You forgot to enter your Country";
}
$state=validate_input_text($_POST['state']);
if(empty($state)){
	$error[]="You forgot to enter your State";
}
$univ=validate_input_text($_POST['college']);
if(empty($univ)){
	$error[]="You forgot to enter your College/University";
}
$skill=validate_input_text($_POST['skill']);
if(empty($skill)){
	$error[]="You forgot to enter your Skill";
}



if(empty($error)){
	$hashed_pass=password_hash($password,PASSWORD_DEFAULT);
	require('mysqlconn.php');


	//make a query

	$query="INSERT INTO register(id,firstname,lastname,type,email,mobile,dmy,password,country,state,univ,skill)";
	$query.="VALUES('',?,?,?,?,?,?,?,?,?,?,?)";

	$q=mysqli_stmt_init($conn);

	//prepare sql statement
	mysqli_stmt_prepare($q,$query);

	//bind values
	mysqli_stmt_bind_param($q,'sssssssssss',$firstname,$lastname,$type,$email,$mobile,$dmy,$hashed_pass,$country,$state,$univ,$skill);

	//execute statement
	mysqli_stmt_execute($q);
	if(mysqli_stmt_affected_rows($q)==1){


						

		
		
		header('location:successreg.php');
		exit();
	}else{
		print "";
	}



}else{
	echo "not validate";
}