<?php
      $response='<div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">
                <form class="form-donation"name="registration"action="registration.php"method="post"onSubmit="return formvalidation();">
                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>
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
                                <input type="text" class="form-control" name="phone"id="txt_donate_phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address"id="txt_donate_address" placeholder="Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" id="txt_donate_add"placeholder="Additional note"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow"id="btn_donate" >DONATE NOW</button>
                            </div>
                        </div>
                </form>
            
          </div>
        </div>
      </div>';
	  echo $response;
?>

<script type="text/javascript">
	$("#btn_donate").click(function(){
		var b,f,l,e,p,a,add;
		b = $("#txt_donate_bloodgroup").val();
		f = $("#txt_donate_firstname").val();
		l = $("#txt_donate_lastname").val();
		e = $("#txt_donate_email").val();
		p = $("#txt_donate_phone").val();
		a = $("#txt_donate_address").val();
		add = $("#txt_donate_add").val();
		
		$.ajax({
			url:"files/save_donors.php",
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