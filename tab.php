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
    <title> Immigration Expert </title>
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
    <link rel="stylesheet" href="/assets/css/custome.css" />

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

    <?php include 'header.php';?>

    <div class="page-wrapper">

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/About-Immigration.jpg)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>About</li>
                    </ul>
                    <h2>&nbsp;</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <div class="container">
            <div class="get-insurance__tab">
                <div class="get-insurance__tab-box tabs-box">
                    <div class="row tab-buttons four clearfix list-unstyled">
                        <div class=" btn-column btn-four">
                            <div data-tab="#requirement" class="tab-btn four active-btn">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/education.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Requirements</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-column btn-four">
                            <div data-tab="#visa" class="tab-btn four">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/immigration.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Visa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" btn-column btn-four">
                            <div data-tab="#document" class="tab-btn four">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/immigration.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Documentation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" btn-column btn-four">
                            <div data-tab="#process" class="tab-btn four">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/tourist.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Process</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" btn-column btn-four">
                            <div data-tab="#cost" class="tab-btn four">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/tourist.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Cost Details</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-column btn-four">
                            <div data-tab="#time" class="tab-btn four">
                                <div class="get-insuracne-four__tab-btn-content">
                                    <div class="get-insuracne-four__tab-icon">
                                        <img src="/assets/images/icon/tourist.png" alt="">
                                    </div>
                                    <div class="get-insuracne-four__tab-text-box">
                                        <p class="get-insuracne-four__tab-text">Validity & Processing Time</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="requirement">
                            <div class="get-insurance__content">
                                <div class="we-provide__tab-main-content-inner">
                                    <div class="we-provide__tab-main-content-left">
                                        <h3 class="feature-two__text">Key Requirements</h3>
                                        <p class="about-one__text-2">So as to fit the bill for a Subclass 189
                                            visa, you would need to:</p>
                                        <ul class="list-unstyled about-two__points">
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Lodge an EOI and be invited to apply</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Meet the pass mark in the talented migration points test
                                                        – at present 65</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Be in the age group of 18 and 44 inclusive</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Pass Skills Assessment in an occupation on the
                                                        Occupations List for Skilled Independent visas</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Have Competent English or higher</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="text">
                                                    <p>Meet health as well as character necessities</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="visa">
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptate consequuntur
                                animi soluta dolore alias sapiente. Porro odit accusantium omnis, rerum ratione
                                reprehenderit delectus ab perspiciatis necessitatibus quam molestiae aliquid? </p>
                        </div>
                        <!--tab-->
                        <div class="tab" id="document">
                            <div class="get-insurance__content">
                                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptate
                                    consequuntur animi soluta dolore alias sapiente. Porro odit accusantium omnis, rerum
                                    ratione reprehenderit delectus ab perspiciatis necessitatibus quam molestiae
                                    aliquid? </p>
                            </div>
                        </div>
                        <!--tab-->
                        <div class="tab" id="process">
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptate consequuntur
                                animi soluta dolore alias sapiente. Porro odit accusantium omnis, rerum ratione
                                reprehenderit delectus ab perspiciatis necessitatibus quam molestiae aliquid? </p>
                        </div>
                        <!--tab-->
                        <div class="tab" id="cost">
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptate consequuntur
                                animi soluta dolore alias sapiente. Porro odit accusantium omnis, rerum ratione
                                reprehenderit delectus ab perspiciatis necessitatibus quam molestiae aliquid? </p>
                        </div>
                        <!--tab-->
                        <div class="tab" id="time">
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est, voluptate consequuntur
                                animi soluta dolore alias sapiente. Porro odit accusantium omnis, rerum ratione
                                reprehenderit delectus ab perspiciatis necessitatibus quam molestiae aliquid? </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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



    <!-- template js -->
    <script src="/assets/js/insur.js"></script>
    <script src="/assets/js/country.js"></script>
</body>


<!-- Mirrored from layerdrops.com/insur/main-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 16:54:55 GMT -->

</html>