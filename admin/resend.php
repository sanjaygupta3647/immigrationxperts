<?php
session_start();
include('db/db_connection.php');

// Check if there have been two resend attempts
if (!isset($_SESSION['resend_count'])) {
    $_SESSION['resend_count'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['resend']) && $_SESSION['resend_count'] < 2) {
    $email = $_SESSION['email'];

    // Generate a new verification code
    $newVerificationCode = mt_rand(100000, 999999);
    $_SESSION['verification_code'] = $newVerificationCode;

    // Update the new verification code in the database
    $updateCode = $conn->prepare("UPDATE customers SET verification_code = ? WHERE email = ?");
    $updateCode->bind_param("is", $newVerificationCode, $email);

    if ($updateCode->execute()) {
        // Send the new verification code to the user's email
        $to = $email;
        $subject = "New Verification Code";
        $message = "Your new verification code is: $newVerificationCode";
        $headers = "From: expertsanjay12@gmail.com"; // Replace with your email

        if (mail($to, $subject, $message, $headers)) {
            $_SESSION['resend_message'] = "New verification code sent! Please check your email.";
        } else {
            $_SESSION['resend_message'] = "Failed to send new verification code. Please try again.";
        }
    } else {
        $_SESSION['resend_message'] = "Failed to generate new verification code. Please try again.";
    }

    $_SESSION['resend_count']++;
}

header("Location: verify.php");
exit;
?>
