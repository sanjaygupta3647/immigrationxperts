<?php
session_start();
include('db/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredVerificationCode = $_POST['verificationCode'];
    $storedVerificationCode = $_SESSION['verification_code'];
    $name = $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $email = $_SESSION['email'];

    if ($enteredVerificationCode == $storedVerificationCode) {
        $updateStatus = $conn->prepare("UPDATE customers SET is_verified = 1 WHERE email = ?");
        $updateStatus->bind_param("s", $email);

        if ($updateStatus->execute()) {
            // Email verification successful, send user details to admin email
			$userDetails .= "Name: " . $name . "\n";
			$userDetails .= "Phone: " . $phone . "\n";
			$userDetails .= "Email: " . $email . "\n";

            $toAdmin = "sanjayisas@gmail.com";
            $subjectAdmin = "New User Details";
            $messageAdmin = "A new user has been verified:\n\n" . $userDetails;
            $headersAdmin = "From: expertsanjay12@gmail.com"; // Replace with your email

            mail($toAdmin, $subjectAdmin, $messageAdmin, $headersAdmin);

            echo "Email verification successful!";
            header("Location: email.php");
            exit;
        } else {
            echo "Error updating verification status.";
        }
    } else {
        echo "Invalid verification code. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter Verification Code</title>
</head>
<body>
    <h2>Enter Verification Code</h2>
    <?php
    // Display the message if it exists in the session
    if (isset($_SESSION['resend_message'])) {
        echo '<p>' . $_SESSION['resend_message'] . '</p>';
        unset($_SESSION['resend_message']); // Unset the session variable after displaying the message
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" id="verificationCode" name="verificationCode" required><br><br>
        <input type="submit" value="Verify">
    </form>

    <!-- Resend Verification Code Form -->
    <form action="resend.php" method="post">
        <input type="submit" name="resend" value="Resend Verification Code">
    </form>
</body>
</html>
