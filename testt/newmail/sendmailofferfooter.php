<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();


// Set up reCAPTCHA keys
$siteKey = '6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y';
$secretKey = '6LeQwdspAAAAAOtcxO9GGTZ8cDt32YltDsA5UoA-';

// Function to verify Google reCAPTCHA
function verifyRecaptcha($secretKey, $responseKey)
{
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $verifyResponse = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $responseKey);
    $responseData = json_decode($verifyResponse);
    return $responseData->success;
}

// Check if form is submitted
if (!empty($_POST)) {
    $postData = $_POST;
    $canonical_url = isset($postData['canonical_url']) ? $postData['canonical_url'] : '';
    
    // Verify Google reCAPTCHA
    $responseKey = $_POST['g-recaptcha-response'];
    if (!verifyRecaptcha($secretKey, $responseKey)) {
        echo "<script>alert('reCAPTCHA verification failed!');";
        echo "window.location.href = '$canonical_url';</script>";
        exit;
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    // Add more form fields as needed
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
    $bodyMessage .= "<p>Hi Admin, </p><p>".$postData['name']." applied for Immigration and details are given below: </p>";
    $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$postData['name']."</td></tr>";
    $bodyMessage .= "<tr><td>Email: </td><td>".$postData['email']."</td></tr>";
    $bodyMessage .= "<tr><td>Phone: </td><td>".$postData['phone']."</td></tr>";		
    $bodyMessage .= "<tr><td>City: </td><td>".$postData['city']."</td></tr>";
    $bodyMessage .= "<tr><td>Message: </td><td>".$postData['msg']."</td></tr>";
    $bodyMessage .= "</table><p>Warm Regards <br />Immigration Experts Team</p><hr />";
    $bodyMessage .= $footerBody;
    $bodyMessage .= '</td></tr></table>';
    
    // Create an instance of PHPMailer
    $mail = new PHPMailer(true);

    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'ssl://smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['SMTP_USERNAME'];
    $mail->Password   = $_ENV['SMTP_PASSWORD'];
    $mail->Port       = 465;

    // Set up recipients
    $mail->setFrom('noida@immigrationxperts.com', 'Australia PR Offer'); // Set the sender
    $mail->addAddress('noida@immigrationxperts.com', 'Australia PR Offer'); // Add a recipient
    //$mail->addCC('expertsanjay12@gmail.com');
    //$mail->addBCC('leads@profitointeractive.in');

    
    // Compose email message
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "Australia PR Offer footer: " . $canonical_url; // Set the subject of the email
    $mail->Body    = $bodyMessage; // Set the body of the email
    
    // Send the email
    try {
        $mail->send();
        echo '<script>window.location.href = "/australia-pr/offer/thank-you/";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If form is not submitted, redirect or display an error message
    echo "Form submission error!";
}
?>
