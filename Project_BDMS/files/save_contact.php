<?php	
	include_once("../db/config.php");
	$response = array();
	$response["status"]= "fail";
	if(isset($_POST)){
		$n = trim($_POST["n"]);
		$e = trim($_POST["e"]);
		$m = trim($_POST["m"]);
		if($n != "" && $e != "" && $m != ""){
		$query ="INSERT INTO contact (name,email,message) VALUES('$n','$e','$m')";
		$result = $con->query($query);
		if($result){
			$response["status"] = "success";
		}
		}
	}
	echo json_encode($response);
?>