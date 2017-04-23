<?php

include("index.php");

function content(){
	?>
	<br /><br />
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="text-center panel-heading"><h4>Sign up</h4></div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" name="registraion_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
						<div class="form-group">
							<label for="email" class="col-md-4 control-label">Email</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
									<input id="email" type="text" class="form-control" name="email" placeholder="Email">
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input id="password" type="password" class="form-control" name="password" placeholder="Password">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Confirm-password" class="col-md-4 control-label">
								Confirm Password</label>

								<div class="col-md-6">

									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input id="Confirm-password" type="password" class="form-control" name="confirm-password" placeholder="Confirm password">
									</div>

								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-info">
										<span class="glyphicon glyphicon-user"></span>  Sign Up
									</button>

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