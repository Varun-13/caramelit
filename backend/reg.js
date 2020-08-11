$(document).ready(function(e){


	$("#reg-form").submit(function(event){
		let $password=$("#password");
		let $confirm=$("#repassword");
		let $error=$("#confirmerror");
		if($password.val()===$confirm.val()){
			return true;
		}else{
			$error.text("Passwords not Match");
			event.preventDefault();
		}
	});
});