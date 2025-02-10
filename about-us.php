
<?php

include_once 'image-gallery/config/Database.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Create an instance of the Database class
$database = new Database();
// Get the database connection
$conn = $database->getConnection();

// Fetch timeline data
$sql = "SELECT * FROM about_timeline ORDER BY year DESC";
$result = $conn->query($sql);
$timelineData = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $timelineData[] = $row;
    }
} else {
    echo "No data found";
}
$conn->close();


include 'metadata.php'; 

?>
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
       <section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;">About Us</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Apical Immigration Experts</h2>
                </div>
            </div>
        </section>

        <!--Page Header End-->


        <!--About Four Start-->
        <section class="about-four">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="about-four__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-four__img">
                                    <img src="/assets/images/resources/about-four-img-1.jpg" alt="" loading="lazy">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="/assets/images/resources/about-four-img-2.jpg" alt="" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="section-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">About Immigration</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                                <h1 class="section-title__title">Immigration Experts™</h1>
                            </div>
                            <p class="about-four__text-2">Our forte lies in providing proper guidance and step-by-step
                                method following so that the client gets the complete knowledge on visa processing.At
                                Immigration experts, we aim to provide specialization in migration to foreign countries,
                                advisory services and other immigration-related services in order to help the global
                                community. We have made our niche market in the business by providing expert advice and
                                immigration assistance for those aspiring to settle, work or study in Australia | Hong kong | Newzealand | Denmark | United Kingdom</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Four End-->

        <!--Why Choose Two Start-->
        <section class="about-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Individual Approach</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">Our immigration advisors and Experts will go through your
                                case in depth and provide you with the best guidance possible. We will show you the
                                strengths and weaknesses of your case and walk you through all of the procedures step by
                                step. We will pay close attention to all required papers and submission dates. You don't
                                have to be concerned since our team will keep you up to date on your case and answer any
                                concerns you may have. We don't treat our clients like numbers; each case is significant
                                to us, and we put out every effort to get the best results possible. Its not just a file
                                , its your life with dreams to settle abroad through experts !
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left pt-4">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Transparency and Truthfulness</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">We place a high value on trust. We give our clients honest
                                legal advice that is in their best interests. Honesty is our major asset & we are happy
                                to say NO rather than giving false hopes." Immigration Experts is a trusted immigration
                                consultation law firm that works with worldwide clients. We are always realistic about
                                expect actions and the chances of its fulfilment. We are always looking ahead to provide
                                transparent consultation to our clients assisting in their dream immigration. Our vision
                                stands as becoming the leader in immigration services as a trusted immigration
                                consultancy with standard service and client oriented. Client success are also ours.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left pt-4">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Experience and Knowledge</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">Changes in immigration legislation are followed by everyone
                                in our organization. Because of our many years of expertise, we are able to handle every
                                matter swiftly and effectively. This is demonstrated by the constantly growing group of
                                satisfied Clients. Each case is unique, but we take the time to get to know our
                                customers and find the best solution for them. We are licensed experts who are
                                constantly expanding our expertise through professional development initiatives.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left pt-4">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Fast and Convenient</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">We can assist you regardless of your present location. We
                                can assist you through phone or Skype thanks to our online consultation. Our customers
                                can always count on us. We only accept instances in which we have faith and feel we can
                                assist. We ensure in being fast , convenient & accurate on all the information provided
                                to you in simple yet effective manner which is in coherence with your individual profile
                                and understanding your case agreements and challenges.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left pt-4">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">High Success Rate</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">We can't guarantee a 100 percent success record as an honest
                                firm, but we do give each case our undivided attention in order to optimize their
                                chances of success. You may browse testimonials from our clientele on our website. We
                                have a very high referral rate from our happy customers.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="why-choose-two__left pt-4">
                            <div class="abt-title text-left">
                                <div class="section-sub-title-box">
                                    <p class="section-sub-title">Affordable Prices</p>
                                    <div class="section-title-shape-1">
                                        <img src="/assets/images/shapes/section-title-shape-1.png" alt="">
                                    </div>
                                    <div class="section-title-shape-2">
                                        <img src="/assets/images/shapes/section-title-shape-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <p class="why-choose-two__text">We are offering professional service to our clients with
                                really reasonable prices. We do not inflate our rates in comparison to other that deal
                                with comparable operations, and all costs are extremely open. We offer all expenses from
                                the beginning, with no hidden extra fees.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--Why Choose Two End-->
        
        <!-- Timeline Start -->
		<section class="timeline">
			<div class="container">
				<div class="history-title text-center">
					<h2 class="txt mt-4">Immigration Experts History</h2>
				</div>
			</div>
			<div class="container">
				<div class="get-insurance__tab">
					<div class="get-insurance__tab-box tabs-box">
						<div id="timeline-buttons" class="row tab-buttons clearfix list-unstyled">
							<?php foreach($timelineData as $index => $item): ?>
							<div class="col-lg-2 col-md-6 col-sm-12 btn-column">
								<div data-tab="#<?= $item['year'] ?>" class="tab-btn <?= $index === 0 ? 'active-btn' : '' ?>">
									<div class="get-insuracne-two__tab-btn-content">
										<div class="get-insuracne-two__tab-text-box">
											<p class="get-insuracne-two__tab-text"><?= $item['year'] ?></p>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="tabs-content" id="timeline-content">
							<?php foreach($timelineData as $index => $item): ?>
							<div class="tab <?= $index === 0 ? 'active-tab' : '' ?>" id="<?= $item['year'] ?>">
								<div class="get-insurance__content">
									<div class="we-provide__tab-main-content-inner">
										<div class="we-provide__tab-main-content-left">
											<h3 class="feature-two__text"><?= $item['title'] ?></h3>
											<p><?= $item['content'] ?></p>
										</div>
										<div class="we-provide__tab-main-content-right">
											<div class="we-provide__tab-main-content-right-img">
												<img src="<?= $item['image'] ?>" alt="" style="height: 200px;">
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<script>
		$(document).ready(function () {
			// Tab functionality
			$('.tab-btn').on('click', function (e) {
				e.preventDefault();
				var target = $(this).data('tab');

				// Change active tab
				$('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');

				// Show active content
				$('.tab').removeClass('active-tab');
				$(target).addClass('active-tab');
			});
		});
		</script>
        <!--timeline Start-->
        
        <section class="we-provide">
            <div class="we-provide-bg" style="background-image: url(/assets/images/backgrounds/we-provide-bg.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-four__single">
                            <div class="feature-four__single-top">
                                <h4 class="feature-four__title">Mission</h4>
                            </div>
                            <ul class="list-unstyled feature-four__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Empower dreams through global education.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Foster growth and shape future aspirations.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Cultivate minds, transcend borders, redefine possibilities.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Illuminate paths, build bridges, open doors.</p>
                                    </div>
                                </li>
								<li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Ignite passions, fuel ambitions, craft destinies.</p>
                                    </div>
                                </li>
								
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="feature-four__single">
                            <div class="feature-four__single-top">
                                <h4 class="feature-four__title">Our Value</h4>
                            </div>
                            <ul class="list-unstyled feature-four__points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We believe in People</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We are Passionate</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We share a Common Goal</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We Target Excellence</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>We value our Values</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 mt-4">
                    <div class="we-provide__tab-main-content-inner">
                        <div class="we-provide-shape-1">
                            <img src="/assets/images/shapes/we-provide-shape-1.png" alt="">
                        </div>
                        <div class="we-provide__tab-main-content-left">
                            <h3 class="we-provide__tab-main-content-title">Vision</h3>
                            <p class="we-provide__tab-main-content-text">To build trust in society with Transparency
                            </p>
                            <ul class="list-unstyled we-provide__tab-main-content-points">
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Credibility, we act with professionalism</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Collaboration, we apply interpersonal skills</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Integrity, we commit to our agreements</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Mission Zero Defect Always</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Reasonable consultation charges</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="we-provide__tab-main-content-right">
                            <div class="we-provide__tab-main-content-right-img">
                                <img src="/assets/images/resources/we-provide-tab-main-content-right-img-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>


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
</body>

</html>