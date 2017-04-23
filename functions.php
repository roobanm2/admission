<?php 

$conn = mysqli_connect("localhost","root", "","admission") or die ("could not connect to mysql") ;
session_start();
$full_url = "http://$_SERVER[HTTP_HOST]/admission/";

function validate_login(){
	
    	global $conn;
		global $error;
		global $full_url;
		
	 
	 $email = check_input($_POST['email']);
	 $password = check_input($_POST['password']);
	
	$verify_user = mysqli_query($conn,"SELECT password FROM `authentication` WHERE email = $email ");
	
	if($verify_user){
		$fetch_assoc = mysqli_fetch_assoc($verify_user);
		$hashed_password = $fetch_assoc["password"];
	}
	   else  {
		$error = "your account does not exist ";
		return;
	}
	
	if ( $email == null || $password == null ) {
		$error = "All Fields Are Required";
		return ;
	} 
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid email "; 
		return;	
    }
   else if (! password_verify($password, $hashed_password)) {
		$error = "email or password not match";
		return;
	}
	else
	{
		session_start();
		
		$_SESSION["email"] = $email;

		header('Location:' .$full_url.'index.php');

	}
}

	
	function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>