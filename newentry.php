<?php

include("admin_layout.php");

function content(){
	?>
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="text-center panel-heading"><h4>Application Details</h4></div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" name="application_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
						<div class="form-group">
							<label for="application_no" class="col-md-4 control-label">Application no</label>
							<div class="col-md-6">
									<input id="application_no" type="text" class="form-control" name="application_no" placeholder="Application No">
							</div>
						</div>
						
						<div class="form-group">
						<label class="col-md-4 control-label">Degree</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="degree" checked>UG</label>
                        <label class="radio-inline"><input type="radio" name="degree">PG</label>
                        <label class="radio-inline"><input type="radio" name="degree">M PHIL</label>									
						</div>
						</div>
						
					   <div class="form-group">
						<label class="col-md-4 control-label">Course Stream</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="course_stream" checked>REGULAR</label>
                        <label class="radio-inline"><input type="radio" name="course_stream">SELF</label>								
						</div>
						</div>			
						
							<div class="form-group">
						<label class="col-md-4 control-label">Subject Stream</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="subject_stream" checked>ACADEMIC</label>
                        <label class="radio-inline"><input type="radio" name="subject_stream">VOCATIONAL</label>
                        <label class="radio-inline"><input type="radio" name="subject_stream">CS</label>									
                        <label class="radio-inline"><input type="radio" name="subject_stream">NON CS</label>									
						</div>
						</div>		

	                    <div class="form-group">
						<label class="col-md-4 control-label">Subject</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="subject">PHYSICS</label>
                        <label class="radio-inline"><input type="radio" name="subject">CHEMISTRY</label>
                        <label class="radio-inline"><input type="radio" name="subject">MATHS</label>									
                        <label class="radio-inline"><input type="radio" name="subject">CS</label>									
                        <label class="radio-inline"><input type="radio" name="subject">BCA</label>									
                        <label class="radio-inline"><input type="radio" name="subject">BBA</label>									
                        <label class="radio-inline"><input type="radio" name="subject">ENGLISH</label>									
                        <label class="radio-inline"><input type="radio" name="subject" checked>TAMIL</label>									
                        <label class="radio-inline"><input type="radio" name="subject">ECONOMICS</label>									
                        <label class="radio-inline"><input type="radio" name="subject">COMMERCE</label>									
						</div>
						</div>							
						
						<div class="form-group">
							<label for="name" class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
									<input id="name" type="text" class="form-control" name="name" placeholder="Name">
							</div>
						</div>
						
						
	                    <div class="form-group">
						<label class="col-md-4 control-label">Gender</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="gender" checked> Male</label>
                        <label class="radio-inline"><input type="radio" name="gender"> Female</label>
						</div>
						</div>
						
						 <div class="form-group">
						<label for="dob" class="col-md-4 control-label">Date Of Birth</label>
						<div class="col-md-6">
						 <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
						</div>
						</div>
						
						<div class="form-group">
						<label for="age" class="col-md-4 control-label">Age</label>
						<div class="col-md-6">
						 <input type="text" id="age" class="form-control" disabled>
						</div>
						</div>
						
						<div class="form-group">
							<label for="religion" class="col-md-4 control-label">Religion</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="religion"> Hindu</label>
                        <label class="radio-inline"><input type="radio" name="religion"> Christian</label>
                        <label class="radio-inline"><input type="radio" name="religion"> Muslim</label>
                        <label class="radio-inline"><input type="radio" name="religion"> Others</label>
						</div>
						</div>
						
						<div class="form-group">
						<label for="community" class="col-md-4 control-label">Community</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="community"> OC</label>
                        <label class="radio-inline"><input type="radio" name="community" checked> BC</label>
                        <label class="radio-inline"><input type="radio" name="community"> BCM</label>
                        <label class="radio-inline"><input type="radio" name="community"> MBC</label>
                        <label class="radio-inline"><input type="radio" name="community"> DNC</label>
                        <label class="radio-inline"><input type="radio" name="community"> SC</label>
                        <label class="radio-inline"><input type="radio" name="community"> ST</label>
                        <label class="radio-inline"><input type="radio" name="community"> SC(A)</label>
						</div>
						</div>
						
						<div class="form-group">
						<label for="address" class="col-md-4 control-label">Address</label>
						<div class="col-md-6">
						 <textarea class="form-control" rows="5" id="address"></textarea>
						</div>
						</div>
						
						<div class="form-group">
						<label for="no_of_appearance" class="col-md-4 control-label">No of Appearance</label>
						<div class="col-md-6">
						<input id="no_of_appearance" type="text" class="form-control" name="no_of_appearance" placeholder="No of Appearance">
						</div>
						</div>
						
						<div class="form-group">
						<label for="hsc_reg_no" class="col-md-4 control-label">Hsc Registration Number</label>
						<div class="col-md-6">
						<input id="hsc_reg_no" type="text" class="form-control" name="hsc_reg_no" placeholder="Registration No">
						</div>
						</div>
						
						<div class="form-group">
						<label for="month_of_passing" class="col-md-4 control-label"> Month & Year Of Passing</label>
						<div class="col-md-6">
						 <input type="month" class="form-control" id="month_of_passing" name="month_of_passing" >
						</div>
						</div>
						
						<div class="form-group">
						<label for="group_name" class="col-md-4 control-label"> +2 Group Name</label>
						<div class="col-md-6">
						 <select class="form-control select-major" id="group_name">
                         <option></option>
                         <option>BIO MATHS</option>
                         <option>CS MATHS</option>
                         <option>PURE SCIENCE</option>
                         <option>COMMERCE</option>
                         <option>VOCATIONAL</option>
                         </select>
						</div>
						</div>
						
						<div class="form-group">
						<label for="tamil" class="col-md-4 control-label"> Tamil</label>
						<div class="col-md-6">
						<input type="text" class="form-control" id="tamil" name="tamil" placeholder="200">
						</div>
						</div>
						
						<div class="form-group">
						<label for="english" class="col-md-4 control-label"> English</label>
						<div class="col-md-6">
						<input type="text" class="form-control" id="english" name="english" placeholder="200">
						</div>
						</div>
						
						<div class="major-subjects">
						<!-- div to add +2 subjects -->
						</div>
						
						<div class="form-group">
						<label for="total" class="col-md-4 control-label"> Total</label>
						<div class="col-md-6">
						<input type="text" class="form-control" id="total" name="total" placeholder="1200" disabled>
						</div>
						</div>
						
						<div class="form-group">
						<label for="cutoff" class="col-md-4 control-label"> Cutoff</label>
						<div class="col-md-6">
						<input type="text" class="form-control" id="cutoff" name="cutoff" disabled>
						</div>
						</div>
						
						<div class="form-group">
						<label for="quota" class="col-md-4 control-label"> Quota</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="quota" checked>None</label>
                        <label class="radio-inline"><input type="radio" name="quota">Ex Service Man</label>
                        <label class="radio-inline"><input type="radio" name="quota">Physically challenged</label>
                        <label class="radio-inline"><input type="radio" name="quota">Nri</label>
						</div>
						</div>
						
						<div class="form-group">
						<label for="sports" class="col-md-4 control-label"> Sports</label>
						<div class="col-md-6">
                        <label class="radio-inline"><input type="radio" name="sports" checked>None</label>
                        <label class="radio-inline"><input type="radio" name="sports">District</label>
                        <label class="radio-inline"><input type="radio" name="sports">Divisional</label>
                        <label class="radio-inline"><input type="radio" name="sports">State</label>
                        <label class="radio-inline"><input type="radio" name="sports">National</label>
                        <label class="radio-inline"><input type="radio" name="sports">International</label>
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