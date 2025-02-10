<?php
if (!empty($_POST)) {
    // Retrieve form field values
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

    // Set up email headers
    $to = "noida@immigrationxperts.com";
    $subject = "CRS Form Submission $name ";
    $headers = "From: noida@immigrationxperts.com\r\n";
   // $headers .= "Cc: expertsanjay12@gmail.com\r\n";
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
                <th colspan='2'>Comprehensive Ranking System (CRS) Tool Point Score Calculator</th>
            </tr>
                <!-- Add rows for other form fields as needed -->
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>$name</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td><strong>Phone:</strong></td>
                    <td>$phone</td>
                </tr>
                <tr>
                    <td><strong>City:</strong></td>
                    <td>$city</td>
                </tr>
                <tr>
                    <td><strong>Totals:</strong></td>
                    <td>$totals</td>
                </tr>
                <tr>
                    <td><strong>Highest Qualification:</strong></td>
                    <td>$highestQualification</td>
                </tr>
                <tr>
                    <td><strong>Age:</strong></td>
                    <td>$age</td>
                </tr>
                <tr>
                    <td><strong>Nearest Branch:</strong></td>
                    <td>$nearestBranch</td>
                </tr>
                <tr>
                    <td><strong>Marital Status:</strong></td>
                    <td>$maritalStatusText</td>
                </tr>
            </table>
        </body>
        </html>
    ";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo json_encode(['status' => 'success', 'message' => 'Thank you for your submission!']);
    } else {
        // Email sending failed
        echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Please try again later.']);
    }
} else {
    // Handle case where form data is empty
    echo json_encode(['status' => 'error', 'message' => 'Form data is empty.']);
}
?>
