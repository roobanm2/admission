<?php
include("connection.php");
session_start();
if(isset($_SESSION["email"]))
{
 ?>

<!DOCTYPE html>
<html lang="en">

<!-- header -->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thiagarajar College</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/admission.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/admission.js"></script>
  </head>
  
  <body>

  <!-- content -->
  <div class="container-fluid">
<div class="navbar navbar-default navbar-fixed-left">
  <ul class="nav navbar-nav"><br />
  
  <!-- check role -->
  <?php 
  
    $email = $_SESSION["email"];
	$fetch_user = mysqli_query($conn,"SELECT * FROM `authentication` WHERE email = '$email' ");
	
    if($fetch_user){
		$fetch_assoc = mysqli_fetch_assoc($fetch_user);
		$role = $fetch_assoc["role"];
	}
	
	if($role > 0){
	
	?>
  
   <h4>&nbsp Application</h4>
   <li><a href="newentry.php">New Admission</a></li>
   <li><a href="">Edit Application</a></li>
   <li><a href="application_fee.php">Application Fees</a></li><br />
   
   <h4>&nbsp Form Sales</h4>
   <li><a href="form_sales_entry.php">Form Sales Entry</a></li>
   <li><a href="totalsales.php">Total Sales</a></li><br />
   
   <?php if ($role > 1){ ?>
   <h4>&nbsp Rank List</h4>
   <li><a href="#">Create Rank list</a></li>
   <li><a href="#"> View Existing</a></li>
   <li><a href="#">Special Quota</a></li><br />
   
   <h4>&nbsp Waiting List</h4>
   <li><a href="#">Waiting list 1</a></li>
   <li><a href="#">Waiting list 2</a></li>
   	<?php } }?>
   <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
   <li><a href="change_pass.php"> Change Password</a></li>

  </ul>
</div>
<div class="container">
 <div class="row">
 <div class="container-fluid header">
<div class="header-logo display-inline">
<embed src="images/logo.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="100" height="100">
</div>
<div class=" header-name display-inline">
<img class="img-responsive" src="images/title.gif"><br>&nbsp;&nbsp; </div>

</div>
<br />
 <?php 
 $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
 switch($actual_link){
case $full_url.'newentry.php':
if($role > 0){
	 echo content();
}
else
{
	echo "You dont have rights to access this page";
}
break;

case $full_url.'application_fee.php':

if($role > 0){
	 echo content();
}
else
{
	echo "You dont have rights to access this page";
}
break;
	 
case $full_url.'form_sales_entry.php':

if($role > 0){
	 echo content();
}
else
{
	echo "You dont have rights to access this page";
}
break;

case $full_url.'totalsales.php':

if($role > 0){
	 echo content();
}
else
{
	echo "You dont have rights to access this page";
}
break;	 

 case $full_url :

if($role > 0){
	 echo content();
}
else
{
	echo "Students login is temporarily unavailable";
}
break;
 
  case $full_url.'index.php' :
  
  if($role > 0){
	 echo content();
}
else
{
	echo "Students login is temporarily unavailable";
}
break;

case $full_url.'change_pass.php':

echo content();

break;
 }
 
 ?>
 </div>
</div>
  

  </div>
	<!-- footer -->
	
  </body>
</html>
<?php } 
else 
{
	header('Location:login.php');
}
?>