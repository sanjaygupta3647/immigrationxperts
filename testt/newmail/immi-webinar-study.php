<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'vendor/autoload.php';

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
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $country = $_POST['country']; // New field
    $visa = $_POST['Visa']; // New field

    // Email content setup
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
    $bodyMessage .= "<tr><td>Country Interested In: </td><td>".$postData['country']."</td></tr>"; // New field
    $bodyMessage .= "<tr><td>Visa Type: </td><td>".$postData['Visa']."</td></tr>"; // New field
    $bodyMessage .= "</table><p>Warm Regards <br />Immigration Experts Team</p><hr />";
    $bodyMessage .= "<p><a href='" . $canonical_url . "'>Click here</a> to view the page.</p>"; // Include the canonical URL as a regular link
    $bodyMessage .= $footerBody;
    $bodyMessage .= '</td></tr></table>';
    
    // Create an instance of PHPMailer
    $mail = new PHPMailer(true);

    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'ssl://smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'noida@immigrationxperts.com'; // SMTP username
    $mail->Password = 'bhgaaynzyurwhfmu'; // SMTP password
    $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // Set up recipients
    $mail->setFrom('noida@immigrationxperts.com', 'Landing page'); // Set the sender
    $mail->addAddress('noida@immigrationxperts.com', 'Landing page'); // Add a recipient
    
    // Compose email message
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "immi-webinar-study Form : " . $canonical_url; // Set the subject of the email
    $mail->Body    = $bodyMessage; // Set the body of the email
    
    // Send the email
    try {
        $mail->send();
         echo '<script>window.location.href = "/event/study-abroad-webinar/thank-you/";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If form is not submitted, redirect or display an error message
    echo "Form submission error!";
}
?>
