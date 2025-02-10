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
                    <h2 style="color: #b8e1f0;">Victoria SOL List</h2>
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
                            <h1 class="section-title__title">Victoria SOL List</h1>
                            <br>
							<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ANZSCO</th>
                                        <th>Name</th>
                                        <th>General Skilled List</th>
                                        <th>List for Graduates</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row-2">
                                        <td>132311</td>
                                        <td>Human Resource Manager</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-3">
                                        <td>134111</td>
                                        <td>Child Care Centre Manager</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-4">
                                        <td>135112</td>
                                        <td>ICT Project Manager</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-5">
                                        <td>141311</td>
                                        <td>Hotel or Motel Manager</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-6">
                                        <td>224112</td>
                                        <td>Mathematician</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-7">
                                        <td>224213</td>
                                        <td>Health Information Manager</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-8">
                                        <td>233211</td>
                                        <td>Civil Engineer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-9">
                                        <td>233311</td>
                                        <td>Electrical Engineer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-10">
                                        <td>233512</td>
                                        <td>Mechanical Engineer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-11">
                                        <td>233914</td>
                                        <td>Engineering Technologist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-12">
                                        <td>234111</td>
                                        <td>Agricultural Consultant</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-13">
                                        <td>234112</td>
                                        <td>Agricultural Scientist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-14">
                                        <td>234711</td>
                                        <td>Veterinarian</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-15">
                                        <td>234914</td>
                                        <td>Physicist</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-16">
                                        <td>241111</td>
                                        <td>Early Childhood (Pre-primary School) Teacher</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-17">
                                        <td>241213</td>
                                        <td>Primary School Teacher</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-18">
                                        <td>241411</td>
                                        <td>Secondary School Teacher</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-19">
                                        <td>251111</td>
                                        <td>Dietitian</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-20">
                                        <td>251213</td>
                                        <td>Nuclear Medicine Technologist</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-21">
                                        <td>251214</td>
                                        <td>Sonographer</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-22">
                                        <td>252411</td>
                                        <td>Occupational Therapist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-23">
                                        <td>252511</td>
                                        <td>Physiotherapist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-24">
                                        <td>252611</td>
                                        <td>Podiatrist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-25">
                                        <td>252712</td>
                                        <td>Speech Pathologist / Speech Language Therapist</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-26">
                                        <td>254111</td>
                                        <td>Midwife</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-27">
                                        <td>254411</td>
                                        <td>Nurse Practitioner</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-28">
                                        <td>254412</td>
                                        <td>Registered Nurse (Aged Care)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-29">
                                        <td>254413</td>
                                        <td>Registered Nurse (Child and Family Health)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-30">
                                        <td>254414</td>
                                        <td>Registered Nurse (Community Health)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-31">
                                        <td>254415</td>
                                        <td>Registered Nurse (Critical Care and Emergency)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-32">
                                        <td>254416</td>
                                        <td>Registered Nurse (Developmental Disability)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-33">
                                        <td>254417</td>
                                        <td>Registered Nurse (Disability and Rehabilitation)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-34">
                                        <td>254418</td>
                                        <td>Registered Nurse (Medical)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-35">
                                        <td>254421</td>
                                        <td>Registered Nurse (Medical Practice)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-36">
                                        <td>254422</td>
                                        <td>Registered Nurse (Mental Health)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-37">
                                        <td>254423</td>
                                        <td>Registered Nurse (Perioperative)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-38">
                                        <td>254424</td>
                                        <td>Registered Nurse (Surgical)</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-39">
                                        <td>254499</td>
                                        <td>Registered Nurses nec</td>
                                        <td>y</td>
                                        <td>y</td>
                                    </tr>
                                    <tr class="row-40">
                                        <td>261111</td>
                                        <td>ICT Business Analyst</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-41">
                                        <td>261112</td>
                                        <td>Systems Analyst</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-42">
                                        <td>261311</td>
                                        <td>Analyst Programmer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-43">
                                        <td>261312</td>
                                        <td>Developer Programmer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-44">
                                        <td>261313</td>
                                        <td>Software Engineer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-45">
                                        <td>261314</td>
                                        <td>Software Tester</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-46">
                                        <td>262111</td>
                                        <td>Database Administrator</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-47">
                                        <td>262112</td>
                                        <td>ICT Security Specialist</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-48">
                                        <td>263111</td>
                                        <td>Computer Network and Systems Engineer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-49">
                                        <td>272311</td>
                                        <td>Clinical Psychologist</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-50">
                                        <td>272412</td>
                                        <td>Interpreter</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-51">
                                        <td>272511</td>
                                        <td>Social Worker</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-52">
                                        <td>312211</td>
                                        <td>Civil Engineering Draftsperson</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-53">
                                        <td>312311</td>
                                        <td>Electrical Engineering Draftsperson</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-54">
                                        <td>322211</td>
                                        <td>Sheetmetal Trades Worker</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-55">
                                        <td>322311</td>
                                        <td>Metal Fabricator</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-56">
                                        <td>322313</td>
                                        <td>Welder (First Class) (Aus) / Welder (NZ)</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-57">
                                        <td>323214</td>
                                        <td>Metal Machinist (First Class)</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-58">
                                        <td>334112</td>
                                        <td>Airconditioning and Mechanical Services Plumber</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-59">
                                        <td>334113</td>
                                        <td>Drainer / Drainlayer</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-60">
                                        <td>334114</td>
                                        <td>Gasfitter</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-61">
                                        <td>334115</td>
                                        <td>Roof Plumber</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-62">
                                        <td>342111</td>
                                        <td>Airconditioning and Refrigeration Mechanic</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-63">
                                        <td>342313</td>
                                        <td>Electronic Equipment Trades Worker</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-64">
                                        <td>342413</td>
                                        <td>Telecommunications Linesworker / Telecommunications Line Mechanic</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-65">
                                        <td>351111</td>
                                        <td>Baker</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-66">
                                        <td>351112</td>
                                        <td>Pastrycook</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-67">
                                        <td>351311</td>
                                        <td>Chef</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-68">
                                        <td>351411</td>
                                        <td>Cook</td>
                                        <td>y</td>
                                        <td>n</td>
                                    </tr>
                                    <tr class="row-69">
                                        <td>394111</td>
                                        <td>Cabinetmaker</td>
                                        <td>y</td>
                                        <td>n</td>
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