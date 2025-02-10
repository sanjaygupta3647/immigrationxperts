	<?php
	// Database configuration
	include('admin/db/db_connection.php');
	?>

	<?php
	$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
	<meta charset="UTF-8" />
	<!-- Canonical tag -->
	<link rel="canonical" href="<?php echo $canonical_url; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Study in New Zealand, Study Abroad Consultants for New Zealand</title>
	<meta name="description" content="Study in New Zealand, Study Abroad Consultants for New Zealand"/>
	 
	<meta property="og:title" content="Study in New Zealand, Study Abroad Consultants for New Zealand" />
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
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/Study-in-New-Zealand.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>

        </section>

        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
				<div class="container">
					<?php 
					include('admin/db/db_connection.php');
					function fetchTestimonialById($id) {
						global $conn;
						$testimonial = array();

						$sql = "SELECT * FROM testimonials WHERE id = $id"; // Adjust the query based on your table structure
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							$testimonial = $result->fetch_assoc();
						}

						return $testimonial;
					}

					// Get the testimonial ID from the URL parameter
					if (isset($_GET['id'])) {
						$testimonialId = $_GET['id'];
						$testimonial = fetchTestimonialById($testimonialId);

						// Display the testimonial details
						if ($testimonial) {
							$clientName = $testimonial['client_name'];
							$clientLocation = $testimonial['client_location'];
							$clientQuote = $testimonial['client_quote'];
							$clientImage = $testimonial['client_image'];
							$facebookLink = $testimonial['facebook_link'];
							$linkedinLink = $testimonial['linkedin_link'];
							?>
							<div class="row"> 
								<div class="col-xl-8 col-lg-7">
									<div class="news-details__left">
										<h2 class="section-title__title"><?php echo $clientName; ?></h2>
										<p class="about-one__text-2"><span><?php echo $clientLocation; ?></span></p>
										<p class="about-one__text-2"><?php echo $clientQuote; ?></p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-5">
									<div class="sidebar-info mt-4" id="sidebar">
										<div class="thumbnail">
											<img src="admin/images/testimonial/<?php echo $clientImage; ?>" alt="" class="img-fluid" alt="Gurugram-Contact-Us"> 
											<div class="loc-caption">
												<h5><?php echo $clientName; ?></h5>
												<a href="<?php echo $facebookLink; ?>" target="_blank"> <p class="mb-0"><strong>Facebook </strong> </a></p>
												<a href="<?php echo $linkedinLink; ?>" target="_blank"> <p class="mb-0"><strong>linkedin </strong></a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
						} else {
							echo "Testimonial not found!";
						}
					} else {
						echo "Testimonial ID is missing!";
					}
					?>
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



    <!-- template js -->
    <script src="/assets/js/insur.js"></script>
    <script src="/assets/js/country.js"></script>
</body>

</html>