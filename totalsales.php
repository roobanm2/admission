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
							<option>UG Aided</option>
							<option>UG Self</option>
							<option>PG Aided</option>
							<option>PG Self</option>
							<option>M.Phil Aided</option>
							<option>M.Phil Self</option>
							<option>Diplomo Course</option>
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
							<label for="fromdate" class="col-md-4 control-label">From Date</label>
							<div class="col-md-6">
							<input type="date" name="fromdate" class="form-control" id="fromdate" >
							</div>
							</div>
							
							<div class="form-group">
							<label for="todate" class="col-md-4 control-label">To Date</label>
							<div class="col-md-6">
							<input type="date" name="todate" class="form-control" id="todate" >
							</div>
							</div>
							
							
							<div class="form-group">
							<label for="subject" class="col-md-4 control-label">Subject</label>
							<div class="col-md-6">
							<select class="form-control">
							<option>Cs</option>
							<option>Maths</option>
							</select>
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