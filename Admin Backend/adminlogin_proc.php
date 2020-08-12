<?php

$error=array();
$email=validate_input_email($_POST['email']);
if(empty($email)){
	$error[]="You forgot to enter your Email";
}


$password=validate_input_text($_POST['password']);
if(empty($password)){
	$error[]="You forgot to enter your password";
}

if(empty($error)){
	//sql query
	$query="SELECT id,name,email,mobile,password FROM admin_reg WHERE email=?";
	$q=mysqli_stmt_init($conn);
	mysqli_stmt_prepare($q,$query);


	//bind parameter

	mysqli_stmt_bind_param($q,'s',$email);
	//execute query
	mysqli_stmt_execute($q);

	$result=mysqli_stmt_get_result($q);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	if(!empty($row)){
		//verify password
		if(password_verify($password, $row['password'])){
			session_start();
			$_SESSION['userid']=$row['id'];
			$_SESSION['aemail']=$row['email'];
			$_SESSION['afullname']=$row['fullname'];
			

			
			header("location:admin-dashboard/index.php");
			exit();
		}
	}
}
else{
	echo "Please fill out email and password to Login";
}



?>