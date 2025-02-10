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

$canonical_url = isset($postData['canonical_url']) ? $postData['canonical_url'] : '';

// Function to verify Google reCAPTCHA
function verifyRecaptcha($secretKey, $responseKey)
{
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $verifyResponse = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $responseKey);
    $responseData = json_decode($verifyResponse);
    return $responseData->success;
}

// Check if form is submitted and all required fields are filled
if (!empty($_POST['user_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['city']) && !empty($_POST['g-recaptcha-response'])) {
    // Verify Google reCAPTCHA
    $responseKey = $_POST['g-recaptcha-response'];

    if (!verifyRecaptcha($secretKey, $responseKey)) {
        echo "<script>alert('reCAPTCHA verification failed!');</script>";
        echo "<script>window.location.href = '$canonical_url';</script>";
        exit;
    }

    // Honeypot field check
    if (!empty($_POST['honeypot'])) {
        echo "<script>alert('Form submission error!');</script>";
        echo "<script>window.location.href = '$canonical_url';</script>";
        exit;
    }

    // Continue with PHP logic if reCAPTCHA verification is successful
    try {
        // Extract form data
        $postData = $_POST;
        
        $name = $_POST['user_name'];
        $email = $_POST['email'];
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $consultingBranch = isset($_POST['ConsultingBranch']) ? $_POST['ConsultingBranch'] : '';
        $messageNote = isset($_POST['Message_Note']) ? $_POST['Message_Note'] : '';
        $finalTotal = isset($_POST['finaltotal']) ? $_POST['finaltotal'] : 0; // Assuming it's a decimal field
        $selectedVisaType = isset($_POST['selectedVisaType']) ? $_POST['selectedVisaType'] : '';
        $subClass190 = isset($_POST['subClass190']) ? $_POST['subClass190'] : '';
        $subClass491 = isset($_POST['subClass491']) ? $_POST['subClass491'] : '';
        $ageGroup = isset($_POST['ageGroup']) ? $_POST['ageGroup'] : '';
        $qualificationGroup = isset($_POST['qualificationGroup']) ? $_POST['qualificationGroup'] : '';
        $australiaEdu = isset($_POST['australiaEdu']) ? $_POST['australiaEdu'] : '';
        $australiaStay = isset($_POST['australiaStay']) ? $_POST['australiaStay'] : '';
        $australiaSpeEdu = isset($_POST['australiaSpeEdu']) ? $_POST['australiaSpeEdu'] : '';
        $australiaWorkOut = isset($_POST['australiaWorkOut']) ? $_POST['australiaWorkOut'] : '';
        $australiaWorkIn = isset($_POST['australiaWorkIn']) ? $_POST['australiaWorkIn'] : '';
        $australiaEngLang = isset($_POST['australiaEngLang']) ? $_POST['australiaEngLang'] : '';
        $partnerSkill = isset($_POST['partnerSkill']) ? $_POST['partnerSkill'] : '';
        $accComm = isset($_POST['accComm']) ? $_POST['accComm'] : '';
        $proYear = isset($_POST['proYear']) ? $_POST['proYear'] : '';

        // Prepare JSON data for API
        $jsondata = array(
            'CONTACTPERSON' => $name,
            'EMAIL' => $email,
            'PHONE' => $phone,
            'City' => $city,
            'Message_Note' => $messageNote,
            'ConsultingBranch' => $consultingBranch,
            'Age' => $ageGroup,
            'HighestQualification' => $qualificationGroup,
            'WorkExperience' => $workExperience, // Assuming this is defined elsewhere
            'COUNTRYCODE' => $countryCode, // Assuming this is defined elsewhere
            'lead_source' => 'Website',
            'lead_subsource' => 'Australia Points Calculator',
            'CountryInterestedIn' => 'Australia',
            'VisaType' => $visa, // Assuming this is defined elsewhere
            'apitoken' => '54da0fbfbcba9961' // Updated API Key
        );

        $data_string = json_encode($jsondata);
        $apiurl = "https://zone3.maplecrm.com/services/wsapi/JSON/dispatcher_v1/"; // Updated API URL
        $ch = curl_init($apiurl);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string)
        ));
        $response = curl_exec($ch);
        if ($response != '') {
            $rarray = json_decode($response, true); //$rarray shall contain 2 fields RETURN (TRUE/FALSE) and MESSAGE
        }

        // Define header and footer bodies
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

        // Construct email body
        $bodyMessage = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>';
        $bodyMessage .= $headerBody;
        $bodyMessage .= "<p>Hi Admin, </p><p>" . $postData['user_name'] . " applied for Immigration and details are given below: </p>";
        $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>" . $postData['user_name'] . "</td></tr>";
        $bodyMessage .= "<tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>";
        $bodyMessage .= "<tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>";
        $bodyMessage .= "<tr><td>City: </td><td>" . $_POST['city'] . "</td></tr>";
        // Add the remaining fields in the same manner
        $bodyMessage .= "<tr><td>Consulting Branch: </td><td>" . (isset($_POST['ConsultingBranch']) ? $_POST['ConsultingBranch'] : '') . "</td></tr>";
        $bodyMessage .= "<tr><td>Message: </td><td>" . (isset($_POST['Message_Note']) ? $_POST['Message_Note'] : '') . "</td></tr>";
        // Add other fields similarly
        $bodyMessage .= "<tr><td>Final Total: </td><td>".$finalTotal."</td></tr>";
        $bodyMessage .= "<tr><td>Selected Visa Type: </td><td>".$selectedVisaType."</td></tr>";
        $bodyMessage .= "<tr><td>Selected Visa 190: </td><td>".$subClass190."</td></tr>";
        $bodyMessage .= "<tr><td>Selected Visa 491: </td><td>".$subClass491."</td></tr>";
        $bodyMessage .= "<tr><td>Selected Age-Group: </td><td>".$ageGroup."</td></tr>";
        $bodyMessage .= "<tr><td>Selected Qualifications: </td><td>".$qualificationGroup."</td></tr>";
        $bodyMessage .= "<tr><td>Australian Educational Qualification: </td><td>".$australiaEdu."</td></tr>";
        $bodyMessage .= "<tr><td>Australian Regional Study and Stay: </td><td>".$australiaStay."</td></tr>";
        $bodyMessage .= "<tr><td>Australian Specialist Education Qualification: </td><td>".$australiaSpeEdu."</td></tr>";
        $bodyMessage .= "<tr><td>Work Experience - Outside Australia: </td><td>".$australiaWorkOut."</td></tr>";
        $bodyMessage .= "<tr><td>Work Experience - Within Australia: </td><td>".$australiaWorkIn."</td></tr>";
        $bodyMessage .= "<tr><td>English Language Ability: </td><td>".$australiaEngLang."</td></tr>";
        $bodyMessage .= "<tr><td>Partner Skills: </td><td>".$partnerSkill."</td></tr>";
        $bodyMessage .= "<tr><td>Accredited Community Language: </td><td>".$accComm."</td></tr>";
        $bodyMessage .= "<tr><td>Professional Year Program in Australia: </td><td>".$proYear."</td></tr>";

        $bodyMessage .= "</table><p>Warm Regards <br />Immigration Experts Team</p><hr />";
        $bodyMessage .= "<p><a href='" . $canonical_url . "'>Click here</a> to view the page.</p>"; // Include the canonical URL as a regular link
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
        $mail->setFrom('noida@immigrationxperts.com', 'Australia PR Points Calculator'); // Set the sender
        $mail->addAddress('noida@immigrationxperts.com', 'Immigration Experts'); // Add a recipient
        //$mail->addCC('expertsanjay12@gmail.com');
        //$mail->addBCC('leads@profitointeractive.in');

        // Compose email message
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Australia Points Calculator : " . $canonical_url; // Set the subject of the email
        $mail->Body = $bodyMessage; // Set the body of the email

        // Send the email
        $mail->send();
        echo '<script>window.location.href = "/thankyou/";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If any required field is empty, display an error message
    echo "<script>alert('Please fill in all required fields.');</script>";
    echo "<script>window.location.href = '$canonical_url';</script>";
    exit; // Stop further execution
}
?>
