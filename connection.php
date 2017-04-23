<?php 
$conn = mysqli_connect("localhost","root", "","admission") or die ("could not connect to mysql") ;

$full_url = "http://$_SERVER[HTTP_HOST]/admission/";

	function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>