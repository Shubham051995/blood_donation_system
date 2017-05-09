<html>
    <head>
        <title>BLOOD DONATION SYSTEM</title>
        <?php include_once("files/script.php"); ?>
    </head>
    <body>
    <header class="main-header">
    	<?php include_once("files/menu.php"); ?>
    </header> <!-- /. main-header -->
	<div class="main-container">
		<div class="container">
			<div class="row fadeIn animated">
				<div class="col-md-6">
					<img src="assets/images/about-us.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-6">
					<?php
						if(!isset($_POST["donateNow"]))
						{
						print "<BR><BR><BR><BR><div class=head1><h3> Your are not logged in<br> Please fill the donate <a href=index.php>Form</h3></a></div>";
						}
						else{
						print "<h1>REGISTRATION SUCCESSFULL!</h1>";
						print "<h2>Thank You For Your Registration</h2><br>";
						print "<h3>We Will Connect You Soon.</h3><br>";
						}	 
					?>					
				</div>
			</div>
		</div>	    
	</div>	
    <footer class="main-footer">
		<?php include_once("files/footer.php"); ?>
    </footer> <!-- main-footer -->
	 <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
		<?php include_once("files/donate.php"); ?>
    </div> <!-- /.modal -->
    </body>
</html>
