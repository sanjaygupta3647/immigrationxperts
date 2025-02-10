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
		<section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;"><a href="https://www.immigrationxperts.com/australia-immigration/" style="color: #ffffff;">Australia</a></li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Tasmania State Occupation List</h2>
                </div>
            </div>
        </section>
		
        
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <h1 class="section-title__title">Tasmania State Occupation List</h1>
                            <p class="about-one__text-2">Please search an occupation to see the details of an occupation
                                in Tasmania Skilled Occupation List.| For example, enter your occupation names in the
                                SEARCH BOX below, like a "social worker", "mechanical engineer", "livestock farmer",
                                "mining engineer", or other desired occupation.</p>
                            <br>
							<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ANZSCO</th>
                                        <th>Name</th>
                                        <th>"Gold" List - Critical Rolest</th>
                                        <th>Tasmanian Onshore Skilled Occupation List (TOSOL)</th>
                                        <th>Overseas Skilled Occupation Profiles (OSOP)</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>221111</td>
                                        <td>Accountant (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>131113</td>
                                        <td>Advertising Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>225111</td>
                                        <td>Advertising Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311112</td>
                                        <td>Agricultural and Agritech Technician [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234111</td>
                                        <td>Agricultural Consultant</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234114</td>
                                        <td>Agricultural Research Scientist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234115</td>
                                        <td>Agronomist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>334112</td>
                                        <td>Airconditioning and Mechanical Services Plumber</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342111</td>
                                        <td>Airconditioning and Refrigeration Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323111</td>
                                        <td>Aircraft Maintenance Engineer (Avionics)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323112</td>
                                        <td>Aircraft Maintenance Engineer (Mechanical)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323113</td>
                                        <td>Aircraft Maintenance Engineer (Structures)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311211</td>
                                        <td>Anaesthetic Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253211</td>
                                        <td>Anaesthetist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261311</td>
                                        <td>Analyst Programmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311113</td>
                                        <td>Animal Husbandry Technician [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121311</td>
                                        <td>Apiarist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121111</td>
                                        <td>Aquaculture Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234116</td>
                                        <td>Aquaculture or Fisheries Scientist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311114</td>
                                        <td>Aquaculture or Fisheries Technician [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232111</td>
                                        <td>Architect</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312111</td>
                                        <td>Architectural Draftsperson</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312199</td>
                                        <td>Architectural, Building and Surveying Technicians nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139911</td>
                                        <td>Arts Administrator or Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252711</td>
                                        <td>Audiologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>321111</td>
                                        <td>Automotive Electrician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>351111</td>
                                        <td>Baker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121312</td>
                                        <td>Beef Cattle Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234513</td>
                                        <td>Biochemist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234514</td>
                                        <td>Biotechnologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322111</td>
                                        <td>Blacksmith</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234515</td>
                                        <td>Botanist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>331111</td>
                                        <td>Bricklayer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312112</td>
                                        <td>Building Associate</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312113</td>
                                        <td>Building Inspector</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>351211</td>
                                        <td>Butcher or Smallgoods Maker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394111</td>
                                        <td>Cabinetmaker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342411</td>
                                        <td>Cabler (Data and Telecommunications)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>141111</td>
                                        <td>Cafe or Restaurant Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311212</td>
                                        <td>Cardiac Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253312</td>
                                        <td>Cardiologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253512</td>
                                        <td>Cardiothoracic Surgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>331212</td>
                                        <td>Carpenter</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>331211</td>
                                        <td>Carpenter and Joiner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232213</td>
                                        <td>Cartographer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>351311</td>
                                        <td>Chef</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233111</td>
                                        <td>Chemical Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>135111</td>
                                        <td>Chief Information Officer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252111</td>
                                        <td>Chiropractor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233211</td>
                                        <td>Civil Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312211</td>
                                        <td>Civil Engineering Draftsperson</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312212</td>
                                        <td>Civil Engineering Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253313</td>
                                        <td>Clinical Haematologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272311</td>
                                        <td>Clinical Psychologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221211</td>
                                        <td>Company Secretary</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>263111</td>
                                        <td>Computer Network and Systems Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234911</td>
                                        <td>Conservator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312114</td>
                                        <td>Construction Estimator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>133111</td>
                                        <td>Construction Project Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>225114</td>
                                        <td>Content Creator (Marketing) [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>351411</td>
                                        <td>Cook</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>132111</td>
                                        <td>Corporate Services Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221212</td>
                                        <td>Corporate Treasurer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262114</td>
                                        <td>Cyber Governance Risk and Compliance Specialist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262115</td>
                                        <td>Cyber Security Advice and Assessment Specialist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262116</td>
                                        <td>Cyber Security Analyst [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262117</td>
                                        <td>Cyber Security Architect [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261315</td>
                                        <td>Cyber Security Engineer [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262118</td>
                                        <td>Cyber Security Operations Coordinator [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121313</td>
                                        <td>Dairy Cattle Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262111</td>
                                        <td>Database Administrator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121314</td>
                                        <td>Deer Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252311</td>
                                        <td>Dental Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252312</td>
                                        <td>Dentist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253911</td>
                                        <td>Dermatologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261312</td>
                                        <td>Developer Programmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261316</td>
                                        <td>Devops Engineer [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253917</td>
                                        <td>Diagnostic and Interventional Radiologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>321212</td>
                                        <td>Diesel Motor Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251111</td>
                                        <td>Dietitian</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>225115</td>
                                        <td>Digital Marketing Analyst [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>334113</td>
                                        <td>Drainer / Drainlayer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>241111</td>
                                        <td>Early Childhood (Pre-primary School) Teacher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272312</td>
                                        <td>Educational Psychologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233311</td>
                                        <td>Electrical Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312311</td>
                                        <td>Electrical Engineering Draftsperson</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312312</td>
                                        <td>Electrical Engineering Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342211</td>
                                        <td>Electrical Linesworker / Electrical Line Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>341111</td>
                                        <td>Electrician (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>341112</td>
                                        <td>Electrician (Special Class)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322112</td>
                                        <td>Electroplater</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253912</td>
                                        <td>Emergency Medicine Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253315</td>
                                        <td>Endocrinologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>133211</td>
                                        <td>Engineering Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233914</td>
                                        <td>Engineering Technologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323311</td>
                                        <td>Engraver</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>411411</td>
                                        <td>Enrolled Nurse</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234521</td>
                                        <td>Entomologist [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251311</td>
                                        <td>Environmental Health Officer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139912</td>
                                        <td>Environmental Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234915</td>
                                        <td>Exercise Physiologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221213</td>
                                        <td>External Auditor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322113</td>
                                        <td>Farrier</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>333211</td>
                                        <td>Fibrous Plasterer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>132211</td>
                                        <td>Finance Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323211</td>
                                        <td>Fitter (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323212</td>
                                        <td>Fitter and Turner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323213</td>
                                        <td>Fitter-Welder</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>332111</td>
                                        <td>Floor Finisher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234113</td>
                                        <td>Forester / Forest Scientist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394211</td>
                                        <td>Furniture Finisher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>362211</td>
                                        <td>Gardener (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>334114</td>
                                        <td>Gasfitter</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253316</td>
                                        <td>Gastroenterologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253111</td>
                                        <td>General Practitioner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234411</td>
                                        <td>Geologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234412</td>
                                        <td>Geophysicist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233212</td>
                                        <td>Geotechnical Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>333111</td>
                                        <td>Glazier</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121315</td>
                                        <td>Goat Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232411</td>
                                        <td>Graphic Designer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323312</td>
                                        <td>Gunsmith</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>391111</td>
                                        <td>Hairdresser</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251999</td>
                                        <td>Health Diagnostic and Promotion Professionals nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251911</td>
                                        <td>Health Promotion Officer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121316</td>
                                        <td>Horse Breeder</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251511</td>
                                        <td>Hospital Pharmacist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>141311</td>
                                        <td>Hotel or Motel Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>223111</td>
                                        <td>Human Resource Adviser</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234413</td>
                                        <td>Hydrogeologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261111</td>
                                        <td>ICT Business Analyst</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>135199</td>
                                        <td>ICT Managers nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>135112</td>
                                        <td>ICT Project Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262112</td>
                                        <td>ICT Security Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232412</td>
                                        <td>Illustrator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233511</td>
                                        <td>Industrial Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251512</td>
                                        <td>Industrial Pharmacist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253317</td>
                                        <td>Intensive Care Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221214</td>
                                        <td>Internal Auditor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311115</td>
                                        <td>Irrigation Designer [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>331213</td>
                                        <td>Joiner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139913</td>
                                        <td>Laboratory Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232112</td>
                                        <td>Landscape Architect</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234511</td>
                                        <td>Life Scientist (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234599</td>
                                        <td>Life Scientists nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>341113</td>
                                        <td>Lift Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121399</td>
                                        <td>Livestock Farmers nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323313</td>
                                        <td>Locksmith</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221112</td>
                                        <td>Management Accountant</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234516</td>
                                        <td>Marine Biologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>225112</td>
                                        <td>Market Research Analyst</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>225113</td>
                                        <td>Marketing Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233112</td>
                                        <td>Materials Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233512</td>
                                        <td>Mechanical Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312511</td>
                                        <td>Mechanical Engineering Draftsperson</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312512</td>
                                        <td>Mechanical Engineering Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251211</td>
                                        <td>Medical Diagnostic Radiographer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234611</td>
                                        <td>Medical Laboratory Scientist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311213</td>
                                        <td>Medical Laboratory Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253314</td>
                                        <td>Medical Oncologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253999</td>
                                        <td>Medical Practitioners nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251212</td>
                                        <td>Medical Radiation Therapist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311299</td>
                                        <td>Medical Technicians nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322114</td>
                                        <td>Metal Casting Trades Worker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322311</td>
                                        <td>Metal Fabricator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323299</td>
                                        <td>Metal Fitters and Machinists nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323214</td>
                                        <td>Metal Machinist (First Class)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234912</td>
                                        <td>Metallurgist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234913</td>
                                        <td>Meteorologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234517</td>
                                        <td>Microbiologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>241311</td>
                                        <td>Middle School Teacher / Intermediate School Teacher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254111</td>
                                        <td>Midwife</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233611</td>
                                        <td>Mining Engineer (excluding Petroleum)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121323</td>
                                        <td>Mixed Cattle and Sheep Farmer [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>411412</td>
                                        <td>Mothercraft Nurse</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>321211</td>
                                        <td>Motor Mechanic (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>321213</td>
                                        <td>Motorcycle Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232413</td>
                                        <td>Multimedia Designer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261211</td>
                                        <td>Multimedia Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234999</td>
                                        <td>Natural and Physical Science Professionals nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>263113</td>
                                        <td>Network Analyst</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253318</td>
                                        <td>Neurologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253513</td>
                                        <td>Neurosurgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251213</td>
                                        <td>Nuclear Medicine Technologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254211</td>
                                        <td>Nurse Educator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254311</td>
                                        <td>Nurse Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254411</td>
                                        <td>Nurse Practitioner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254212</td>
                                        <td>Nurse Researcher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251112</td>
                                        <td>Nutritionist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253913</td>
                                        <td>Obstetrician and Gynaecologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251312</td>
                                        <td>Occupational Health and Safety Adviser</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252411</td>
                                        <td>Occupational Therapist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311214</td>
                                        <td>Operating Theatre Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253914</td>
                                        <td>Ophthalmologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251411</td>
                                        <td>Optometrist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272313</td>
                                        <td>Organisational Psychologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253514</td>
                                        <td>Orthopaedic Surgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251412</td>
                                        <td>Orthoptist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251912</td>
                                        <td>Orthotist or Prosthetist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252112</td>
                                        <td>Osteopath</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232214</td>
                                        <td>Other Spatial Scientist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253515</td>
                                        <td>Otorhinolaryngologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253516</td>
                                        <td>Paediatric Surgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253321</td>
                                        <td>Paediatrician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>332211</td>
                                        <td>Painting Trades Worker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>324111</td>
                                        <td>Panelbeater</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>351112</td>
                                        <td>Pastrycook</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253915</td>
                                        <td>Pathologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311216</td>
                                        <td>Pathology Collector / Phlebotomist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261317</td>
                                        <td>Penetration Tester [v2021]</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233612</td>
                                        <td>Petroleum Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>311215</td>
                                        <td>Pharmacy Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234914</td>
                                        <td>Physicist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252511</td>
                                        <td>Physiotherapist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394212</td>
                                        <td>Picture Framer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121318</td>
                                        <td>Pig Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253517</td>
                                        <td>Plastic and Reconstructive Surgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>334111</td>
                                        <td>Plumber (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312115</td>
                                        <td>Plumbing Inspector</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252611</td>
                                        <td>Podiatrist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121321</td>
                                        <td>Poultry Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323314</td>
                                        <td>Precision Instrument Maker and Repairer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322312</td>
                                        <td>Pressure Welder</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>241213</td>
                                        <td>Primary School Teacher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233513</td>
                                        <td>Production or Plant Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>133112</td>
                                        <td>Project Builder</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253411</td>
                                        <td>Psychiatrist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272399</td>
                                        <td>Psychologists nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272314</td>
                                        <td>Psychotherapist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>131114</td>
                                        <td>Public Relations Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139914</td>
                                        <td>Quality Assurance Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233213</td>
                                        <td>Quantity Surveyor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253918</td>
                                        <td>Radiation Oncologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>223112</td>
                                        <td>Recruitment Consultant</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254412</td>
                                        <td>Registered Nurse (Aged Care)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254413</td>
                                        <td>Registered Nurse (Child and Family Health)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254414</td>
                                        <td>Registered Nurse (Community Health)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254415</td>
                                        <td>Registered Nurse (Critical Care and Emergency)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254416</td>
                                        <td>Registered Nurse (Developmental Disability)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254417</td>
                                        <td>Registered Nurse (Disability and Rehabilitation)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254421</td>
                                        <td>Registered Nurse (Medical Practice)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254418</td>
                                        <td>Registered Nurse (Medical)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254422</td>
                                        <td>Registered Nurse (Mental Health)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254425</td>
                                        <td>Registered Nurse (Paediatrics)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254423</td>
                                        <td>Registered Nurse (Perioperative)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254424</td>
                                        <td>Registered Nurse (Surgical)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>254499</td>
                                        <td>Registered Nurses nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253322</td>
                                        <td>Renal Medicine Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253112</td>
                                        <td>Resident Medical Officer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251513</td>
                                        <td>Retail Pharmacist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253323</td>
                                        <td>Rheumatologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>334115</td>
                                        <td>Roof Plumber</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>333311</td>
                                        <td>Roof Tiler</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>131112</td>
                                        <td>Sales and Marketing Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323315</td>
                                        <td>Saw Maker and Repairer / Saw Doctor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>241411</td>
                                        <td>Secondary School Teacher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>121322</td>
                                        <td>Sheep Farmer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322211</td>
                                        <td>Sheetmetal Trades Worker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>321214</td>
                                        <td>Small Engine Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>272511</td>
                                        <td>Social Worker</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261399</td>
                                        <td>Software and Applications Programmers nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261313</td>
                                        <td>Software Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261314</td>
                                        <td>Software Tester</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>333212</td>
                                        <td>Solid Plasterer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>251214</td>
                                        <td>Sonographer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139999</td>
                                        <td>Specialist Managers nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253311</td>
                                        <td>Specialist Physician (General Medicine)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253399</td>
                                        <td>Specialist Physicians nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>252712</td>
                                        <td>Speech Pathologist / Speech Language Therapist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>139915</td>
                                        <td>Sports Administrator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>331112</td>
                                        <td>Stonemason</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233214</td>
                                        <td>Structural Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>133611</td>
                                        <td>Supply and Distribution Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253511</td>
                                        <td>Surgeon (General)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>312116</td>
                                        <td>Surveying or Spatial Science Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232212</td>
                                        <td>Surveyor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>262113</td>
                                        <td>Systems Administrator</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261112</td>
                                        <td>Systems Analyst</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>221113</td>
                                        <td>Taxation Accountant</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342212</td>
                                        <td>Technical Cable Jointer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342412</td>
                                        <td>Telecommunications Cable Jointer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342413</td>
                                        <td>Telecommunications Linesworker / Telecommunications Line Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>342414</td>
                                        <td>Telecommunications Technician</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323215</td>
                                        <td>Textile, Clothing and Footwear Mechanic</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253324</td>
                                        <td>Thoracic Medicine Specialist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>149413</td>
                                        <td>Transport Company Manager</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>233215</td>
                                        <td>Transport Engineer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>242111</td>
                                        <td>University Lecturer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>242112</td>
                                        <td>University Tutor</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>393311</td>
                                        <td>Upholsterer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232611</td>
                                        <td>Urban and Regional Planner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253518</td>
                                        <td>Urologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>253521</td>
                                        <td>Vascular Surgeon</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234711</td>
                                        <td>Veterinarian</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>242211</td>
                                        <td>Vocational Education Teacher / Polytechnic Teacher</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>333411</td>
                                        <td>Wall and Floor Tiler</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>323316</td>
                                        <td>Watch and Clock Maker and Repairer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>232414</td>
                                        <td>Web Designer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>261212</td>
                                        <td>Web Developer</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>322313</td>
                                        <td>Welder (First Class) (Aus) / Welder (NZ)</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394213</td>
                                        <td>Wood Machinist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394299</td>
                                        <td>Wood Machinists and Other Wood Trades Workers nec</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>394214</td>
                                        <td>Wood Turner</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>223113</td>
                                        <td>Workplace Relations Adviser</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                    </tr>
                                    <tr>
                                        <td>234518</td>
                                        <td>Zoologist</td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">Y</span><i
                                                class="fa fa-check fa-1x" style="color: teal;"></i></td>
                                        <td style="text-align: center;"><span
                                                style="color: transparent; visibility: hidden;">N</span><i
                                                class="fa fa-times fa-1x" style="color: indianred;"></i></td>
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