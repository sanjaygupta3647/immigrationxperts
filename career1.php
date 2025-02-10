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
    <title> Exciting Career Opportunities at immigrationxperts | Current Openings </title>
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
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/career.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>
        </section>

        <div class="container mt-4">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>/</span></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
        <!--Page Header End-->

        <!--Team Page Start-->
			<section>
				<div class="container mt-5 mb-5">
					<?php
					include 'image-gallery/config/db.php';
					$database = new Database();
						// Get a database connection
						$conn = $database->getConnection();
					?>

					<div class="row">
						<div class="col-12">
							<div class="tabs-style-2 nav nav-tabs hide-scrollbar" id="nav-tab" role="tablist">
								<?php
								// Fetch job categories from the database
								$sql_tabs = "SELECT * FROM tabs";
								$result_tabs = $conn->query($sql_tabs);

								// Check if there are categories
								if ($result_tabs->num_rows > 0) {
									$firstTab = true;
									while ($row_tab = $result_tabs->fetch_assoc()) {
										$tabId = $row_tab["tab_id"];
										$tabName = $row_tab["tab_name"];

										// Output tab navigation link
										echo '<a class="nav-link h5 fw-500 text-black ' . ($firstTab ? 'active' : '') . '" data-bs-toggle="tab" href="#tab' . $tabId . '" role="tab" aria-selected="' . ($firstTab ? 'true' : 'false') . '">' . $tabName . '</a>';

										$firstTab = false; // Set flag to false after the first tab
									}
								}
								?>
							</div>
						</div>
					
					    <div class="col-12 position-relative">
    <div class="bg-primary blur-75 position-absolute start-0 top-0 w-h-60"> </div>
    <div class="tab-content position-relative">
        <?php
        // Fetch job listings based on categories
        $sql_listings = "SELECT * FROM job_listings ORDER BY tab_id ASC, id DESC";  // Order by tab_id to group listings by tab
        $result_listings = $conn->query($sql_listings);

        $currentTabId = null;  // Initialize current tab ID

        if ($result_listings->num_rows > 0) {
            while ($row_listing = $result_listings->fetch_assoc()) {
                // Extract job details from $row_listing
                $tabId = $row_listing["tab_id"];
                $jobTitle = $row_listing["job_title"];
                $openings = $row_listing["openings"];
                $location = $row_listing["location"];
                $jobType = $row_listing["job_type"];
                $description = $row_listing["description"];

                // Check if tab ID has changed
                if ($tabId !== $currentTabId) {
                    // If tab ID has changed, close previous tab pane
                    if ($currentTabId !== null) {
                        echo '</div>'; // Closing accordion div
                        echo '</div>'; // Closing tab-pane div
                    }
                    // Output new tab-pane for the current tab ID
                    echo '<div class="tab-pane fade mt-4 ' . ($currentTabId === null ? 'active show' : '') . '" id="tab' . $tabId . '" role="tabpanel">';
                    echo '<div class="accordion accordion-flush" id="accordionFlush' . $tabId . '">';
                    $currentTabId = $tabId;  // Update current tab ID
                }

                // Output job listing details in accordion format
                echo '<div class="accordion-item border-white mb-3 rounded-4 shadow-lg mb-3">';
                echo '<div class="accordion-header">';
                echo '<div class="row align-items-center g-0">';
                echo '<div class="col-12 col-md">';
                echo '<div class="accordion-button after-none bg-transparent h5 mb-0 d-block cursor-pointer" data-bs-toggle="collapse" data-bs-target="#flush-collapse' . $tabId . '-' . $row_listing['id'] . '" aria-expanded="false">';
                echo '<div class="mb-2">' . $jobTitle . '</div>';
                echo '<div class="fw-500 small text-muted">';
                echo '<div class="row">';
                echo '<div class="col-md-auto small">Numbers of Opening: <span class="fw-bold">' . $openings . '</span></div>';
                echo '<div class="col-md-auto small">Location: <span class="fw-bold">' . $location . '</span></div>';
                echo '<div class="col-md-auto small">Type: <span class="fw-bold">' . $jobType . '</span></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-12 col-md-auto">';
                echo '<a href="#" class="btn btn-danger btn-lg fw-500 text-white mx-3 mb-md-0 mb-3 apply-btn" 
                            data-bs-toggle="modal" data-bs-target="#applyModal" data-job-title="' . htmlspecialchars($jobTitle) . '">
                            <span class="fs-6">Apply Now</span>
                        </a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div id="flush-collapse' . $tabId . '-' . $row_listing['id'] . '" class="accordion-collapse collapse" data-bs-parent="#accordionFlush' . $tabId . '">';
                echo '<div class="accordion-body">' . $description . '</div>';
                echo '<a href="#" class="btn btn-info btn-lg fw-500 text-white mx-3 mb-md-3 mb-3 apply-btn" 
                            data-bs-toggle="modal" data-bs-target="#applyModal" data-job-title="' . htmlspecialchars($jobTitle) . '">
                            <span class="fs-6">Apply Now</span>
                        </a>';

                // URL encoding for social media share links
                $jobTitleEncoded = urlencode($jobTitle);
                $jobDescriptionEncoded = urlencode($description);
                $canonical_url = "https://www.immigrationxperts.com/career1/?id=" . $row_listing['id']; // Replace with your actual job detail URL
                $shareUrl = urlencode($canonical_url);

                // Social media share links
                echo '<div class="social-links-list">sssss';
                echo '<a class="ki-facebook mx-2" target="_blank" title="Share Job on Facebook" href="https://www.facebook.com/sharer/sharer.php?u=' . $shareUrl . '&quote=' . $jobTitleEncoded . ' - ' . $jobDescriptionEncoded . '&src=sdkpreparse"></a>';
                echo '<a class="ki-linkedin mx-2" target="_blank" title="Share Job on LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&url=' . $shareUrl . '&title=' . $jobTitleEncoded . '&summary=' . $jobTitleEncoded . ' - ' . $jobDescriptionEncoded . '"></a>';
                echo '<a class="ki-twitter mx-2" target="_blank" title="Share Job on Twitter" href="https://twitter.com/share?url=' . $shareUrl . '&text=' . $jobTitleEncoded . ' - ' . $jobDescriptionEncoded . '"></a>';
                echo '</div>';

                echo '</div>';
                echo '</div>';
            }

            // Close the last tab-pane if needed
            if ($currentTabId !== null) {
                echo '</div>'; // Closing accordion div
                echo '</div>'; // Closing tab-pane div
            }
        } else {
            echo "No job listings available";
        }
        ?>
    </div>
</div>

					    
					</div>

					<?php
					// Close database connection
					$conn->close();
					?>
				</div>
			</section>


        <!--Team Page End-->


        <?php include 'partner.php';?>
        <?php include 'footer.php';?>

    </div><!-- /.page-wrapper -->
	<!-- Modal -->
		<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="applyModalLabel">Apply for Job</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<!-- Form inside modal -->
						<form id="careerForm" enctype="multipart/form-data" class="comment-one__form contact-form-validated" novalidate="novalidate" style="padding: 20px; border: 1px solid #ccc; border-radius: 10px;">
                            <!-- Form inputs -->
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="name">Your name:</label>
                                        <input type="text" placeholder="Your name" id="name" name="name" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="email">Email address:</label>
                                        <input type="email" placeholder="Email address" id="email" name="email" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="phone">Phone number:</label>
                                        <input type="text" placeholder="Phone number" id="phone" name="phone" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="location">Current Location:</label>
                                        <input type="text" placeholder="Current Location" id="location" name="location" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="job_title">Applied For:</label>
                                        <input type="text" placeholder="Applied For" id="jobTitleInput" readonly name="job_title" value="" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box" style="margin-bottom: 15px;">
                                        <label for="resume">Upload Resume:</label>
                                        <input type="file" placeholder="Upload Resume" id="resume" name="resume" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__btn-box">
                                        <button type="button" id="submitForm" class="thm-btn comment-form__btn" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Send a Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>



					</div>
				</div>
			</div>
		</div>


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


		<script>
			var applyModal = document.getElementById('applyModal');
			applyModal.addEventListener('show.bs.modal', function (event) {
				var button = event.relatedTarget; // Button that triggered the modal
				var jobTitle = button.getAttribute('data-job-title'); // Extract job title from data attribute
				var jobTitleInput = applyModal.querySelector('#jobTitleInput'); // Find the hidden input field
				jobTitleInput.value = jobTitle; // Set the value of the hidden input field to the job title
			});
		</script>
		
		<script>
            $(document).ready(function() {
                $('#submitForm').click(function() {
                    // Validate form
                    var form = $('#careerForm')[0];
                    if (form.checkValidity() === false) {
                        form.reportValidity();
                        return;
                    }
        
                    // Serialize form data
                    var formData = new FormData(form);
        
                    // Send AJAX request
                    $.ajax({
                        type: 'POST',
                        url: '/jobemail/', // Replace with your backend script URL
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // Display a success message (you can customize this)
                            alert("Thanks for submitting your application!");
        
                            // Redirect to a success page or reload current page
                            window.location.href = "/career1/";
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            alert("Sorry, there was an error submitting your application. Please try again later.");
                        }
                    });
                });
            });
        </script>

    <!-- template js -->
    <script src="/assets/js/insur.js"></script>
    <script src="/assets/js/country.js"></script>
</body>

</html>