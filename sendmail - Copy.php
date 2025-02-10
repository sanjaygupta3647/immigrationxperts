<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $consultingBranch = $_POST['ConsultingBranch'];
    $messageNote = $_POST['Message_Note'];
    $finalTotal = $_POST['finaltotal'];
	$selectedVisaType = $_POST['selectedVisaType'];
	$subClass190 = $_POST['subClass190'];
	$subClass491 = $_POST['subClass491'];
	$ageGroup = $_POST['ageGroup'];
	$qualificationGroup = $_POST['qualificationGroup'];
	$australiaEdu = $_POST['australiaEdu'];
	$australiaStay = $_POST['australiaStay'];
	$australiaSpeEdu = $_POST['australiaSpeEdu'];
	$australiaWorkOut = $_POST['australiaWorkOut'];
	$australiaWorkIn = $_POST['australiaWorkIn'];
	$australiaEngLang = $_POST['australiaEngLang'];
	$partnerSkill = $_POST['partnerSkill'];
	$accComm = $_POST['accComm'];
	$proYear = $_POST['proYear'];

    // Email content
    $to = "no-reply@apicalvisaexperts.com";
    $subject = "New Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "City: $city\n";
    $message .= "Consulting Branch: $consultingBranch\n";
    $message .= "Message: $messageNote\n";
    $message .= "Final Total: $finalTotal\n";
	$message .= "Selected Visa Type: $selectedVisaType\n";
	$message .= "Selected Visa 190: $subClass190\n";
	$message .= "Selected Visa 491: $subClass491\n";
	$message .= "Selected Age-Group: $ageGroup\n";
	$message .= "Selected Qualifications: $qualificationGroup\n";
	$message .= "Australian Educational Qualification: $australiaEdu\n";
	$message .= "Australian Regional Study and Stay: $australiaStay\n";
	$message .= "Australian Specialist Education Qualification: $australiaSpeEdu\n";
	$message .= "Work Experience - Outside Australia: $australiaWorkOut\n";
	$message .= "Work Experience - Within Australia: $australiaWorkIn\n";
	$message .= "English Language Ability: $australiaEngLang\n";
	$message .= "Partner Skills: $partnerSkill\n";
	$message .= "Accredited Community Language: $accComm\n";
	$message .= "Professional Year Program in Australia: $proYear\n";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again.";
    }
} else {
    echo "Invalid request!";
}
?>
