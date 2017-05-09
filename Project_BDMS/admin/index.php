<?php 
	include('db/config.php'); 	
	 session_start();
		if(isset($_POST["submit"]))
			{
				"btn click";
				
				$loginid = $_POST["name"];
				$pass = $_POST["password"];
				echo $query="SELECT * FROM bdms_admin WHERE loginid='$loginid' and pass='$pass'";
				
				$rs=mysqli_query($con,$query);	
				$rows = mysqli_num_rows($rs);
				
				if($rows == 1)
				{
					header("location:home.php");
				}				
				else 
				{
					header("location:index.php");					
				}
			}
?>
<html>
	<head>
		<title>Administrative Area</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<header>
			<?php include_once("files/menu.php"); ?>
		</header>  
		<form method="post"  name="form">
	    <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >		 
			<tr>
				<td colspan="2" align="center"><img src="images/adminlog.jpg"  width="380px" height="90px"></td>
			</tr>		
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr> 
			<tr>
				<td align="right"><img src="Images/login1.png" width="200px" height="150px" /></td>
				<td style="vertical-align:top">
					<table cellpadding="0" cellspacing="0" height="200px">
						<tr>
							<td class="lefttd">User Name</td><td><input type="text" name="name" id="btn_name" required /></td>
						</tr>
						<tr>
							<td class="lefttd">Password</td><td><input type="password"name="password" id="btn_pass"required/></td>
						</tr>
						<tr>
							<td>&nbsp;</td><td><input type="submit" value="Log In" name="submit"id="btn_submit" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td>
						</tr>
						<tr>
							<td>&nbsp;</td><td>&nbsp;</td>
						</tr>		  
					</table>
				</td>
			</tr>
		</table>			
		</form>
	</body>
</html>