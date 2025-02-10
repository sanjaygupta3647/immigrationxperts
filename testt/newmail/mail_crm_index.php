<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


 $postData = $_POST;
    $canonical_url = isset($postData['canonical_url']) ? $postData['canonical_url'] : '';
    
    
function displayErrorAndRedirect($message, $canonical_url) {
    echo '<script>alert("' . addslashes($message) . '"); window.location.href = "' . htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') . '";</script>';
    exit;
}

function isBot() {
    return !empty($_POST['honeypot']);
}

function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function isIPBlocked($ip) {
    $blockedIPs = ['192.168.1.1', '203.0.113.0']; // You can store this in a database or config file
    return in_array($ip, $blockedIPs);
}

function checkThrottling() {
    if (!isset($_SESSION['submissions'])) {
        $_SESSION['submissions'] = [];
    }

    $now = time();
    $_SESSION['submissions'] = array_filter($_SESSION['submissions'], function($timestamp) use ($now) {
        return ($now - $timestamp) < TIMEFRAME;
    });

    if (count($_SESSION['submissions']) >= MAX_SUBMISSIONS) {
        return false; // Too many submissions
    }

    $_SESSION['submissions'][] = $now;
    return true;
}

function verifyRecaptcha($secretKey, $responseKey) {
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $verifyResponse = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $responseKey);
    $responseData = json_decode($verifyResponse);
    return $responseData->success;
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input ?? ''), ENT_QUOTES, 'UTF-8');
}

define('MAX_SUBMISSIONS', 3);
define('TIMEFRAME', 600); // 10 minutes
define('MIN_FORM_FILL_TIME', 30); // 60 seconds

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userIP = getUserIP();
    
    if (isIPBlocked($userIP)) {
        displayErrorAndRedirect('Your IP address is blocked.', $canonical_url);
        
    }

    if (!checkThrottling()) {
        displayErrorAndRedirect('Too many submissions. Please try again later.', $canonical_url);
    }

    if (isBot()) {
        displayErrorAndRedirect('Form submission error!');
    }

    // Minimum form fill time check
    $formStartTime = (int)($_POST['form_start_time'] ?? 0);
    $currentTime = time();
    if (($currentTime - $formStartTime) < MIN_FORM_FILL_TIME) {
        displayErrorAndRedirect('Form submission requires at least 30 seconds.', $canonical_url);
    }

    $secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];
    $responseKey = $_POST['g-recaptcha-response'] ?? '';
    if (!verifyRecaptcha($secretKey, $responseKey)) {
        displayErrorAndRedirect('reCAPTCHA verification failed!', $canonical_url);
    }

    // Validate Math CAPTCHA
    $mathAnswer = (int)($_POST['math_answer'] ?? 0);
    $correctAnswer = (int)($_POST['math_correct_answer'] ?? 0);
    if ($mathAnswer !== $correctAnswer) {
        displayErrorAndRedirect('Math CAPTCHA failed!', $canonical_url);
    }

    // Sanitize input data
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $phone = sanitizeInput($_POST['phone1'] ?? '');
    $message = sanitizeInput($_POST['message'] ?? '');
    $city = sanitizeInput($_POST['city'] ?? '');
    $age = sanitizeInput($_POST['age'] ?? '');
    $highestQualification = sanitizeInput($_POST['qualification'] ?? '');
    $workExperience = sanitizeInput($_POST['experience'] ?? '');
    $visa = sanitizeInput($_POST['visa'] ?? '');
    $consultation = sanitizeInput($_POST['consultation'] ?? '');
    $branch = sanitizeInput($_POST['branch'] ?? '');
    $country = sanitizeInput($_POST['country'] ?? '');

    // Send email using PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'ssl://smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'];
        $mail->Password   = $_ENV['SMTP_PASSWORD'];
        $mail->Port       = 465;

        $fromEmail = $_ENV['SMTP_FROM_EMAIL'] ?? '';
        $toEmail = $_ENV['SMTP_TO_EMAIL'] ?? '';

        if (empty($fromEmail) || empty($toEmail)) {
            displayErrorAndRedirect('Mailer Error: Invalid email configuration.', $canonical_url);
        }

        $mail->setFrom($fromEmail, 'Immigration Expert');
        $mail->addAddress($toEmail, 'Immigration Expert');

        $mail->isHTML(true);
        $mail->Subject = 'Immigration Form Home';
        
        // Compose email message
    $headerBody = '<table border="0" width="100%"><tr>
        <td><img src="https://www.immigrationxperts.com/assets/images/resources/logo.png" width="130" /></td>
        <td align="right"><p>Follow us on: </p>
        <a href="https://www.facebook.com/ImmigrationXpertsIndia/" target="_blank">
            <img src="https://www.immigrationxperts.com/assets/images/icon/fb.png" width="32" /></a>
        <a href="https://www.linkedin.com/company/immigrationxperts" target="_blank">
            <img src="https://www.immigrationxperts.com/assets/images/icon/in.png" width="32" /></a>
        <a href="https://twitter.com/immixperts?lang=en" target="_blank">
            <img src="https://www.immigrationxperts.com/assets/images/icon/twt.png" width="32" /></a>
        <a href="https://www.instagram.com/immiexperts/" target="_blank"><img src="https://www.immigrationxperts.com/assets/images/icon/insta.png" width="32" /></a>
        </td>
    </tr></table><hr />';

    $footerBody = '<table width="100%" border="0"><tr>
        <td><b>Immigrationxperts.com</b><br />
        Apical Immigration Experts Pvt Ltd.<br />
        CIN # U74900UP2014PTC063079<br />
        ITHUM Towers, Office No. 403, 4th Floor,<br />
        Next to Nucleus Software<br />
        Sector 62 – Noida, India.
        </td>
        <td valign="top">
        <p><b>For further assistance</b></p>
        <p>Call Us: <a href="+91 9999467686">+91 9999467686</a><br />
        Or Email Us: <a href="mailto:info@immigrationxperts.com">info@immigrationxperts.com</a><p>
        </td>
    </tr></table>';
    
        $bodyMessage .= $headerBody;
        $bodyMessage = '<table width="650" border="0" bgcolor="#f1f1f1" style="padding:10px;"><tr><td>';
        $bodyMessage .= "<p>Hi Admin, </p><p>{$name} applied for Immigration and details are given below: </p>";
        $bodyMessage .= "<table border='1' width='100%' cellpadding='10'><tr><td>Name: </td><td>{$name}</td></tr>";
        $bodyMessage .= "<tr><td>Email: </td><td>{$email}</td></tr>";
        $bodyMessage .= "<tr><td>Phone: </td><td>{$phone}</td></tr>";
        $bodyMessage .= "<tr><td>City: </td><td>{$city}</td></tr>";
        $bodyMessage .= "<tr><td>Age: </td><td>{$age}</td></tr>";
        $bodyMessage .= "<tr><td>Highest Qualification: </td><td>{$highestQualification}</td></tr>";
        $bodyMessage .= "<tr><td>Work Experience: </td><td>{$workExperience}</td></tr>";
        $bodyMessage .= "<tr><td>Visa Type: </td><td>{$visa}</td></tr>";
        $bodyMessage .= "<tr><td>Country Interested In: </td><td>{$country}</td></tr>";
        $bodyMessage .= "<tr><td>Consultation: </td><td>{$consultation}</td></tr>";
        $bodyMessage .= "<tr><td>Branch: </td><td>{$branch}</td></tr>";
        $bodyMessage .= "<tr><td>Message: </td><td>{$message}</td></tr></table>";
        $bodyMessage .= '</td></tr></table>';
        $bodyMessage .= "<p><a href='" . $canonical_url . "'>Click here</a> to view the page.</p>";
        $bodyMessage .= $footerBody;

        $mail->Body    = $bodyMessage;
        $mail->AltBody = strip_tags($bodyMessage);

        $mail->send();
        // Redirect to the thank you page on success
        echo '<script>window.location.href = "/thankyou/";</script>';
    } catch (Exception $e) {
        // Show mailer error message in an alert and redirect to the same page
        displayErrorAndRedirect('Mailer Error: ' . $mail->ErrorInfo);
    }
}
?>
