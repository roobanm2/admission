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
	
	$verify_user = mysqli_query($conn,"SELECT password FROM `authentication` WHERE email = '$email' ");
	
	if($verify_user){
		$fetch_assoc = mysqli_fetch_assoc($verify_user);
		$hashed_password = $fetch_assoc["password"];
	}
	
	if ( $email == null || $password == null ) {
		$error = "All Fields Are Required";
	
	} 
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address "; 
	
    }
	else if(!@mysqli_num_rows($verify_user) == 1){
		$error = "This Email Doesn't Signed Up";
	}
   else if (! password_verify($password, $hashed_password)) {
		$error = "Wrong Email Or Password ";
	
	}
	else
	{
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
				<div class="text-center panel-heading"><h4>Log in</h4></div>
				<div class="panel-body">			
			<?php if(@$error) {?>
			<h4 class="error text-center text-danger"><?php echo @$error ;?></h4><br /><?php } ?>
					<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input id="email" type="text" value="<?php echo  @$email; ?>" class="form-control" name="email" placeholder="Email">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" value="<?php echo  @password; ?>" class="form-control" name="password" placeholder="Password">
								</div>
							</div>
						</div>

					
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								<div class="row">
								<div class="col-md-3">
									<button type="submit" class="btn btn-info">
										<span class="glyphicon glyphicon-user"></span>  Log in
									</button>
									</div>
									
									<div class="col-md-3">
									<a href="signup.php" class="btn btn-link">
									 Sign up
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