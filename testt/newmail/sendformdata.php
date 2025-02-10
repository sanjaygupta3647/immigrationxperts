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
    $canonical_url = isset($postData['canonical_url']) ?
    $postData['canonical_url'] : '';
    
    // Extract the page name from the canonical URL
    $parsed_url = parse_url($canonical_url, PHP_URL_PATH);
    $page_name = basename($parsed_url);

    // Check honeypot field
    if (!empty($_POST['honeypot'])) {
        echo "<script>alert('Form submission error!');";
        echo "window.location.href = '$canonical_url';</script>";
        exit;
    }

    // Verify Google reCAPTCHA
    $responseKey = $_POST['g-recaptcha-response'];
    if (!verifyRecaptcha($secretKey, $responseKey)) {
        echo "<script>alert('reCAPTCHA verification failed!');";
        echo "window.location.href = '$canonical_url';</script>";
        exit;
    }

    // Sanitize input data
    function sanitizeInput($input)
    {
        if (is_array($input)) {
            return array_map('sanitizeInput', $input);
        }
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    // Sanitize each input field
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone1']); // by passing the phone with country code here only phone no pick 
    $message = sanitizeInput($_POST['message']);
    $city = sanitizeInput($_POST['city']);
    $age = sanitizeInput($_POST['age']);
    $highestQualification = sanitizeInput($_POST['qualification']);
    $workExperience = sanitizeInput($_POST['experience']);
    $visa = sanitizeInput($_POST['visa']);
    $country = sanitizeInput($_POST['country']);
    $consultation = sanitizeInput($_POST['consultation']);
    $branch = sanitizeInput($_POST['branch']);

    // Prepare JSON data for API
    $jsondata = array(
        'CONTACTPERSON' => $name,
        'EMAIL' => $email,
        'PHONE' => $phone,
        'Message_Note' => $message,
        'City' => $city,
        'Age' => $age,
        'HighestQualification' => $highestQualification,
        'WorkExperience' => $workExperience,
        'COUNTRYCODE' => '+91',
        'lead_source' => 'Website',
        'lead_subsource' => $page_name,
        'CountryInterestedIn' => $country,
        'VisaType' => $visa,
        'apitoken' => '54da0fbfbcba9961'
    );

    $data_string = json_encode($jsondata);
    $apiurl = "https://zone3.maplecrm.com/services/wsapi/JSON/dispatcher_v1/";

    // Send data to API via cURL
    $ch = curl_init($apiurl);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string)
    ));

    $response = curl_exec($ch);
    if ($response === false) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        $rarray = json_decode($response, true);
    }

    curl_close($ch);

    // Compose email message
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
    $bodyMessage .= "<p>Hi Admin, </p><p>{$postData['name']} applied for Immigration and details are given below: </p>";
    $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>{$postData['name']}</td></tr>";
    $bodyMessage .= "<tr><td>Email: </td><td>{$postData['email']}</td></tr>";
    $bodyMessage .= "<tr><td>Phone: </td><td>{$postData['phone']}</td></tr>";
    $bodyMessage .= "<tr><td>Age: </td><td>{$postData['age']}</td></tr>";
    $bodyMessage .= "<tr><td>Education: </td><td>{$postData['qualification']}</td></tr>";
    $bodyMessage .= "<tr><td>City: </td><td>{$postData['city']}</td></tr>";
    $bodyMessage .= "<tr><td>Experience: </td><td>{$postData['experience']}</td></tr>";
    $bodyMessage .= "<tr><td>Country: </td><td>{$postData['country']}</td></tr>";
    $bodyMessage .= "<tr><td>Visa: </td><td>{$postData['visa']}</td></tr>";
    $bodyMessage .= "<tr><td>Consultation: </td><td>{$postData['consultation']}</td></tr>";
    $bodyMessage .= "<tr><td>Branch: </td><td>{$postData['branch']}</td></tr>";
    $bodyMessage .= "</table>";
     $bodyMessage .= "<p><a href='" . $canonical_url . "'>Click here</a> to view the page.</p>";
    $bodyMessage .= $footerBody;
    $bodyMessage .= '</td></tr></table>';

   

    $mail = new PHPMailer(true);
    try {
        //Server settings
        // Set up SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->Port       = 465;                        // TCP port to connect to, use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('noida@immigrationxperts.com', 'Immigration Expert');
        $mail->addAddress('noida@immigrationxperts.com', 'Immigration Expert');
        //$mail->addCC('expertsanjay12@gmail.com');
       // $mail->addBCC('leads@profitointeractive.in');

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Immigration Form Contact Us : ";
        $mail->Body    = $bodyMessage;

        $mail->send();
        echo '<script>window.location.href = "/thankyou/";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
