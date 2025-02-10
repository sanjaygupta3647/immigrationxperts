<?php include '../metadata.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>"/>
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keyword); ?>"/> <!-- Added keyword -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    
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
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/assets/vendors/BuenosAires/stylesheet.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />

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
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/Northern-Territory-State-SOL-List.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>

        </section>

        <div class="container mt-4">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Australia</li>
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
                            <h1 class="section-title__title">Northern Territory State SOL List</h1>
                            <br>
							<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ANZSCO</th>
                                        <th>Name</th>
                                        <th>Subclass 190</th>
                                        <th>Subclass 491</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>121216</td>
                                        <td>Mixed Crop Farmer</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491</td>
                                    </tr>
                                    <tr>
                                        <td>121312</td>
                                        <td>Beef Cattle Farmer</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491</td>
                                    </tr>
                                    <tr>
                                        <td>121399</td>
                                        <td>Livestock Farmers nec</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491</td>
                                    </tr>
                                    <tr>
                                        <td>133512</td>
                                        <td>Production Manager (Manufacturing)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>134214</td>
                                        <td>Welfare Centre Manager</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>141111</td>
                                        <td>Cafe or Restaurant Manager</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>141311</td>
                                        <td>Hotel or Motel Manager</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>224999</td>
                                        <td>Information and Organisation Professionals nec</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>232111</td>
                                        <td>Architect</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>232212</td>
                                        <td>Surveyor</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>233211</td>
                                        <td>Civil Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>233214</td>
                                        <td>Structural Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>233512</td>
                                        <td>Mechanical Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>241111</td>
                                        <td>Early Childhood (Pre-primary School) Teacher</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>241213</td>
                                        <td>Primary School Teacher</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>241311</td>
                                        <td>Middle School Teacher / Intermediate School Teacher</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>241411</td>
                                        <td>Secondary School Teacher</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>242211</td>
                                        <td>Vocational Education Teacher / Polytechnic Teacher</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491</td>
                                    </tr>
                                    <tr>
                                        <td>251411</td>
                                        <td>Optometrist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>251511</td>
                                        <td>Hospital Pharmacist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>251513</td>
                                        <td>Retail Pharmacist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>252312</td>
                                        <td>Dentist</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491. Must provide evidence of Australian
                                            licence/registration or a statement
                                            outlining eligibility to obtain registration or licence to work in Australia
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>252411</td>
                                        <td>Occupational Therapist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>252511</td>
                                        <td>Physiotherapist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>252712</td>
                                        <td>Speech Pathologist / Speech Language Therapist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253111</td>
                                        <td>General Practitioner</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253112</td>
                                        <td>Resident Medical Officer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253211</td>
                                        <td>Anaesthetist</td>
                                        <td><span style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>only eligible for subclass 491</td>
                                    </tr>
                                    <tr>
                                        <td>253311</td>
                                        <td>Specialist Physician (General Medicine)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253411</td>
                                        <td>Psychiatrist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253511</td>
                                        <td>Surgeon (General)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253514</td>
                                        <td>Orthopaedic Surgeon</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253913</td>
                                        <td>Obstetrician and Gynaecologist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253915</td>
                                        <td>Pathologist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>253917</td>
                                        <td>Diagnostic and Interventional Radiologist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>254111</td>
                                        <td>Midwife</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>254211</td>
                                        <td>Nurse Educator</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>254412</td>
                                        <td>Registered Nurse (Aged Care)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>254417</td>
                                        <td>Registered Nurse (Disability and Rehabilitation)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>254421</td>
                                        <td>Registered Nurse (Medical Practice)</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>254499</td>
                                        <td>Registered Nurses nec</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>261312</td>
                                        <td>Developer Programmer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>261313</td>
                                        <td>Software Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>262113</td>
                                        <td>Systems Administrator</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>263111</td>
                                        <td>Computer Network and Systems Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>263212</td>
                                        <td>ICT Support Engineer</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>272112</td>
                                        <td>Drug and Alcohol Counsellor</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>272199</td>
                                        <td>Counsellors nec</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>272311</td>
                                        <td>Clinical Psychologist</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                    <tr>
                                        <td>272399</td>
                                        <td>Psychologists nec</td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td><span style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td>Must provide evidence of Australian licence/registration or a statement
                                            outlining eligibility to obtain
                                            registration or licence to work in Australia</td>
                                    </tr>
                                </tbody>
                            </table>
							</div>
                        </div>
						<?php include '../assistyou.php';?>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <?php include 'australia-sidebar.php';?>
                    </div>
                </div>

            </div>

        </section>
        <!--News Details End-->

        <?php include 'partner.php';?>
        <?php include '../footer.php';?>

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

    <!-- template js -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

     <script src="/assets/js/insur.js"></script>
	 <script src="/assets/js/country.js"></script>
</body>

</html>