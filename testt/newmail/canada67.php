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
if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Phone']) && !empty($_POST['city']) && !empty($_POST['g-recaptcha-response'])) {
    // Verify Google reCAPTCHA
    $responseKey = $_POST['g-recaptcha-response'];

    if (!verifyRecaptcha($secretKey, $responseKey)) {
        echo "<script>alert('reCAPTCHA verification failed!');</script>";
        echo "<script>window.location.href = '$canonical_url';</script>";
        exit; // Stop further execution
    } else {
        // Continue with PHP logic here if reCAPTCHA verification is successful

        // Extract form data
        $postData = $_POST;

        // Extracting data from $_POST
        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $phone = $_POST["Phone"] ?? '';
        $city = $_POST["city"] ?? '';
        $nearest_branch = $_POST["nearest_branch"] ?? '';
        $marital = $_POST["marital"] ?? '';
        $age = $_POST["age"] ?? '';
        $experience = $_POST["experience"] ?? '';
        $educationValue = $_POST['education'];

        // Define an array to map education option values to their corresponding texts
        $educationTextArray = [
            'A' => 'University degree at the Doctoral (Phd) level or equal',
            'B' => 'Masters degree',
            'C' => 'Two or more Canadian post-secondary degrees or diplomas or equal (at least one must be for a program of at least three years)',
            'D' => 'Bachelor degree or diploma for a program of three years or longer, or equal',
            'E' => 'Canadian post-secondary degree or diploma for a two years, or equal',
            'F' => 'Canadian post-secondary degree or diploma for a one years, or equal',
            'G' => 'Canadian high school diploma, or equal'
        ];

        // Get the selected education text based on the value
        $educationText = isset($educationTextArray[$educationValue]) ? $educationTextArray[$educationValue] : 'Unknown';

        $spouse_language = $_POST["spouse_language"] ?? '';
        $past_study_canada = $_POST["past_study_canada"] ?? '';
        $spouse_past_study_canada = $_POST["spouse_past_study_canada"] ?? '';
        $past_work = $_POST["past_work"] ?? '';
        $spouse_past_work = $_POST["spouse_past_work"] ?? '';
        $arranged_emp = $_POST["arranged_emp"] ?? '';
        $relative_canada = $_POST["relative_canada"] ?? '';
        $listening = $_POST["listening"] ?? '';
        $speaking = $_POST["speaking"] ?? '';
        $reading = $_POST["reading"] ?? '';
        $writing = $_POST["writing"] ?? '';
        $message = $_POST["message"] ?? '';
        $totalScoreInput = $_POST["totalScoreDisplay"] ?? '';
        
        
        
        
        // Prepare JSON data for API
        $jsondata = array(
            'CONTACTPERSON' => $name,
            'EMAIL' => $email,
            'PHONE' => $phone,
            'Message_Note' => $message,
            'City' => $city,
            'Age' => $age,
            'HighestQualification' => $educationText,
            'WorkExperience' => $experience,
            'COUNTRYCODE' => '+91',
            'lead_source' => 'Website',
            'lead_subsource' => 'Canada 67 Points Calculator',
            'VisaType' => 'Canada',
            'apitoken' => '54da0fbfbcba9961'
        );
    
        $data_string = json_encode($jsondata);
        $apiurl = "https://zone3.maplecrm.com/services/wsapi/JSON/dispatcher_v1/";
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
            "cURL Error: " . curl_error($ch);
        } else {
            $rarray = json_decode($response, true); // Decode JSON response
        }
        curl_close($ch);
        
        
        

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
        $bodyMessage .= "<p>Hi Admin, </p><p>" . $postData['Name'] . " applied for Immigration and details are given below: </p>";
        $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>" . $postData['Name'] . "</td></tr>";
        $bodyMessage .= "<tr><td>Email: </td><td>" . $_POST['Email'] . "</td></tr>";
        $bodyMessage .= "<tr><td>Phone: </td><td>" . $_POST['Phone'] . "</td></tr>";
        $bodyMessage .= "<tr><td>City: </td><td>" . $_POST['city'] . "</td></tr>";
        // Add the remaining fields in the same manner
        $bodyMessage .= "<tr><td>Nearest Branch: </td><td>" . $nearest_branch . "</td></tr>";
        $bodyMessage .= "<tr><td>Marital Status: </td><td>" . $marital . "</td></tr>";
        $bodyMessage .= "<tr><td>Age: </td><td>" . $age . "</td></tr>";
        $bodyMessage .= "<tr><td>Experience: </td><td>" . $experience . "</td></tr>";
        $bodyMessage .= "<tr><td>Education: </td><td>" . $educationText . "</td></tr>";
        // Add other fields similarly
        $bodyMessage .= "<tr><td>Spouse Language: </td><td>" . $spouse_language . "</td></tr>";
        $bodyMessage .= "<tr><td>Past Study in Canada: </td><td>" . $past_study_canada . "</td></tr>";
        $bodyMessage .= "<tr><td>Spouse Past Study in Canada: </td><td>" . $spouse_past_study_canada . "</td></tr>";
        $bodyMessage .= "<tr><td>Past Work: </td><td>" . $past_work . "</td></tr>";
        $bodyMessage .= "<tr><td>Spouse Past Work: </td><td>" . $spouse_past_work . "</td></tr>";
        $bodyMessage .= "<tr><td>Arranged Employment: </td><td>" . $arranged_emp . "</td></tr>";
        $bodyMessage .= "<tr><td>Relative in Canada: </td><td>" . $relative_canada . "</td></tr>";
        $bodyMessage .= "<tr><td>Listening Score: </td><td>" . $listening . "</td></tr>";
        $bodyMessage .= "<tr><td>Speaking Score: </td><td>" . $speaking . "</td></tr>";
        $bodyMessage .= "<tr><td>Reading Score: </td><td>" . $reading . "</td></tr>";
        $bodyMessage .= "<tr><td>Writing Score: </td><td>" . $writing . "</td></tr>";
        $bodyMessage .= "<tr><td>Message: </td><td>" . $message . "</td></tr>";
        $bodyMessage .= "<tr><td>Total Score: </td><td>" . $totalScoreInput . "</td></tr>";


        $bodyMessage .= "</table><p>Warm Regards <br />Immigration Experts Team</p><hr />";
        $bodyMessage .= "<p><a href='" . $canonical_url . "'>Click here</a> to view the page.</p>"; // Include the canonical URL as a regular link
        $bodyMessage .= $footerBody;
        $bodyMessage .= '</td></tr></table>';

        // Create an instance of PHPMailer
        $mail = new PHPMailer(true);
        
        
        $mail->isSMTP();
        $mail->Host       = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->Port       = 465;

       
        // Set up recipients
        $mail->setFrom('noida@immigrationxperts.com', '67-canada-immigration-point-system'); // Set the sender
        $mail->addAddress('noida@immigrationxperts.com', '67-canada-immigration-point-system'); // Add a recipient
        //$mail->addCC('expertsanjay12@gmail.com');
        //$mail->addBCC('leads@profitointeractive.in');

        // Compose email message
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Canada 67 Points Calculator : " . $canonical_url; // Set the subject of the email
        $mail->Body    = $bodyMessage; // Set the body of the email

        // Send the email
        try {
            $mail->send();
            echo '<script>window.location.href = "/thankyou/";</script>';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
} else {
    // If any required field is empty, display an error message
    echo "<script>alert('Please fill in all required fields.');</script>";
    echo "<script>window.location.href = '$canonical_url';</script>";
    exit; // Stop further execution
}
?>
