<?php

include("admin_layout.php");

function content(){
	
if(isset($_SESSION["email"]))
{
	?>
	<div class="container-fluid">
	
  <div class="panel panel-danger panel-application">
  <div class="panel-heading"><h3> Application </h3> </div>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-3">
  <a href="newentry.php"><h4> 1 - New Admission</h4></a>
  </div>
  <div class="col-md-3">
  <h4> 2 - Edit Application</h4>
  </div>
 
  <div class="col-md-3">
 <a href="application_fee.php">  <h4> 3 - Application Fees Details </h4></a>
  </div>
  </div>
  </div>
</div>

<div class="panel panel-info panel-rank-list">
  <div class="panel-heading"><h3> Form Sales </h3> </div>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-3">
  <a href="form_sales_entry.php"><h4> 4 - Form Sales Entry </h4></a>
  </div>
 <div class="col-md-3">
  <a href="totalsales.php"><h4> 5 - Total Sales </h4></a>
  </div>
  </div>
  </div>
  </div>
  
  
  <div class="panel panel-danger panel-rank-list">
  <div class="panel-heading"><h3> Rank list </h3> </div>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-3">
  <h4> 6 - Create Rank list</h4>
  </div>
  <div class="col-md-3">
  <h4> 7 - View Existing</h4>
  </div>
  <div class="col-md-3">
  <h4> 8 - Special Quota</h4>
  </div>
  </div>
  </div>
</div>

  <div class="panel panel-info panel-waiting-list">
  <div class="panel-heading"><h3> Waiting list </h3> </div>
  <div class="panel-body">
  <div class="row">
  <div class="col-md-3">
  <h4> 9 - Waiting list 1</h4>
  </div>
  <div class="col-md-3">
  <h4> 0 - Waiting list 2</h4>
  </div>
  </div>
  </div>
</div>
<div class="text-right">
<a href="logout.php" class="btn btn-danger">Logout</a>
</div><br /><br />
	</div>
<?php } 

else
{
	header("Location:login.php");
}}

?>