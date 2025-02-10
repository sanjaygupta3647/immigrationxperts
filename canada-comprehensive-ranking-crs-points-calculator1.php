<?php
// Get the current URL
$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Parse the URL to get its components
$parsed_url = parse_url($current_url);

// Construct the canonical URL without query parameters or fragments
$canonical_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canada CRS Points Calculator, CRS Score Calculator India</title>
    <meta name="description" content="Canada CRS Points Calculator is a calculating tool helps you to check your eligibility for Canada PR through Express Entry Program in 2021."/>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />
	
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/assets/vendors/BuenosAires/stylesheet.css" />

    <!-- template styles -->
   

 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PR37ZR3');</script>
<!-- End Google Tag Manager -->

    
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PR37ZR3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


      <?php include '../header1.php';?>

    <div class="page-wrapper">
       <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/ComprehensiveRanking-System-CRS.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>
        </section>

        <div class="container mt-4">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Canada</li>
                </ul>
            </div>
        </div>
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <h1 class="section-title__title">Comprehensive Ranking System (CRS) Tool Point Score
                                Calculator</h1>
                            <h3 class="txt mt-4">Comprehensive Ranking System (CRS)</h3>
                            <br>
							<div id="crs-calc" class="et_pb_module et_pb_code et_pb_code_1" >	
							<div class="et_pb_code_inner">
								<div class="wb-frmvld">
									<form id="crs-form" role="form" class="crsform" method="post" action="#" autocomplete="off">
										<div class="row">
										  <div id="Name-Trig" class="col-md-6 col-sm-12 form-group">
											 <label for="Name-Trig" class="pl-0">Name*</label>
											 <input type="text" id="Name" name="Name" placeholder="Enter Your Name" class="form-control mrgn-bttm-md" required="" autocomplete="off" />
										  </div>
										  <div id="Email-Trig" class="col-md-6 col-sm-12 form-group">
											 <label for="Email-Trig" class="pl-0">Email*</label>
											 <input type="email" id="Email" name="Email" placeholder="Enter Your Email Id" class="form-control mrgn-bttm-md" required="" autocomplete="off" />
										  </div>
										  <div id="Phone-Trig" class="col-lg-2 col-md-2 col-sm-6 form-group">
											<div class="form-group">
												<label for="Phone-Trig" class="pl-0">Phone *</label>
												<select name="country_code" class="form-select" id="country_code" required>
													<option value="+91">+91</option>
												</select>
											</div>
										  </div>
										  <div class="col-md-4 col-sm-6 form-group">
											<label for="Phone-Trig" class="pl-0">&nbsp;</label>
											<input type="text" name="Phone" id="Phone" placeholder="Phone Number" maxlength="10" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" title="Enter Valid mobile number ex.9999467686" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" class="form-control" required="" autocomplete="off" />
										  </div>
										  <div id="City-Trig" class="col-md-6 col-sm-12 form-group">
											 <label for="City-Trig" class="pl-0">Your City*</label>
											 <input type="text" id="city" name="City" placeholder="Enter Your City" class="form-control mrgn-bttm-md" autocomplete="off" />
										  </div>
										  
										  <div class="col-md-6 col-sm-12 form-group">
											<label class="pl-0">Consulting Branch *</label>
											<select name="nearest_branch" class="form-select" id="nearest_branch" required>
												<option value="">Select Nearest Branch</option>
												 <option value="Noida Head Office">Noida Head Office</option>
												 <option value="Delhi">Delhi</option>
												 <option value="Lucknow">Lucknow</option>
												 <option value="Mumbai">Mumbai</option>
												 <option value="Pune">Pune</option>
												<option value="Hyderabad-Kukatpally">Hyderabad Kukatpally</option>
												<option value="Hyderabad-Ameerpet">Hyderabad Ameerpet</option>
												 <option value="Telengana">Chennai</option>
												 <option value="Other">Other</option>
											</select>
										  </div>
										  <div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="pl-0">Message</label>
												<textarea name="message" class="form-control" id="message" placeholder="Your Message" autocomplete="off"></textarea>
											</div>
										  </div>									
										</div>
																		
									<div id="q1-marital-status" class="col-md-6 col-sm-12">
										<label for="q1">What is your marital status?</label>
										<select id="q1" name="q1" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">Annulled Marriage</option>
											<option value="B">Common-Law</option>
											<option value="C">Divorced / Separated</option>
											<option value="D">Legally Separated</option>
											<option value="E">Married</option>
											<option value="F">Never Married / Single</option>
											<option value="G">Widowed</option>
										</select>
										<input type="hidden" id="selectedMaritalStatus" name="selectedMaritalStatus">

									</div>
									<div id="q2i-spouse-cit" class="col-md-6 col-sm-12">
										<label for="q2i">Is your spouse or common-law partner a citizen or permanent resident of Canada?</label>
										<select id="q2i" name="q2i"class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="q2ii-spouse-joining" class="col-md-6 col-sm-12">
										<label for="q2ii">Will your spouse or common-law partner come with you to Canada?</label>
										<select id="q2ii" name="q2ii" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="q3-age" class="form-group">
									<label for="q3">How old are you? </label>
									<p>Choose the best answer:</p>
									<ul>
										<li>
										If you’ve been invited to apply, enter your age on the date you were invited.<br/>
										OR</li>
										<li>If you plan to complete an Express Entry profile, enter your current age.</li>
									</ul>
										<select id="q3" name="q3" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
									</div>
									<div id="q4-education" class="form-group">
										<label for="q4">What is your level of education?</label>
										<p>Enter the highest level of education for which you:</p>
										<ul>
											<li>earned a <strong>Canadian degree, diploma or certificate</strong> or</li>
											<li>had an Educational Credential Assessment (ECA) if you did your study outside Canada. (ECAs must be from an approved agency, in the last five years)</li>
										</ul>
									<p>	Note: a Canadian degree, diploma or certificate must either have been earned at an accredited Canadian university, college, trade or technical school, or other institute in Canada. Distance learning counts for education
									points, but not for bonus points in your profile or application.
									</p>
									<select id="q4" name="q4" class="form-select">
										<option value="badvalue" label="Select...">Select...</option>
									</select>
									</div>
									<div id="q4b-education" class="form-group">
										<label for="q4b">Have you earned a Canadian degree, diploma or certificate?</label>
										<p>Note: to answer yes:</p>
										<ul>
											<li>English or French as a Second Language must not have made up more than half your study</li>
											<li>you must not have studied under an award that required you to return to your home country after graduation to apply your skills and knowledge</li>
											<li>you must have studied at a school within Canada (foreign campuses don’t count)</li>
											<li>you had to be enrolled full time for at least eight months, and have been physically present in Canada for at least eight months</li>
										</ul>
										<select id="q4b" name="q4b" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A" label="No">No</option>
											<option value="B" label="Yes">Yes</option>
										</select>
									</div>
									
									<div id="q4c-education" class="form-group">
										<label for="q4c">Choose the best answer to describe this level of education.</label>
										<select id="q4c" name="q4c" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">Secondary (high school) or less</option>
											<option value="B">One- or two-year diploma or certificate</option>
											<option value="C">Degree, diploma or certificate of three years or longer OR a Master’s, professional or doctoral degree of at least one academic year</option>
										</select>
									</div>
									<div id="q5-ol" class="form-group">
										<p><strong>Official languages: Canada's official languages are English and French.</strong></p>
										<p><strong>You need to submit language test results that are less than two years old for all programs under Express Entry, even if English or French is your first language.</strong></p>
									<div id="q5i-fol" class="form-group">
										<label for="q5i">Are your test results less than two years old?</label>
										<select id="q5i" name="q5i" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="B">No</option>
											<option value="A">Yes</option>
										</select>
									</div>
									<div id="q5i-a-fol" class="form-group">
										<label for="q5i-a">Which language test did you take for your first official language? </label>
										<select id="q5i-a" name="q5i-a" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">CELPIP-G</option>
											<option value="B">IELTS</option>
											<option value="C">TEF Canada</option>
											<option value="D">TCF Canada</option>
										</select>
									</div>
									<div id="q5i-b-fol" class="form-group">
										<p>Enter your test scores:</p>
										<label for="q5i-b-speaking">Speaking:</label>
										<select id="q5i-b-speaking" name="q5i-b-speaking" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5i-b-listening">Listening:</label>
										<select id="q5i-b-listening" name="q5i-b-listening" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5i-b-reading">Reading:</label>
										<select id="q5i-b-reading" name="q5i-b-reading" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5i-b-writing">Writing:</label>
										<select id="q5i-b-writing" name="q5i-b-writing" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
									</div>
									<div id="q5ii-sol" class="form-group">
										<label for="q5ii">Do you have other language results?</label>
										<p>If so, which language test did you take for your second official language?</p>
										<p>Test results must be less than two years old.</p>
										<select id="q5ii" name="q5ii" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
									</div>
									<div id="q5ii-b-sol" class="form-group">
										<p><strong>Enter your test scores for:</strong></p>
										<label for="q5ii-sol-speaking">Speaking:</label>
										<select id="q5ii-sol-speaking" name="q5ii-sol-speaking" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5ii-sol-listening">Listening:</label>
										<select id="q5ii-sol-listening" name="q5ii-sol-listening" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5ii-sol-reading">Reading:</label>
										<select id="q5ii-sol-reading" name="q5ii-sol-reading" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
										<label for="q5ii-sol-writing">Writing:</label>
										<select id="q5ii-sol-writing" name="q5ii-sol-writing" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
										</select>
									</div>
									</div>
									
									
									<div id="q6-work-xp" class="form-group">
										<p><strong>Work Experience</strong></p>
										<div id="q6i-canada">
											<label for="q6i">In the last ten years, how many years of skilled work experience in Canada do you have? </label>
											<p>It must have been paid and full-time (or an equal amount in part-time).</p>
											<p><strong>Note:</strong> In Canada, the National Occupational Classification (NOC) is the official list of all the jobs in the Canadian labour market. It describes each job according to skill type, group and level.</p>
											<p>"Skilled work" in the NOC is:</p>
											<ul>
												<li>managerial jobs (NOC Skill Level 0)</li>
												<li>professional jobs (NOC Skill Type A)</li>
												<li>technical jobs and skilled trades/manual work (NOC Skill Type B)</li>
											</ul>
											<p>
											If you aren’t sure of the NOC level for this job, you can
											<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/eligibility/find-national-occupation-code.html">find your NOC</a>.
											</p>
											<select id="q6i" name="q6i" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
												<option value="A">None or less than a year</option>
												<option value="B">1 year</option>
												<option value="C">2 years</option>
												<option value="D">3 years</option>
												<option value="E">4 years</option>
												<option value="F">5 years or more</option>
											</select>
										</div>
										<div id="q6ii-foreign">
											<label for="q6ii">In the last 10 years, how many total years of foreign skilled work experience do you have? </label>
											<p>It must have been paid, full-time (or an equal amount in part-time), and in only one occupation (NOC skill type 0, A or B).</p>
											<select id="q6ii" name="q6ii" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
												<option value="A">None or less than a year</option>
												<option value="B">1 year</option>
												<option value="C">2 years</option>
												<option value="D">3 years or more</option>
											</select>
										</div>
									</div>
									<div id="q7-certificate" class="form-group">
										<label for="q7">Do you have a certificate of qualification from a Canadian province, territory or federal body?</label>
										<p>
											<strong>Note: </strong>A certificate of qualification lets people work in some skilled trades in Canada. Only the provinces, territories and a federal body can issue these certificates. To get one, a person must have them
											assess their training, trade experience and skills to and then pass a certification exam.
										</p>
										<p>People usually have to go to the province or territory to be assessed. They may also need experience and training from an employer in Canada.</p>
										<p>This isn’t the same as a nomination from a province or territory.</p>
										<select id="q7" name="q7" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="q8-offer" class="form-group">
										<p><strong>Additional Points</strong></p>
										<label for="q8">
										Do you have a valid job offer supported by a Labour Market Impact Assessment (
										<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment/lmia-exempt.html">if needed</a>)?
										</label>
										<p>A valid job offer must be</p>
										<ul>
											<li>full-time</li>
											<li>in a skilled job listed as Skill Type 0, or Skill Level A or B in the 2011 National Occupational Classification</li>
											<li>supported by a Labour Market Impact Assessment (LMIA) or exempt from needing one</li>
											<li>for one year from the time you become a permanent resident</li>
										</ul>
										<p>A job offer isn’t valid if your employer is:</p>
										<ul>
											<li>an embassy, high commission or consulate in Canada or</li>
											<li>on the list of ineligible employers.</li>
										</ul>
										<p>	Whether an offer is valid or not also depends on different factors, depending on your case. See a
										<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/offer-employment.html">full list of criteria for valid job offers</a>.
										</p>
										<select id="q8" name="q8" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="q8-noc" class="form-group">
										<label for="q8a">Which NOC skill type or level is the job offer?</label>
										<p>You can use our online tool to find out if you don’t know.</p>
										<select id="q8a" name="q8a" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">NOC Skill Type 00</option>
											<option value="B">NOC Skill Level A or B or any Type 0 other than 00</option>
											<option value="C">NOC Skill Level C or D</option>
										</select>
									</div>
									<div id="q9-nomination" class="form-group">
										<label for="q9">Do you have a nomination certificate from a province or territory?</label>
										<select id="q9" name="q9" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="q10-sibling" class="form-group">
										<label for="q10i">Do you or your spouse or common law partner (if they will come with you to Canada) have at least one brother or sister living in Canada who is a citizen or permanent resident?</label>
										<p><strong>Note: to answer yes, the brother or sister must be:</strong></p>
										<ul>
											<li>18 years old or older</li>
											<li>related to you or your partner by blood, marriage, common-law partnership or adoption</li>
											<li>have a parent in common with you or your partner</li>
										</ul>
										<p>A brother or sister is related to you by:</p>
										<ul>
											<li>blood (biological)</li>
											<li>adoption</li>
											<li>marriage (step-brother or step-sister)</li>
										</ul>
										<select id="q10i" name="q10i" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">No</option>
											<option value="B">Yes</option>
										</select>
									</div>
									<div id="spouse_questions">
										<div id="q10-s-education" class="form-group">
											<label for="q10">What is the highest level of education for which your spouse or common-law partner's has:</label>
											<ul>
												<li><strong>earned a Canadian degree, diploma or certificate; or</strong></li>
												<li><strong>had an Educational Credential Assessment (ECA)? (ECAs must be from an approved agency, in the last five years)</strong></li>
											</ul>
											<p>To get the correct number of points, make sure you choose the answer that best reflects your case. For example:</p>
											<p>If you have TWO Bachelor’s degrees, or one Bachelor’s AND a two year college diploma, choose – “Two or more certificates, diplomas, or degrees. One must be for a program of three or more years.”</p>
										<select id="q10" name="q10" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">None, or less than secondary (high school)</option>
											<option value="B">Secondary diploma (high school graduation)</option>
											<option value="C">One-year program at a university, college, trade or technical school, or other institute</option>
											<option value="D">Two-year program at a university, college, trade or technical school, or other institute</option>
											<option value="E">Bachelor's degree (three or more year program at a university, college, trade or technical school, or other institute)</option>
											<option value="F">Two or more certificates, diplomas or degrees. One must be for a program of three or more years</option>
											<option value="G">Master's degree, or professional degree needed to practice in a licensed profession</option>
											<option value="H">Doctoral level university degree (PhD)</option>
										</select>
										</div>
									<div id="q11-s-work-xp" class="form-group">
										<label for="q11">In the last ten years, how many years of skilled work experience in Canada does your spouse/common-law partner have? </label>
										<p>It must have been paid, full-time (or an equal amount in part-time), and in one or more NOC 0, A or B jobs.</p>
										<select id="q11" name="q11" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">None or less than a year</option>
											<option value="B">1 year</option>
											<option value="C">2 years</option>
											<option value="D">3 years</option>
											<option value="E">4 years</option>
											<option value="F">5 years or more</option>
										</select>
									</div>
									<div id="q12-s-fol" class="form-group">
										<label for="q12i">Did your spouse or common-law partner take a language test? If so, which one?</label>
										<p>Test results must be less than two years old.</p>
										<select id="q12i" name="q12i" class="form-select">
											<option value="badvalue" label="Select...">Select...</option>
											<option value="A">CELPIP-G</option>
											<option value="B">IELTS</option>
											<option value="C">TEF Canada</option>
											<option value="D">TCF Canada</option>
											<option value="E">not applicable</option>
										</select>
									</div>
									<div id="q12ii-s-fol">
										<p><strong>Enter the test scores for:</strong></p>
										<div class="form-group">
											<label for="q12ii-fol-speaking">Speaking:</label>
											<select id="q12ii-fol-speaking" name="q12ii-fol-speaking" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
											</select>
										</div>
										<div class="form-group">
											<label for="q12ii-fol-listening">Listening:</label>
											<select id="q12ii-fol-listening" name="q12ii-fol-listening" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
											</select>
										</div>
										<div class="form-group">
											<label for="q12ii-fol-reading">Reading:</label>
											<select id="q12ii-fol-reading" name="q12ii-fol-reading" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
											</select>
										</div>
										<div class="form-group">
											<label for="q12ii-fol-writing">Writing:</label>
											<select id="q12ii-fol-writing" name="q12ii-fol-writing" class="form-select">
												<option value="badvalue" label="Select...">Select...</option>
											</select>
										</div>
									</div>
									</div>
									<div class="form-group">
										<input id="LeadSource" name="LeadSource" type="hidden" value="Website CRS Calculator" readonly="" class="form-control">
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<button id="submit" type="submit" class="btn btn-danger btn-adst disabled mt-3 mb-4">Calculate your score</button>
										</div>
									</div>

									<input type="hidden" name="CRSForm">
									</form>
									</div>
									<div id="neg-results"></div>
									<div id="results">
										<div class="alert alert-secondary">
											<h2>Your results</h2>
											<p>All Express Entry candidates get a score out of 1,200, based on the four parts of the Comprehensive Ranking System formula.</p>
											<p>We invite the highest-ranking candidates from the pool to apply as a permanent resident through regular “rounds of invitations.” See what minimum scores have been in the past.</p>
										  <div id="thanksMessage"></div>
										<div id="totalpoints" name="totalpoints"></div>						
										<div id="core_factors"></div>
										<div id="spouse_factors"></div>
										<div id="skill_factors"></div>
										<div id="bonus_factors"></div>
										<div name="totals" id="totals"></div>
										<div id="reg-status" style="color: #ff0000;"></div>
										</div>
									</div>
									<div id="test"></div>
								</div>
							</div>								
                        </div>
						
						
						
						<p style="text-align: justify;" class="mt-3">The fastest way to get the Canada PR visa is by applying via the federal government’s Express entry program It is the most popular immigration pathway that provides an immigration pathway for skilled immigrants to settle permanently in Canada. Canada PR visa is the best way for immigrants who are looking to live in Canada on a permanent basis. Having a Canada PR visa allows the holder to live, work or study in Canada for duration of five years.</p>
					   
				        <div class="blog_vidget">
							<div class="blog_vidget_heading"><h3>What is the Express Entry Program?</h3></div>
				        </div>
				             
                        <p style="text-align: justify;">Canadian government’s Express entry program is a point-based program. It manages the profile of the candidates who have applied under Canada’s three skilled immigration programs – <span style="color: #003366;"><strong><a style="color: #003366;" href="https://www.immigrationxperts.com/canada-immigration/federal-skilled-worker-program/">Federal Skilled Worker Program</a></strong></span> (FSWP), Federal Skilled Trades Program (FSTP) and Canadian Experience Class (CEC). Candidates are required to create an Express profile once they are able to clear the <strong><span style="color: #003366;"><a style="color: #003366;" href="https://www.immigrationxperts.com/canada-immigration/67-canada-immigration-point-system/">67 points eligibility criteria</a></span></strong>.</p>
						<p style="text-align: justify;">After creating an express profile, all the profiles of the candidates are submitted together into an express pool. In an express pool, express profiles are ranked with the help of the Comprehensive Ranking System (CRS) and the profiles of the candidate with highest ranked are issued the Invitation to Apply (ITA) via regularly held express draws. With the help of ITA, candidates are able to apply for Canada PR visa to the Immigration, Refugees &amp; Citizenship Canada (IRCC).<strong> </strong></p>
						<p style="text-align: justify;">CRS uses the points that are awarded to the express profiles based on the credentials that are submitted by the candidates while creating the express profiles. Mainly these points are awarded based on the following factors:</p>
						<blockquote>
							<p id="crs"><strong>What is the Comprehensive Ranking System (CRS)?</strong></p>
							<p style="text-align: justify;">Comprehensive Ranking System (CRS) Calculator is a calculating tool that will help you to check your eligibility for Canada PR through Express Entry Program in 2020. Based on selection factors like age, education, language proficiency etc, you will be able to calculate your CRS score and apply for Canada PR visa.</p>
						</blockquote>
								
								
						<h6><strong>Core factors</strong></h6>
						Core factors total up to 600 CRS points. These points are awarded based on the following factors:
						<ul>
							<li>Skills and experience factors</li>
							<li>Spouse or common-law partner factors like language skills and educational qualifications</li>
							<li>Skill transferability including work experience</li>
						</ul>
						<h6><strong>Additional factors</strong></h6>
						Additional factors also total up to 600 CRS points. These are awarded based on the following factors:
						<ul>
							<li>Canadian degrees, diplomas or certificates</li>
							<li>Valid job offer</li>
							<li>Provincial Nomination</li>
							<li>Siblings living in Canada as a citizen or permanent residents</li>
							<li>Language proficiency in French</li>
						</ul>
						<p style="text-align: justify;">The total sum of Core factors and Additional factors comes to 1200 points. These are maximum points one can score in CRS. To know your CRS score use our express entry crs calculator 2020.</p>	
						
										  
                        <div class="blog_vidget">
					       <div class="blog_vidget_heading"><h3>How to calculate CRS score with Canada CRS Calculator?</h3></div>
				        </div>
						
						<p style="text-align: justify;">With the help of our updated express entry points calculator 2020, you can easily calculate your CRS score. Following is the overview of the point’s breakdown and how they are awarded to the express profiles and calculated by crs calculator 2020.</p>
						   
						<h6>Core/Human Capital Factors</h6>
						<table class="table table-striped" border="1">
							<tbody>
								<tr>
								<td><strong>Factors</strong></td>
								<td><strong>Points – With a spouse or common-law partner</strong></td>
								<td><strong>Points – Without a spouse or common-law partner</strong></td>
								</tr>
								<tr>
								<td>Age</td>
								<td>100</td>
								<td>110</td>
								</tr>
								<tr>
								<td>Level of Education</td>
								<td>140</td>
								<td>150</td>
								</tr>
								<tr>
								<td>Official Language proficiency</td>
								<td>150</td>
								<td>160</td>
								</tr>
								<tr>
								<td>Canadian Work Experience</td>
								<td>70</td>
								<td>80</td>
								</tr>
							</tbody>
						</table>
						<h4>Spouse or Common-law partner factors</h4>
						<table class="table table-striped" border="1">
						  <tbody>
								<tr>
								<td><strong>Factors</strong></td>
								<td><strong>Points</strong></td>
								</tr>
								<tr>
								<td>Level of education</td>
								<td>10</td>
								</tr>
								<tr>
								<td>Official language proficiency</td>
								<td>20</td>
								</tr>
								<tr>
								<td>Canadian Work Experience</td>
								<td>10</td>
								</tr>
						  </tbody>
						</table>
							
						
				    
					<h4>Skill Transferability factors</h4>
					<table class="table table-striped" border="1">
					<tbody>
					<tr>
					<td><strong>Education</strong></td>
					<td><strong>Points</strong></td>
					</tr>
					<tr>
					<td>With good/strong official language proficiency <strong>and</strong> a post-secondary degree</td>
					<td>50</td>
					</tr>
					<tr>
					<td>With Canadian work experience <strong>and</strong> a post-secondary degree</td>
					<td>50</td>
					</tr>
					</tbody>
					</table>
					<table class="table table-striped" border="1">
					<tbody>
					<tr>
					<td><strong>Foreign Work Experience</strong></td>
					<td><strong>Points</strong></td>
					</tr>
					<tr>
					<td>With good/strong official languages proficiency (CLB level 7 or higher) <strong>and</strong> foreign work experience</td>
					<td>50</td>
					</tr>
					<tr>
					<td>With Canadian work experience <strong>and</strong> foreign work experience</td>
					<td>50</td>
					</tr>
					</tbody>
					</table>
					<table class="table table-striped" border="1">
					<tbody>
					<tr>
					<td><strong>Certificate of qualification (for people in trade occupations)</strong></td>
					<td><strong>Points</strong></td>
					</tr>
					<tr>
					<td>With good/strong official language proficiency and a certificate of qualification</td>
					<td>50</td>
					</tr>
					</tbody>
					</table>
					<h6>Additional Points</h6>
					<table>
					<tbody>
					<tr>
					<td><strong>Factor</strong></td>
					<td><strong>Points</strong></td>
					</tr>
					<tr>
					<td>Siblings living in Canada (citizen or permanent resident)</td>
					<td>15</td>
					</tr>
					<tr>
					<td>French Language Skills</td>
					<td>30</td>
					</tr>
					<tr>
					<td>Post-secondary education in Canada</td>
					<td>30</td>
					</tr>
					<tr>
					<td>Arranged employment</td>
					<td>200</td>
					</tr>
					<tr>
					<td>Provincial Nomination</td>
					<td>600</td>
					</tr>
					</tbody>
					</table>
				 
				 
				 
				 
						  
				         <div class="blog_vidget">
        					<div class="blog_vidget_heading"><h3>Express Entry CRS Calculator 2020</h3></div>
        				</div>
        				      <p>Now, we will breakdown points section by section, how the Canada immigration points calculator 2020 awards point for the candidate’s credentials.</p>
     				       
						         <h4>Age</h4>
									<table class="table table-striped" border="1">
									<tbody>
									<tr>
									<td><strong>Age (In years)</strong></td>
									<td><strong>With a spouse or common-law partner</strong></td>
									<td><strong>Without a spouse or common-law partner</strong></td>
									</tr>
									<tr>
									<td>17 years of age or less</td>
									<td>0</td>
									<td>0</td>
									</tr>
									<tr>
									<td>18</td>
									<td>90</td>
									<td>99</td>
									</tr>
									<tr>
									<td>19</td>
									<td>95</td>
									<td>105</td>
									</tr>
									<tr>
									<td>20 to 29</td>
									<td>100</td>
									<td>110</td>
									</tr>
									<tr>
									<td>30</td>
									<td>95</td>
									<td>105</td>
									</tr>
									<tr>
									<td>31</td>
									<td>90</td>
									<td>99</td>
									</tr>
									<tr>
									<td>32</td>
									<td>85</td>
									<td>94</td>
									</tr>
									<tr>
									<td>33</td>
									<td>80</td>
									<td>88</td>
									</tr>
									<tr>
									<td>34</td>
									<td>75</td>
									<td>83</td>
									</tr>
									<tr>
									<td>35</td>
									<td>70</td>
									<td>77</td>
									</tr>
									<tr>
									<td>36</td>
									<td>65</td>
									<td>72</td>
									</tr>
									<tr>
									<td>37</td>
									<td>60</td>
									<td>66</td>
									</tr>
									<tr>
									<td>38</td>
									<td>55</td>
									<td>61</td>
									</tr>
									<tr>
									<td>39</td>
									<td>50</td>
									<td>55</td>
									</tr>
									<tr>
									<td>40</td>
									<td>45</td>
									<td>50</td>
									</tr>
									<tr>
									<td>41</td>
									<td>35</td>
									<td>39</td>
									</tr>
									<tr>
									<td>42</td>
									<td>25</td>
									<td>28</td>
									</tr>
									<tr>
									<td>43</td>
									<td>15</td>
									<td>17</td>
									</tr>
									<tr>
									<td>44</td>
									<td>5</td>
									<td>6</td>
									</tr>
									<tr>
									<td>45</td>
									<td>0</td>
									<td>0</td>
									</tr>
									</tbody>
									</table>
									<h6>Educational Qualifications</h6>
									<table class="table table-striped" border="1">
									<tbody>
									<tr>
									<td><strong>Level of Education</strong></td>
									<td><strong>With a spouse or common-law partner</strong></td>
									<td><strong>Without a spouse or common-law partner</strong></td>
									</tr>
									<tr>
									<td>Less than secondary school (high school)</td>
									<td>0</td>
									<td>0</td>
									</tr>
									<tr>
									<td>Secondary diploma (high school graduation)</td>
									<td>28</td>
									<td>30</td>
									</tr>
									<tr>
									<td>One-year degree, diploma or certificate from  a university, college, trade or technical school, or another institute</td>
									<td>84</td>
									<td>90</td>
									</tr>
									<tr>
									<td>The two-year program at a university, college, trade or technical school, or another institute</td>
									<td>91</td>
									<td>98</td>
									</tr>
									<tr>
									<td>Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or another institute</td>
									<td>112</td>
									<td>120</td>
									</tr>
									<tr>
									<td>Two or more certificates, diplomas, or degrees. One must be for a program of three or more years</td>
									<td>119</td>
									<td>128</td>
									</tr>
									<tr>
									<td>Master’s degree, OR professional degree needed to practice in a licensed profession</td>
									<td>126</td>
									<td>135</td>
									</tr>
									<tr>
									<td>Doctoral level university degree (Ph.D.)</td>
									<td>140</td>
									<td>150</td>
									</tr>
									</tbody>
									</table>
							   
						   
						   
						<div class="blog_vidget">
							<div class="blog_vidget_heading"><h3>Language proficiency</h3></div>
						</div>
						
						
						
						    <strong>First official language</strong>

							Maximum points for each ability (reading, writing, speaking, and listening):
							<ul>
								<li>32 with a spouse or common-law partner</li>
								<li>34 without a spouse or common-law partner</li>
							</ul>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Canadian Language Benchmark (CLB) level per ability</strong></td>
							<td><strong>With a spouse or common-law partner</strong></td>
							<td><strong>Without a spouse or common-law partner</strong></td>
							</tr>
							<tr>
							<td>Less than CLB 4</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>CLB 4 or 5</td>
							<td>6</td>
							<td>6</td>
							</tr>
							<tr>
							<td>CLB 6</td>
							<td>8</td>
							<td>9</td>
							</tr>
							<tr>
							<td>CLB 7</td>
							<td>16</td>
							<td>17</td>
							</tr>
							<tr>
							<td>CLB 8</td>
							<td>22</td>
							<td>23</td>
							</tr>
							<tr>
							<td>CLB 9</td>
							<td>29</td>
							<td>31</td>
							</tr>
							<tr>
							<td>CLB 10 or more</td>
							<td>32</td>
							<td>34</td>
							</tr>
							</tbody>
							</table>
							<strong>Second official language</strong>

							Maximum points for each ability (reading, writing, speaking, and listening):
							<ul>
								<li>6 with a spouse or common-law partner</li>
								<li>6 without a spouse or common-law partner</li>
							</ul>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Canadian Language Benchmark (CLB) level per ability</strong></td>
							<td><strong>With a spouse or common-law partner</strong></td>
							<td><strong>Without a spouse or common-law partner</strong></td>
							</tr>
							<tr>
							<td>CLB 4 or less</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>CLB 5 or 6</td>
							<td>1</td>
							<td>1</td>
							</tr>
							<tr>
							<td>CLB 7 or 8</td>
							<td>3</td>
							<td>3</td>
							</tr>
							<tr>
							<td>CLB 9 or more</td>
							<td>6</td>
							<td>6</td>
							</tr>
							</tbody>
							</table>
							<h6>Work Experience</h6>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Canadian work experience</strong></td>
							<td><strong>With a spouse or common-law partner </strong></td>
							<td><strong>Without a spouse or common-law partner </strong></td>
							</tr>
							<tr>
							<td>None or less than a year</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>1 year</td>
							<td>35</td>
							<td>40</td>
							</tr>
							<tr>
							<td>2 years</td>
							<td>46</td>
							<td>53</td>
							</tr>
							<tr>
							<td>3 years</td>
							<td>56</td>
							<td>64</td>
							</tr>
							<tr>
							<td>4 years</td>
							<td>63</td>
							<td>72</td>
							</tr>
							<tr>
							<td>5 years or more</td>
							<td>70</td>
							<td>80</td>
							</tr>
							</tbody>
							</table>
							
							<h4>Spouse or common-law partner factors</h4>
							
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Spouse’s or common-law partner’s level of education</strong></td>
							<td><strong>Points</strong></td>
							</tr>
							<tr>
							<td>Less than secondary school (high school)</td>
							<td>0</td>
							</tr>
							<tr>
							<td>Secondary school (high school graduation)</td>
							<td>2</td>
							</tr>
							<tr>
							<td>One-year program at a university, college, trade or technical school, or another institute</td>
							<td>6</td>
							</tr>
							<tr>
							<td>The two-year program at a university, college, trade or technical in school, or another institute</td>
							<td>7</td>
							</tr>
							<tr>
							<td>Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or another institute</td>
							<td>8</td>
							</tr>
							<tr>
							<td>Two or more certificates, diplomas, or degrees. One must be for a program of three or more years</td>
							<td>9</td>
							</tr>
							<tr>
							<td>Master’s degree, or professional degree needed to practice in a licensed profession (For “professional degree”, the degree program must have been in medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.)</td>
							<td>10</td>
							</tr>
							<tr>
							<td>Doctoral level university degree (Ph.D.)</td>
							<td>10</td>
							</tr>
							</tbody>
							</table>
							&nbsp;
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Canadian Language Benchmark (CLB) level per ability (reading, writing, speaking and listening )</strong></td>
							<td><strong>Points</strong></td>
							</tr>
							<tr>
							<td>CLB 4 or less</td>
							<td>0</td>
							</tr>
							<tr>
							<td>CLB 5 or 6</td>
							<td>1</td>
							</tr>
							<tr>
							<td>CLB 7 or 8</td>
							<td>3</td>
							</tr>
							<tr>
							<td>CLB 9 or more</td>
							<td>5</td>
							</tr>
							</tbody>
							</table>
							&nbsp;
							<table width="100%">
							<tbody>
							<tr>
							<td><strong>Spouse’s Canadian work experience</strong></td>
							<td><strong>Maximum 10 points</strong></td>
							</tr>
							<tr>
							<td>None or less than a year</td>
							<td>0</td>
							</tr>
							<tr>
							<td>1 year</td>
							<td>5</td>
							</tr>
							<tr>
							<td>2 years</td>
							<td>7</td>
							</tr>
							<tr>
							<td>3 years</td>
							<td>8</td>
							</tr>
							<tr>
							<td>4 years</td>
							<td>9</td>
							</tr>
							<tr>
							<td>5 years or more</td>
							<td>10</td>
							</tr>
							</tbody>
							</table>
							<strong> </strong><strong> </strong>
							<h6>Skill transferability factors</h6>
							<strong>Educational Qualification</strong>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>With good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher) and a post-secondary degree</strong></td>
							<td><strong>Points for CLB 7 or more on all first official language abilities, with one or more under CLB 9</strong></td>
							<td><strong>Points for CLB 9 or more on all four first official language abilities</strong></td>
							</tr>
							<tr>
							<td>Secondary school (high school) credential or less</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>Post-secondary program credential of one year or longer</td>
							<td>13</td>
							<td>25</td>
							</tr>
							<tr>
							<td>Two or more post-secondary program credentials AND at least one of these credentials were issued on completion of a post-secondary program of three years or longer</td>
							<td>25</td>
							<td>50</td>
							</tr>
							</tbody>
							</table>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>With Canadian work experience and a post-secondary degree</strong></td>
							<td><strong>Points for education + 1 year of Canadian work experience</strong></td>
							<td><strong>Points for education + 2 years or more of Canadian work experience</strong></td>
							</tr>
							<tr>
							<td>Secondary school (high school) credential or less</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>Post-secondary program credential of one year or longer</td>
							<td>13</td>
							<td>25</td>
							</tr>
							<tr>
							<td>Two or more post-secondary program credentials AND at least one of these credentials were issued on completion of a post-secondary program of three years or longer</td>
							<td>25</td>
							<td>50</td>
							</tr>
							</tbody>
							</table>
							<strong> </strong><strong> </strong>

							<strong>Foreign work experience – With good official language proficiency (Canadian Language Benchmark Level [CLB] 7 or higher)</strong>
							<table width="100%">
							<tbody>
							<tr>
							<td><strong>Years of experience</strong></td>
							<td><strong>Points for foreign work experience + CLB 7 or more on all first official language abilities, one or more under 9</strong></td>
							<td><strong>Points for foreign work experience + CLB 9 or more on all four first official language abilities</strong></td>
							</tr>
							<tr>
							<td>No foreign work experience</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>1 or 2 years of foreign work experience</td>
							<td>13</td>
							<td>25</td>
							</tr>
							<tr>
							<td>3 years or more of foreign work experience</td>
							<td>25</td>
							<td>50</td>
							</tr>
							</tbody>
							</table>
							<strong>Foreign work experience – With Canadian work experience</strong>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Years of experience</strong></td>
							<td><strong>Points for foreign work experience + 1 year of Canadian work experience</strong></td>
							<td><strong>Points for foreign work experience + 2 years or more of Canadian work experience</strong></td>
							</tr>
							<tr>
							<td>No foreign work experience</td>
							<td>0</td>
							<td>0</td>
							</tr>
							<tr>
							<td>1 or 2 years of foreign work experience</td>
							<td>13</td>
							<td>25</td>
							</tr>
							<tr>
							<td>3 years or more of foreign work experience</td>
							<td>25</td>
							<td>50</td>
							</tr>
							<tr>
							<td><strong>Certificate of qualification (trade occupations) – With good official language proficiency (Canadian Language Benchmark Level [CLB] 5 or higher)</strong></td>
							<td><strong>Points for a certificate of qualification + CLB 5 or more on all first official language abilities, one or more under 7</strong></td>
							<td><strong>Points for a certificate of qualification + CLB 7 or more on all four first official language abilities</strong></td>
							</tr>
							<tr>
							<td>With a certificate of qualification</td>
							<td>25</td>
							<td>50</td>
							</tr>
							</tbody>
							</table>
							<strong> </strong><strong> </strong>
							<h6>Additional points</h6>
							<table class="table table-striped" border="1">
							<tbody>
							<tr>
							<td><strong>Factors</strong></td>
							<td><strong>Points</strong></td>
							</tr>
							<tr>
							<td>Siblings living in Canada who is a citizen or permanent resident of Canada</td>
							<td>15</td>
							</tr>
							<tr>
							<td>Scored NCLC 7 or higher on all four French language skills and scored CLB 4 or lower in English (or didn’t take an English test)</td>
							<td>15</td>
							</tr>
							<tr>
							<td>Scored NCLC 7 or higher on all four French language skills and scored CLB 5 or higher on all four English skills</td>
							<td>30</td>
							</tr>
							<tr>
							<td>Post-secondary education in  Canada – credential of one or two years</td>
							<td>15</td>
							</tr>
							<tr>
							<td>Post-secondary education in  Canada – credential three years or longer</td>
							<td>30</td>
							</tr>
							<tr>
							<td>Arranged employment – under occupation classified as NOC 00</td>
							<td>200</td>
							</tr>
							<tr>
							<td>Arranged employment – under occupation classified as any other NOC 0, A or B</td>
							<td>50</td>
							</tr>
							<tr>
							<td>Provincial or territorial nomination</td>
							<td>600</td>
							</tr>
							</tbody>
							</table>
						
						   
						
						<div class="blog_vidget">
							<div class="blog_vidget_heading"><h3>What are the minimum CRS requirements for Canada PR?</h3></div>										
						</div>
								 
									 
								<p style="text-align: justify;">After calculating your CRS points with our <strong>CRS points calculator 2020</strong>, you will needing to know the minimum CRS score requirement for express entry program. IRCC issues ITA via regularly held express draws to the candidates who are able to clear the CRS score cut-off. The <span style="color: #003366;"><strong><a style="color: #003366;" href="https://www.immigrationxperts.com/ canada-immigration/all-express-entry-draws/">latest express draw</a></strong></span> held on Jan 08 set the <strong>minimum CRS point requirement at 473 points</strong>. This means the candidates who are able to score 473 or more were issued the ITA to apply for Canada PR visa to IRCC.</p>	
									
							
							<div class="blog_vidget">
					<div class="blog_vidget_heading"><h3>How to increase your chances to apply for Canada PR visa from India 2020?</h3></div>
				</div>
								<p style="text-align: justify;">It is established in order to apply for Canada PR visa via express entry program, Candidate have to clear the minimum required CRS score. In case you are not able to clear the CRS cut-off, there are ways one can increase their CRS score. Some of them are as follows:</p>

									<ul>
										<li style="text-align: justify;">Improve your score in language proficiency factor. For this candidate who has taken the <span style="color: #003366;"><strong><a style="color: #003366;" href="https://www.immigrationxperts.com/ ielts-international-english-language-testing-system/">IELTS examination</a></strong></span> can increase their exam score to get more CRS points.</li>
										<li>Pursue higher level of education to get maximum points for educational qualification.</li>
										<li>Get a job offer from an eligible employer of Canada to get 200 extra CRS score. Earlier it was used to 600 points awarded.</li>
										<li style="text-align: justify;">Provincial nomination is the <span style="color: #003366;"><strong><a style="color: #003366;" href="https://www.immigrationxperts.com/ canada-immigration/how-to-increase-chances-to-get-canadian-pr/">best way to increase the CRS score</a></strong></span>. On landing the <span style="color: #003366;"><strong><a style="color: #003366;" href="https://www.immigrationxperts.com/ canada-immigration/provincial-nomination-program-canada/">provincial nomination</a></strong></span>, express entry candidates are given 600 CRS points.</li>
									</ul>
						
						
						
						
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <?php include 'canada-sidebar.php';?>
                    </div>
                </div>

            </div>

        </section>
        <!--News Details End-->

        <?php include 'partner.php';?>
        <?php include 'footer.php';?>

    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-plane"></i></a>

    <script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/odometer/odometer.min.js"></script>
    <script src="/assets/vendors/swiper/swiper.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/vegas/vegas.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/timepicker/timePicker.js"></script>
    <script src="/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="/assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

    <!-- crs points calculator -->
    <script>
	//window.onload = function() {
	var ph_q1=document.getElementById("q1-marital-status").innerHTML;
	var ph_q2i=document.getElementById("q2i-spouse-cit").innerHTML;
	var ph_q2ii=document.getElementById("q2ii-spouse-joining").innerHTML;
	var ph_q3=document.getElementById("q3-age").innerHTML;
	var ph_q4=document.getElementById("q4-education").innerHTML;
	var ph_q4=document.getElementById("q4b-education").innerHTML;
	var ph_q4=document.getElementById("q4c-education").innerHTML;
	var ph_q5=document.getElementById("q5-ol").innerHTML;
	var ph_q5ia=document.getElementById("q5i-a-fol").innerHTML;
	var ph_q5ib=document.getElementById("q5i-b-fol").innerHTML;
	var ph_q5iia=document.getElementById("q5ii-sol").innerHTML;
	var ph_q5iib=document.getElementById("q5ii-b-sol").innerHTML;
	var ph_q6i=document.getElementById("q6-work-xp").innerHTML;
	var ph_q6ii=document.getElementById("q6ii-foreign").innerHTML;
	var ph_q7=document.getElementById("q7-certificate").innerHTML;
	var ph_q8=document.getElementById("q8-offer").innerHTML;
	var ph_q9=document.getElementById("q9-nomination").innerHTML;
	var ph_q10i=document.getElementById("q10-sibling").innerHTML;
	var ph_q10=document.getElementById("q10-s-education").innerHTML;
	var ph_q11=document.getElementById("q11-s-work-xp").innerHTML;
	var ph_q12i=document.getElementById("q12-s-fol").innerHTML;
	var ph_q12ii=document.getElementById("q12ii-s-fol").innerHTML;
	var ph_spouse=document.getElementById("spouse_questions").innerHTML;
	
	// Capture selected marital status text
	var selectedMaritalStatusText = $("#q1 option:selected").text();

	// Set the value of the hidden input field
	$("#selectedMaritalStatus").val(selectedMaritalStatusText);


	window.onload=function(){	
		$(".wb-frmvld").trigger("wb-init.wb-frmvld");
		$("#crs-form").trigger("reset");
		document.getElementById("q2i-spouse-cit").style.display="none";
		document.getElementById("q2ii-spouse-joining").style.display="none";
		document.getElementById("q3-age").style.display="none";
		document.getElementById("q4-education").style.display="none";
		document.getElementById("q4b-education").style.display="none";
		document.getElementById("q4c-education").style.display="none";
		document.getElementById("q5-ol").style.display="none";
		document.getElementById("q5i-a-fol").style.display="none";
		document.getElementById("q5i-b-fol").style.display="none";
		document.getElementById("q5ii-sol").style.display="none";
		document.getElementById("q5ii-b-sol").style.display="none";
		document.getElementById("q6-work-xp").style.display="none";
		document.getElementById("q6ii-foreign").style.display="none";
		document.getElementById("q7-certificate").style.display="none";
		document.getElementById("q8-offer").style.display="none";
		document.getElementById("q8-noc").style.display="none";
		document.getElementById("q9-nomination").style.display="none";
		document.getElementById("q10-sibling").style.display="none";
		document.getElementById("q10-s-education").style.display="none";
		document.getElementById("q11-s-work-xp").style.display="none";
		document.getElementById("q12-s-fol").style.display="none";
		document.getElementById("q12ii-s-fol").style.display="none";
		document.getElementById("results").style.display="none";
		document.getElementById("showbtn").style.display="none";
	}
	var with_spouse=false;
	var show_spouse=false;
	var q3_age=[["A","17 years of age or less","0","0"],["B","18 years of age","90","99"],["C","19 years of age","95","105"],["D","20 years of age","100","110"],["E","21 years of age","100","110"],["F","22 years of age","100","110"],["G","23 years of age","100","110"],["H","24 years of age","100","110"],["I","25 years of age","100","110"],["J","26 years of age","100","110"],["K","27 years of age","100","110"],["L","28 years of age","100","110"],["M","29 years of age","100","110"],["N","30 years of age","95","105"],["O","31 years of age","90","99"],["P","32 years of age","85","94"],["Q","33 years of age","80","88"],["R","34 years of age","75","83"],["S","35 years of age","70","77"],["T","36 years of age","65","72"],["U","37 years of age","60","66"],["V","38 years of age","55","61"],["W","39 years of age","50","55"],["X","40 years of age","45","50"],["Y","41 years of age","35","39"],["Z","42 years of age","25","28"],["AA","43 years of age","15","17"],["AB","44 years of age","5","6"],["AC","45 years of age or more","0","0"]];
	var q3_options;for(i=0;i<q3_age.length;i++){q3_options+='<option value="'+q3_age[i][1]+'"">'+q3_age[i][1]+'</option>';}$("#q3").append(q3_options);
	
	var q4_education=[["A","None, or less than secondary (high school)","0","0"],["B","Secondary diploma (high school graduation)","28","30"],["C","One-year program at a university, college, trade or technical school, or other institute","84","90"],["D","Two-year program at a university, college, trade or technical school, or other institute","91","98"],["E","Bachelor's degree (three or more year program at a university, college, trade or technical school, or other institute)","112","120"],["F","Two or more certificates, diplomas or degrees. One must be for a program of three or more years","119","128"],["G","Master's degree, or professional degree needed to practice in a licensed profession (see Help)","126","135"],["H","Doctoral level university degree (PhD)","140","150"]];
	var q4_options;for(i=0;i<q4_education.length;i++){q4_options+='<option value="'+q4_education[i][1]+'"">'+q4_education[i][1]+'</option>';}$("#q4").append(q4_options);
	var celpip=[["H","10 - 12","10 - 12","10 - 12","10 - 12","10","32","34","6","6","5"],["G","9","9","9","9","9","29","31","6","6","5"],["F","8","8","8","8","8","22","23","3","3","3"],["E","7","7","7","7","7","16","17","3","3","3"],["D","6","6","6","6","6","8","9","1","1","1"],["C","5","5","5","5","5","6","6","1","1","1"],["B","4","4","4","4","4","6","6","0","0","0"],["A","M, 0 - 3","M, 0 - 3","M, 0 - 3","M, 0 - 3","0","0","0","0","0","0"]];
	var ielts=[["H","7.5 - 9.0","8.5 - 9.0","8.0 - 9.0","7.5 - 9.0","10","32","34","6","6","5"],["G","7.0","8.0","7.0 - 7.5","7.0","9","29","31","6","6","5"],["F","6.5","7.5","6.5","6.5","8","22","23","3","3","3"],["E","6.0","6 .0- 7.0","6.0","6.0","7","16","17","3","3","3"],["D","5.5","5.5","5.0 - 5.5","5.5","6","8","9","1","1","1"],["C","5.0","5.0","4.0 - 4.5","5.0","5","6","6","1","1","1"],["B","4.0 - 4.5","4.5","3.5","4.0 - 4.5","4","6","6","0","0","0"],["A","0 - 3.5","0- 4.0","0 - 3.0","0 - 3.5","0","0","0","0","0","0"]];
	var tef=[["H","393-450","316-360","263-300","393-450","10","32","34","6","6","5"],["G","371-392","298-315","248-262","371-392","9","29","31","6","6","5"],["F","349-370","280-297","233-247","349-370","8","22","23","3","3","3"],["E","310-348","249-279","207-232","310-348","7","16","17","3","3","3"],["D","271-309","217-248","181-206","271-309","6","8","9","1","1","1"],["C","226-270","181-216","151-180","226-270","5","6","6","1","1","1"],["B","181-225","145-180","121-150","181-225","4","6","6","0","0","0"],["A","0 - 180","0 - 144","0 - 120","0 - 180","0","0","0","0","0","0"]];
	var tcf=[["H","16-20","549-699","549-699","16-20","10","32","34","6","6","5"],["G","14-15","523-548","524-548","14-15","9","29","31","6","6","5"],["F","12-13","503-522","499-523","12-13","8","22","23","3","3","3"],["E","10-11","458-502","453-498","10-11","7","16","17","3","3","3"],["D","7-9","398-457","406-452","7-9","6","8","9","1","1","1"],["C","6","369-397","375-405","6","5","6","6","1","1","1"],["B","4-5","331-368","342-374","4-5","4","0","0","0","0","0"],["A","0-3","0-330","0-341","0-3","0","0","0","0","0","0"]];
	$("#q1").change(function(){ 
		var marital_status=$("#q1 option:selected").val();with_spouse=false;if(marital_status!="badvalue"){if(marital_status=="B"||marital_status=="E"){document.getElementById("q2i-spouse-cit").style.display="block";var q3_activated=$("#q3 option:selected").val();if(q3_activated!="badvalue"){document.getElementById("q3-age").style.display="block";}else{document.getElementById("q3-age").style.display="none";}}else{document.getElementById("q3-age").style.display="block";$('#q2i').prop('selectedIndex',0);$('#q2ii').prop('selectedIndex',0);document.getElementById("q2i-spouse-cit").style.display="none";document.getElementById("q2ii-spouse-joining").style.display="none";}}else{document.getElementById("q2i-spouse-cit").style.display="none";document.getElementById("q3-age").style.display="none";}}
	);
	$("#q2i").change(function(){var spouse_cit=$("#q2i option:selected").val();with_spouse=false;if(spouse_cit!="badvalue"){if(spouse_cit=="A"){document.getElementById("q2ii-spouse-joining").style.display="block";var q3_activated=$("#q3 option:selected").val();if(q3_activated!="badvalue"){document.getElementById("q3-age").style.display="block";}else{document.getElementById("q3-age").style.display="none";}}else{document.getElementById("q3-age").style.display="block";document.getElementById("q2ii-spouse-joining").style.display="none";}}else{document.getElementById("q2ii-spouse-joining").style.display="none";document.getElementById("q3-age").style.display="none";}});
	$("#q2ii").change(function(){var spouse_joining=$("#q2ii option:selected").val();if(spouse_joining!="badvalue"){if(spouse_joining=="B"){with_spouse=true;if(show_spouse==true){document.getElementById("spouse_questions").style.display="block";document.getElementById("q10-s-education").style.display="block";}}else{with_spouse=false;if(show_spouse==true){document.getElementById("spouse_questions").style.display="none";document.getElementById("q10-s-education").style.display="none";$('#q10').prop('selectedIndex',0);$('#q11').prop('selectedIndex',0);$('#q12i').prop('selectedIndex',0);$('#q12ii-fol-speaking').prop('selectedIndex',0);$('#q12ii-fol-listening').prop('selectedIndex',0);$('#q12ii-fol-reading').prop('selectedIndex',0);$('#q12ii-fol-writing').prop('selectedIndex',0);}}document.getElementById("q3-age").style.display="block";}else{document.getElementById("q3-age").style.display="none";}});$("#q3").change(function(){var app_age=$("#q3 option:selected").val();if(app_age!="badvalue"){document.getElementById("q4-education").style.display="block";}else{document.getElementById("q4-education").style.display="none";}});$("#q4").change(function(){document.getElementById("q4b-education").style.display="block";});
	$("#q4b").change(function(){var q4b_an=$("#q4b option:selected").val();if(q4b_an!="badvalue"){if(q4b_an=="B"){document.getElementById("q4c-education").style.display="block";document.getElementById("q5-ol").style.display="none";document.getElementById("q5i-fol").style.display="none";}else{document.getElementById("q5-ol").style.display="block";document.getElementById("q5i-fol").style.display="block";document.getElementById("q4c-education").style.display="none";$('#q4c').prop('selectedIndex',0);}}else{document.getElementById("q4c-education").style.display="none";document.getElementById("q5-ol").style.display="none";document.getElementById("q5i-fol").style.display="none";}});$("#q4c").change(function(){document.getElementById("q5-ol").style.display="block";document.getElementById("q5i-fol").style.display="block";});$("#q5i").change(function(){var q5i_an=$("#q5i option:selected").val();if(q5i_an!="badvalue"){if(q5i_an=="A"){document.getElementById("q5i-a-fol").style.display="block";document.getElementById("neg-results").innerHTML="";document.getElementById("neg-results").style.display="none";}else{document.getElementById("q5i-a-fol").style.display="none";document.getElementById("q5i-b-fol").style.display="none";$('#q5i-a').prop('selectedIndex',0);document.getElementById("neg-results").style.display="block";document.getElementById("neg-results").innerHTML="<div class='alert alert-danger'><p class='mrgn-lft-lg'>Based on your answers, you <strong>do not</strong> appear to be eligible for Express Entry at this time.</p><p class='mrgn-lft-lg'>To submit an Express Entry profile, you must prove your language skills by taking an approved language test. <a href='/english/immigrate/skilled/language-testing.asp'>Find out more about language testing</a> for Express Entry.</p></div>";}}else{document.getElementById("q5i-a-fol").style.display="none";document.getElementById("q5i-b-fol").style.display="none";document.getElementById("neg-results").innerHTML="";document.getElementById("neg-results").style.display="none";}});$("#q5i-a").change(function(){var fol_test=$("#q5i-a option:selected").val();$("#q5i-b-speaking").empty();$("#q5i-b-listening").empty();$("#q5i-b-reading").empty();$("#q5i-b-writing").empty();var q5i_b_speaking='<option value="badvalue" label="Select...">Select...</option>';var q5i_b_listening='<option value="badvalue" label="Select...">Select...</option>';var q5i_b_reading='<option value="badvalue" label="Select...">Select...</option>';var q5i_b_writing='<option value="badvalue" label="Select...">Select...</option>';if(fol_test!="badvalue"){if(fol_test=="A"){for(i=0;i<celpip.length;i++){q5i_b_speaking+='<option value="'+celpip[i][0]+'"">'+celpip[i][1]+'</option>';q5i_b_listening+='<option value="'+celpip[i][0]+'"">'+celpip[i][2]+'</option>';q5i_b_reading+='<option value="'+celpip[i][0]+'"">'+celpip[i][3]+'</option>';q5i_b_writing+='<option value="'+celpip[i][0]+'"">'+celpip[i][4]+'</option>';}}else if(fol_test=="B"){for(i=0;i<ielts.length;i++){q5i_b_speaking+='<option value="'+ielts[i][0]+'"">'+ielts[i][1]+'</option>';q5i_b_listening+='<option value="'+ielts[i][0]+'"">'+ielts[i][2]+'</option>';q5i_b_reading+='<option value="'+ielts[i][0]+'"">'+ielts[i][3]+'</option>';q5i_b_writing+='<option value="'+ielts[i][0]+'"">'+ielts[i][4]+'</option>';}}else if(fol_test=="C"){for(i=0;i<tef.length;i++){q5i_b_speaking+='<option value="'+tef[i][0]+'"">'+tef[i][1]+'</option>';q5i_b_listening+='<option value="'+tef[i][0]+'"">'+tef[i][2]+'</option>';q5i_b_reading+='<option value="'+tef[i][0]+'"">'+tef[i][3]+'</option>';q5i_b_writing+='<option value="'+tef[i][0]+'"">'+tef[i][4]+'</option>';}}else if(fol_test=="D"){for(i=0;i<tcf.length;i++){q5i_b_speaking+='<option value="'+tcf[i][0]+'"">'+tcf[i][1]+'</option>';q5i_b_listening+='<option value="'+tcf[i][0]+'"">'+tcf[i][2]+'</option>';q5i_b_reading+='<option value="'+tcf[i][0]+'"">'+tcf[i][3]+'</option>';q5i_b_writing+='<option value="'+tcf[i][0]+'"">'+tcf[i][4]+'</option>';}}$("#q5i-b-speaking").append(q5i_b_speaking);$("#q5i-b-listening").append(q5i_b_listening);$("#q5i-b-reading").append(q5i_b_reading);$("#q5i-b-writing").append(q5i_b_writing);document.getElementById("q5i-b-fol").style.display="block";populate_q5ii(fol_test);}else{document.getElementById("q5i-b-fol").style.display="none";}});var display_q5ii_s=false;var display_q5ii_l=false;var display_q5ii_r=false;var display_q5ii_w=false;$("#q5i-b-speaking").change(function(){var speaking_option=$("#q5i-b-speaking option:selected").val();if(speaking_option!="badvalue"){display_q5ii_s=true;}else{display_q5ii_s=false;}display_q5ii();});$("#q5i-b-listening").change(function(){var listening_option=$("#q5i-b-listening option:selected").val();if(listening_option!="badvalue"){display_q5ii_l=true;}else{display_q5ii_l=false;}display_q5ii();});$("#q5i-b-reading").change(function(){var reading_option=$("#q5i-b-reading option:selected").val();if(reading_option!="badvalue"){display_q5ii_r=true;}else{display_q5ii_r=false;}display_q5ii();});$("#q5i-b-writing").change(function(){var writing_option=$("#q5i-b-writing option:selected").val();if(writing_option!="badvalue"){display_q5ii_w=true;}else{display_q5ii_w=false;}display_q5ii();});var fol_lang;function populate_q5ii(taken_test){$("#q5ii").empty();var q5ii_options='<option value="badvalue" label="Select...">Select...</option>';if(taken_test=="A"||taken_test=="B"){q5ii_options+='<option value="A">TEF Canada</option><option value="B">TCF Canada</option><option value="C">not applicable</option>';fol_lang="eng";}else if(taken_test=="C"||taken_test=="D"){q5ii_options+='<option value="A">CELPIP-G</option><option value="B">IELTS</option><option value="C">not applicable</option>';fol_lang="fra";}$("#q5ii").append(q5ii_options);}function display_q5ii(){if(display_q5ii_s==true&&display_q5ii_l==true&&display_q5ii_r==true&&display_q5ii_w==true){document.getElementById("q5ii-sol").style.display="block";}else{document.getElementById("q5ii-sol").style.display="none";}}$("#q5ii").change(function(){var sol_test=$("#q5ii option:selected").val();$("#q5ii-sol-speaking").empty();$("#q5ii-sol-listening").empty();$("#q5ii-sol-reading").empty();$("#q5ii-sol-writing").empty();var q5ii_sol_speaking='<option value="badvalue" label="Select...">Select...</option>';var q5ii_sol_listening='<option value="badvalue" label="Select...">Select...</option>';var q5ii_sol_reading='<option value="badvalue" label="Select...">Select...</option>';var q5ii_sol_writing='<option value="badvalue" label="Select...">Select...</option>';if(sol_test!="badvalue"){if(sol_test!="C"){document.getElementById("q5ii-b-sol").style.display="block";if(fol_lang=="eng"){if(sol_test=="A"){for(i=0;i<tef.length;i++){q5ii_sol_speaking+='<option value="'+tef[i][0]+'"">'+tef[i][1]+'</option>';q5ii_sol_listening+='<option value="'+tef[i][0]+'"">'+tef[i][2]+'</option>';q5ii_sol_reading+='<option value="'+tef[i][0]+'"">'+tef[i][3]+'</option>';q5ii_sol_writing+='<option value="'+tef[i][0]+'"">'+tef[i][4]+'</option>';}}else if(sol_test=="B"){for(i=0;i<tcf.length;i++){q5ii_sol_speaking+='<option value="'+tcf[i][0]+'"">'+tcf[i][1]+'</option>';q5ii_sol_listening+='<option value="'+tcf[i][0]+'"">'+tcf[i][2]+'</option>';q5ii_sol_reading+='<option value="'+tcf[i][0]+'"">'+tcf[i][3]+'</option>';q5ii_sol_writing+='<option value="'+tcf[i][0]+'"">'+tcf[i][4]+'</option>';}}}else if(fol_lang=="fra"){if(sol_test=="A"){for(i=0;i<celpip.length;i++){q5ii_sol_speaking+='<option value="'+celpip[i][0]+'"">'+celpip[i][1]+'</option>';q5ii_sol_listening+='<option value="'+celpip[i][0]+'"">'+celpip[i][2]+'</option>';q5ii_sol_reading+='<option value="'+celpip[i][0]+'"">'+celpip[i][3]+'</option>';q5ii_sol_writing+='<option value="'+celpip[i][0]+'"">'+celpip[i][4]+'</option>';}}else if(sol_test=="B"){for(i=0;i<ielts.length;i++){q5ii_sol_speaking+='<option value="'+ielts[i][0]+'"">'+ielts[i][1]+'</option>';q5ii_sol_listening+='<option value="'+ielts[i][0]+'"">'+ielts[i][2]+'</option>';q5ii_sol_reading+='<option value="'+ielts[i][0]+'"">'+ielts[i][3]+'</option>';q5ii_sol_writing+='<option value="'+ielts[i][0]+'"">'+ielts[i][4]+'</option>';}}}$("#q5ii-sol-speaking").append(q5ii_sol_speaking);$("#q5ii-sol-listening").append(q5ii_sol_listening);$("#q5ii-sol-reading").append(q5ii_sol_reading);$("#q5ii-sol-writing").append(q5ii_sol_writing);}else{document.getElementById("q5ii-b-sol").style.display="none";document.getElementById("q6-work-xp").style.display="block";}}else{document.getElementById("q5ii-b-sol").style.display="none";}});var display_q6_s=false;var display_q6_l=false;var display_q6_r=false;var display_q6_w=false;$("#q5ii-sol-speaking").change(function(){var sol_speaking_option=$("#q5ii-sol-speaking option:selected").val();if(sol_speaking_option!="badvalue"){display_q6_s=true;}else{display_q6_s=false;}display_q6();});$("#q5ii-sol-listening").change(function(){var sol_listening_option=$("#q5ii-sol-listening option:selected").val();if(sol_listening_option!="badvalue"){display_q6_l=true;}else{display_q6_l=false;}display_q6();});$("#q5ii-sol-reading").change(function(){var sol_reading_option=$("#q5ii-sol-reading option:selected").val();if(sol_reading_option!="badvalue"){display_q6_r=true;}else{display_q6_r=false;}display_q6();});$("#q5ii-sol-writing").change(function(){var sol_writing_option=$("#q5ii-sol-writing option:selected").val();if(sol_writing_option!="badvalue"){display_q6_w=true;}else{display_q6_w=false;}display_q6();});function display_q6(){if(display_q6_s==true&&display_q6_l==true&&display_q6_r==true&&display_q6_w==true){document.getElementById("q6-work-xp").style.display="block";}else{document.getElementById("q6-work-xp").style.display="none";$('#q6-work-xp').prop('selectedIndex',0);}}$("#q6i").change(function(){var x=$("#q6i option:selected").val();if(x!="badvalue"){document.getElementById("q6ii-foreign").style.display="block";}else{document.getElementById("q6ii-foreign").style.display="none";$('#q6ii-foreign').prop('selectedIndex',0);}});$("#q6ii").change(function(){var x=$("#q6ii option:selected").val();if(x!="badvalue"){document.getElementById("q7-certificate").style.display="block";}else{document.getElementById("q7-certificate").style.display="none";$('#q7-certificate').prop('selectedIndex',0);}});$("#q7").change(function(){var x=$("#q7 option:selected").val();if(x!="badvalue"){document.getElementById("q8-offer").style.display="block";}else{document.getElementById("q8-offer").style.display="none";$('#q8-offer').prop('selectedIndex',0);}});$("#q8").change(function(){var x=$("#q8 option:selected").val();if(x!="badvalue"){if(x=="B"){document.getElementById("q8-noc").style.display="block";document.getElementById("q9-nomination").style.display="none";}else{document.getElementById("q8-noc").style.display="none";document.getElementById("q9-nomination").style.display="block";$('#q8-noc').prop('selectedIndex',0);}}else{document.getElementById("q8-noc").style.display="none";document.getElementById("q9-nomination").style.display="none";}});$("#q8a").change(function(){var x=$("#q8a option:selected").val();if(x!="badvalue"){document.getElementById("q9-nomination").style.display="block";}else{document.getElementById("q9-nomination").style.display="none";}});$("#q9").change(function(){document.getElementById("q10-sibling").style.display="block";});$("#q10i").change(function(){var x=$("#q10i option:selected").val();if(x!="badvalue"){show_spouse=true;if(with_spouse==true){document.getElementById("q10-s-education").style.display="block";}else{document.getElementById("q10-s-education").style.display="none";$("#submit").removeClass("disabled");}}else{document.getElementById("results").style.display="none";document.getElementById("showbtn").style.display="none";$("#submit").addClass("disabled");}});$("#q10").change(function(){var x=$("#q10 option:selected").val();if(x!="badvalue"){document.getElementById("q11-s-work-xp").style.display="block";}else{document.getElementById("q11-s-work-xp").style.display="none";}});$("#q11").change(function(){var x=$("#q11 option:selected").val();if(x!="badvalue"){document.getElementById("q12-s-fol").style.display="block";}else{document.getElementById("q12-s-fol").style.display="none";}});$("#q12i").change(function(){var s_fol_test=$("#q12i option:selected").val();$("#q12ii-fol-speaking").empty();$("#q12ii-fol-listening").empty();$("#q12ii-fol-reading").empty();$("#q12ii-fol-writing").empty();var q12i_speaking='<option value="badvalue" label="Select...">Select...</option>';var q12i_listening='<option value="badvalue" label="Select...">Select...</option>';var q12i_reading='<option value="badvalue" label="Select...">Select...</option>';var q12i_writing='<option value="badvalue" label="Select...">Select...</option>';if(s_fol_test!="badvalue"){$("#submit").addClass("disabled");document.getElementById("q12ii-s-fol").style.display="block";if(s_fol_test=="A"){for(i=0;i<celpip.length;i++){q12i_speaking+='<option value="'+celpip[i][0]+'"">'+celpip[i][1]+'</option>';q12i_listening+='<option value="'+celpip[i][0]+'"">'+celpip[i][2]+'</option>';q12i_reading+='<option value="'+celpip[i][0]+'"">'+celpip[i][3]+'</option>';q12i_writing+='<option value="'+celpip[i][0]+'"">'+celpip[i][4]+'</option>';}}else if(s_fol_test=="B"){for(i=0;i<ielts.length;i++){q12i_speaking+='<option value="'+ielts[i][0]+'"">'+ielts[i][1]+'</option>';q12i_listening+='<option value="'+ielts[i][0]+'"">'+ielts[i][2]+'</option>';q12i_reading+='<option value="'+ielts[i][0]+'"">'+ielts[i][3]+'</option>';q12i_writing+='<option value="'+ielts[i][0]+'"">'+ielts[i][4]+'</option>';}}else if(s_fol_test=="C"){for(i=0;i<tef.length;i++){q12i_speaking+='<option value="'+tef[i][0]+'"">'+tef[i][1]+'</option>';q12i_listening+='<option value="'+tef[i][0]+'"">'+tef[i][2]+'</option>';q12i_reading+='<option value="'+tef[i][0]+'"">'+tef[i][3]+'</option>';q12i_writing+='<option value="'+tef[i][0]+'"">'+tef[i][4]+'</option>';}}else if(s_fol_test=="D"){for(i=0;i<tcf.length;i++){q12i_speaking+='<option value="'+tcf[i][0]+'"">'+tcf[i][1]+'</option>';q12i_listening+='<option value="'+tcf[i][0]+'"">'+tcf[i][2]+'</option>';q12i_reading+='<option value="'+tcf[i][0]+'"">'+tcf[i][3]+'</option>';q12i_writing+='<option value="'+tcf[i][0]+'"">'+tcf[i][4]+'</option>';}}else if(s_fol_test=="E"){document.getElementById("q12ii-s-fol").style.display="none";$("#submit").removeClass("disabled");}$("#q12ii-fol-speaking").append(q12i_speaking);$("#q12ii-fol-listening").append(q12i_listening);$("#q12ii-fol-reading").append(q12i_reading);$("#q12ii-fol-writing").append(q12i_writing);}else{$("#submit").addClass("disabled");}var btn_sub_s=false;var btn_sub_l=false;var btn_sub_r=false;var btn_sub_w=false;$("#q12ii-fol-speaking").change(function(){var spouse_speaking=$("#q12ii-fol-speaking option:selected").val();if(spouse_speaking!="badvalue"){btn_sub_s=true;}else{btn_sub_s=false;}btn_sub();});$("#q12ii-fol-listening").change(function(){var spouse_listening=$("#q12ii-fol-listening option:selected").val();if(spouse_listening!="badvalue"){btn_sub_l=true;}else{btn_sub_l=false;}btn_sub();});$("#q12ii-fol-reading").change(function(){var spouse_reading=$("#q12ii-fol-reading option:selected").val();if(spouse_reading!="badvalue"){btn_sub_r=true;}else{btn_sub_r=false;}btn_sub();});$("#q12ii-fol-writing").change(function(){var spouse_writing=$("#q12ii-fol-writing option:selected").val();if(spouse_writing!="badvalue"){btn_sub_w=true;}else{btn_sub_w=false;}btn_sub();});function btn_sub(){if(btn_sub_s==true&&btn_sub_l==true&&btn_sub_r==true&&btn_sub_w==true){$("#submit").removeClass("disabled");}else{$("#submit").addClass("disabled");}}});

	$("#crs-form").submit(function(event){
		event.preventDefault();
		
		var q3=0;var q4=0;var q4a=0;var q4b=0;var q5i=0;var q5ii=0;
		var q6i=0;var q6ii=0;var q7=0;var q8=0;var q8a=0;var q9=0;var q10i=0;var q10=0;var q11=0;var q12i=0;var q12ii=0;
		var core_factors=0;var spouse_factors=0;var skill_factors=0;var bonus_factors=0;
		var answer,z;
		answer=$("#q3 option:selected").val();
		for(i=0;i<q3_age.length;i++){
			if(answer==q3_age[i][0]){if(with_spouse==true){q3=q3_age[i][2];}else{q3=q3_age[i][3];}}}core_factors+=parseInt(q3);answer=$("#q4 option:selected").val();for(i=0;i<q4_education.length;i++){if(answer==q4_education[i][0]){if(with_spouse==true){q4=q4_education[i][2];}else{q4=q4_education[i][3];}}}core_factors+=parseInt(q4);var q4c_answer;var temp_q4c_answer=0;q4c_answer=$("#q4c option:selected").val();if(q4c_answer=="B"){temp_q4c_answer=15}else if(q4c_answer=="C"){temp_q4c_answer=30}answer=$("#q5i-a option:selected").val();if(answer=="A"){z=celpip;other_answer=""}else if(answer=="B"){z=ielts;}else if(answer=="C"){z=tef;}else if(answer=="D"){z=tcf;}var q5_s,q5_l,q5_r,q5_w;q5_s=$("#q5i-b-speaking option:selected").val();q5_l=$("#q5i-b-listening option:selected").val();q5_r=$("#q5i-b-reading option:selected").val();q5_w=$("#q5i-b-writing option:selected").val();var clb_s,clb_l,clb_r,clb_w;for(i=0;i<z.length;i++){if(q5_s==z[i][0]){if(with_spouse==true){q5i+=parseInt(z[i][6]);}else{q5i+=parseInt(z[i][7]);}clb_s=parseInt(z[i][5]);}if(q5_l==z[i][0]){if(with_spouse==true){q5i+=parseInt(z[i][6]);}else{q5i+=parseInt(z[i][7]);}clb_l=parseInt(z[i][5]);}if(q5_r==z[i][0]){if(with_spouse==true){q5i+=parseInt(z[i][6]);}else{q5i+=parseInt(z[i][7]);}clb_r=parseInt(z[i][5]);}if(q5_w==z[i][0]){if(with_spouse==true){q5i+=parseInt(z[i][6]);}else{q5i+=parseInt(z[i][7]);}clb_w=parseInt(z[i][5]);}}core_factors+=parseInt(q5i);answer=$("#q5ii option:selected").val();if(fol_lang="en"){if(answer=="A"){z=celpip;}else if(answer=="B"){z=ielts;}}else{if(answer=="A"){z=tef;}if(answer=="B"){z=tcf;}}q5_s=$("#q5ii-sol-speaking option:selected").val();q5_l=$("#q5ii-sol-listening option:selected").val();q5_r=$("#q5ii-sol-reading option:selected").val();q5_w=$("#q5ii-sol-writing option:selected").val();for(i=0;i<z.length;i++){if(q5_s==z[i][0]){if(with_spouse==true){q5ii+=parseInt(z[i][8]);}else{q5ii+=parseInt(z[i][9]);}}if(q5_l==z[i][0]){if(with_spouse==true){q5ii+=parseInt(z[i][8]);}else{q5ii+=parseInt(z[i][9]);}}if(q5_r==z[i][0]){if(with_spouse==true){q5ii+=parseInt(z[i][8]);}else{q5ii+=parseInt(z[i][9]);}}if(q5_w==z[i][0]){if(with_spouse==true){q5ii+=parseInt(z[i][8]);}else{q5ii+=parseInt(z[i][9]);}}}if(with_spouse==true){if(q5ii>22){q5ii=22;}}core_factors+=parseInt(q5ii);answer=$("#q6i option:selected").val();if(with_spouse==true){if(answer=="A"){q6i=0;}else if(answer=="B"){q6i=35;}else if(answer=="C"){q6i=46;}else if(answer=="D"){q6i=56;}else if(answer=="E"){q6i=63;}else if(answer=="F"){q6i=70;}}else{if(answer=="A"){q6i=0;}else if(answer=="B"){q6i=40;}else if(answer=="C"){q6i=53;}else if(answer=="D"){q6i=64;}else if(answer=="E"){q6i=72;}else if(answer=="F"){q6i=80;}}core_factors+=parseInt(q6i);answer=$("#q6ii option:selected").val();if(with_spouse==true){if(answer=="A"){q6ii=0;}else if(answer=="B"){q6ii=35;}else if(answer=="C"){q6ii=46;}else if(answer=="D"){q6ii=56;}}else{if(answer=="A"){q6ii=0;}else if(answer=="B"){q6ii=40;}else if(answer=="C"){q6ii=52;}else if(answer=="D"){q6ii=64;}}answer=$("#q9 option:selected").val();if(answer=="A"){q9=0;}else{q9=600;}document.getElementById("core_factors").innerHTML='<h3><strong>Core/Human capital factors</strong></h3><ul class="list-unstyled"><li>Age = '+q3+'</li><li>Level of education = '+q4+'</li><li>Official Languages = '+(q5i+q5ii)+'<ul class="lst-no-blt"><li><em>First Official Language</em> = '+q5i+'</li><li><em>Second Official Language</em> = '+q5ii+'</li></ul></li><li>Canadian work experience = '+q6i+'</li></ul><p><strong>Subtotal - Core/Human capital factors</strong> = '+core_factors+'</p>';answer=$("#q10 option:selected").val();if(answer=="A"){q10=0;}else if(answer=="B"){q10=2;}else if(answer=="C"){q10=6;}else if(answer=="D"){q10=7;}else if(answer=="E"){q10=8;}else if(answer=="F"){q10=9;}else if(answer=="G"){q10=10;}else if(answer=="H"){q10=10;}answer=$("#q11 option:selected").val();if(answer=="A"){q11=0;}else if(answer=="B"){q11=5;}else if(answer=="C"){q11=7;}else if(answer=="D"){q11=8;}else if(answer=="E"){q11=9;}else if(answer=="F"){q11=10;}answer=$("#q12i option:selected").val();if(answer=="A"){z=celpip;other_answer=""}else if(answer=="B"){z=ielts;}else if(answer=="C"){z=tef;}else if(answer=="D"){z=tcf;}var q12_s,q12_l,q12_r,q12_w;q12_s=$("#q12ii-fol-speaking option:selected").val();q12_l=$("#q12ii-fol-listening option:selected").val();q12_r=$("#q12ii-fol-reading option:selected").val();q12_w=$("#q12ii-fol-writing option:selected").val();var s_clb_s,s_clb_l,s_clb_r,s_clb_w;for(i=0;i<z.length;i++){if(q12_s==z[i][0]){q12i+=parseInt(z[i][10]);s_clb_s=parseInt(z[i][5]);}if(q12_l==z[i][0]){q12i+=parseInt(z[i][10]);s_clb_l=parseInt(z[i][5]);}if(q12_r==z[i][0]){q12i+=parseInt(z[i][10]);s_clb_r=parseInt(z[i][5]);}if(q12_w==z[i][0]){q12i+=parseInt(z[i][10]);s_clb_w=parseInt(z[i][5]);}}spouse_factors=q10+q11+q12i;document.getElementById('spouse_factors').innerHTML='<hr/><h3 style="font-size: 22px;">Spouse factors</h3><ul class="list-unstyled"><li>Level of education = '+q10+'</li><li>First Official Languages = '+q12i+'</li><li>Canadian work experience = '+q11+'</li></ul><p><strong>Subtotal - Spouse factors</strong> = '+spouse_factors+'</p>';var q4_answer=$("#q4 option:selected").val();var educationA=0;if(q4_answer=="A"||q4_answer=="B"){educationA=0;}else if(q4_answer=="C"||q4_answer=="D"||q4_answer=="E"){if(clb_s<7||clb_l<7||clb_r<7||clb_w<7){educationA=0;}else if(clb_s>=9&&clb_l>=9&&clb_r>=9&&clb_w>=9){educationA=25;}else{educationA=13;}}else if(q4_answer=="F"||q4_answer=="G"||q4_answer=="H"){if(clb_s<7||clb_l<7||clb_r<7||clb_w<7){educationA=0;}else if(clb_s>=9&&clb_l>=9&&clb_r>=9&&clb_w>=9){educationA=50;}else{educationA=25;}}var q4_answer=$("#q4 option:selected").val();var q6i_answer=$("#q6i option:selected").val();var educationB=0;if(q4_answer=="A"||q4_answer=="B"){educationB=0;}else if(q4_answer=="C"||q4_answer=="D"||q4_answer=="E"){if(q6i_answer=="A"){educationB=0;}else if(q6i_answer=="B"){educationB=13;}else{educationB=25;}}else if(q4_answer=="F"||q4_answer=="G"||q4_answer=="H"){if(q6i_answer=="A"){educationB=0;}else if(q6i_answer=="B"){educationB=25;}else{educationB=50;}}var educationTot=0;if((educationA+educationB)>50){educationTot=50}else{educationTot=educationA+educationB}if(educationTot>50){educationTot=50}var q6i_answer=$("#q6i option:selected").val()
			
			var q6ii_answer=$("#q6ii option:selected").val();
			var foreign_xp_1=0;var foreign_xp_2=0;if(q6ii_answer=="A"){foreign_xp_1=0;foreign_xp_2=0;}else if(q6ii_answer=="B"||q6ii_answer=="C"){if(clb_s<7||clb_l<7||clb_r<7||clb_w<7){foreign_xp_1=0;}else if(clb_s>=9&&clb_l>=9&&clb_r>=9&&clb_w>=9){foreign_xp_1=25;}else{foreign_xp_1=13;}if(q6i_answer=="A"){foreign_xp_2=0;}else if(q6i_answer=="B"){foreign_xp_2=13;}else if(q6i_answer=="C"||q6i_answer=="D"||q6i_answer=="E"||q6i_answer=="F"){foreign_xp_2=25;}}else if(q6ii_answer=="D"){if(clb_s<7||clb_l<7||clb_r<7||clb_w<7){foreign_xp_1=0;}else if(clb_s>=9&&clb_l>=9&&clb_r>=9&&clb_w>=9){foreign_xp_1=50;}else{foreign_xp_1=25;}if(q6i_answer=="A"){foreign_xp_2=0;}else if(q6i_answer=="B"){foreign_xp_2=25;}else if(q6i_answer=="C"||q6i_answer=="D"||q6i_answer=="E"||q6i_answer=="F"){foreign_xp_2=50;}}var foreign_xp_tot=0;if((foreign_xp_1+foreign_xp_2)>50){foreign_xp_tot=50;}else{foreign_xp_tot=foreign_xp_1+foreign_xp_2;}if(foreign_xp_tot>50){foreign_xp_tot=50}var q7_answer=$("#q7 option:selected").val();var certificate=0;if(q7_answer=="B"){if(clb_s<5||clb_l<5||clb_r<5||clb_w<5){certificate=0;}else if(clb_s>=7&&clb_l>=7&&clb_r>=7&&clb_w>=7){certificate=50;}else{certificate=25;}}else{certificate=0;}skill_factors=educationTot+foreign_xp_tot+certificate;if(skill_factors>100){skill_factors=100;}
			document.getElementById("skill_factors").innerHTML='<hr/><h3>Skill transferability factors</h3><h4>Education (to a maximum of 50 points)</h4><ul class="list-unstyled"><li>A) Official Language proficiency and education  = '+educationA+'</li><li>B) Canadian work experience and education  = '+educationB+'</li></ul><p><em>Subtotal</em> = '+educationTot+'</p><h4>Foreign work experience (to a maximum of 50 points)</h4><ul class="list-unstyled"><li>A) Official Language proficiency and foreign work experience = '+foreign_xp_1+'</li><li>B) Canadian and foreign work experience = '+foreign_xp_2+'</li></ul><p><em>Subtotal</em> = '+foreign_xp_tot+'</p><p>Certificate of qualification = '+certificate+'</p><p><strong>Subtotal Skill transferability factors</strong> = '+skill_factors+'</p>';var subtotal,grandtotal;var q4c_answer=$("#q4c option:selected").val();var q8_answer=$("#q8 option:selected").val();
			var q8a_answer=$("#q8a option:selected").val();var q9_answer=$("#q9 option:selected").val();var q5ii_answer=$("#q5i-a option:selected").val();var q5ii_speaking=$("#q5i-b-speaking option:selected").val();var q5ii_listening=$("#q5i-b-listening option:selected").val();var q5ii_reading=$("#q5i-b-reading option:selected").val();var q5ii_writing=$("#q5i-b-writing option:selected").val();var q5iii_answer=$("#q5ii option:selected").val();var q5iii_speaking=$("#q5ii-sol-speaking option:selected").val();
			var q5iii_listening=$("#q5ii-sol-listening option:selected").val();
			var q5iii_reading=$("#q5ii-sol-reading option:selected").val();
			var q5iii_writing=$("#q5ii-sol-writing option:selected").val();
			var q10i_answer=$("#q10i option:selected").val();
			var study_bonus=0;
			if(q4c_answer=="B"){study_bonus=15}else if(q4c_answer=="C"){study_bonus=30}
			bonus_factors+=study_bonus;var job_bonus=0;if(q8_answer=="B"||q8_answer=="C"){if(q8a_answer=="A"){job_bonus=200}else if(q8a_answer=="B"){job_bonus=50}}bonus_factors+=job_bonus;var prov_nom_bonus=0;if(q9_answer=="B"){prov_nom_bonus=600;}bonus_factors+=prov_nom_bonus;var french_bonus=0;if(q5ii_answer=="C"||q5ii_answer=="D"){if((q5ii_speaking=="E"||q5ii_speaking=="F"||q5ii_speaking=="G"||q5ii_speaking=="H")&&(q5ii_listening=="E"||q5ii_listening=="F"||q5ii_listening=="G"||q5ii_listening=="H")&&(q5ii_reading=="E"||q5ii_reading=="F"||q5ii_reading=="G"||q5ii_reading=="H")&&(q5ii_writing=="E"||q5ii_writing=="F"||q5ii_writing=="G"||q5ii_writing=="H")){french_bonus=25;if(q5iii_answer=="A"||q5iii_answer=="B"){if((q5iii_speaking!="A"&&q5iii_speaking!="B")&&(q5iii_listening!="A"&&q5iii_listening!="B")&&(q5iii_reading!="A"&&q5iii_reading!="B")&&(q5iii_writing!="A"&&q5iii_writing!="B")){french_bonus=50;}}}}else if(q5ii_answer=="A"||q5ii_answer=="B"){if(q5iii_answer=="A"||q5iii_answer=="B"){if((q5iii_speaking=="E"||q5iii_speaking=="F"||q5iii_speaking=="G"||q5iii_speaking=="H")&&(q5iii_listening=="E"||q5iii_listening=="F"||q5iii_listening=="G"||q5iii_listening=="H")&&(q5iii_reading=="E"||q5iii_reading=="F"||q5iii_reading=="G"||q5iii_reading=="H")&&(q5iii_writing=="E"||q5iii_writing=="F"||q5iii_writing=="G"||q5iii_writing=="H")){french_bonus=25;if((q5ii_speaking=="C"||q5ii_speaking=="D"||q5ii_speaking=="E"||q5ii_speaking=="F"||q5ii_speaking=="G"||q5ii_speaking=="H")&&(q5ii_listening=="C"||q5ii_listening=="D"||q5ii_listening=="E"||q5ii_listening=="F"||q5ii_listening=="G"||q5ii_listening=="H")&&(q5ii_reading=="C"||q5ii_reading=="D"||q5ii_reading=="E"||q5ii_reading=="F"||q5ii_reading=="G"||q5ii_reading=="H")&&(q5ii_writing=="C"||q5ii_writing=="D"||q5ii_writing=="E"||q5ii_writing=="F"||q5ii_writing=="G"||q5ii_writing=="H")){french_bonus=50;}}}}bonus_factors+=french_bonus;var sibling_bonus=0;if(q10i_answer=="B"){sibling_bonus=15;}bonus_factors+=sibling_bonus;if(bonus_factors>600){bonus_factors=600}
			
			subtotal=core_factors+spouse_factors+skill_factors;grandtotal=subtotal+bonus_factors;
			
			var additional_points_row = '<h3 style="font-size: 24px;">Additional points (to a maximum of 600 points)</h3><p>Provincial nomination = '+prov_nom_bonus+'</p><p>Job offer = '+job_bonus+'</p><p>Study in Canada = '+study_bonus+'</p><p>Sibling in Canada = '+sibling_bonus+'</p><p>French-language skills = '+french_bonus+'</p><p><strong>Subtotal Additional points</strong> = '+bonus_factors+'</p><hr /><div class="clearfix"></div>'; 

// Check if total is less than 600
if (total < 600) {
    additional_points_row += "<p>Your Comprehensive Ranking System formula grand total is <strong>" + grandtotal +
        "</strong> and you are not eligible for the Canada express entry program, don’t worry our team will connect you to advise to increase the points.</p>";
} else {
    additional_points_row += "<p>Your Comprehensive Ranking System formula grand total is <strong>" + grandtotal +
        "</strong> and you are eligible for the Canada express entry program. Don’t delay, contact our immigration experts today to start your process.</p>";
}

// Display additional points row
document.getElementById("totals").innerHTML = additional_points_row;
document.getElementById("results").style.display = "block";
document.getElementById("showbtn").style.display = "block";

			
			//<h2 class="mt-5 mb-5" style="font-size: 22px; margin:2rem 0;">Total Points - <span class="badge badge-danger" style="color: #fff; background-color: #dc3545; padding:5px;">'+grandtotal+' points</span></h2> 
			
			var result='<div><h2 class="mb-3" style="font-size: 18px;line-height:10px; margin-top:0px">Core/Human capital factors</h2><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Age</td><td>'+q3+'</td></tr><tr><td width="50%">Level of education</td><td>'+q4+'</td></tr><tr><td width="50%">Official Languages</td><td>'+(q5i+q5ii)+'</td></tr><tr><td width="50%">First Official Languages</td><td>'+q5i+'</td></tr><tr><td width="50%">Second Official Languages</td><td>'+q5ii+'</td></tr><tr><td width="50%">Canadian work experience</td><td>'+q6i+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td>'+core_factors+'</td></tr></tbody></table><h2 class="mb-3 mt-5" style="font-size: 18px;line-height:10px;">Spouse factors</h2><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Level of education</td><td>'+q10+'</td></tr><tr><td width="50%">First Official Languages</td><td>'+q12i+'</td></tr><tr><td width="50%">Canadian work experience</td><td>'+q11+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td><strong>'+spouse_factors+'</strong></td></tr></tbody></table><h2 class="mb-3 mt-5" style="font-size: 18px;line-height:10px;">Skill transferability factors</h2><h4 class="mb-3 mt-5" style="font-size:14px; line-height:10px;margin-top:0px">Education (to a maximum of 50 points)</h4><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Official Language proficiency and education</td><td>'+educationA+'</td></tr><tr><td width="50%">Canadian work experience and education</td><td>'+educationB+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td><strong>'+educationTot+'</strong></td></tr></tbody></table><h4 class="mb-3 mt-5" style="font-size:14px; line-height:10px;">Foreign work experience (to a maximum of 50 points)</h4><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Official Language proficiency and foreign work experience</td><td>'+foreign_xp_1+'</td></tr><tr><td width="50%">Canadian and foreign work experience</td><td>'+foreign_xp_2+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td><strong>'+foreign_xp_tot+'</strong></td></tr></tbody></table><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Certificate of qualification</td><td>'+skill_factors+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td><strong>'+skill_factors+'</strong></td></tr></tbody></table><h2 class="mb-3 mt-5" style="font-size: 18px;line-height:10px;">Additional points (to a maximum of 600 points)</h2><table class="table table-bordered table-striped"><tbody><tr><td width="50%">Provincial nomination</td><td>'+prov_nom_bonus+'</td></tr><tr><td width="50%">Job offer</td><td>'+job_bonus+'</td></tr><tr><td width="50%">Study in Canada</td><td>'+study_bonus+'</td></tr><tr><td width="50%">Sibling in Canada</td><td>'+sibling_bonus+'</td></tr><tr><td width="50%">French-language skills</td><td>'+french_bonus+'</td></tr><tr><td width="50%"><strong>Subtotal</strong></td><td><strong>'+bonus_factors+'</strong></td></tr></tbody></table><table class="table table-bordered table-striped" cellpadding="9"><tbody><tr style="background:#d80027; color:#ffffff;"><td width="50%" style="font-size:14px;"><strong>Comprehensive Ranking System formula grand total</strong></td><td><strong>'+grandtotal+'</strong></td></tr></tbody></table></div>';
			
			 
       var candidate_points = encodeURIComponent(result);
		var additional_points = encodeURIComponent(additional_points_row);

		var form = $(this);        
		$.ajax({
			url:"crs_calculator.php",
			type:"post",
			data: form.serialize()+'&grandtotal='+grandtotal+'&candidate_points='+candidate_points,
			success:function(data){
				$("#crs-form").trigger("reset");
				document.getElementById("thanksMessage").innerHTML = "<p>Thank you for your submission!</p>";
			}
		});
					
		document.getElementById("totals").innerHTML='<hr />'+additional_points_row;
		document.getElementById("results").style.display="block";
		document.getElementById("showbtn").style.display="block";

		localStorage.setItem("objectToPass", result);
		var scorecrs=''+grandtotal+'';
		var NameDataVal;
		var EmailDataVal;
		var CountryDataVal;
		var CountryCodeDataVal;
		var PhoneCodeDataVal;
		var LeadSourceDataVal;
		var pageDataVal;
		NameDataVal=$("#Name").val();
		EmailDataVal=$("#Email").val();
		CountryDataVal=$("#Country").val();
		CountryCodeDataVal=$("#CountryCode").val();
		PhoneCodeDataVal=$("#Phone").val();
		LeadSourceDataVal=$("#LeadSource").val();
		pageDataVal=$("#page").val();

		return false;
		});


</script>


    <!-- template js -->
        <script src="/assets/js/insur.js"></script>
    <script src="/assets/js/country.js"></script>
</body>


</html>