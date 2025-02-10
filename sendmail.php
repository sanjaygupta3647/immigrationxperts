<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once 'admin/db/db_connection.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Set error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $consultingBranch = isset($_POST['ConsultingBranch']) ? $_POST['ConsultingBranch'] : '';
    $messageNote = isset($_POST['Message_Note']) ? $_POST['Message_Note'] : '';
    $finalTotal = isset($_POST['finaltotal']) ? $_POST['finaltotal'] : 0; // Assuming it's a decimal field
    $selectedVisaType = isset($_POST['selectedVisaType']) ? $_POST['selectedVisaType'] : '';
    $subClass190 = isset($_POST['subClass190']) ? $_POST['subClass190'] : '';
    $subClass491 = isset($_POST['subClass491']) ? $_POST['subClass491'] : '';
    $ageGroup = isset($_POST['ageGroup']) ? $_POST['ageGroup'] : '';
    $qualificationGroup = isset($_POST['qualificationGroup']) ? $_POST['qualificationGroup'] : '';
    $australiaEdu = isset($_POST['australiaEdu']) ? $_POST['australiaEdu'] : '';
    $australiaStay = isset($_POST['australiaStay']) ? $_POST['australiaStay'] : '';
    $australiaSpeEdu = isset($_POST['australiaSpeEdu']) ? $_POST['australiaSpeEdu'] : '';
    $australiaWorkOut = isset($_POST['australiaWorkOut']) ? $_POST['australiaWorkOut'] : '';
    $australiaWorkIn = isset($_POST['australiaWorkIn']) ? $_POST['australiaWorkIn'] : '';
    $australiaEngLang = isset($_POST['australiaEngLang']) ? $_POST['australiaEngLang'] : '';
    $partnerSkill = isset($_POST['partnerSkill']) ? $_POST['partnerSkill'] : '';
    $accComm = isset($_POST['accComm']) ? $_POST['accComm'] : '';
    $proYear = isset($_POST['proYear']) ? $_POST['proYear'] : '';

    // Define PDF file name
    $pdfDirectory = "pdf/";

    // Create the directory if it doesn't exist
    if (!file_exists($pdfDirectory)) {
        mkdir($pdfDirectory, 0777, true);
    }

    $pdfFileName = $pdfDirectory . "{$name}_form_submission.pdf";
    echo "PDF File Path: " . $pdfFileName; // Debugging statement

    // Database insertion query
    $sql = "INSERT INTO aus_submissions (
        name, email, phone, city, consulting_branch, message, final_total, 
        selectedVisaType, subClass190, subClass491, ageGroup, qualificationGroup, 
        australiaEdu, australiaStay, australiaSpeEdu, australiaWorkOut, 
        australiaWorkIn, australiaEngLang, partnerSkill, accComm, proYear,
        submitted_date, pdf_path
    ) VALUES (
        '$name', '$email', '$phone', '$city', '$consultingBranch', '$messageNote', $finalTotal,
        '$selectedVisaType', '$subClass190', '$subClass491', '$ageGroup', '$qualificationGroup',
        '$australiaEdu', '$australiaStay', '$australiaSpeEdu', '$australiaWorkOut',
        '$australiaWorkIn', '$australiaEngLang', '$partnerSkill', '$accComm', '$proYear',
        NOW(), '$pdfFileName'
    )";

    // Perform the database insertion
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
        exit; // Exit the script if database insertion fails
    }

    // Set the temporary directory for mPDF
    $tempDir = __DIR__ . '/vendor/mpdf/mpdf/tmp';
    if (!file_exists($tempDir)) {
        mkdir($tempDir, 0777, true);
    }

    // Create mPDF object
    $mpdf = new \Mpdf\Mpdf(['tempDir' => $tempDir]);
    $mpdf->SetTitle('Form Submission Details');
    $mpdf->SetAutoPageBreak(true, 10);
    $mpdf->AddPage();
    $mpdf->SetFont('helvetica', 'B', 12);

    // Add form data to PDF
    $mpdf->WriteHTML("
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Phone: $phone</p>
        <p>City: $city</p>
        <p>Consulting Branch: $consultingBranch</p>
        <p>Message: $messageNote</p>
        <p>Final Total: $finalTotal</p>
        <p>Selected Visa Type: $selectedVisaType</p>
        <p>Selected Visa 190: $subClass190</p>
        <p>Selected Visa 491: $subClass491</p>
        <p>Selected Age-Group: $ageGroup</p>
        <p>Selected Qualifications: $qualificationGroup</p>
        <p>Australian Educational Qualification: $australiaEdu</p>
        <p>Australian Regional Study and Stay: $australiaStay</p>
        <p>Australian Specialist Education Qualification: $australiaSpeEdu</p>
        <p>Work Experience - Outside Australia: $australiaWorkOut</p>
        <p>Work Experience - Within Australia: $australiaWorkIn</p>
        <p>English Language Ability: $australiaEngLang</p>
        <p>Partner Skills: $partnerSkill</p>
        <p>Accredited Community Language: $accComm</p>
        <p>Professional Year Program in Australia: $proYear</p>
    ");

    // Save PDF to a file
    if (!file_put_contents($pdfFileName, $mpdf->Output('', 'S'))) {
        echo "Failed to save PDF file!";
        $conn->close();
        exit; // Exit the script if PDF creation fails
    }

    // Email configuration
    $smtpHost = 'apicalvisaexperts.com';
    $smtpUsername = 'no-reply@apicalvisaexperts.com';
    $smtpPassword = 'Expert@123#';

    // Initialize PHPMailer instances
    $userMail = new PHPMailer(true);
    $adminMail = new PHPMailer(true);

    // Set SMTP debugging
    $userMail->SMTPDebug = 2; // Set to 2 for detailed debugging output
    $adminMail->SMTPDebug = 2; // Set to 2 for detailed debugging output

    // Email to admin using PHPMailer
    $adminTo = "no-reply@apicalvisaexperts.com";
    $adminSubject = "New Form Submission";
    $adminMessage = "A new form submission is received from $name.\n\n";
    $adminMessage .= "Details:\n";
    $adminMessage .= "Name: $name\n";
    $adminMessage .= "Email: $email\n";
    $adminMessage .= "Phone: $phone\n";
    $adminMessage .= "City: $city\n";
    $adminMessage .= "Consulting Branch: $consultingBranch\n";
    $adminMessage .= "Message: $messageNote";

    // Email to user
    $userTo = $email;
    $userSubject = "Thank You for Your Form Submission";
    $userMessage = "<p>Dear $name,</p>
                    <p>Thank you for submitting the form. We have received your information.</p>
                    <p>Best regards,</p>
                    <p>Your Company</p>";

    // Perform the email sending
    try {
        // Send email to user
        $userMail->isSMTP();
        $userMail->Host = $smtpHost;
        $userMail->SMTPAuth = true;
        $userMail->Username = $smtpUsername;
        $userMail->Password = $smtpPassword;
        $userMail->SMTPSecure = 'tls'; // or 'ssl'
        $userMail->Port = 587; // or 587
        $userMail->isHTML(true);
        $userMail->setFrom($smtpUsername);
        $userMail->addAddress($userTo);
        $userMail->Subject = $userSubject;
        $userMail->Body = $userMessage;

        // Send email to admin
        $adminMail->isSMTP();
        $adminMail->Host = $smtpHost;
        $adminMail->SMTPAuth = true;
        $adminMail->Username = $smtpUsername;
        $adminMail->Password = $smtpPassword;
        $adminMail->SMTPSecure = 'tls'; // or 'ssl'
        $adminMail->Port = 587; // or 587
        $adminMail->isHTML(true);
        $adminMail->setFrom($smtpUsername);
        $adminMail->addAddress($adminTo);
        $adminMail->Subject = $adminSubject;
        $adminMail->Body = $adminMessage;

        // Send emails
        $userMail->send();
        $adminMail->send();

        echo 'Emails sent successfully to user and admin!';
    } catch (Exception $e) {
        echo "Failed to send emails. Error: {$e->getMessage()}";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request!";
}
?>
