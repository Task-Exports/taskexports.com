<?php
	
	$name=$_POST["name"];
	$from=$_POST["email"];
	$sub=$_POST["subject"];
	$mess=$_POST["message"];
	$msg="From : ".$name.", Message : ".$mess;
	$to="admin@taskexports.com";
	// $headers = 'From: '.$from."\r\n".
	// 'Reply-To: '.$from."\r\n" .
	// 'X-Mailer: PHP/' . phpversion();
	// @mail($to, $subject, $msg, $headers);

	$mail = new PHPMailer();

	$mail->AddReplyTo($from,$name);
	$mail->SetFrom($from,$name);
	$mail->AddAddress($to);
	$mail->Subject = $sub;
	$mail->MsgHTML( $msg );

	if( ! $mail->Send() ) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	}

?>

Mail Sent, Thanks for Contacting. We'll get in touch with you Soon!