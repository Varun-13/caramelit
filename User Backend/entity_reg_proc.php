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

$email=validate_input_email($_POST['email']);
if(empty($email)){
	$error[]="You forgot to enter your Email";
}
$dob=validate_input_text($_POST['birthDate']);
if(empty($mobile)){
	$error[]="You forgot to enter your Birthdate";
}
$contact=validate_input_text($_POST['phone']);
if(empty($mobile)){
	$error[]="You forgot to enter your Mobile Number";
}

$password=validate_input_text($_POST['password']);
if(empty($password)){
	$error[]="You forgot to enter your password";
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
$skills=validate_input_text($_POST['skill']);
if(empty($skill)){
	$error[]="You forgot to enter your Skill";
}
$role=validate_input_text($_POST['inlineRadioOptions']);
if(empty($role)){
	$error[]="You forgot to select your role";
}
$colname=validate_input_text($_POST['college_name']);
if(empty($role)){
	$error[]="You forgot to enter your college name";
}
$uname=validate_input_text($_POST['university_name']);
if(empty($role)){
	$error[]="You forgot to enter your university name";
}
$orgname=validate_input_text($_POST['organization_name']);
if(empty($role)){
	$error[]="You forgot to enter your Organization name";
}
$org_email=validate_input_text($_POST['organization_email']);
if(empty($role)){
	$error[]="You forgot to enter your Organization Email";
}
$col_skills=validate_input_text($_POST['college_skill']);
if(empty($role)){
	$error[]="You forgot to enter your Skills";
}
$c_others=validate_input_text($_POST['college_description']);
if(empty($role)){
	$error[]="You forgot to enter College Description";
}
$o_others=validate_input_text($_POST['organization_description']);
if(empty($role)){
	$error[]="You forgot to enter Organization Description";
}

if(empty($error)){
	$hashed_pass=password_hash($password,PASSWORD_DEFAULT);
	require('entity_mysql_conn.php');


	//make a query

	$query="INSERT INTO register(id,firstname,lastname,type,email,mobile,dmy,password,country,state,univ,skills,role,colname,uname,orgname,orgemail,col_skills,c_others,o_others)";
	$query.="VALUES('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

	$q=mysqli_stmt_init($conn);

	//prepare sql statement
	mysqli_stmt_prepare($q,$query);

	//bind values
	mysqli_stmt_bind_param($q,'sssssssssssssssssss',$firstname,$lastname,$type,$email,$dmy,$mobile,$hashed_pass,$country,$state,$univ,$skills,$role,$colname,$uname,$orgname,$orgemail,$col_skills,$c_others,$o_others);

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