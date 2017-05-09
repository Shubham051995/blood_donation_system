<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-mail</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
		<header>
		<?php include_once("files/menu.php"); ?>
		</header>  
        <div id="main">
            <h1>Respond To the user</h1>
            <div id="login">
                <h2>Send Email</h2>
                <hr/>
                <form action="mail.php" method="post">
					<label>Gmail :&nbsp;</label>
                    <input type="text" placeholder="Enter your Gmail ID" name="email" id ="txt_mail_gmail"/><br><br>
					<label>Password :&nbsp;</label>
                    <input type="password" placeholder="Enter your Gmail Password" name="password" /><br><br>
					<label>To :&nbsp;</label>
                    <input type="text" placeholder="Email Id " name="toid"id="txt_mail_receiver"/>  <br><br>
					<label>Subject :&nbsp;</label>
                    <input type="text" placeholder="Subject : " name="subject" id="txt_mail_subject"/><br><br>
					<label>Message :&nbsp;</label>
                    <textarea rows="4" cols="50" placeholder="Enter Your Message..." name="message"id="txt_mail_message"></textarea><br><br>
                    <input type="submit" value="Send" name="send" id="btn_send" /><br>
                </form>    
            </div>
        </div>
          <?php
              require 'phpmailer/PHPMailerAutoload.php';
              if(isset($_POST['send']))
                  {
                    $email = $_POST['email'];                    
                    $password = $_POST['password'];
                    $to_id = $_POST['toid'];
                    $message = $_POST['message'];
                    $subject = $_POST['subject'];

                    $mail = new PHPMailer;

                    $mail->IsSMTP();
					

                    $mail->Host = "smtp.gmail.com"; 

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('shubham.tony@gmail.com', 'Shubham Agarwal');

                    $mail->addReplyTo('replyto@example.com', 'First Last');

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);
					
                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
					   echo !extension_loaded('openssl')?"Not Available":"Available"; 
							?><script>alert('<?php echo $error ?>');</script><?php
							
                    } 
                    else {
						
                       echo '<script>alert("Message sent!");</script>';
					   
                    }
               }
        ?>
    </body>
</html>
<script type="text/javascript">
	$("#btn_send").click(function(){
		var g,a,s,m;
		g = $("#txt_mail_gmail").val();
		a = $("#txt_mail_receiver").val();
		s = $("#txt_mail_subject").val();
		m = $("#txt_mail_message").val();
		
		$.ajax({
			url:"files/save_mail.php",
			type:'POST',
			data:{g:g,a:a,s:s,m:m},
			success:function(r){
				console.log(r);
			},
			error:function(){
				console.log("error");
			}
		});
		
	});
</script>