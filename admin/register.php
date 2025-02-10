<?php
session_start();
include('db/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $checkEmailQuery = $conn->prepare("SELECT email FROM customers WHERE email = ?");
    $checkEmailQuery->bind_param("s", $email);
    $checkEmailQuery->execute();
    $checkResult = $checkEmailQuery->get_result();

    if ($checkResult->num_rows > 0) {
        $_SESSION['error'] = "Email already registered. Please use a different email address.";
        header("Location: email.php");
        exit;
    }

    $verificationCode = mt_rand(100000, 999999);
    $_SESSION['email'] = $email;
	$_SESSION['phone'] = $phone;
	$_SESSION['name'] = $name;
    $_SESSION['verification_code'] = $verificationCode;

   $insertQuery = $conn->prepare("INSERT INTO customers (name, phone, email, verification_code, is_verified) VALUES (?, ?, ?, ?, 0)");
	$insertQuery->bind_param("sssi", $name, $phone, $email, $verificationCode);


    if ($insertQuery->execute()) {
        $to = $email;
        $subject = "Email Verification";
        $message = "Your verification code is: $verificationCode";
        $headers = "From: expertsanjay12@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            header("Location: verify.php");
            exit;
        } else {
			echo "Error: " . $conn->error; // Display the specific SQL error
		}
    } else {
        $_SESSION['error'] = "Registration failed. Please try again.";
        header("Location: email.php");
        exit;
    }

    $checkEmailQuery->close();
    $insertQuery->close();
    $conn->close();
}
?>
