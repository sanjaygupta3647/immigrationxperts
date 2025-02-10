<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"] ?? '';
    $city = $_POST["city"] ?? '';
    $nearest_branch = $_POST["nearest_branch"] ?? '';
    $marital = $_POST["marital"] ?? '';
    $age = $_POST["age"] ?? '';
    $experience = $_POST["experience"] ?? '';
    $education = $_POST["education"] ?? '';
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

    // Set up email headers
    $to = "no-reply@apicalvisaexperts.com";
    $subject = "67point Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Bcc: no-reply@apicalvisaexperts.com\r\n";
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
       <img src='https://www.immigrationxperts.com/canada-australia-immigration/images/logo.png' alt='Company Logo' width='132px'>
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
		   <td><strong>City:</strong></td>
		   <td>$city</td>
		</tr>
		<tr>
		   <td><strong>Nearest Branch:</strong></td>
		   <td>$nearest_branch</td>
		</tr>
		<tr>
		   <td><strong>Marital Status:</strong></td>
		   <td>$marital</td>
		</tr>
		<tr>
		   <td><strong>Age:</strong></td>
		   <td>$age</td>
		</tr>
		<tr>
		   <td><strong>Experience:</strong></td>
		   <td>$experience</td>
		</tr>
		<tr>
		   <td><strong>Education:</strong></td>
		   <td>$education</td>
		</tr>
		<tr>
		   <td><strong>Spouse IELTS Exam:</strong></td>
		   <td>$spouse_language</td>
		</tr>
		<tr>
		   <td><strong>Past Study in Canada:</strong></td>
		   <td>$past_study_canada</td>
		</tr>
		<tr>
		   <td><strong>Spouse Past Study in Canada:</strong></td>
		   <td>$spouse_past_study_canada</td>
		</tr>
		<tr>
		   <td><strong>Past Work in Canada:</strong></td>
		   <td>$past_work</td>
		</tr>
		<tr>
		   <td><strong>Spouse Past Work in Canada:</strong></td>
		   <td>$spouse_past_work</td>
		</tr>
		<tr>
		   <td><strong>Arranged Employment in Canada:</strong></td>
		   <td>$arranged_emp</td>
		</tr>
		<tr>
		   <td><strong>Relatives in Canada:</strong></td>
		   <td>$relative_canada</td>
		</tr>
		<tr>
		   <td><strong>Listening Score:</strong></td>
		   <td>$listening</td>
		</tr>
		<tr>
		   <td><strong>Speaking Score:</strong></td>
		   <td>$speaking</td>
		</tr>
		<tr>
		   <td><strong>Reading Score:</strong></td>
		   <td>$reading</td>
		</tr>
		<tr>
		   <td><strong>Writing Score:</strong></td>
		   <td>$writing</td>
		</tr>
		<tr>
		   <td><strong>Message:</strong></td>
		   <td>$message</td>
		</tr>
		<tr>
		   <td><strong>Total Score:</strong></td>
		   <td>$totalScoreInput</td>
		</tr>

       </table>
       </body>
       </html>
    ";

    // Send the email
    mail($to, $subject, $body, $headers);

    // Redirect to thank-you page
    header("Location: thankyou.php");
    exit();
}

?>
