<?php 
	include_once("db/config.php");
	$page_title = '';
	$page_content = '';
	if(isset($_REQUEST["p_id"])){
		$page_id = $_REQUEST["p_id"];
		$query = "SELECT t1.page_name,t2.* FROM tbl_pages t1 INNER JOIN tbl_content t2 ON t1.page_id = $page_id and t1.page_id = t2.page_id";
		$result = $con->query($query);
		$row = mysqli_fetch_array($result);
		if($row != false){
			
			$page_title = $row["page_name"];
			$page_content = mysqli_real_escape_string($con,$row["context"]);
			//$page_content = $row["context"];
		}
	}
	else{
		header("location:why_give_blood.php");
	}
	
?>

<html>
    <head>
        <title><?php echo ucwords($page_title); ?></title>
		<?php include_once("files/script.php")?>
	</head>
    <body>
    <header class="main-header">
      <?php include_once("files/menu.php");?>
    </header> <!-- /. main-header -->
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">       
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/slider/home-slider-7.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title"><?php echo ucwords($page_title); ?></h2>
                  <h4 class="carousel ">We need to make sure that we have enough supplies of all blood groups and blood types to treat all types of conditions.</h4>
                  <a href="#" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
          </div>
    </div><!-- /.carousel -->	
	<div class="main-container">
		<div class="container">
			<div class="row fadeIn animated">
				<div class="col-md-6">
					<img src="assets/images/about-us2.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2 class="title-style-2"><?php echo ucwords($page_title); ?> <span class="title-under"></span></h2>
					<p><?php echo $page_content; ?></p>						
				</div>
			</div> <!-- /.row -->
		</div>	    
	</div>
    <footer class="main-footer">
		<?php include_once("files/footer.php");?>
    </footer> <!-- main-footer -->
    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
		<?php include_once("files/donate.php"); ?>
    </div> <!-- /.modal -->
   </body>
</html>
