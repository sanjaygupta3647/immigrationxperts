<?php
include_once 'image-gallery/config/Database.php';
include_once 'image-gallery/class/User.php';
include_once 'image-gallery/class/Gallery.php';
include_once 'image-gallery/gallery_action.php';
//include_once 'image-gallery/include/getSuggestions.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'metadata.php'; 



// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

// Fetch all tabs
$tabs = [];
$queryTabs = "SELECT * FROM skill_body_tabs";
$resultTabs = $mysqli->query($queryTabs);

if ($resultTabs->num_rows > 0) {
    while ($tab = $resultTabs->fetch_assoc()) {
        // Fetch sections for each tab
        $tab_id = $tab['id'];
        $querySections = "SELECT id, title, content, anchor FROM skill_body_sections WHERE tab_id = ?";
        $stmt = $mysqli->prepare($querySections);
        $stmt->bind_param("i", $tab_id);
        $stmt->execute();
        $resultSections = $stmt->get_result();

        $sections = [];
        if ($resultSections->num_rows > 0) {
            while ($section = $resultSections->fetch_assoc()) {
                $sections[] = $section;
            }
        }

        $tab['sections'] = $sections;  // Add sections to each tab
        $tabs[] = $tab;
    }
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

    <link rel="stylesheet" href="/image-gallery/dist/css/lightbox.min.css">
    <script type="text/javascript" src="/image-gallery/dist/js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="/image-gallery/js/gallery.js"></script>
    <link type="text/css" rel="stylesheet" href="/image-gallery/css/style.css" />


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
    
     <link rel="stylesheet" href="/assets/css/photoswipe.css">
    <link rel="stylesheet" href="/assets/css/default-skin.css">
    
   <style>
        /* Smooth scrolling for internal links */
        html {
            scroll-behavior: smooth;
        }

        /* Fixed height for demonstration purposes, so scrolling can be seen */
        .tab-pane {
            max-height: 768px;
            overflow-y: auto;
            padding: 0px;
        }

        .content-section {
            padding: 30px 28px;
        }
    </style>
	

    <style>
    /* Sticky Navigation CSS */
    .sticky-nav {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: #ffffff;
        padding: 5px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    /* Navbar Styling */
    .navbar-nav {
        display: flex;
        justify-content: space-evenly; /* Evenly space items */
        align-items: center;
        width: 100%;
        padding: 0;
        list-style: none;
        margin: 0;
    }
    
    /* Navbar Items */
    .nav-item {
        text-align: center;
        border-right: 4px solid #97a2b7; /* Semi-transparent orange border */
        flex: 1; /* Allow flexible resizing of items */
    }
    
    /* Remove the right border on the last nav item */
    .nav-item:last-child {
        border-right: none;
    }
    
    /* Navbar Links */
    .nav-link {
        display: flex;
        flex-direction: row; /* Place icon and text side-by-side */
        align-items: center; /* Center items vertically */
        justify-content: center; /* Center items horizontally */
        padding: 10px;
        font-size: larger;
        gap: 8px; /* Add spacing between icon and text */
        color: #000; /* Default link color */
        text-decoration: none; /* Remove underline from links */
        transition: background-color 0.3s ease, color 0.3s ease; /* Smooth hover transition */
    }
    
    /* Icon Styling */
    .nav-link i {
        font-size: large; /* Larger icon size */
        color: #000; /* Default icon color */
    }
    
    /* Active Link Styling */
    .nav-link.active {
       color: #fff !important;
    border-radius: 5px;
    background: linear-gradient(to right, #1061bd, #1061bd);
    }
    
    /* Hover Effect */
    .nav-link:hover {
        background-color: #f8f9fa; /* Light gray background on hover */
        color: #007bff; /* Blue text on hover */
    }
    
    /* Responsive Design */
    
    /* Larger Screens: Ensure 4-column layout */
    @media (min-width: 768px) {
        .nav-item {
            flex: 1 1 25%; /* Each item takes 25% of the container width */
        }
    }
    
    /* Smaller Screens: Full-width items stacked vertically */
    @media (max-width: 767px) {
        .nav-item {
            flex: 1 1 100%; /* Each item takes full width */
        }
    
        .nav-link {
            flex-direction: column; /* Stack icon and text vertically */
            gap: 5px; /* Adjust gap for vertical layout */
            text-align: center; /* Center-align content */
        }
    
        .nav-link i {
            margin-bottom: 5px; /* Add spacing below icon */
        }
    }
    
    .nav-pills .nav-link {
        border: 2px solid #CC9;
        margin-bottom: 5px; /* Adds space between pills */
        border-radius: 5px; /* Rounds individual pills */
    }
    
    .nav-pills .nav-link.active {
        background-color: #007bff;
        color: white;
        border-color: #0056b3; /* Highlights active pill border */
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
                        <li style="color: #ffffff;">Skill Assessing Authorities</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Skill Assessing Authorities</h2>
                </div>
            </div>
        </section>
		
        
        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
					<!-- Tab Navigation (Vertical) -->
					<div class="col-md-3 sticky-nav">
						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							 <?php foreach ($tabs as $index => $tab): ?>
								<a class="nav-link <?= $index === 0 ? 'active' : '' ?>" 
								   id="v-pills-<?= $tab['id'] ?>-tab" 
								   data-toggle="pill" 
								   href="#v-pills-<?= $tab['id'] ?>" 
								   role="tab" 
								   aria-controls="v-pills-<?= $tab['id'] ?>" 
								   aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
									<?= htmlspecialchars($tab['title']) ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>

					<!-- Tab Content -->
				<div class="col-md-9 p-2 sticky-nav">
    <div class="tab-content" id="v-pills-tabContent">
        <?php foreach ($tabs as $index => $tab): ?>
            <?php 
            // Check if tab has content or any of its sections have content
            $hasContent = !empty($tab['content']) || (!empty($tab['sections']) && array_filter($tab['sections'], fn($section) => !empty($section['content'])));
            if (!$hasContent) {
                continue; // Skip this tab if no content
            }
            ?>
            <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" 
                 id="v-pills-<?= $tab['id'] ?>" 
                 role="tabpanel" 
                 aria-labelledby="v-pills-<?= $tab['id'] ?>-tab">

                <!-- Internal Navigation, shown only if the tab has sections -->
                <?php if (!empty($tab['sections'])): ?>
                    <div class="container sticky-nav">
                        <nav class="navbar navbar-expand-lg navbar" style="background-color: #bacee7; color: #fff; font-size: medium;">
                            <ul class="navbar-nav mx-auto" id="navbar-content">
                                <?php $isFirst = true; ?>
                                <?php foreach ($tab['sections'] as $section): ?>
                                    <?php if (!empty($section['content'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?= $isFirst ? 'active' : '' ?>" href="#section<?= $section['id'] ?>" id="nav-link-<?= $section['id'] ?>">
                                                <?php
                                                    $sectionTitle = strtolower(trim($section['title']));
                                                    if ($sectionTitle == 'requirements') {
                                                        echo '<i class="fa fa-clipboard-list"></i>';
                                                    } elseif ($sectionTitle == 'process') {
                                                        echo '<i class="fa fa-cogs"></i>';
                                                    } elseif ($sectionTitle == 'timeline') {
                                                        echo '<i class="fa fa-clock"></i>';
                                                    } elseif ($sectionTitle == 'cost') {
                                                        echo '<i class="fa fa-dollar-sign"></i>';
                                                    } elseif ($sectionTitle == 'occupations') {
                                                        echo '<i class="fa fa-briefcase"></i>';    
                                                    } else {
                                                        echo '<i class="fa fa-link"></i>';
                                                    }
                                                ?>
                                                <?= htmlspecialchars($section['title']) ?>
                                            </a>
                                        </li>
                                        <?php $isFirst = false; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                <?php endif; ?>
                
                <!-- Content Sections -->
                <?php foreach ($tab['sections'] as $section): ?>
                    <?php if (!empty($section['content'])): ?>
                        <div id="section<?= $section['id'] ?>" class="content-section">
                            <p><?= ($section['content']) ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>


				</div>
            </div>
        </section>
        <!--Team Page End-->


        <?php include 'partner.php';?>
        <?php include 'footer.php';?>



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
    
    
	<script src="/assets/js/photoswipe.min.js"></script>
    <script src="/assets/js/photoswipe-ui-default.min.js"></script>


    <!-- Bootstrap and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
    </body>
    
    </html>
   