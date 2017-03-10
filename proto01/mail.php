<?php
	if(isset($_POST) && !empty($_POST)){
		$name   =  $_POST['name'];
		$email  =  $_POST['email'];
		$comments = $_POST['message'];
		$message = "";
		$conerror = false;
		
		$message .= "<table width='470' border='1' cellpadding='0' cellspacing='0'>".
					"<tr><td width='235' height='30'>Name</td><td width='235' height='30'>".$name."</td></tr>".
					"<tr><td width='235'>Email id</td><td width='235'>".$email."</td></tr width='235'>".
					"<tr><td width='235'>Message</td><td width='235'>".$comments."</td></tr>".
					"</table>";
			$to 	  = 'shahadat.hussain@thequint.com';
			$subject  = 'The Quint';
			$headers  = 'From: The Quint' . "\r\n" .
						'Reply-To: no-reply@thequint.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			
			$conerror = @mail($to, $subject, $message, $headers) ? "SUCCESS" : "ERROR";
			
			if($conerror == "SUCCESS"){
				echo '<div class"success">Thank you for sending your query.</div>';
			}else{
				echo '<div class="fail" style="color:red">'.$conerror.'</div>';
			}
			
	}else{
		echo '<div>Error</div>';
	}
?>