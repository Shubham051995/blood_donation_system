<?php 
	$response = '
        <div class="footer-top">
        </div>
        <div class="footer-main">
            <div class="container">                
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title">About Blood <span class="title-under"></span></h4>
                            <div class="footer-content">
                                <p>
                                    Universally, \'Blood\' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. Once in every 2- seconds, someone, somewhere is desperately in need of blood. 
									More than 29 million units of blood components are transfused every year.
									The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.
                                </p> 
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title">TOP BLOOD BANK<span class="title-under"></span></h4>
                            <div class="col-sm-6 col-xs-12 text-left">
                        <a href="https://indianredcross.org/blood-bank.htm">INDIAN RED CROSS SOCIETY </a><br>
						<a href="http://www.rotarybloodbank.org/">ROTARY BLOOD BANK </a><br>
						<a href="https://www.bloodbankindia.net/">INDIAN BLOOD BANK </a><br>
						<a href="https://en.wikipedia.org/wiki/Blood_donation_in_India› Medical Consultants & Clinics">BLOOD BANK IN INDIA </a><br>
						<a href="http://www.friends2support.org/">	FRIENDS2SUPPORT </a>						
                    </div>                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>
                            <div class="footer-content">
                                <div class="footer-form">                                    
                                    <div class="footer-form">
                                        <div class="form-group">
                                            <input type="text" name="name" id="txt_contact_name" class="form-control" placeholder="Name" required>
                                        </div>
                                         <div class="form-group">
                                            <input type="email" name="email" id="txt_contact_email" class="form-control" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" id="txt_contact_msg" class="form-control" placeholder="Message" required></textarea>
                                        </div>                                        
                                         <div class="form-group">
                                            <button type="button" class="btn btn-submit pull-right" name="contact" id="btn_contact">Send message</button>
                                        </div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>';		
		echo $response;
?>
<script type="text/javascript">
	$("#btn_contact").click(function(){
		var n,e,m;
		n = $("#txt_contact_name").val();
		e = $("#txt_contact_email").val();
		m = $("#txt_contact_msg").val();
		if( n != '' && e!='' && m!='')	{
			$.ajax({
				url:"files/save_contact.php",
				type:'POST',
				data:{n:n,e:e,m:m},
				success:function(r){
					alert("Your Request is accepted. We contact you shortly.");
				},
				error:function(){
					alert("Your Request is not accepted. Please Try again later.");
				}
			});
	
		}
		else{
			alert("Please fill all mandatory fields.");
		}
	});
</script>
