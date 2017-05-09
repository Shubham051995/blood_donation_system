<?php
include("db/config.php");
session_start();
error_reporting(1);
 ?>
<html>
	<head>
		<title>Adminstrative AreaOnline BDMS </title>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<style>			
				h1{
					color: blue;
					font-weight: bold;
					font-size: 15;
				}
				a{
					color: red;
					font-weight: bold;
					font-style: italic;
				}
				h2{
					color: black;
					font-weight: bold;
					font-size: 25;
				}
				table{
					border-width : 2px;
					border-color : black;
					border-style : solid;
					margin: 5;
					padding: 5px ;
				}
		</style>
	</head>
	<body bgcolor="#EEFDEF">
		<?php
			include("files/menu.php");
		?>

		<h2 align="center">
			Welcome to Admistrative Area
		</h2>
		<div align="right">
			<a href="mail.php"> Send E-Mail</a>
			<a href="logout.php">Logout</a>
		</div>
		<div>
		
<?php 
			include_once("select.php");
?>
		</div>
	</body>
</html>