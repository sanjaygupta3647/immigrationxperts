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

        // Validate form fields here if needed

        // Construct email body
        $headerBody = '<table border="0" width="100%"><tr>
        <td><img src="https://www.immigrationxperts.com/assets/images/resources/logo.png" width="130" /></td>
        <td align="right"><p>Follow us on: </p>
        <a href="https://www.facebook.com/ImmigrationXpertsIndia/" target="_blank">
    	<img src="https://www.immigrationxperts.com/assets/images/icon/fb.png" width="32" /></a>
        <a href="https://www.linkedin.com/company/immigrationxperts" target="_blank">
    	<img src="https://www.immigrationxperts.com/assets/images/icon/in.png" width="32" /></a>
        <a href="https://twitter.com/immixperts?lang=en" target="_blank">
    	<img src="https://www.immigrationxperts.com/assets/images/icon/twt.png" width="32" /></a>
        <a href="https://www.instagram.com/immiexperts/" target="_blank"><img src="https://www.immigrationxperts.com/assets/images/icon/insta.png" width="32" /></a>
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
        $bodyMessage .= "<p>Hi Admin, </p><p>".$postData['your-name']." applied for Immigration and details are given below: </p>";
        $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$postData['your-name']."</td></tr>";
        $bodyMessage .= "<tr><td>Email: </td><td>".$postData['your-email']."</td></tr>";
        $bodyMessage .= "<tr><td>Phone: </td><td>".$postData['your-phone']."</td></tr>";
        $bodyMessage .= "<tr><td>City: </td><td>".$postData['your-city']."</td></tr>";
        $bodyMessage .= "<tr><td>Nearest Branch: </td><td>".$postData['ConsultingBranch3']."</td></tr>";
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
        $mail->setFrom("info@immigrationxperts.com","Australia Immigration Landing page NCR");
        $mail->addAddress("leads@immigrationxperts.com", "me");
        //$mail->addAddress('mannuprofito@gmail.com');
        $mail->addReplyTo($postData['your-email'], $postData['your-name']);

        // Add BCC
        $mail->AddBCC("leads@profitointeractive.in");

        $mail->isHTML(true); 
        $mail->Body = $bodyMessage;
        $mail->Subject = "Australia Immigration - Landing page NCR enquiry Apicalvisaexpert";

        // Send email
        if ($mail->send()) {
            echo '<script>window.location.href = "/lp/australia-pr-visa-consultant/thanks-Check-eligibility/";</script>';
        } else {
            // Handle email sending failure
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
