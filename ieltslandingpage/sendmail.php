<?php
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(!empty($_POST)){
	$postData = $_POST;
	//print_r($postData);die;
	$msg = '';
	$headerBody = '<table border="0" width="100%"><tr>
	<td><img src="https://www.immigrationxperts.com/canada-australia-immigration/images/logo.png" width="130" /></td>
	<td align="right"><p>Follow us on: </p>
	<a href="https://www.facebook.com/ImmigrationXpertsIndia/" target="_blank"><img src="https://www.immigrationxperts.com/canada-australia-immigration/images/fb.png" width="32" /></a>
	<a href="https://www.linkedin.com/company/immigrationxperts" target="_blank"><img src="https://www.immigrationxperts.com/canada-australia-immigration/images/in.png" width="32" /></a>
	<a href="https://twitter.com/immixperts?lang=en" target="_blank"><img src="https://www.immigrationxperts.com/canada-australia-immigration/images/twt.png" width="32" /></a>
	<a href="https://www.instagram.com/immiexperts/" target="_blank"><img src="https://www.immigrationxperts.com/canada-australia-immigration/images/insta.png" width="32" /></a>
	</td>
	</tr></table><hr />';
	
	$footerBody = '<table width="100%" border="0"><tr>
	<td><b>Immigrationxperts.com</b><br />
	Apical Immigration Experts Pvt Ltd.<br />
	CIN # U74900UP2014PTC063079<br />
	ITHUM Towers, Office No. 403, 4th Floor,<br />
	Next to Nucleus Software<br />
	Sector 62 – Noida, India.
	</td>
	<td valign="top">
	<p><b>For further assistance</b></p>
	<p>Call Us: <a href="+91 9999467686">+91 9999467686</a><br />
	Or Email Us: <a href="mailto:rajbirsinghj2265@gmail.com">info@immigrationxperts.com</a><p>
	</td>
	</tr></table>';
	
	$bodyMessage = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>'; 
	$bodyMessage .= $headerBody; 
	$bodyMessage .= "<p>Hi Admin, </p><p>".$postData['your-name']." applied for Immigration and details are given below: </p>";
	$bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$postData['your-name']."</td></tr>";
	$bodyMessage .= "<tr><td>Email: </td><td>".$postData['your-email']."</td></tr>";
	$bodyMessage .= "<tr><td>Mobile no.: </td><td>".$postData['phone-number']."</td></tr>";
	$bodyMessage .= "<tr><td>City.: </td><td>".$postData['City']."</td></tr>";

	$bodyMessage .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
	$bodyMessage .= $footerBody;
	$bodyMessage .= '</td></tr></table>';
	
	$mail = new PHPMailer;
	$mail->isHTML(true);
	$mail->Host = 'localhost';
	$mail->Port = 25; 
	//$mail->CharSet = PHPMailer::CHARSET_UTF8;
	$mail->setFrom('delhileads@immigrationxperts.com', 'Immigration Xperts' );
	$mail->addAddress('delhileads@immigrationxperts.com');
	$mail->addReplyTo( $postData['your-email'], $postData['your-name'] );
	$mail->AddBCC('leads@immigrationxperts.com', 'ielts Landing page');

	$mail->Subject = 'Immigration Xperts -  ielts Landing page';
	$mail->Body = $bodyMessage;
	if(!$mail->send()) {
		echo 'Mailer Error: '. $mail->ErrorInfo;
		die;
	}else{
		
		$userMsgBody = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>'; 
		$userMsgBody .= $headerBody; 
		$userMsgBody .= "<p>Dear ".$postData['your-name'].",</p>
		<p>Greetings from Immigration Experts!</p>
		<p>Hope you're doing well & taking proper precautions to prevent yourself from widespread pandemic Covid-19.</p>
		<p>Thank you for contacting us. We have received your query regarding visa assistance, therefore, I am looking forward to attend your case with profound diligence and expertise.</p>
		<p>We will be getting in touch with you within 8-10 working hours to discuss your case.</p>
		<p>Your submitted details are as follow:</p>";
		
		$userMsgBody .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$postData['your-name']."</td></tr>";
		$userMsgBody .= "<tr><td>Email: </td><td>".$postData['your-email']."</td></tr>";
		$userMsgBody .= "<tr><td>Mobile no.: </td><td>".$postData['phone-number']."</td></tr>";
		$userMsgBody .= "<tr><td>City.: </td><td>".$postData['City']."</td></tr>";

		$userMsgBody .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
		$userMsgBody .= $footerBody;
		$userMsgBody .= '</td></tr></table>';
		
		$mail = new PHPMailer;
		$mail->isHTML(true);
		$mail->setFrom('rajbirsinghj2265@gmail.com', 'Immigration Xperts' );
		$mail->addAddress( $postData['your-email'], $postData['your-name'] );
		$mail->Subject = 'Thanks for showing your interest.';
		$mail->Body = $userMsgBody;
		$mail->send();
	
		header("location: https://immigrationxperts.com/thank-you/");
	}
}else{
	echo "Can't access directly.";
}
?>