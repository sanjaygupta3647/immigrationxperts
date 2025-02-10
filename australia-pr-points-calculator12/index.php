<?php
$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $current_url; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Australia PR Point Calculator</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


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
    <link rel="stylesheet" href="/assets/vendors/BuenosAires/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />
    <link rel="stylesheet" href="/assets/css/aus-cal.css" />

</head>

<body>
    <?php include '../header.php';?>

    <div class="page-wrapper">

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/aus-pr.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                    <h2>&nbsp;</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <section class="point_calculate_sec bg_animation1">
            <div class="container">
			  	<form method="post" name="calculator_form" id="calculator_form" enctype="multipart/form-data">
			
                            <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hvgs">Visa Subclass</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gvscount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center gy-3">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Visa_Subclass.png" class="img-fluid" alt="Subclass">
                                            </div>
                                            <div class="col-md ">
                                                <h3 class="h6 text-primary-theme mb-4" id="lvgs">Which visa Subclass are you applying for?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00" class="form-check-input" type="radio" name="vgs" id="vgs1">
                                                        <label class="form-check-label w-100" for="vgs1">
                                                            Skilled Independent Visa Subclass 189 ( Occupation should be listed in the Medium and Long term Strategic Skill List MLTSSL)
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00" class="form-check-input" type="radio" name="vgs" id="vgs2">
                                                        <label class="form-check-label w-100" for="vgs2">
                                                            Skilled Nominated Visa Subclass 190 (Occupation may be listed on MLTSSL or STSOL)
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00" class="form-check-input" type="radio" name="vgs" id="vgs3">
                                                        <label class="form-check-label w-100" for="vgs3">
                                                            Skilled Work Regional (Provisional) Visa Subclass 491 (Requires a nomination by the designated area from State or Territory or by a Family Member staying in the Designated area)
                                                        </label>
                                                    </div>
													<!-- Add this hidden input field inside your form -->
													<input type="hidden" id="selectedVisaType" name="selectedVisaType" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Visa Subclass -->

                        <!-- Nomination -->
                        <div class="row mb-md-4 mb-3" id="nominationid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hn">Nomination</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0">Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gncount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/acl.png" class="img-fluid"
                                                    alt="acl">
                                            </div>
                                            <div class="col-md col-6">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgn">Have you been invited to apply for a Skilled Nominated visa (subclass 190) and the nominating State or Territory government agency has not withdrawn the nomination?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="05"
                                                            class="form-check-input" type="radio" name="gn" id="gn1">
                                                        <label class="form-check-label w-100" for="gn1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gn" id="gn2">
                                                        <label class="form-check-label w-100" for="gn2">
                                                            No
                                                        </label>
                                                    </div>													
													<!-- Add this hidden input field inside your form -->
													<input type="hidden" id="subClass190" name="subClass190" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Nomination -->

                        <!-- Nomination or Sponsorship -->
                        <div class="row mb-md-4 mb-3" id="nomsponid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hns">Nomination or Sponsorship
                                                </h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0">Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gnscount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center gy-3">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Visa_Subclass.png" class="img-fluid" alt="Subclass">
                                            </div>
                                            <div class="col-md">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgns">Have you been nominated or sponsored to apply for this visa?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="15"
                                                            class="form-check-input" type="radio" name="gns" id="gns1">
                                                        <label class="form-check-label w-100" for="gns1">
                                                            You were invited to apply for a Skilled Work Regional (Provisional) visa (subclass 491) because you were nominated and the nominating State or Territory government agency has not withdrawn that nomination
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="15"
                                                            class="form-check-input" type="radio" name="gns" id="gns2">
                                                        <label class="form-check-label w-100" for="gns2">
                                                            You are being sponsored for a Skilled Work Regional (Provisional) visa (subclass 491) visa by a family member and the Minister has accepted that sponsorship
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gns" id="gns3">
                                                        <label class="form-check-label w-100" for="gns3">
                                                            Not applicable
                                                        </label>
                                                    </div>													
													<input type="hidden" id="subClass491" name="subClass491" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Nomination or Sponsorship -->

                        <!-- Age -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row mx-0 align-items-sm-center">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="ha">Age</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gacount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h6 text-primary-theme mb-4 text-center" id="lga">Which age band do you fit into?</h3>
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" >
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/avatar-18-24.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="18 to 24">
                                                                <input onchange="changegsmvisa()" value="25"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="ga" id="ga1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="ga11" for="ga1">18 to 24</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="ga2">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/age2.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="age2">
                                                                <input onchange="changegsmvisa()" value="30"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="ga" id="ga2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="ga21">25 to 32</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="ga3">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/age3.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="age3">
                                                                <input onchange="changegsmvisa()" value="25"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="ga" id="ga3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="ga31">33 to 39</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="ga4">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/age4.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="age4">
                                                                <input onchange="changegsmvisa()" value="15"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="ga" id="ga4">
                                                            </span>
                                                     <span class="w-100 mt-3 d-block text-dark" id="ga41">40 to 44</span>
                                                        </label>
														<input type="hidden" id="ageGroup" name="ageGroup" value="">
                                                    </a>
                                                </div>
                                            </div>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Age -->

                        <!-- Qualifications -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hq">Qualifications</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gqcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
										<h3 class="h6 text-primary-theme mb-4 text-center" id="lgq">What is your highest Qualification?</h3>
                                        <div class="row g-md-5 g-4">
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gq1">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/qa1.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="qa1">
                                                                <input onchange="changegsmvisa()" value="20"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gq" id="gq1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark text-black"
                                                                id="gq11">A Doctorate Degree (PHD) holder from an Australian institute or from another Recognized institute</span>
                                                        </label>

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gq2">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/qa2.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="qa2">
                                                                <input onchange="changegsmvisa()" value="15"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gq" id="gq2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark text-black" id="gq21">A Bachelor Degree holder from an Australian institute or from another Recognized institute</span>
                                                        </label>

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gq3">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/qa3.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="qa3">
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gq" id="gq3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark text-black"
                                                                id="gq31">A Diploma or trade qualification completed in Australia or an award or qualification awarded by relevant skill assessing authority</span>
                                                        </label>

                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gq4">
                                                            <span class="card-body position-relative d-inline-block w-50 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/qa4.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="qa4">
                                                                <input onchange="changegsmvisa()" value="00"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gq" id="gq4">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark text-black"
                                                                id="gq4">No Recognised Qualifications</span>
                                                        </label>

                                                    </a>
                                                </div>
												<input type="hidden" id="qualificationGroup" name="qualificationGroup" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Qualifications -->

                        <!-- Australian Educational Qualification -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="haeq">Australian Educational Qualification</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gaeqcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Australian_Educational_Qualification.png"
                                                    class="img-fluid" alt="Australian_Educational_Qualification">
                                            </div>
                                            <div class="col-md">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgaeq">Do you have at least 1 Degree, Diploma or Trade qualification which was for at least 2 years (minimum 92 weeks CRICOS registered) from an Australian institute?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="05"
                                                            class="form-check-input" type="radio" name="gaeq"
                                                            id="gaeq1">
                                                        <label class="form-check-label w-100" for="gaeq1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gaeq"
                                                            id="gaeq2">
                                                        <label class="form-check-label w-100" for="gaeq2">
                                                            No
                                                        </label>
                                                    </div>
														<input type="hidden" id="australiaEdu" name="australiaEdu" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Australian Educational Qualification -->

                        <!-- Regional Study and Stay -->
                        <div class="row mb-md-4 mb-3" id="regionalid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hrss">Regional Study and Stay
                                                </h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="grscount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Australian_Educational_Qualification.png"
                                                    class="img-fluid" alt="Australian_Educational_Qualification">
                                            </div>
                                            <div class="col-md">
												<h3 class="h6 text-primary-theme mb-4" id="lgrs">Did you live and study in a 'regional and low population growth metropolitan area' of Australia and complete a course which meets the 'Australian study requirement' at the time of invitation to apply for the visa?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="05"
                                                            class="form-check-input" type="radio" name="grs" id="grs1">
                                                        <label class="form-check-label w-100" for="grs1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="grs" id="grs2">
                                                        <label class="form-check-label w-100" for="grs2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
												<input type="hidden" id="australiaStay" name="australiaStay" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Regional Study and Stay -->

                        <!-- Specialist Education Qualification -->
                        <div class="row mb-md-4 mb-3" id="specialistid">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hseq">Specialist Education
                                                    Qualification</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gseqcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Australian_Educational_Qualification.png"
                                                    class="img-fluid" alt="Australian_Educational_Qualification">
                                            </div>
                                            <div class="col-md">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgseq">Do you have a Masters degree by research or a Doctorate degree from an Australian educational institution that included at least 2 academic years to in a relevant field?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="10"
                                                            class="form-check-input" type="radio" name="gseq"
                                                            id="gseq1">
                                                        <label class="form-check-label w-100" for="gseq1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gseq"
                                                            id="gseq2">
                                                        <label class="form-check-label w-100" for="gseq2">
                                                            No
                                                        </label>
                                                    </div>
													<input type="hidden" id="australiaSpeEdu" name="australiaSpeEdu" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Specialist Education Qualification -->

                        <!-- Work Experience - Outside Australia -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hweo">Work Experience - Outside Australia</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gweocount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h6 text-primary-theme mb-4 text-center" id="lgweo">How long have you been working in your nominated occupation in the past 10 years; as a Full Time employee, working at least 20 hours per week?</h3>
                                        <div class="row g-md-5 g-4">
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label position-relative" for="gweo1">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-1 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">8</span>
                                                                <input onchange="changegsmvisa()" value="15"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gweo" id="gweo1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gweo11">8 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label position-relative" for="gweo2">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-2 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">5</span>
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gweo" id="gweo2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gweo21">5 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label position-relative" for="gweo3">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-3 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">3</span>
                                                                <input onchange="changegsmvisa()" value="05"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gweo" id="gweo3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gweo31">3 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gweo4">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-4 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">0</span>
                                                                <input onchange="changegsmvisa()" value="00"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gweo" id="gweo4">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gweo41">Less than 3 years / No Experience</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
											<input type="hidden" id="australiaWorkOut" name="australiaWorkOut" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Work Experience - Outside Australia -->

                        <!-- Work Experience - Within Australia-->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hwew">Work Experience - With in Australia</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gwewcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h6 text-primary-theme mb-4 text-center" id="lgwew">How long have you worked in your nominated or closely nominated occupation in the past 10 years; as a Full Time employee, working at least 20 hours per week?</h3>
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gwew1">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-1 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">8</span>
                                                                <input onchange="changegsmvisa()" value="20"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gwew" id="gwew1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gwew11">8 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gwew2">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-2 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">5</span>
                                                                <input onchange="changegsmvisa()" value="15"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gwew" id="gwew2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gwew21">5 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gwew3">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-3 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">3</span>
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gwew" id="gwew3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gwew31">3 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gwew4">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-4 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">1</span>
                                                                <input onchange="changegsmvisa()" value="05"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gwew" id="gwew4">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gwew41">1 Years or More</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gwew5">
                                                            <span class="position-relative d-inline-block">
                                                                <span
                                                                    class="d-flex justify-content-center align-items-center h2 bg-primary-theme-1 mb-0 rounded-pill text-black"
                                                                    style="width: 80px; height: 80px;">0</span>
                                                                <input onchange="changegsmvisa()" value="00"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gwew" id="gwew5">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gwew51">No Experience</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
											<input type="hidden" id="australiaWorkIn" name="australiaWorkIn" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Work Experience - Within Australia -->

                        <!-- English Language Ability -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 d-flex align-items-center text-primary-theme" id="hela">
                                                    <span class="me-1">English Language Ability</span> <a
                                                        href="javascript:void(0)"><i
                                                            class="la la-info-circle h5 mb-0"></i></a>
                                                </h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gelacount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h6 text-primary-theme mb-4 text-center" id="lgela">How would you rate your English language ability?
										</h3>
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gela1">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-25 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/ce.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="ce">
                                                                <input onchange="changegsmvisa()" value="00"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gela" id="gela1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark"
                                                                id="gela11">Competent English</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gela2">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-25 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/pe.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="pe">
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gela" id="gela2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark"
                                                                id="gela21">Proficient English</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gela3">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-25 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/se.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="se">
                                                                <input onchange="changegsmvisa()" value="20"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gela" id="gela3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark"
                                                                id="gela31">Superior English</span>
                                                        </label>
                                                    </a>													
                                                </div>												
                                            </div>
                                        </div>
										
								<input type="hidden" id="australiaEngLang" name="australiaEngLang" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /English Language Ability -->

                        <!-- Partner Skills Point -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 d-flex align-items-center text-primary-theme" id="hpsp">
                                                    Partner Skills Point</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gpspcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h6 text-primary-theme mb-4 text-center" id="lgpsp">Do you have a Spouse or Partner and want to claim Partner skill point? Do they meet any one of these criteria?
                                        </h3>
                                        <div class="row g-md-5 g-4">
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gpsp1">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/SkildCoupleNew.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="SkildCoupleNew">
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gpsp" id="gpsp1">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gpsp11">Your spouse or de facto partner must also be an applicant for this visa and meet age, English and skill criteria</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gpsp2">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/NormalCouple.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="NormalCouple">
                                                                <input onchange="changegsmvisa()" value="05"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gpsp" id="gpsp2">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gpsp21">Your spouse or de facto partner must also be an applicant for this visa and has competent English</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gpsp3">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Single.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="single">
                                                                <input onchange="changegsmvisa()" value="10"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gpsp" id="gpsp3">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gpsp31">You are single or your partner is an Australian citizen or permanent resident</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="text-center hover-animation">
                                                    <a href="javascript:void(0);"
                                                        class="text-decoration-none form-check-inline card h-100 border-0">
                                                        <label class="form-check-label" for="gpsp4">
                                                            <span
                                                                class="card-body position-relative d-inline-block w-50 p-0 p-0">
                                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/notapplicable.png"
                                                                    class="img-fluid wow" data-wow-iteration="infinite"
                                                                    alt="notapplicable">
                                                                <input onchange="changegsmvisa()" value="00"
                                                                    class="form-check-input position-absolute top-50 start-100 translate-middle"
                                                                    type="radio" name="gpsp" id="gpsp4">
                                                            </span>
                                                            <span class="w-100 mt-3 d-block text-dark" id="gpsp41">Not Applicable</span>
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
											<input type="hidden" id="partnerSkill" name="partnerSkill" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Partner Skills Point -->

                        <!-- Accredited Community Language -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hacl">Accredited Community Language</h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gaclcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/acl.png" class="img-fluid"
                                                    alt="acl">
                                            </div>
                                            <div class="col-md">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgacl">Have you been
                                                    accredited at the paraprofessional level or above for interpreting or translating in a language that are offered accreditation in by the National Accreditation Authority for Translator and Interpreters(NAATI)?</h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="05"
                                                            class="form-check-input" type="radio" name="gacl"
                                                            id="gacl1">
                                                        <label class="form-check-label w-100" for="gacl1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gacl"
                                                            id="gacl2">
                                                        <label class="form-check-label w-100" for="gacl2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
												<input type="hidden" id="accComm" name="accComm" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Accredited Community Language -->

                        <!-- Professional Year Program in Australia -->
                        <div class="row mb-md-4 mb-3">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header p-1 p-md-0">
                                        <div class="row align-items-center mx-0 gy-2">
                                            <div class="col-12 col-md mb-md-0 mb-2">
                                                <h6 class="mb-0 text-primary-theme" id="hpyp">Professional Year Program in Australia </h6>
                                            </div>
                                            <div class="col-auto font-weight-400">
                                                <h6 class="m-0"> Score for this Criteria: </h6>
                                            </div>
                                            <div class="bg-primary-theme col-auto py-1 py-md-2 text-white">
                                                <div class="h6 mb-0 fw-normal"><label id="gpypcount"style="color: red;" >00</label> Points
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center g-md-5 g-4">
                                            <div class="col-md-4 text-center">
                                                <img src="https://app.searchmyanzsco.com.au/pointtestcalculator/images/Professional_Year_Program.png"
                                                    class="img-fluid" alt="Professional_Year_Program">
                                            </div>
                                            <div class="col-md">
                                                <h3 class="h6 text-primary-theme mb-4" id="lgpyp">Have you completed your professional program in Australia in past 48 months?
                                                </h3>
                                                <div class="ps-md-3 ps-2">
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="05"
                                                            class="form-check-input" type="radio" name="gpyp"
                                                            id="gpyp1">
                                                        <label class="form-check-label w-100" for="gpyp1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="form-check form-check-input-wrap checked-active text-black mb-2">
                                                        <input onchange="changegsmvisa()" value="00"
                                                            class="form-check-input" type="radio" name="gpyp"
                                                            id="gpyp2">
                                                        <label class="form-check-label w-100" for="gpyp2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
												<input type="hidden" id="proYear" name="proYear" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Professional Year Program in Australia -->
                        
						
						<!-- /Professional Contact in Australia -->
							<div class="point_card_repeat professional_pro_sec">
                        <div class="point_card_header">
                            <div class="row point_card_row clearfix">
                                <div class="col-sm-12 point_heading_main">
                                    <div class="point_heading">
                                        <h2>Personal Information</h2>
                                    </div>
                                </div>
                                <!--<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="point_card_count">
					  <h2>Score for this criteria: <span>0 Points</span></h2>
					</div>
				  </div>-->
                            </div>
                        </div>
                        <div class="point_card_body total_count_main">
                            <div class="total_count_area">

                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" name="user_name" class="form-control user_name" placeholder="Full Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="email" name="email" class="form-control user_email" placeholder="Email Address" required="" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label>Phone no. *</label>
                                            <input type="phone" name="phone" min="1" class="form-control user_phone" placeholder="Phone Number" required="" maxlength="10" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" title="Enter Valid mobile number ex.9999467686" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode >= 48 &amp;&amp; event.charCode <= 57" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label>City *</label>
                                            <input type="text" name="city" class="form-control user_city" placeholder="Your City" required="required" >
                                        </div>
                                    </div>
                                  <div class="col-lg-3 col-md-3 col-sm-6">
										<div class="form-group">
											<label>Consulting Branch *</label>
											<select name="ConsultingBranch" id="ConsultingBranch" class="form-control ConsultingBranch" required="">
												<option value="">Select Nearest Branch</option>
												<option value="Noida Head Office">Noida Head Office</option>
												<option value="Delhi">Delhi</option>
												<option value="Pune">Pune</option>
												<option value="Mumbai">Mumbai</option>
												<option value="Telengana">Telengana</option>
												<option value="Hyderabad">Hyderabad</option>
												<option value="Lucknow">Lucknow</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="Message_Note" class="form-control Message_Note" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
									
									<!-- div class="col-auto">										
										<div class="card-header p-1 px-2 bg-dark text-white">Score Detail</div>
											<div class="card-body p-1 px-2 bg-light">
												<div class="row">
													<div class="col">
														<label class="text-dark">Point</label>
													</div>
													<div class="col-auto">														
														<label class="text-danger fw-bold" id="finalTotalDisplay">00</label>
														<input type="hidden" id="finaltotalInput" name="finaltotal" value="00">
													</div>
												</div>
										</div>
									</div> -->
									<!-- Success message container -->
									 <div id="successMessage" class="col-lg-12 text-center" style="display: none;">
										<div id="calculated_result">
											<hr style="color:#1e4386;">
											<p style="color:#fff;">Thank you for showing your interest, Submit the Form Our team will contact you within 24 hours.</p>
											<p class="download-result text-center">
												<button class="btn btn-success" type="button">Your Total Points is: 
												<strong class="btn-success fw-bold" id="finalTotalDisplay">00</strong></button>
												<input type="hidden" id="finaltotalInput" name="finaltotal" value="00">
											</p>
										</div>
									</div>
									
									
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-center1">
										<div class="form-group">
											<button id="submitButton" class="thm-btn totaladd">Submit Your Score</button>
										</div>
									</div>
										

                                </div>
                            </div>
                        </div>
                  
                        <!-- /Professional Contact in Australia -->
				</form>		

		</div>			
            </div>
        </section>
		
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			var submitButton = document.getElementById("submitButton");

			submitButton.addEventListener("click", function() {
				// Prepare form data
				var formData = new FormData(document.getElementById("calculator_form"));

				// Send form data via AJAX
				var xhr = new XMLHttpRequest();
				xhr.open("POST", "../sendmail1.php", true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState === XMLHttpRequest.DONE) {
						if (xhr.status === 200) {
							var response = JSON.parse(xhr.responseText);
							if (response.success) {
								// Hide the form
								document.getElementById("calculator_form").style.display = "none";

								// Redirect to thank_you.php
								window.location.href = "../thankyou.php";
							} else {
								// Display error message if email sending failed
								alert("Failed to send email: " + response.error);
							}
						} else {
							// Display error message if AJAX request failed
							alert("Failed to send request. Error code: " + xhr.status);
						}
					}
				};
				xhr.send(formData);
			});
		});

		</script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var ConsultingBranch = document.getElementById("ConsultingBranch");
				var successMessage = document.getElementById("successMessage");
				
				ConsultingBranch.addEventListener("change", function() {
					if (ConsultingBranch.value !== "") {
						// Show the success message
						successMessage.style.display = "block";
					} else {
						successMessage.style.display = "none";
					}
				});
			});
		</script>

        <!-- Top Scroll Script-->
        <script>
        $('a[href=#top]').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 600);
            return false;
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('.totop a').fadeIn();
            } else {
                $('.totop a').fadeOut();
            }
        });
        </script>

        <script>
        jQuery(function() {

            //create sticky header 
            createSticky(jQuery("#sticky-wrap"));

            // Check checbox values
            if ($('input[name="aus_edu_qua"]:checked').length === 0) {
                $('.regional_study_section').hide();
                $('.specialist_qualification_section').hide();
            }

        });

        function createSticky(sticky) {
            if (typeof sticky != "undefined") {
                var pos = sticky.offset().top,
                    win = jQuery(window);

                win.on("scroll", function() {

                    if (win.scrollTop() > pos) {
                        sticky.addClass("stickyhead");
                    } else {
                        sticky.removeClass("stickyhead");
                    }
                });
            }
        }
        </script>

        <?php include '../footer.php';?>

    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-plane"></i></a>

     <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>   
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/gsmvisa.js"></script>
	
	
</body>

</html>