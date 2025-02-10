<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $qualification = $_POST["qualification"];
    $city = $_POST["city"];
    $experience = $_POST["experience"];
    $country = $_POST["country"];
    $visa = $_POST["visa"];
    $consultation = $_POST["consultation"];
    $branch = $_POST["branch"];
    $message = $_POST["message"];

    // Set up email headers
    $to = "Leads@immigrationxperts.com";
    $subject = "Hong kong Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Bcc: expertsanjay12@gmail.com\r\n";
    $headers .= "Cc: no-reply@apicalvisaexperts.com\r\n";
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
                <th colspan='2'>Hong kong Form Submission</th>
            </tr>
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
                <td><strong>Age:</strong></td>
                <td>$age</td>
            </tr>
            <tr>
                <td><strong>Qualification:</strong></td>
                <td>$qualification</td>
            </tr>
            <tr>
                <td><strong>Experience:</strong></td>
                <td>$experience</td>
            </tr>
            <tr>
                <td><strong>Country Interested In:</strong></td>
                <td>$country</td>
            </tr>
            <tr>
                <td><strong>Free Consultation:</strong></td>
                <td>$consultation</td>
            </tr>
            <tr>
                <td><strong>Nearest Branch:</strong></td>
                <td>$branch</td>
            </tr>
            <tr>
                <td><strong>Message:</strong></td>
                <td>$message</td>
            </tr>
            <!-- Add more rows for other form fields as needed -->

            
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
