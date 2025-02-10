<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
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

    // Set up email headers
    $to = "leads@immigrationxperts.com";
    $subject = "67point Form Submission $name";
    $headers = "From: $email\r\n";
    //$headers .= "Bcc: expertsanjay12@gmail.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email body
    $body = "
       <html>
       <head>
       <style>
       /* Add your custom CSS styles here */
       table {
           width: 100%;
           border-collapse: collapse;
       }
       th, td {
           border: 1px solid #dddddd;
           text-align: left;
           padding: 8px;
       }
       img {
           max-width: 100%;
           height: auto;
       }
       </style>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     
</head>
       <body>
       <table>
       <!-- Add a row for the logo -->
       <tr>
       <td>
       <img src='https://www.immigrationxperts.com/assets/images/resources/logo.png' alt='Company Logo' width='132px'>
       </td>
       <td>
       <p>Follow us on social media:</p>
       <a href='https://www.facebook.com/ImmigrationXpertsIndia/'><img src='https://www.immigrationxperts.com/canada-australia-immigration/images/fb.png' alt='Facebook'></a>
       <a href='https://www.linkedin.com/company/immigrationxperts'><img src='https://www.immigrationxperts.com/canada-australia-immigration/images/in.png' alt='Twitter'></a>
       <!-- Add more social media links as needed -->
       </td>
       </tr>
       <tr>
       <th colspan='2'>67point Form Submission</th>
       </tr>
       <tr>
       <td><strong>Name:</strong></td>
       <td>$name</td>
       </tr>
       <tr>
       <td><strong>Email:</strong></td>
       <td>$email</td>
       </tr>
       <!-- Add more rows for other form fields as needed -->
	   <tr>
		   <td><strong>Phone:</strong></td>
		   <td>$phone</td>
		</tr>
		<tr>
		   <td><strong>Total Score:</strong></td>
		   <td>$finalTotal</td>
		</tr>

		<tr>
		   <td><strong>City:</strong></td>
		   <td>$city</td>
		</tr>
		<tr>
		   <td><strong>Nearest Branch:</strong></td>
		   <td>$consultingBranch</td>
		</tr>
		<tr>
		   <td><strong>Selected Visa Type:</strong></td>
		   <td>$selectedVisaType</td>
		</tr>
		<tr>
		   <td><strong>Subclass 190:</strong></td>
		   <td>$subClass190</td>
		</tr>
		<tr>
		   <td><strong>Subclass 491:</strong></td>
		   <td>$subClass491</td>
		</tr>
		<tr>
		   <td><strong>Age Group:</strong></td>
		   <td>$ageGroup</td>
		</tr>
		<tr>
		   <td><strong>Qualification Group:</strong></td>
		   <td>$qualificationGroup</td>
		</tr>
		<tr>
		   <td><strong>Australia Education:</strong></td>
		   <td>$australiaEdu</td>
		</tr>
		<tr>
		   <td><strong>Australia Stay:</strong></td>
		   <td>$australiaStay</td>
		</tr>
		<tr>
		   <td><strong>Australia Specialized Education:</strong></td>
		   <td>$australiaSpeEdu</td>
		</tr>
		<tr>
		   <td><strong>Australia Work Outside:</strong></td>
		   <td>$australiaWorkOut</td>
		</tr>
		<tr>
		   <td><strong>Australia Work Inside:</strong></td>
		   <td>$australiaWorkIn</td>
		</tr>
		<tr>
		   <td><strong>Australia English Language:</strong></td>
		   <td>$australiaEngLang</td>
		</tr>
		<tr>
		   <td><strong>Partner Skills:</strong></td>
		   <td>$partnerSkill</td>
		</tr>
		<tr>
		   <td><strong>Accounting Community:</strong></td>
		   <td>$accComm</td>
		</tr>
		<tr>
		   <td><strong>Professional Year:</strong></td>
		   <td>$proYear</td>
		</tr>
		<tr>
		   <td><strong>Message Note:</strong></td>
		   <td>$messageNote</td>
		</tr>
		
       </table>
       </body>
       </html>
    ";

    // Instantiate Mailer and send email
    require 'path/to/Mailer.php';
    $mailer = new Mailer($to, $subject, $body, $headers);
    if ($mailer->send()) {
        // Redirect to thank-you page
        header("Location: https://www.immigrationxperts.com/thankyou/");
        exit();
    } else {
        echo "Failed to send email.";
    }
}

?>
