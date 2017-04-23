<?php

include("admin_layout.php");

function content(){
	
	global $conn;
	global $full_url;
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
{

     $error = "";
	 $current_pass = check_input($_POST['current_password']);
	 $pass = check_input($_POST['password']);
	 $confirm_pass = check_input($_POST['confirm_password']);
	 $email = $_SESSION["email"];
	
	$select_password = mysqli_query($conn,"SELECT password FROM `authentication` WHERE email = '$email' ");
	
	if($select_password){
		$fetch_assoc = mysqli_fetch_assoc($select_password);
		$hashed_password = $fetch_assoc["password"];
	}

	
	if ( $current_pass == null || $pass == null || $confirm_pass == null) {
		$error = "All Fields Are Required";
	
	} 
	 else if (! password_verify($current_pass , $hashed_password)) {
		$error = "Current password is Wrong";
	}
	else if($pass != $confirm_pass){
		$error = "new password and confirm password not match";
	}
	else 
	{
		$hashed_new_password = password_hash($pass, PASSWORD_DEFAULT);
		
		mysqli_query($conn,"UPDATE `authentication` set password = '$hashed_password' WHERE email = '$email'" );
		
		header("Location:index.php");
	}
}
	 
	?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="text-center panel-heading"><h4>Change Password</h4></div>
				<div class="panel-body">			
			<?php if(@$error) {?>
			<h4 class="error text-center text-danger"><?php echo @$error ;?></h4><br /><?php } ?>
					<form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="form-group">
							<label for="current_password" class="col-md-4 control-label">Current password</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="current_password" type="password" value="<?php echo  @$current_password; ?>" class="form-control" name="current_password" placeholder="Current Password">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password" class="col-md-4 control-label">New Password</label>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" value="<?php echo  @password; ?>" class="form-control" name="password" placeholder="Password">
								</div>
							</div>
						</div>
						
							<div class="form-group">
							<label for="confirm_password" class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="confirm_password" type="password" value="<?php echo  @confirm_password; ?>" class="form-control" name="confirm_password" placeholder="Confirm Password">
								</div>
							</div>
						</div>

					
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
								
									<button type="submit" class="btn btn-info">
										Change   
									</button>
								</div>
								</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
<?php } ?>