<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 3; // Enable verbose debug output
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Use Gmail SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'expertsanjay12@gmail.com'; // Gmail address
    $mail->Password = 'bmfp khmk mryq ijvc'; // Use App Password for Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
    $mail->Port = 587; // Port for TLS (or use 465 with ENCRYPTION_SMTPS)

    // Recipients
    $mail->setFrom('sanjay@immigrationxperts.in', 'Your Name');
    $mail->addAddress('rajesh@immigrationxperts.in', 'Recipient Name');

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent via PHPMailer.';

    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

