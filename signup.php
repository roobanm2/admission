<?php

include("default_layout.php");

function content(){
	
	global $conn;
	global $full_url;
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
{

     $error = "";

	 $email = check_input($_POST['email']);
	 $password = check_input($_POST['password']);
	 $confirm_password = check_input($_POST['confirm-password']);
	
	$verify_email_existance = mysqli_query($conn,"SELECT * FROM `authentication` WHERE email = '$email'");
	
	if ( $email == null || $password == null ) {
		$error = "All Fields Are Required";
	
	} 
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address "; 
    }
	else if(@mysqli_num_rows($verify_email_existance) > 0){
		$error = " This Email Already Signed Up";
	}
	else if($password != $confirm_password){
		$error = "password not match";
	}
	else
	{
		$hash_password = password_hash($password, PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO `authentication` (`id`, `role`, `email`, `password`) VALUES (NULL, '0', '$email','$hash_password')";
		
		mysqli_query($conn,$sql) or die (mysqli_error($conn));
		
		session_start();
		
		$_SESSION["email"] = $email;

		header('Location:' .$full_url.'index.php');

	}
}
	?>
	<br /><br />
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="text-center panel-heading"><h4>Sign up</h4></div>
				<div class="panel-body">
				<?php if(@$error) {?>
				<h4 class="error text-center text-danger"><?php echo @$error ;?></h4><br /><?php }?>
					
					<form class="form-horizontal" role="form" name="registraion_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input id="email" type="text" class="form-control" name="email" value="<?php echo  @$email; ?>" placeholder="Email">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" class="form-control" name="password" value="<?php echo  @$password; ?>" placeholder="Password">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Confirm-password" class="col-md-4 control-label">
								Confirm Password</label>

								<div class="col-md-6">

									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input id="Confirm-password" value="<?php echo  @$confirm_password; ?>" type="password" class="form-control" name="confirm-password" placeholder="Confirm password">
									</div>

								</div>
							</div>
							<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
								<div class="row">
								<div class="col-md-3">
									<button type="submit" class="btn btn-info">
										<span class="glyphicon glyphicon-user"></span>  Sign up
									</button>
									</div>
									
									<div class="col-md-3">
									<a href="login.php" class="btn btn-link">
									 Sign in
									</a>
									</div>
</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	
	<?php
}
?>