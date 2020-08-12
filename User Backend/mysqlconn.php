<?php

//define constant variables

define('DB_NAME','user_reg_login');
define('DB_USER','root');
define('DB_PASSWORD','zap');
define('DB_HOST','localhost');

try{
	$conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

	mysqli_set_charset($conn,'utf8');
	
}catch(Exception $ex){
	print "An exception occured,message".$ex->getMessage();
}catch(Error $e){
	print "The system is busy please try later";
}
?>