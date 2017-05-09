<?php 
	include_once("db/config.php");
?>

<html>
    <head>
        <title>BLOOD DONATION SYSTEM</title>
        <?php include_once("files/script.php")?>
    </head>
    <body onLoad="document.registration.blood.focus();">
	<header class="main-header">
		<?php include("files/menu.php"); ?>
	</header> <!-- /. main-header -->
    <!-- Carousel
    ================================================== -->
    <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="assets/images/slider/home-slider-1.png" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Because they need your help</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow ">Do not let them down</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
            <div class="item ">
              <img src="assets/images/slider/home-slider-2.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow">Together we can improve their lives</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
            <div class="item ">
              <img src="assets/images/slider/home-slider-3.jpg" alt="">
              <div class="container">
                <div class="carousel-caption">
                  <h2 class="carousel-title bounceInDown animated slow" >A penny is a lot of money, if you have not got a penny.</h2>
                  <h4 class="carousel-subtitle bounceInUp animated slow">You can make the diffrence !</h4>
                  <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">DONATE NOW</a>
                </div> <!-- /.carousel-caption -->
              </div>
            </div> <!-- /.item -->
          </div>
          <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div><!-- /.carousel -->
    <div class="section-home about-us fadeIn animated">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">               
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/our-mission-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our mission</h3>
                        <div class="col-details">
                          <p>To perform a critical role in healthcare by providing a safe, secure and cost effective supply of quality blood products</p>                        
                        </div>
                        <a href="https://en.wikipedia.org/wiki/Blood_donation" class="btn btn-primary"> Read more </a>                    
                  </div>                  
                </div>
                <div class="col-md-3 col-sm-6">                
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/make-donation-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Donations</h3>
                        <div class="col-details">
                          <p>“Don’t let mosquitoes get your blood first. So Donate Blood As soon as Possible.”</p>                          
                        </div>
                        <a href="https://en.wikipedia.org/wiki/Blood_donation" class="btn btn-primary"> Read more </a>                    
                  </div>                  
                </div>
                <div class="col-md-3 col-sm-6">                
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/help-icon.png" alt="">
                        </div>
                        <h3 class="col-title">Help & support</h3>
                        <div class="col-details">
                          <p>Donor requirements for medical research may be slightly different from those for ARCBS donors.</p>                          
                        </div>
                        <a href="https://en.wikipedia.org/wiki/Blood_donation" class="btn btn-primary"> Read more </a>                    
                  </div>                  
                </div>
                <div class="col-md-3 col-sm-6">                
                  <div class="about-us-col">
                        <div class="col-icon-wrapper">
                          <img src="assets/images/icons/programs-icon.png" alt="">
                        </div>
                        <h3 class="col-title">our programs</h3>
                        <div class="col-details">
                          <p> Development of a sound, viable sustainable management and funding for the nationally coordinated blood network.</p>                          
                        </div>
                        <a href="https://en.wikipedia.org/wiki/Blood_donation" class="btn btn-primary"> Read more </a>                    
                  </div>                  
                </div>
            </div>
        </div>      
    </div> <!-- /.about-us -->
    <div class="section-home home-reasons">
        <div class="container">
            <div class="row">                
                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/we-fight-togother.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title">We fight together</h3>
                            <h5 class="reason-subtitle">We are humans</h5>                           
                        </div>
                        <div class="on-hover hidden-xs">                            
                                <p> A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components).</p>
                                <p> Blood banks often participate in the collection process as well as the procedures that follow it.</p>
                                <p> Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis). </p>                               
                        </div>
                    </div>                    
                </div>
                <div class="col-md-6">
                    <div class="reasons-col animate-onscroll fadeIn">
                        <img src="assets/images/reasons/we-care-about.jpg" alt="">
                        <div class="reasons-titles">
                            <h3 class="reasons-title">WE care about others</h3>
                            <h5 class="reason-subtitle">We are humans</h5>                            
                        </div>
                        <div class="on-hover hidden-xs">                            
                                <p> An event where donors come to donate allogeneic blood is sometimes called a 'blood drive' or a 'blood donor session'. </p>
                                <p> These can occur at a blood bank, but they are often set up at a location in the community such as a shopping center, workplace, school, or house of worship.</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div> <!-- /.home-reasons -->
    <div class="section-home our-causes animate-onscroll fadeIn">
        <div class="container">
            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-hunger.jpg" alt="" class="cause-img">
                        <h4 class="cause-title"><a href="why_give_blood.php">Why Give Blood </a></h4>                        <div class="cause-details">
                            Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>                          
                        </div>                      
                    </div> <!-- /.cause -->                   
                </div> 
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-education.jpg" alt="" class="cause-img">
                        <h4 class="cause-title"><a href="who_can_give_blood.php">Who Can Give Blood</a></h4>
                        <div class="cause-details">
                            Most people can give blood. You can give blood if you:
							are fit and healthy,
							weigh over 7 stone 12 lbs or 50kg,
							are aged between 17 and 66 (or 70 if you have given blood before),
							are over 70 and have given blood in the last two years.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>                          
                        </div>
                    </div> <!-- /.cause -->                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-rights.jpg" alt="" class="cause-img">
                        <h4 class="cause-title"><a href="donation_process.php">The Donation Process</a></h4>
                        <div class="cause-details">
                            Giving blood is simple and it saves lives. When you give blood, it is collected so it can be used to treat someone else.
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>                          
                        </div>
                    </div> <!-- /.cause -->                    
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="cause">
                        <img src="assets/images/causes/cause-culture.png" alt="" class="cause-img">
                        <h4 class="cause-title"><a href="blood_tips.php">Blood Tips</a></h4>
                        <div class="cause-details">
                            Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood
                        </div>
                        <div class="btn-holder text-center">
                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>                          
                        </div>
                    </div> <!-- /.cause -->                    
                </div>
            </div>
        </div>        
    </div> <!-- /.our-causes -->
    <footer class="main-footer">
		<?php include_once("files/footer.php"); ?>
    </footer> <!-- main-footer -->	
    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
		<?php include_once("files/donate.php"); ?>
    </div> <!-- /.modal -->
   </body>
</html>

	