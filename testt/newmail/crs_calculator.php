<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

// Check if form is submitted
if (!empty($_POST)) {
    $postData = $_POST;
    $canonical_url = isset($postData['canonical_url']) ? $postData['canonical_url'] : '';

    // Get form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $city = $_POST['City'];
    $totals = $_POST['grandtotal'];
    $highestQualification = $_POST['q4'];
    $age = $_POST['q3'];
    $nearestBranch = $_POST['nearest_branch'];

    // Retrieve the selected marital status value
    $maritalStatusValue = $_POST['q1'];

    // Define an array to map marital status values to their corresponding text
    $maritalStatusTextArray = [
        'A' => 'Annulled Marriage',
        'B' => 'Common-Law',
        'C' => 'Divorced / Separated',
        'D' => 'Legally Separated',
        'E' => 'Married',
        'F' => 'Never Married / Single',
        'G' => 'Widowed'
    ];

    // Get the selected marital status text based on the value
    $maritalStatusText = isset($maritalStatusTextArray[$maritalStatusValue]) ? $maritalStatusTextArray[$maritalStatusValue] : 'Unknown';
    $message = $_POST["message"] ?? '';
    
     
    // Prepare JSON data for API
    $jsondata = array(
        'CONTACTPERSON' => $name,
        'EMAIL' => $email,
        'PHONE' => $phone,
        'Message_Note' => $message,
        'City' => $city,
        'ConsultingBranch' => $nearestBranch,
        'Age' => $age,
        'HighestQualification' => $highestQualification,
        'WorkExperience' => $experience,
        'COUNTRYCODE' => '+91',
        'lead_source' => 'Website',
        'lead_subsource' => 'CRS Calculator',
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
    $bodyMessage .= "<p>Hi Admin, </p><p>".$name." applied for Immigration and details are given below: </p>";
    $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>".$name."</td></tr>";
    $bodyMessage .= "<tr><td>Email: </td><td>".$email."</td></tr>";
    $bodyMessage .= "<tr><td>Phone: </td><td>".$phone."</td></tr>";  
    $bodyMessage .= "<tr><td>Message: </td><td>".$message."</td></tr>";        
    $bodyMessage .= "<tr><td>City: </td><td>".$city."</td></tr>";
    $bodyMessage .= "<tr><td>Nearest Branch: </td><td>".$nearestBranch."</td></tr>";
    $bodyMessage .= "<tr><td>Marital Status: </td><td>".$maritalStatusText."</td></tr>";
    $bodyMessage .= "<tr><td>Age: </td><td>".$age."</td></tr>";
    $bodyMessage .= "<tr><td>Highest Qualification: </td><td>".$highestQualification."</td></tr>";
    $bodyMessage .= "<tr><td>Total Score: </td><td>".$totals."</td></tr>";
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
    $mail->setFrom('noida@immigrationxperts.com', 'crs-points-calculator'); // Set the sender
    $mail->addAddress('noida@immigrationxperts.com', 'crs-points-calculator'); // Add a recipient
   // $mail->addCC('expertsanjay12@gmail.com');
    //$mail->addBCC('leads@profitointeractive.in');
    
    // Compose email message
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "CRS Calculator : " . $canonical_url; // Set the subject of the email
    $mail->Body    = $bodyMessage; // Set the body of the email
    
    // Send the email
    try {
        $mail->send();
        echo '<script>window.location.href = "/settle-in-australia/thank-you/";</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If form is not submitted, redirect or display an error message
    echo "Form submission error!";
}
?>
