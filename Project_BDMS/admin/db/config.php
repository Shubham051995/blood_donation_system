<?php 
	$con =  new mysqli("localhost","root","","bdms");
	
	if($con->connect_error){
		die("Something going to wrong please try again later.");
	}
	
	
?>