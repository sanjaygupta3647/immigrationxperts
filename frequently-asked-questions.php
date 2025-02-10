<?php
// Database configuration
include('admin/db/db_connection.php');

// Fetch FAQs from the database
$query = "SELECT f.id, f.question, f.answer, c.name AS category 
          FROM faqs f 
          LEFT JOIN faqs_categories c ON f.category_id = c.id 
          ORDER BY f.sequence_order";

$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result === false) {
    // Output the error message
    echo "Error: " . mysqli_error($conn);
    exit; // Stop the script execution
}
 include 'metadata.php'; ?>
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
    
    
    <style type="text/css">
			.faq-button {
				transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition for the background and text color */
				padding: 15px; /* Add some padding for better click area */
				border-radius: 5px; /* Rounded corners for aesthetics */
			}

			.faq-button:hover {
				background-color: #007bff; /* Change background color on hover */
				color: #ffffff; /* Change text color on hover */
				text-decoration: none; /* Remove underline from the text */
			}

			.card-header {
				border: 1px solid #e0e0e0; /* Add border for better visibility */
				border-radius: 5px; /* Round the corners of the card header */
			}

			.card-header:hover {
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow effect on hover */
				background-color: #007bff; /* Change background color on hover */
				color: #ffffff; /* Change text color on hover */
				text-decoration: none; /* Remove underline from the text */
			}			
					
			.card-header:hover button {
				color: #ffffff; /* Change the text color of the button on hover */
				text-decoration: none; 
			}
			
			.faq-button {
				text-decoration: none; 
			}


		</style>
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
                        <li style="color: #ffffff;">FAQ</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Frequently Asked Questions</h2>
                </div>
            </div>
        </section>

        <!--Page Header End-->

        <section class="team-one">
			<div class="team-one__shape-1 float-bob-y">
				<img src="assets/images/shapes/team-one-shape-1.png" alt="">
			</div>
			<div class="container">
				<!--<div class="section-title text-center">
					<h1 class="section-title__title">Frequently Asked Questions</h1>
				</div> -->

				<div class="get-insurance__tab">
					<div class="get-insurance__tab-box tabs-box">
						<div class="container mt-4">
							<div class="accordion" id="faqAccordion">

								<?php if (mysqli_num_rows($result) > 0): ?>
									<?php 
									$counter = 1; // Initialize the counter variable
									while ($row = mysqli_fetch_assoc($result)): ?>
										<div class="card">
											<div class="card-header" id="heading<?php echo $row['id']; ?>">
												<h2 class="mb-0">
													<button class="btn btn-link btn-block text-left" type="button" 
															onclick="location.href='/frequently-asked-questions-details/?id=<?php echo $row['id']; ?>'" style="text-decoration: none;">
														<strong>Q.No. <?php echo $counter; ?>: </strong><?php echo htmlspecialchars($row['question']); ?>
													</button>
												</h2>
											</div>
										</div>
										<?php $counter++; // Increment the counter after each question ?>
									<?php endwhile; ?>
								<?php else: ?>
									<p>No FAQs available at the moment.</p>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

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