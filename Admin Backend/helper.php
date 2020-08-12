<?php

function validate_input_text($textvalue){
	if(!empty($textvalue)){
		$trimtext=trim($textvalue);
		//remove illegal char
		$sanitize_str=filter_var($trimtext,FILTER_SANITIZE_STRING);
		return $sanitize_str;
	}
	return '';
}

function validate_input_email($emailvalue){
	if(!empty($emailvalue)){
		$trimtext=trim($emailvalue);
		//remove illegal char
		$sanitize_str=filter_var($trimtext,FILTER_SANITIZE_EMAIL);
		return $sanitize_str;
	}
	return '';
}