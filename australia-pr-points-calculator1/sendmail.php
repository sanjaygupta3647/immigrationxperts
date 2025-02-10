<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'lib/PHPMailer/src/Exception.php';
	require 'lib/PHPMailer/src/PHPMailer.php';
	require 'lib/PHPMailer/src/SMTP.php';
	
	
	$name = 'Immigration Experts';
	$email = 'arunverma1090@gmail.com';
	$to = 'arunverma1090@gmail.com';
	$subject = 'Test mail subject';
	$query = 	'This is test message by Developer.';
	$msg = '';
	
	/*
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'localhost';
	$mail->Port = 25;
	*/
	$mail = new PHPMailer;
	$mail->isHTML(true);
	$mail->Host = 'localhost';
	$mail->Port = 25; 
	
	$mail->CharSet = PHPMailer::CHARSET_UTF8;
	//It's important not to use the submitter's address as the from address as it's forgery,
	//which will cause your messages to fail SPF checks.
	//Use an address in your own domain as the from address, put the submitter's address in a reply-to
	$mail->setFrom('noreply@immigrationxperts.com', (empty($name) ? 'Contact form' : $name));
	$mail->addAddress($to);
	$mail->addReplyTo($email, $name);
	$mail->Subject = 'Contact form: ' . $subject;
	$mail->Body = "Contact form submission\n\n" . $query;
	if (!$mail->send()) {
		$msg .= 'Mailer Error: '. $mail->ErrorInfo;
	} else {
		$msg .= 'Message sent successfully!';
	}
	echo $msg;
?>