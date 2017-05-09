<?php	
	include_once("../db/config.php");
	$response = array();
	$response["status"]= "fail";
	if(isset($_POST)){
		$g = trim($_POST["txt_mail_gmail"]);
		$a = trim($_POST["txt_mail_receiver"]);
		$s = trim($_POST["txt_mail_subject"]);
		$m = trim($_POST["txt_mail_message"]);
		$query ="INSERT INTO mail (Gmail,Receiver,Subject,Message) VALUES('$g','$a','$s','$m')";
		$result = $con->query($query);
		if($result){
			$response["status"] = "success";
		}
	}
	echo json_encode($response);
?>