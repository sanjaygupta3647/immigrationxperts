<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    if (!empty($_POST)) {
        $postData = $_POST;

        // Construct email body
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
        $bodyMessage .= "<tr><td>Phone: </td><td>".$postData['country-code']." ".$postData['phone1']."</td></tr>";
        $bodyMessage .= "<tr><td>City: </td><td>".$postData['city']."</td></tr>";
        $bodyMessage .= "<tr><td>Age: </td><td>".$postData['age']."</td></tr>";
        $bodyMessage .= "<tr><td>Qualification: </td><td>".$postData['qualification']."</td></tr>";
        $bodyMessage .= "<tr><td>Experience: </td><td>".$postData['experience']."</td></tr>";
        $bodyMessage .= "<tr><td>Country Interested In: </td><td>".$postData['country']."</td></tr>";
        $bodyMessage .= "<tr><td>Visa Type: </td><td>".$postData['visa']."</td></tr>";
        $bodyMessage .= "<tr><td>Free Consultation: </td><td>".$postData['consultation']."</td></tr>";
        $bodyMessage .= "<tr><td>Nearest Branch: </td><td>".$postData['branch']."</td></tr>";
        $bodyMessage .= "<tr><td>Message: </td><td>".$postData['message']."</td></tr>";
        $bodyMessage .= "</table>";
        $bodyMessage .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
        $bodyMessage .= $footerBody;
        $bodyMessage .= '</td></tr></table>';

        // Configure PHPMailer
        $mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;
        $mail->Host = "aspmx.l.google.com";
        $mail->Username = 'info@immigrationxperts.com';
        $mail->Password = 'INFO)Wha@n61@';
        $mail->setFrom("info@immigrationxperts.com", "Australia Immigration Landing page NCR");
        $mail->addAddress("leads@immigrationxperts.com", "me");
        $mail->addAddress('mannuprofito@gmail.com');
        $mail->addReplyTo($postData['email'], $postData['name']);
        $mail->AddBCC("leads@profitointeractive.in");
        $mail->isHTML(true); 
        $mail->Body = $bodyMessage;
        $mail->Subject = "Australia Immigration - Landing page NCR enquiry Apicalvisaexpert";
        $mail->send();

        if ($mail->send()) {
            echo '<script>window.location.href = "/lp/australia-pr-visa-consultant/thanks-Check-eligibility/";</script>';
        } else {
            $userMsgBody = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>';
        $userMsgBody .= $headerBody;
        $userMsgBody .= "<p>Dear " . $postData['your-name'] . ",</p>
        <p>Greetings from Immigration Experts!</p>
        <p>Thank you for contacting us. We have received your query regarding visa assistance, therefore, I am looking forward to attend your case with profound diligence and expertise.</p>
        <p>We will be getting in touch with you within 8-10 working hours to discuss your case.</p>
        <p>Your submitted details are as follow:</p>";

        $userMsgBody .= '<p>Warm Regards <br />Immigration Experts Team</p><hr />';
        $userMsgBody .= $footerBody;
        $userMsgBody .= '</td></tr></table>';

        $mail1 = new PHPMailer;
        $mail1->isHTML(true);
        $mai1l->setFrom('no-reply@apicalvisaexperts.com', 'Immigration Xperts');
        $mail1->addAddress($postData['your-email'], $postData['your-name']);
        $mail1->Subject = 'Thanks for showing your interest.';
        $mail1->Body = $userMsgBody;
        $mail1->send();
        // Redirect to the "thanks" page
        }
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
