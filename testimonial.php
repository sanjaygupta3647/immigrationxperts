<?php 

include 'metadata.php'; 

// Your YouTube Data API key
$apiKey = 'AIzaSyDiSbftC8e1WzHeSYQPaDOrz-i682YurU4';

// The Playlist ID from the URL
$playlistId = 'PL85uslJj34bP0WtYNIJfom1jcmTFLiWsn';

// The YouTube API URL to fetch playlist items
$apiUrl = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=6&playlistId=' . $playlistId . '&key=' . $apiKey;

// Fetch the API response
$response = file_get_contents($apiUrl);

// Decode the JSON response
$data = json_decode($response, true);

// Check if data was fetched successfully
if ($data && isset($data['items'])) {
    // Store the items in a variable to be used in HTML
    $items = $data['items'];
    $nextPageToken = isset($data['nextPageToken']) ? $data['nextPageToken'] : null;
} else {
    $items = [];
    $error = "Error fetching data from YouTube API.";
}

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
    
    
    <style>
        .video-frame {
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            position: relative;
        }
        .video-frame iframe {
            position: absolute;
            width: 100%;
            height: 100%;
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
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(/assets/images/backgrounds/Review.webp)">
            </div>
            <div class="page-header-shape-1"><img src="/assets/images/shapes/page-header-shape-1.png" alt=""></div>

        </section>

        <div class="container mt-4">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>/</span></li>
                    <li>Review</li>
                </ul>
            </div>
        </div>
        <!--Page Header End-->

        <section class="team-one">
            <div class="team-one__shape-1 float-bob-y">
                <img src="/assets/images/shapes/team-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <h1 class="section-title__title">Our Clients Review</h1>
                </div>

                <div class="get-insurance__tab">
                    <div class="get-insurance__tab-box tabs-box">
                        <div class="row tab-buttons clearfix list-unstyled">
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column"></div>
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div data-tab="#youtube" class="tab-btn active-btn">
                                    <div class="get-insuracne-two__tab-btn-content ytb-btn">
                                        <div class="get-insuracne-two__tab-icon">
                                            <img src="/assets/images/icon/youtube.png" alt="">
                                        </div>
                                        <div class="get-insuracne-two__tab-text-box">
                                            <p class="get-insuracne-two__tab-text">Youtube</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-6 col-sm-12 btn-column">
                                <div data-tab="#google" class="tab-btn">
                                    <div class="get-insuracne-two__tab-btn-content google-btn">
                                        <div class="get-insuracne-two__tab-icon">
                                            <img src="/assets/images/icon/google.png" alt="">
                                        </div>
                                        <div class="get-insuracne-two__tab-text-box">
                                            <p class="get-insuracne-two__tab-text">Google</p>
                                            <div class="testimonial-one__client-review">
                                                <p>4.9</p>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-lg-3 col-md-6 col-sm-12 btn-column"></div>
                        </div>

                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="youtube">
                                <div class="get-insurance__content">
                                   
                                     
                                    <div class="container">
										<?php if (!empty($error)): ?>
											<div class="alert alert-danger">
												<?php echo $error; ?>
											</div>
										<?php endif; ?>
										<div class="row" id="video-container">
											<?php foreach ($items as $index => $item): 
												$title = $item['snippet']['title'];
												$videoId = $item['snippet']['resourceId']['videoId'];
												$videoUrl = "https://www.youtube.com/embed/$videoId";
											?>
											<?php if ($index == 0): ?>
												<div class="col-md-12 mb-4">
													<div class="video-frame" style="padding-bottom: 40%;">
														<iframe src="<?php echo $videoUrl; ?>" title="<?php echo htmlspecialchars($title); ?>" frameborder="0"
																allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
																allowfullscreen></iframe>
													</div>
												</div>
											<?php else: ?>
												<div class="col-md-4 mb-4">
													<div class="video-frame">
														<iframe src="<?php echo $videoUrl; ?>" title="<?php echo htmlspecialchars($title); ?>" frameborder="0"
																allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
																allowfullscreen></iframe>
													</div>
												</div>
											<?php endif; ?>
											<?php endforeach; ?>
										</div>
										<?php if ($nextPageToken): ?>
											<div class="text-center">
												<button id="load-more" class="btn btn-primary" data-next-page-token="<?php echo $nextPageToken; ?>">Load More</button>
											</div>
										<?php endif; ?>
									</div>

                                </div>
                            </div>
                            <!--tab-->
                           <div class="tab" id="google">
								<div class="get-insurance__content">
									<script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
									<div class="elfsight-app-7c73ec12-48c9-40cf-93e8-daac2bd72f31"  data-elfsight-app-lazy></div>
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
    
    <script>
        $(document).ready(function() {
            $('#load-more').on('click', function() {
                var nextPageToken = $(this).data('next-page-token');
                var apiKey = '<?php echo $apiKey; ?>';
                var playlistId = '<?php echo $playlistId; ?>';

                $.get('/load_more/', { nextPageToken: nextPageToken, apiKey: apiKey, playlistId: playlistId }, function(data) {
                    var response = JSON.parse(data);
                    $('#video-container').append(response.html);
                    if (response.nextPageToken) {
                        $('#load-more').data('next-page-token', response.nextPageToken);
                    } else {
                        $('#load-more').remove();
                    }
                });
            });
        });
    </script>
</body>
</html>