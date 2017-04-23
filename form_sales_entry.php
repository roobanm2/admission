<?php

include("admin_layout.php");

function content(){
	?>
	
		<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="text-center panel-heading"><h4>Form Sales Entry</h4></div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" name="application_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
						<div class="form-group">
							<label for="degree" class="col-md-4 control-label">Degree</label>
							<div class="col-md-6">
							<select class="form-control">
							<option>UG </option>
							<option>PG</option>
							</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="stream" class="col-md-4 control-label">Stream</label>
							<div class="col-md-6">
							<select class="form-control">
							<option>Aided </option>
							<option>Self</option>
							</select>
							</div>
						</div>
						
						
							<div class="form-group">
							<label for="type" class="col-md-4 control-label">Type</label>
							<div class="col-md-6">
							<select class="form-control">
							<option>Arts</option>
							<option>Science</option>
							</select>
							</div>
							</div>
							
							<div class="form-group">
							<label for="caste" class="col-md-4 control-label">Caste</label>
							<div class="col-md-6">
							<select class="form-control">
							<option>Others</option>
							<option>Sc</option>
							</select>
							</div>
							</div>
							
							<div class="form-group">
							<label for="dateofissue" class="col-md-4 control-label">Date Of Issue</label>
							<div class="col-md-6">
							<input type="date" name="dateofissue" class="form-control" id="dateofissue" >
							</div>
							</div>
							
							<div class="form-group">
							<label for="name" class="col-md-4 control-label">Applicant Name</label>
							<div class="col-md-6">
							<input type="text" name="name" class="form-control" id="name" placeholder="Name" >
							</div>
							</div>
							
							<div class="form-group">
							<label for="amount" class="col-md-4 control-label">Amount</label>
							<div class="col-md-6">
							<input type="text" name="amount" class="form-control" id="amount" placeholder="Amount" disabled >
							</div>
							</div>
							
							<div class="form-group">
							<label for="formno" class="col-md-4 control-label">Form No</label>
							<div class="col-md-6">
							<input type="text" name="formno" class="form-control" id="formno" placeholder="Form No" >
							</div>
							</div>
							
								<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-info">
									  Save
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