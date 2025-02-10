<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    if(!empty($_POST)){
	$postData = $_POST;
//	print_r($postData);die;
	$msg = '';
    
	$headerBody = '<table border="0" width="100%"><tr>
	<td><img src="https://www.immigrationxperts.com/assets/images/resources/logo.png" width="130" /></td>
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
	Or Email Us: <a href="mailto:info@immigrationxperts.com">info@immigrationxperts.com</a><p>
	</td>
	</tr></table>';
	
	$bodyMessage = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>'; 
	$bodyMessage .= $headerBody; 
	$bodyMessage .= "<p>Hi Admin, </p><p>".$postData['name']." applied for Immigration and details are given below: </p>";
	$bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$postData['name']."</td></tr>";
	$bodyMessage .= "<tr><td>Email: </td><td>".$postData['email']."</td></tr>";
		$bodyMessage .= "<tr><td>Phone: </td><td>".$postData['phone']."</td></tr>";
	$bodyMessage .= "<tr><td>City: </td><td>".$postData['state']."</td></tr>";
	$bodyMessage .= "<tr><td>Age : </td><td>".$postData['age']."</td></tr>";
	$bodyMessage .= "<tr><td>Eduction: </td><td>".$postData['education']."</td></tr>";
	$bodyMessage .= "<tr><td>Experience: </td><td>".$postData['experience']."</td></tr>";
	$bodyMessage .= "<tr><td>Visa Type: </td><td>".$postData['visaType']."</td></tr>";
	$bodyMessage .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
	$bodyMessage .= $footerBody;
	$bodyMessage .= '</td></tr></table>';
	
	
			$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->Host = "aspmx.l.google.com";
$mail->Username = 'info@immigrationxperts.com';
$mail->Password = 'INFO)Wha@n61@';
$mail->setFrom("info@immigrationxperts.com","Australia Immigration Landing page NCR");

$mail->addAddress("leads@immigrationxperts.com", "me");
$mail->addAddress('mannuprofito@gmail.com');
//$mail->addAddress();
$mail->addReplyTo( $postData['email'], $postData['name'] );

//AddBCC
 $mail->AddBCC("leads@profitointeractive.in");

$mail->isHTML(true); 
$mail->Body = $bodyMessage;
$mail->Subject = "Australia Immigration -Landing page NCR enquiry Apicalvisaexpert";
$mail->send();
//header("location: /lp/australia-pr-visa-consultant/thank-you/");
// if(!$mail->send()) {
// 		echo 'Mailer Error: '. $mail->ErrorInfo;
// 		die;
// 	}
	
if($mail->send()){
     echo '<script>window.location.href = "/lp/australia-pr-visa-consultant/thanks-Check-australia/";</script>';

    }
    else{
        
    }
    
     }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}