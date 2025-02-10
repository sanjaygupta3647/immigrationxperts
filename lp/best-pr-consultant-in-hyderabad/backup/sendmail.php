<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
error_reporting(E_ALL);
//Load Composer's autoloader
include 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
// Password: Vs]+cvic#2Wj

// email: no-reply@immigrationxperts.com

// Server: mail.immigrationxperts.com
//SMTP Port: 587
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noida@immigrationxperts.com';                     //SMTP username
    $mail->Password   = 'bhgaaynzyurwhfmu';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom('noida@immigrationxperts.com', 'immigrationxperts');
    $mail->addAddress('noida@immigrationxperts.com', 'immigrationxperts');     //Add a recipient
   // $mail->addAddress('mannukumarsingh4@gmail.com');               //Name is optional
    $mail->addReplyTo('no-reply@immigrationxperts.com', 'immigrationxperts');
    $mail->addCC('mannukumarsingh4@gmail.com');
    $mail->addBCC('mannukumarsingh4@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}