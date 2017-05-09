<?php
	include_once("../db/config.php");
	$response = array();
	$response["status"]= "fail";
	if(isset($_POST)){
		$b = trim($_POST["b"]);
		$f = trim($_POST["f"]);
		$l = trim($_POST["l"]);
		$e = trim($_POST["e"]);
		$p = trim($_POST["p"]);
		$a = trim($_POST["a"]);
		$add = trim($_POST["add"]);
		if($b != "" && $f != "" && $l != "" && $e != "" && $p != "" && $a != ""){
		$query ="INSERT INTO donors (bloodgroup,firstname,lastname,email,phone,address,additionalnote) VALUES('$b','$f','$l','$e','$p','$a','$add')";
		$result = $con->query($query);
		if($result){
			$response["status"] = "success";
		}
		}
	}
	echo json_encode($response);
?>