<?php
// Database configuration
include('admin/db/db_connection.php');

// Fetch the FAQ details based on the ID passed in the URL
if (isset($_GET['id'])) {
    $faq_id = intval($_GET['id']); // Ensure the ID is an integer

    // Fetch the FAQ details
    $faq_query = "
        SELECT f.id, f.question, f.answer 
        FROM faqs f 
        WHERE f.id = ?";

    // Prepare statement to prevent SQL injection
    if ($stmt = mysqli_prepare($conn, $faq_query)) {
        mysqli_stmt_bind_param($stmt, "i", $faq_id);
        mysqli_stmt_execute($stmt);
        $faq_result = mysqli_stmt_get_result($stmt);
        $faq_details = mysqli_fetch_assoc($faq_result);
        mysqli_stmt_close($stmt);
    }

    if ($faq_details) {
        // Fetch the categories of the current FAQ from faqs_manage table
        $categories_query = "
            SELECT category_id 
            FROM faqs_manage 
            WHERE faq_id = ?";

        if ($cat_stmt = mysqli_prepare($conn, $categories_query)) {
            mysqli_stmt_bind_param($cat_stmt, "i", $faq_id);
            mysqli_stmt_execute($cat_stmt);
            $categories_result = mysqli_stmt_get_result($cat_stmt);

            $category_ids = [];
            while ($cat_row = mysqli_fetch_assoc($categories_result)) {
                $category_ids[] = $cat_row['category_id'];
            }

            mysqli_stmt_close($cat_stmt);
        }

        if (!empty($category_ids)) {
            // Prepare a query to find similar FAQs based on the categories in faqs_manage table
            $category_placeholders = implode(',', array_fill(0, count($category_ids), '?'));

            // Fetch similar FAQs
			$similar_faqs_query = "
				SELECT DISTINCT f.id, f.question, f.sequence_order  -- Add f.sequence_order to the SELECT clause
				FROM faqs f
				INNER JOIN faqs_manage fm ON f.id = fm.faq_id
				WHERE fm.category_id IN ($category_placeholders) AND f.id != ?
				ORDER BY f.sequence_order
				LIMIT 5";

			if ($similar_stmt = mysqli_prepare($conn, $similar_faqs_query)) {
				// Create an array with both category_ids and faq_id
				$params = array_merge($category_ids, [$faq_id]);

				// Dynamically bind parameters (category_ids and faq_id)
				$types = str_repeat('i', count($category_ids)) . 'i'; // All are integers
				mysqli_stmt_bind_param($similar_stmt, $types, ...$params);
				mysqli_stmt_execute($similar_stmt);
				$similar_faqs_result = mysqli_stmt_get_result($similar_stmt);
				mysqli_stmt_close($similar_stmt);
			}

        }

        // If no similar FAQs found, fetch some random FAQs
        if (mysqli_num_rows($similar_faqs_result) == 0) {
            $all_faqs_query = "SELECT id, question FROM faqs ORDER BY RAND() LIMIT 5";
            $all_faqs_result = mysqli_query($conn, $all_faqs_query);
        }
    } else {
        // Redirect if the FAQ ID is not found
        header("Location: /frequently-asked-questions/");
        exit;
    }
} else {
    // Redirect if no ID is provided
    header("Location: /frequently-asked-questions/");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"> <!-- Set the character encoding to UTF-8 -->
    <!-- Canonical tag -->
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>   Frequently Asked Questions (FAQs) </title>
    <meta name="description" content="Frequently Asked Questions (FAQs) "/>
    <meta property="og:title" content="Frequently Asked Questions (FAQs) " />
    <meta property="og:description" content="Frequently Asked Questions (FAQs) " />
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
    
    <style>
		.faq-details-container .card {
			border: 1px solid #e0e0e0;
			border-radius: 8px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}

		.similar-faqs ul.list-group li.list-group-item {
			transition: background-color 0.2s ease, transform 0.2s ease;
		}

		.similar-faqs ul.list-group li.list-group-item:hover {
			background-color: #f7f7f7;
			transform: scale(1.02);
		}

		.similar-faqs h2 {
			font-size: 24px;
			font-weight: 600;
			color: #007bff;
		}

		.faq-details-container h1 {
			font-size: 28px;
			font-weight: 700;
		}

		.faq-details-container p {
			font-size: 18px;
			line-height: 1.7;
			color: #555;
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
       
        
        <!--Page Header End-->

        <section class="team-two">
            <div class="container">
                <div class="get-insurance__tab">
                    <div class="get-insurance__tab-box tabs-box">
                        <div class="container mt-4">
                            <div class="accordion" id="faqAccordion">
                                <div class="faq-details-container">
                                    <!-- Main FAQ Detail Section -->
                                    <div class="card mb-4">
                                        <div class="card-body">
											<h1 class="card-title mb-4 text-primary">
												<?php echo htmlspecialchars($faq_details['question']); ?>
											</h1>
											<p class="card-text text-muted">
												<?php echo nl2br($faq_details['answer']); ?>
											</p>
											
											<a href="/frequently-asked-questions/" class="btn btn-outline-primary search-type-btn  mt-4"> <span class="btn-noc">Back to Frequently Asked Questions</span> </a>

										</div>
                                    </div>

                                    <!-- Similar FAQs Section -->
                                    <div class="similar-faqs mt-4">
										<h3 class="mb-3" style="padding-left: 13px;">Similar FAQs</h3>
										<ul class="list-group list-group-flush">
											<?php if (isset($similar_faqs_result) && mysqli_num_rows($similar_faqs_result) > 0): ?>
												<?php while ($similar_row = mysqli_fetch_assoc($similar_faqs_result)): ?>
													<li class="list-group-item">
														<a href="/frequently-asked-questions-details/?id=<?php echo $similar_row['id']; ?>" class="text-decoration-none text-dark">
															<strong><?php echo htmlspecialchars($similar_row['question']); ?></strong>
														</a>
													</li>
												<?php endwhile; ?>
											<?php elseif (isset($all_faqs_result) && mysqli_num_rows($all_faqs_result) > 0): ?>
												<p>No similar FAQs available. Here are some other FAQs:</p>
												<?php while ($other_row = mysqli_fetch_assoc($all_faqs_result)): ?>
													<li class="list-group-item">
														<a href="/frequently-asked-questions-details/?id=<?php echo $other_row['id']; ?>" class="text-decoration-none text-dark">
															<strong><?php echo htmlspecialchars($other_row['question']); ?></strong>
														</a>
													</li>
												<?php endwhile; ?>
											<?php else: ?>
												<p>No other FAQs available.</p>
											<?php endif; ?>
										</ul>
									</div>

                                </div>
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