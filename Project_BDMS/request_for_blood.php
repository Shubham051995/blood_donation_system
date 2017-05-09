<html>
    <head>
        <title>REQUEST FOR BLOOD</title>
       <?php include_once("files/script.php")?>
    </head>
    <body onLoad="document.registration.firstName.focus();">
    <header class="main-header">
        <?php include_once("files/menu.php");?>
    </header> <!-- /. main-header -->
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">       
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/slider/home-slider-6.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title">Request For Blood</h2>
                  <h4 class="carousel ">Your positive action combined with positive thinking results in success.</h4>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
          </div>
    </div><!-- /.carousel -->	
	<div class="main-container">
		<div class="container">
			<div class="row fadeIn animated">
				<div class="col-md-6">
					<img src="assets/images/about-us.jpg" alt="" class="img-responsive">
				</div>
				<div class="col-md-6">
					<h2 class="title-style-2">REQUEST FOR BLOOD<span class="title-under"></span></h2>
                <form class="form-donation"name="registration"method="post"action="request.php"onSubmit="return formvalidation();">                        
                        <div class="row">
                            <div class="form-group col-md-12 ">
									<label>Blood Group *</label>
									<select name="blood" id="txt_donate_bloodgroup">
										<option value="0">Select </option>
										<option value="A+">A+</option>
										<option value="B+">B+</option>
										<option value="O+">O+</option>
										<option value="A-">A-</option>
										<option value="B-">B-</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
									<label for="blood" class="error"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" id="txt_donate_firstname"placeholder="First name*">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" id="txt_donate_lastname"placeholder="Last name*">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" id="txt_donate_email"placeholder="Email*">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" id="txt_donate_phone"placeholder="Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" id="txt_donate_address"placeholder="Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" id="txt_donate_add"placeholder="Additional note"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btn_request"name="request" >Request For Blood</button>
                            </div>
                        </div>
                </form>
				</div>
			</div> <!-- /.row -->
		</div>	    
	</div>
    <footer class="main-footer">
			<?php include_once("files/footer.php"); ?>
     </footer> <!-- main-footer -->
    </body>
</html>

<script type="text/javascript">
	$("#btn_request").click(function(){
		var b,f,l,e,p,a,add;
		b = $("#txt_donate_bloodgroup").val();
		f = $("#txt_donate_firstname").val();
		l = $("#txt_donate_lastname").val();
		e = $("#txt_donate_email").val();
		p = $("#txt_donate_phone").val();
		a = $("#txt_donate_address").val();
		add = $("#txt_donate_add").val();
		
		$.ajax({
			url:"files/save_receivers.php",
			type:'POST',
			data:{b:b,f:f,l:l,e:e,p:p,a:a,add:add},
			success:function(r){
				console.log(r);
			},
			error:function(){
				console.log("error");
			}
		});
		
	});
</script>