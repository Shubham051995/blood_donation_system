<?php 
	include_once("db/config.php");
?>
<div>
<h1 align="center">CONTACT DETAILS</h1>
<?php
	$sql="SELECT * FROM contact";
	$result = mysqli_query($con,$sql);
	echo "<table border='1' width='100%' cellspacing='1'cellpadding='1'>
		<tr >
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</tr>";
		
		while($row = mysqli_fetch_array($result)) {
			$name = $row['name'];
			$email = $row['email'];
			$message = $row['message'];
			echo "<tr><td >".$name."</td><td >".$email."</td><td>".$message."</td></tr> ";
		} 
	echo "</table>";
?>	
</div>
<div>
	<br><br>
</div>
<div>
<h1 align="center">DONORS DETAILS</h1>
<?php
	$sql="SELECT * FROM donors";
	$result = mysqli_query($con,$sql);
	echo "<table border = '1' cellpadding='1' width='100%' cellspacing='1'>
		<tr>
		<th>BloodGroup</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>AdditionalNote</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			$bloodgroup = $row['bloodgroup'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$phone = $row['phone'];
			$address = $row['address'];
			$additionalnote = $row['additionalnote'];
			echo "<tr><td >".$bloodgroup."</td><td >".$firstname."</td><td >".$lastname."</td><td style='widtd: 600px;'>".$email."</td><td >".$phone."</td><td>".$address."</td><td >".$additionalnote."</td></tr>";
		} 

	echo "</table>";

?>
</div>	
<div>
	<br><br>
</div>
<div>
<h1 align="center">RECEIVERS DETAILS</h1>
<?php
	$sql="SELECT * FROM receivers";
	$result = mysqli_query($con,$sql);
	echo "<table border='1' cellpadding='1' width='100%'cellspacing='1'>
		<tr>
		<th>BloodGroup</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>AdditionalNote</th>
		</tr>";
		while($row = mysqli_fetch_array($result)) {
			$bloodgroup = $row['bloodgroup'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];
			$phone = $row['phone'];
			$address = $row['address'];
			$additionalnote = $row['additionalnote'];
			echo "<tr><td >".$bloodgroup."</td><td >".$firstname."</td><td >".$lastname."</td><td style='widtd: 600px;'>".$email."</td><td >".$phone."</td><td>".$address."</td><td >".$additionalnote."</td></tr>";
		} 

	echo "</table>";
	
?>
</div>	
<div>
	<br><br>
</div>
<div>
<h1 align="center">MAIL DETAILS</h1>
<?php
	$sql="SELECT * FROM mail";
	$result = mysqli_query($con,$sql);
	echo "<table border='1' width='100%' cellspacing='1'cellpadding='1'>
		<tr >
			<th>Gmail</th>
			<th>Receiver</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>";
		
		while($row = mysqli_fetch_array($result)) {
			$Gmail = $row['Gmail'];
			$Receiver = $row['Receiver'];
			$Subject = $row['Subject'];
			$Message = $row['Message'];
			echo "<tr><td >".$Gmail."</td><td >".$Receiver."</td><td >".$Subject."</td><td>".$Message."</td></tr> ";
		} 
	echo "</table>";
	
?>	
</div>
