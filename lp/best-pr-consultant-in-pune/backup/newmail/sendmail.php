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
    $email=$postData['email'];
    $name=$postData['name'];
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
	
	
	  //Server settings
   $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
   $mail->SMTPDebug = 2;                    //Enable verbose debug output
    $mail->isSMTP();             
                                   //Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;    
                                   //Enable SMTP authentication
    $mail->Username   = 'noida@immigrationxperts.com';                     //SMTP username
    $mail->Password   = 'bhgaaynzyurwhfmu';                               //SMTP password
   // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure ='TLS';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noida@immigrationxperts.com', 'Australia Immigration Landing page NCR');
    $mail->addAddress('noida@immigrationxperts.com', 'Australia Immigration Landing page NCR');     //Add a recipient
 
    $mail->addBCC('leads@profitointeractive.in');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Australia Immigration -Landing page NCR enquiry Apicalvisaexpert";
    $mail->Body    = $bodyMessage;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()){
      
       
        	echo 'Mailer Error: '. $mail->ErrorInfo;
		die;
    }
    else{
		 $userMsgBody = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>';
        $userMsgBody .= $headerBody;
        $userMsgBody .= "<p>Dear " . $name. ",</p>
        <p>Greetings from Immigration Experts!</p>
        <p>Thank you for contacting us. We have received your query regarding visa assistance, therefore, I am looking forward to attend your case with profound diligence and expertise.</p>
        <p>We will be getting in touch with you within 8-10 working hours to discuss your case.</p>
        <p>Your submitted details are as follow:</p>";

        $userMsgBody .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
        $userMsgBody .= $footerBody;
        $userMsgBody .= '</td></tr></table>';

       $mail1 = new PHPMailer(true);
         $mail1->isSMTP();  
       $mail1->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
    $mail1->SMTPAuth   = true;    
                                   //Enable SMTP authentication
    $mail1->Username   = 'noida@immigrationxperts.com';                     //SMTP username
    $mail1->Password   = 'bhgaaynzyurwhfmu'; 
     $mail1->Port       = 465; 
        $mail1->isHTML(true);
        $mail1->setFrom('noida@immigrationxperts.com', 'Immigration Xperts');
        $mail1->addAddress($email, $name);
        $mail1->Subject = 'Thanks for showing your interest.';
        $mail1->Body = $userMsgBody;
        $mail1->send();
        // Redirect to the "thanks" page
   echo '<script>window.location.href = "/lp/australia-pr-visa-consultant/thanks-Check-australia/";</script>';

    }
} 
}
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}