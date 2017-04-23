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
   <h4>&nbsp Application</h4>
   <li><a href="#">New Admission</a></li>
   <li><a href="#">Edit Application</a></li>
   <li><a href="#">Application Fees</a></li><br />
   
   <h4>&nbsp Form Sales</h4>
   <li><a href="#">Form Sales Entry</a></li>
   <li><a href="#">Total Sales</a></li><br />
   
   <h4>&nbsp Rank List</h4>
   <li><a href="#">Create Rank list</a></li>
   <li><a href="#"> View Existing</a></li>
   <li><a href="#">Special Quota</a></li><br />
   
   <h4>&nbsp Waiting List</h4>
   <li><a href="#">Waiting list 1</a></li>
   <li><a href="#">Waiting list 2</a></li>
   <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
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
 <?php echo content(); ?>
 </div>
</div>
  

  </div>
	<!-- footer -->
	
  </body>
</html>