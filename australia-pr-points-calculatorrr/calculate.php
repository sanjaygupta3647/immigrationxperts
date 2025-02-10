<?php
error_reporting(E_ALL);
require_once 'lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$html = ob_get_clean();
$dompdf = new DOMPDF();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

//echo "<pre>";print_r($_POST); die;
if(!empty($_POST)){
	$postData = $_POST;
	$htmlRow = '';
	$totalPoint = 0;
	$ageGroup = '';
	$quaGroup = '';
	$ausQualification = '';
	$regionalQualification = '';
	$specialistQualification = '';
	$expOutAus = '';
	$expWithinAus = '';
	$engAbility = '';
	$partnerSkillGroup = '';
	$accreditedLanguage = '';
	$professionalProgram = '';
	
	//Visa subclass
	if(!empty($postData['visa_subclass'])){
	
		$htmlRow .= '<tr><td><b>Visa Subclass</b> <br />'.$postData['visa_subclass'].'</td><td></td></tr>';
	}
	
	//Age Creteria
	if(!empty($postData['age'])){
		$ageGroup = $postData['age'];
		
		if($postData['age']=='18-24')
			$agePoint = 25;
		else if($postData['age']=='25-32')
			$agePoint = 30;
		else if($postData['age']=='33-39')
			$agePoint = 25;
		else 
			$agePoint = $totalPoint+15;
		
		$totalPoint = $totalPoint + $agePoint;	
		$htmlRow .= '<tr><td><b>Age</b> <br />'.$ageGroup.'</td><td align="right"><b>'.$agePoint.'/30</b></td></tr>';
	}
	
	if(!empty($postData['hq'])){
		if($postData['hq']=='phd'){
			$quaGroup = 'A Doctorate Degree (PHD) holder from an Australian institute or from another Recognized institute';
			$hqPoint = 20;
		}else if($postData['hq']=='bachelor'){
			$quaGroup = 'A Bachelor Degree holder from an Australian institute or from another Recognized institute';
			$hqPoint = 15;
		}else if($postData['hq']=='diploma'){
			$quaGroup = 'A Diploma or trade qualification completed in Australia or an award or qualification awarded by relevant skill assessing authority';
			$hqPoint = 10;
		}else{
			$quaGroup = 'No Recognised Qualifications';
			$hqPoint = 0;
		}
		
		$totalPoint = $totalPoint + $hqPoint;
		$htmlRow .= '<tr><td><b>Qualifications</b> <br />'.$quaGroup.'</td><td align="right"><b>'.$hqPoint.'/20</b></td></tr>';
	}
	
	//Australian Educational Qualification
	if(!empty($postData['aus_edu_qua'])){
		$ausQualification = $postData['aus_edu_qua'];
		
		if($postData['aus_edu_qua']=='Yes')
			$aus_edu_qua_point = 5;
		else
			$aus_edu_qua_point = 0;
			
		$totalPoint = $totalPoint + $aus_edu_qua_point;
		$htmlRow .= '<tr><td><b>Australian Educational Qualification</b> <br />'.$ausQualification.'</td><td align="right"><b>'.$aus_edu_qua_point.'/5</b></td></tr>';
	}
	
	//Regional Study and Stay
	if(!empty($postData['regional_study'])){
		$regionalQualification = $postData['regional_study'];
		
		if($postData['regional_study']=='Yes')
			$regionalQualificationPoint = 5;
		else
			$regionalQualificationPoint = 0;
		
		$totalPoint = $totalPoint + $regionalQualificationPoint;
		$htmlRow .= '<tr><td><b>Regional Study and Stay</b> <br />'.$regionalQualification.'</td><td align="right"><b>'.$regionalQualificationPoint.'/5</b></td></tr>';
	}
	
	//Specialist Education Qualification
	if(!empty($postData['specialist_edu'])){
		if($postData['specialist_edu']=='Yes')
			$specialistQualificationPoint = 10;
		else
			$specialistQualificationPoint = 0;
		
		$totalPoint = $totalPoint + $specialistQualificationPoint;
		$htmlRow .= '<tr><td><b>Specialist Education Qualification</b> <br />'.$postData['specialist_edu'].'</td><td align="right"><b>'.$specialistQualificationPoint.'/10</b></td></tr>';
	}
	
	
	
	//Work Experience - Outside Australia
	if(!empty($postData['exp_outside'])){
		if($postData['exp_outside']==8){
			$expOutAus = '8 Years or More';
			$expOutAusPoint = 15;
		}else if($postData['exp_outside']==5){
			$expOutAus = '5 Years or More';
			$expOutAusPoint = 10;
		}else if($postData['exp_outside']==3){
			$expOutAus = '3 Years or More';
			$expOutAusPoint = 5;
		}else{
			$expOutAus = 'Less than 3 years/No Experience';
			$expOutAusPoint = 0;
		}
		
		$totalPoint = $totalPoint + $expOutAusPoint;
		$htmlRow .= '<tr><td><b>Work Experience - Outside Australia</b> <br />'.$expOutAus.'</td><td align="right"><b>'.$expOutAusPoint.'/15</b></td></tr>';
	}
	
	//Work Experience - Within Australia
	if(!empty($postData['work_with_aus'])){
		if($postData['work_with_aus']==8){
			$expWithinAus = '8 Years or More';
			$expWithinAusPoint = 20;
		}else if($postData['work_with_aus']==5){
			$expWithinAus = '5 Years or More';
			$expWithinAusPoint = 15;
		}else if($postData['work_with_aus']==3){
			$expWithinAus = '3 Years or More';
			$expWithinAusPoint = 10;
		}else if($postData['work_with_aus']==1){
			$expWithinAus = '1 Year or More';
			$expWithinAusPoint = 5;
		}else{
			$expWithinAus = 'No Experience';
			$expWithinAusPoint = 0;
		}
		
		$totalPoint = $totalPoint + $expWithinAusPoint;
		$htmlRow .= '<tr><td><b>Work Experience - Within Australia</b> <br />'.$expWithinAus.'</td><td align="right"><b>'.$expWithinAusPoint.'/20</b></td></tr>';
	}
	
	//English Language Ability
	if(!empty($postData['eng_ablity'])){
		$engAbility = $postData['eng_ablity'];
		if($postData['eng_ablity']=='Competent English'){
			$engAbilityPoint = 0;
		}else if($postData['eng_ablity']=='Proficient English'){
			$engAbilityPoint = 10;
		}else{
			$engAbilityPoint = 20;
		}
		
		$totalPoint = $totalPoint + $engAbilityPoint;
		$htmlRow .= '<tr><td><b>English Language Ability</b> <br />'.$engAbility.'</td><td align="right"><b>'.$engAbilityPoint.'/20</b></td></tr>';
	}
	
	//Partner Skills Point
	if(!empty($postData['partner_skills'])){
		if($postData['partner_skills']==1){
			$partnerSkillGroup = 'Your spouse or de facto partner must also be an applicant for this visa and meet age, English and skill criteria';
			$partnerSkillGroupPoint = 10;
		}else if($postData['partner_skills']==2){
			$partnerSkillGroup = 'Your spouse or de facto partner must also be an applicant for this visa and has competent English';
			$partnerSkillGroupPoint = 5;
		}else if($postData['partner_skills']==3){
			$partnerSkillGroup = 'You are single or your partner is an Australian citizen or permanent resident';
			$partnerSkillGroupPoint = 10;
		}else{
			$partnerSkillGroup = 'Not Applicable';
			$partnerSkillGroupPoint = 0;
		}
		
		$totalPoint = $totalPoint + $partnerSkillGroupPoint;
		$htmlRow .= '<tr><td><b>Partner Skills Point</b> <br />'.$partnerSkillGroup.'</td><td align="right"><b>'.$partnerSkillGroupPoint.'/10</b></td></tr>';
	}
	
	//Accredited Community Language
	if(!empty($postData['accredited_language'])){
		if($postData['accredited_language']=='Yes')
			$accreditedLanguagePoint = 5;
		else
			$accreditedLanguagePoint = 0;
			
		$totalPoint = $totalPoint + $accreditedLanguagePoint;
		$htmlRow .= '<tr><td><b>Accredited Community Language</b> <br />'.$postData['accredited_language'].'</td><td align="right"><b>'.$accreditedLanguagePoint.'/5</b></td></tr>';
	}
	
	//Professional Year Program in Australia
	if(!empty($postData['professional_pro'])){
		if($postData['professional_pro']=='Yes')
			$professionalProgramPoint = 5;
		else
			$professionalProgramPoint = 0;

		$totalPoint = $totalPoint + $professionalProgramPoint;
		$htmlRow .= '<tr><td><b>Professional Year Program in Australia</b> <br />'.$postData['professional_pro'].'</td><td align="right"><b>'.$professionalProgramPoint.'/5</b></td></tr>';
	}

	$path = 'images/logo.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64_image = 'data:image/' . $type . ';base64,' . base64_encode($data);
	
	$html =
	'<!doctype html>
		<html lang="en">
		<head>
		<meta charset="UTF-8">
		<title>Immigration Experts</title>

		<style type="text/css">
			* {
				font-family: Verdana, Arial, sans-serif;
			}
			table{
				font-size: x-small;
			}
			tfoot tr td{
				font-size: x-small;
			}
			.gray {
				background-color: lightgray
			}
			.content-table td{ border-bottom: 1px solid #CCCCCC; font-size:13px;}
			footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 30px;
				text-align:center;
				font-size:11px;
            }
		</style>

		</head>
	<body>';
	
	$html .= '<table width="100%">
		<tr>
			<td valign="top"><img src="'.$base64_image.'" alt="" width="115"/></td>
			<td align="center"><h3>Points Test Summary</h3></td>
			<td align="right">
				<p style="font-size:12px; line-height:14px;">Call us: +91 9999467686 </p>
				<p style="font-size:12px; line-height:14px;">Email us: info@immigrationxperts.com</p>
			</td>
		</tr>
	</table>
	<hr />
	';
	
	$html .= '<table class="content-table" width="100%" cellpadding="9" cellspacing="0" border="0">
    <thead style="background-color: lightgray;">
      <tr>
        <th>Criteria</th>
        <th align="right">Points Scored</th>
      </tr>
    </thead>
    <tbody>
	'.$htmlRow.'
	<tr>
		<td style="font-size:16px; color:blue;"><b>Your Point score is</b></td>
		<td align="right" style="font-size:16px; color:red;"><b>'.$totalPoint.'</b></td></tr>
	</tbody>
	</table>
	<p style="font-size:11px;">Disclaimer: The information contained in this document is provided for informational purposes only, and should not be construed as legal advice on any subject matter.</p>
	<p style="font-size:11px; color:#008ca6; margin-top:10px;"><b><a href="https://www.immigrationxperts.com" style="color:#008ca6;">immigrationxperts.com</a></b> operates on a No-visa, No-Fee basis which means we guarantee the success of Your visa application or your money back!</p>
	<p style="font-size:11px; color:#008ca6;"><b>What client Says</b> - https://www.immigrationxperts.com/testimonial/</p>
	';
	
	$html .= '<footer style="border-top:solid 1px #cccccc; padding-top:10px;">Copyright &copy; '.date("Y").' Apical Immigration Experts Pvt Ltd. All Rights Reserved. | Generated on '.date("d-M-Y H:i:s A").'</footer>';
	

	$html .= '</body></html>';

	//echo $html;die;

	$dompdf->load_html($html);
	$dompdf->render();
	
	$output = $dompdf->output();
	
	$fileName = "Immigration-Experts-".time().".pdf";
	
	if( file_put_contents("pdf/".$fileName, $output)){
		

		$bodyMessage = "<p>Hi ".$_POST['user_name'].",</p><p>Thank for your interest to generate the points test score. <br /> Reports has attached and details are given below: </p>";
		
		$bodyMessage .= "<p>Name: ".$_POST['user_name']."</p>";
		$bodyMessage .= "<p>Email: ".$_POST['email']."</p>";
		$bodyMessage .= "<p>Mobile no. : ".$_POST['phone']."</p>";
		$bodyMessage .= "<p>City: ".$_POST['city']."</p>";

		$bodyMessage .= "<p><strong>Total Points: ".$totalPoint."</strong></p>";
		
		/*
		$mail = new PHPMailer;
		$mail->isHTML(true);
		//$mail->CharSet = PHPMailer::CHARSET_UTF8;
		$mail->setFrom('info@immigrationxperts.com', 'Immigration Experts');
		$mail->addAddress('arunverma1090@gmail.com','Arun Verma');
		$mail->addAddress( $_POST['email'] );
		$mail->AddCC("info@immigrationxperts.com");
		
		$mail->addReplyTo('info@immigrationxperts.com', 'Immigration Experts');
		*/

		$mail = new PHPMailer;
		$mail->isHTML(true);
		$mail->Host = 'localhost';
		$mail->Port = 25; 
	
		$mail->setFrom('info@immigrationxperts.com', 'Immigration Experts' );
		$mail->addAddress( $postData['email'], $postData['user_name'] );
		//$mail->addReplyTo( $postData['email'], $postData['user_name'] );
		$mail->addBCC('manishnet@icloud.com'); //arunverma1090@gmail.com
		
		// Attachments
		$mail->addAttachment('pdf/'.$fileName);
		//$mail->AddAttachment( $_SERVER["DOCUMENT_ROOT"] . '/canada-australia-immigration/pdf/'.$fileName );
		
		$mail->Subject = $_POST['user_name']."'s Points Test Summary";
		$mail->Body = $bodyMessage;
		if (!$mail->send()) {
			echo 'Mailer Error: '. $mail->ErrorInfo;
		} else {
			$message = '<hr style="color:#fff;" /><p style="color:#fff;">Thank you for showing your interest, we will contact you within 24 hours.</p><p class="download-result text-center"><button class="btn btn-success" type="button">Your Total Points is: <strong>'.$totalPoint.'</strong></button> &nbsp; &nbsp; <a href="pdf/'.$fileName .'" class="btn btn-warning" target="_blank">Download PDF</a></p>';
			$res_arr = array('totalPoint'=>$totalPoint, 'message'=>$message );
			echo json_encode($res_arr);
		}
		die;
	}else{
		return false;
	}
}
	
?>