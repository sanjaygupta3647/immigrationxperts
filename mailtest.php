<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Set error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Code for sending a test email
$mail = new PHPMailer(true);

try {
    // Server settings
	$mail->isHTML(true);
	$mail->Host = 'localhost';
	$mail->Port = 25; 

    // Recipients
    $mail->setFrom('no-reply@apicalvisaexperts.com', 'Australia Immigration Landing page');
    $mail->addAddress('sanjayisas@gmail.com');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = '<p>This is a test email for the Australia Immigration Landing page.</p>';

    // Send the test email
    $mail->send();

    echo 'Test Email sent successfully!';
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
