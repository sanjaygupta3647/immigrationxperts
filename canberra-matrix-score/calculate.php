exp_outside<?php
//error_reporting(E_ALL);
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
    $accreditedLanguage = '';
	$professionalProgram = '';
	//Visa subclass
	if(!empty($postData['visa_subclass']) ||  $postData['visa_subclass'] == 0){
	 
      	if($postData['visa_subclass'] == 0){
      	    
		
		$visa_subclassGroup = 'Your nominated occupation is ON the ACT Critical Skills List ';
        $visa_subclass = 0;
        
        
	    }else if($postData['visa_subclass']==20){
		
		$visa_subclassGroup = 'Your nominated occupation is NOT on the ACT Critical Skills List ';
        $visa_subclass = 20;
         }
			
		$totalPoint = $totalPoint + $visa_subclass;	
		

		$htmlRow .= '<tr><td><b>Nominated occupation</b> <br />'.$visa_subclassGroup.'</td><td align="right"><b>'.	$totalPoint.'/20</b></td></tr>';
		}
	
	
	//Work Experience - Within Australia
	if(!empty($postData['work_with_aus'])){
		if($postData['work_with_aus']==25){
			$expWithinAus = 'Five years plus';
			$expWithinAusPoint = 25;
		}else if($postData['work_with_aus']==20){
			$expWithinAus = 'Four to five years';
			$expWithinAusPoint = 15;
		}else if($postData['work_with_aus']==15){
			$expWithinAus = 'Three to four years';
			$expWithinAusPoint = 10;
		}else if($postData['work_with_aus']==10){
			$expWithinAus = 'Two to three years';
			$expWithinAusPoint = 5;
		}else if($postData['work_with_aus']==5){
			$expWithinAus = 'One to two years';
			$expWithinAusPoint = 5;
		}else
			$expWithinAus = 'Less than one year';
			$expWithinAusPoint = 0;
		
		
		$totalPoint = $totalPoint + $expWithinAusPoint;
		$htmlRow .= '<tr><td><b>Length of current ACT residence
</b> <br />'.$expWithinAus.'</td><td align="right"><b>'.$expWithinAusPoint.'/25</b></td></tr>';
	}
	
		//English Language Ability
	if(!empty($postData['eng_ablity']) || $postData['eng_ablity'] == 0){
	
		if($postData['eng_ablity'] == 0){
		    $engAbility='Competent English';
			$engAbilityPoint = 0;
		}else if($postData['eng_ablity'] == 10){
		    $engAbility='Proficient English';
			$engAbilityPoint = 10;
		}else
		    $engAbility='Superior English';
			$engAbilityPoint = 15;
	
		
		$totalPoint = $totalPoint + $engAbilityPoint;
		$htmlRow .= '<tr><td><b>English Language Ability</b> <br />'.$engAbility.'</td><td align="right"><b>'.$engAbilityPoint.'/15</b></td></tr>';
	}
	
	
		//English Language Ability
	if(!empty($postData['eng_ablity_1']) || $postData['eng_ablity_1'] == 0){
	    
		if($postData['eng_ablity_1'] == 5){
		    
			$engAbilityPoint = 5;
			
		}else if($postData['eng_ablity_1'] == 0){
		  
			$engAbilityPoint = 0;
			
		}else
		   
			$engAbilityPoint = 0;
		
		
		$totalPoint = $totalPoint + $engAbilityPoint;
		$htmlRow .= '<tr><td><b>Spouse/Partner English proficiency</b> <br />'.$engAbility_1.'</td><td align="right"><b>'.$engAbilityPoint.'/5</b></td></tr>';
	}
	
	
		//Australian Educational Qualification
	if(!empty($postData['aus_edu_qua']) || $postData['aus_edu_qua'] == 0){
		
		if($postData['aus_edu_qua']  == 5){
			$aus_edu_qua_point = 5;}
		else
			$aus_edu_qua_point = 0;
			
		$totalPoint = $totalPoint + $aus_edu_qua_point;
		$htmlRow .= '<tr><td><b>Small Business Owner</b> <br /></td><td align="right"><b>'.$aus_edu_qua_point.'/5</b></td></tr>';
	}
	
	
		//Work Experience - Outside Australia
	if(!empty($postData['exp_outside'])){
		if($postData['exp_outside'] == 10){
			$expOutAus = 'Employed for 12 months plus';
			$expOutAusPoint = 10;
		}else if($postData['exp_outside'] == 5){
			$expOutAus = 'Employed for 6 to 12 months.';
			$expOutAusPoint = 5;
		}
		else
			$expOutAusPoint = 0;
		
		
		$totalPoint = $totalPoint + $expOutAusPoint;
		$htmlRow .= '<tr><td><b>Length of ACT employment</b> <br />'.$expOutAus.'</td><td align="right"><b>'.$expOutAusPoint.'/15</b></td></tr>';
	}
	
	
		//Regional Study and Stay
	if(!empty($postData['regional_study_1'])){
	    
	    if($postData['regional_study_1'] == 20 ){
		  
			$regionalQualificationPoint = 20;
			}
			else if($postData['regional_study_1'] == 15){
	        
			$regionalQualificationPoint = 15;
	    }
	    	else if($postData['regional_study_1'] == 10){
	       
			$regionalQualificationPoint = 10;
	    }
	    	else if($postData['regional_study_1'] == 5){
	        
			$regionalQualificationPoint = 5;
	    }
		else
			$regionalQualificationPoint = 0;
		
		$totalPoint = $totalPoint + $regionalQualificationPoint;
		$htmlRow .= '<tr><td><b>ACT employment - skill level
</b> <br />'.$regionalQualification.'</td><td align="right"><b>'.$regionalQualificationPoint.'/5</b></td></tr>';
	}

	
	if(!empty($postData['hq'])){
		if($postData['hq'] == 20){
		    
			$quaGroup = 'Doctoral degree (PhD)';
			$hqPoint = 20;
			
		}else if($postData['hq'] == 15){
		    
			$quaGroup = 'Master’s Degree';
			$hqPoint = 15;
			
		}else if($postData['hq'] == 10){
		    
			$quaGroup = 'Bachelor’s degree or trade certificate';
			$hqPoint = 10;
			
		}else if($postData['hq'] == 5){
		    
			$quaGroup = 'Diploma qualification - at least 18 month full-time study';
			$hqPoint = 5;
			
		}
		
		else
			$quaGroup = 'Not applicable';
			$hqPoint = 0;
	
		
		$totalPoint = $totalPoint + $hqPoint;
		$htmlRow .= '<tr><td><b>Tertiary qualification</b> <br />'.$quaGroup.'</td><td align="right"><b>'.$hqPoint.'/20</b></td></tr>';
	}
	


	
	//Specialist Education Qualification
	if(!empty($postData['specialist_edu'])){
	    
		if($postData['specialist_edu'] == 20){
			$specialistQualificationPoint = 20;
			
		    
		}
		else if($postData['specialist_edu'] == 15){
			$specialistQualificationPoint = 15;
		    
		}
		else if($postData['specialist_edu'] == 10){
			$specialistQualificationPoint = 10;
		    
		}
		else if($postData['specialist_edu'] == 5){
			$specialistQualificationPoint = 5;
		    
		}
		else
			$specialistQualificationPoint = 0;
		
		$totalPoint = $totalPoint + $specialistQualificationPoint;
		$htmlRow .= '<tr><td><b>Spouse/Partner employment</b> <br />'.$postData['specialist_edu'].'</td><td align="right"><b>'.$specialistQualificationPoint.'/20</b></td></tr>';
	}
	
		//Age Creteria
	if(!empty($postData['age'])){
	
		
		if($postData['age'] == 20)
		{
	
			$agePoint = 20;
		    
		}
			
		else if($postData['age'] == 15)
		{
			$agePoint = 15;
		    
		}
			
		else if($postData['age'] == 10)
		{
			$agePoint = 10;
		    
		}
			else if($postData['age'] == 5)
		{
			$agePoint = 5;
		    
		}
			
		else 
		$agePoint = 0;
		    
	
		$totalPoint = $totalPoint + $agePoint;	
		$htmlRow .= '<tr><td><b>Years of study at an ACT tertiary institution</b> <br />'.$ageGroup.'</td><td align="right"><b>'.$agePoint.'/30</b></td></tr>';
	}
	

	


	
	//Accredited Community Language
	if(!empty($postData['accredited_language'])){
		if($postData['accredited_language'] == 5)
			$accreditedLanguagePoint = 5;
		else
			$accreditedLanguagePoint = 0;
			
		$totalPoint = $totalPoint + $accreditedLanguagePoint;
		$htmlRow .= '<tr><td><b>Accredited Community Language</b> <br />'.$postData['accredited_language'].'</td><td align="right"><b>'.$accreditedLanguagePoint.'/5</b></td></tr>';
	}
	
	//Professional Year Program in Australia
	if(!empty($postData['professional_pro'])){
		if($postData['professional_pro'] == 5)
			$professionalProgramPoint = 5;
		else
			$professionalProgramPoint = 0;

		$totalPoint = $totalPoint + $professionalProgramPoint;
		$htmlRow .= '<tr><td><b>Professional Year Program in Australia</b> <br />'.$postData['professional_pro'].'</td><td align="right"><b>'.$professionalProgramPoint.'/5</b></td></tr>';
	}

	
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
			<td valign="top"><img src="images/logo.png" alt="" width="115"/></td>
			<td align="center"><h3>Points Test Summary</h3></td>
			<td align="right">
				<p style="font-size:12px; line-height:14px;">Call us: +91 8448450100 </p>
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
	//$dompdf->stream("",array("Attachment" => false));die;
	
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