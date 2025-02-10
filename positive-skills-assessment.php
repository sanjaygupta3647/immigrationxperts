<?php
include_once 'image-gallery/config/Database.php';
include_once 'image-gallery/class/User.php';
include_once 'image-gallery/class/Gallery.php';
include_once 'image-gallery/gallery_action.php';
//include_once 'image-gallery/include/getSuggestions.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

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
        
        
        @media (max-width: 768px) {
            .pswp__button--close {
               
                top: 0px;
                right: 0px;
            }
        }


        .portfolio-filter li {
            display: inline-block;
            text-align: center;
        }
    
        .portfolio-filter li img {
            height: auto;
            border-radius: 8px; /* Optional: for rounded corners */
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2); /* Add shadow to the image */
            transition: transform 0.3s, box-shadow 0.3s; /* Smooth transition for hover effects */
        }
    
        .portfolio-filter li img:hover {
            transform: scale(1.1); /* Slightly enlarge the image on hover */
            box-shadow: 0 16px 20px rgba(0, 0, 0, 0.3); /* Enhance shadow on hover */
        }
    
        .portfolio-filter li.active img {
            border: 2px solid #007bff; /* Highlight the active category */
        }
    
        .portfolio-filter li a {
            text-decoration: none;
            color: #000;
            display: inline-block;
        }
        
         @media (max-width: 768px) {
        .portfolio-filter li {
            display: block;
            /* width: 100%; */
            text-align: center;
            padding: 9px 0px !important;
        }

        .portfolio-filter li img {
            width: 100%;
            max-width: 100%; /* Ensure images don't exceed the screen width */
        }
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
                        <li style="color: #ffffff;">Our Success</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Positive Skills Assessment</h2>
                </div>
            </div>
        </section>
		
        
        <!--Page Header End-->
       
		<section class="portfolio mt-5" style="padding: 30px 0px 10px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10" style="text-align: end;">
                        <div class="search-form">
                            <form method="post" name="f" action="">
                                <input type="text" name="search" id="search" class="search-input" placeholder="Enter search term">
                                <input type="submit" name="Sub" value="Search" class="search-button">
                            </form>
                            <div class="search-suggestion" id="suggestions-container"></div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <a href="">Reset</a>
                    </div>
                </div>
            </div>

    <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function () {
                var selectedIndex = -1; // Initialize selected index to -1
    
                // Function to handle auto-suggestion
                $("#search").on("input", function () {
                    var searchTerm = $(this).val();
                    // Clear suggestions container
                    $("#suggestions-container").empty();
                    selectedIndex = -1; // Reset selected index
                    if (searchTerm.length >= 2) {
                        // Make an AJAX request to get suggestions from the server
                        $.ajax({
                            type: "POST",
                            url: "/getSuggestions/",
                            data: { searchTerm: searchTerm },
                            success: function (response) {
                                // Display suggestions in the suggestions container
                                $("#suggestions-container").html(response);
                            }
                        });
                    }
                });
    
                // Function to handle suggestion selection
                $(document).on("click", ".suggestions-list li", function () {
                    var selectedSuggestion = $(this).text();
                    // Set the search input value to the selected suggestion
                    $("#search").val(selectedSuggestion);
                    // Clear suggestions container
                    $("#suggestions-container").empty();
                    selectedIndex = -1; // Reset selected index
                });
    
                // Function to handle keyboard navigation
                $("#search").on("keydown", function (e) {
                    var suggestions = $(".suggestions-list li");
                    var numSuggestions = suggestions.length;
                    if (e.keyCode === 40) { // Down arrow key
                        selectedIndex = (selectedIndex + 1) % numSuggestions;
                        suggestions.removeClass("selected");
                        $(suggestions[selectedIndex]).addClass("selected");
                    } else if (e.keyCode === 38) { // Up arrow key
                        selectedIndex = (selectedIndex - 1 + numSuggestions) % numSuggestions;
                        suggestions.removeClass("selected");
                        $(suggestions[selectedIndex]).addClass("selected");
                    } else if (e.keyCode === 13) { // Enter key
                        if (selectedIndex !== -1) {
                            var selectedSuggestion = $(suggestions[selectedIndex]).text();
                            $("#search").val(selectedSuggestion);
                            $("#suggestions-container").empty();
                            selectedIndex = -1; // Reset selected index
                            e.preventDefault(); // Prevent form submission
                        }
                    }
                });
            });
        </script>
    </section>

		
		
        <!--Page Header End-->
	<?php
		// Function to determine class based on category
		function getCategoryClass($category)
		{
			switch ($category) {
				case 'ACS_LATEST':
					return 'a';
				case 'ENGINEERS_AUSTRALIA':
					return 'b';
				case 'INVITES_PNP_CANADA_AUSTRALIA':
					return 'c';
				case 'LATEST_CPA_ICAA':
					return 'd';
				case 'NAATI':
					return 'e';
				case 'PTE_IELTS':
					return 'f';
				case 'VETASSESS_LATEST':
					return 'g';
				case 'VISA_GRANTS':
					return 'h';
				default:
					return '';
			}
		}

		?>
	<section class="portfolio">
	<div class="container">
    <div class="get-insurance__tab mt-5">
        <div class="get-insurance__tab-box tabs-box">
            <div class="row tab-buttons clearfix list-unstyled">
               <div class="col-xl-12">
                    <?php
                    // Define the mapping of old categories to new categories
                    $categoryMapping = [
                        'ACS_LATEST' => 'ACS',
                        'VETASSESS_LATEST' => 'VETASSESS',
                        'ENGINEERS_AUSTRALIA' => 'ENGINEERS AUSTRALIA',
                        'LATEST_CPA_ICAA' => 'CPAA / CAANZ',
                        'NAATI' => 'NAATI / PTE / IELTS',
                        'PTE_IELTS' => 'NAATI / PTE / IELTS',
                        'INVITES_PNP_CANADA_AUSTRALIA' => 'INVITES CANADA / AUSTRALIA',
                        'VISA_GRANTS' => 'VISA GRANTS CANADA / AUSTRALIA',
                        'IML' => 'IML'
                    ];

                    // Fetch categories and their counts
                    $categoryQuery = $db->query("SELECT category, COUNT(*) as count FROM user_gallery GROUP BY category");
                    $categoryCounts = [];
                    while ($row = $categoryQuery->fetch_assoc()) {
                        $cat = $row['category'];
                        $itemCount = $row['count'];

                        // Aggregate counts for merged categories
                        if (isset($categoryMapping[$cat])) {
                            $displayCategory = $categoryMapping[$cat];
                            if (!isset($categoryCounts[$displayCategory])) {
                                $categoryCounts[$displayCategory] = 0;
                            }
                            $categoryCounts[$displayCategory] += $itemCount;
                        } else {
                            $categoryCounts[$cat] = $itemCount;
                        }
                    }

                    // Define the desired display order
                    $displayOrder = [
                        'ACS',
                        'VETASSESS',
                        'ENGINEERS AUSTRALIA',
                        'CPAA / CAANZ',
                        'IML',
                        'NAATI / PTE / IELTS',
                        'INVITES CANADA / AUSTRALIA'
                    ];

                    // Get the current category from the URL parameter
                    $activeCategory = isset($_GET['category']) ? $_GET['category'] : 'ACS_LATEST';
                    $activeDisplayCategory = isset($categoryMapping[$activeCategory]) ? $categoryMapping[$activeCategory] : 'ACS';

                    // Function to get image URL based on category
                    function getCategoryImage($category) {
                        switch ($category) {
                            case 'ACS':
                                return '/assets/images/icon/acs.webp';
                            case 'VETASSESS':
                                return '/assets/images/icon/vetassess.webp';
                            case 'ENGINEERS AUSTRALIA':
                                return '/assets/images/icon/engineers.webp';
                            case 'CPAA / CAANZ':
                                return '/assets/images/icon/cpaa.webp';
                            case 'IML':
                                return '/assets/images/icon/IML.webp';
                            case 'NAATI / PTE / IELTS':
                                return '/assets/images/icon/naati_pte.webp';
                            case 'INVITES CANADA / AUSTRALIA':
                                return '/assets/images/icon/aus.webp';
                            default:
                                return '';
                        }
                    }
                    ?>

                    <ul class="portfolio-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                        <?php
                        foreach ($displayOrder as $displayCategory) {
                            if (!isset($categoryCounts[$displayCategory])) {
                                continue; // Skip categories not present in the fetched data
                            }
                            $itemCount = $categoryCounts[$displayCategory];
                            $originalCat = array_search($displayCategory, $categoryMapping);

                            $cl = getCategoryClass($displayCategory);
                            // Check if the current category matches the active category and set the active class accordingly
                            $activeClass = ($displayCategory == $activeDisplayCategory) ? 'active' : '';
                            ?>
                            <li class="<?php echo $activeClass; ?>" data-filter=".<?php echo $cl; ?>">
                                <a href="javascript:void(0);" onclick="updateUrl('<?php echo $originalCat; ?>')" style="text-decoration: none;color: #000;">
                                    <img src="<?php echo getCategoryImage($displayCategory); ?>" style="height: 50px;" alt="<?php echo $displayCategory; ?>">
                                </a>
                            </li>
                        <?php } ?>
                    </ul>

                </div>

					</div>
            </div>

            <?php
            // PHP code to fetch data and display content for each tab
            $database = new Database();
            $conn = $database->getConnection();

            // Query for Immigration category
            $sqlImmigration = "SELECT * FROM portfolio_items WHERE category = 'immigration' ORDER BY id DESC";
            $resultImmigration = $conn->query($sqlImmigration);

            // Query for Study category
            $sqlStudy = "SELECT * FROM portfolio_items WHERE category = 'study' ORDER BY id DESC";
            $resultStudy = $conn->query($sqlStudy);
            ?>


			<?php
					// Assuming you have a database connection established already

					if (isset($_POST['Sub'])) {
						$searchTerm = $_POST['search'];
						echo "Search Term: " . $searchTerm . "<br>"; // Add this line for debugging

						// Split the search term into name and code
						$searchParts = explode(" - ", $searchTerm);
						if (count($searchParts) === 2) {
							$code = trim($searchParts[0]); // Extracted code
							$name = trim($searchParts[1]); // Extracted name

							// Construct the SQL query to search by both name and code
							$q = "SELECT ug.*, o.ANZSCO, o.occupation_name 
								  FROM user_gallery ug
								  LEFT JOIN occupations o ON ug.occupation = o.id
								  WHERE (LOWER(o.occupation_name) LIKE LOWER('%$name%') AND LOWER(o.ANZSCO) LIKE LOWER('%$code%'))
								  ORDER BY ug.time_stamp DESC";

							// Execute the query
							$qry = $db->query($q);
							if ($qry) {
								$count = $qry->num_rows; // Get the number of rows
								//echo "Search Results Count: " . $count . "<br>"; // Display the count
								echo "<div class='row gallery filter-layout masonary-layout'>";
								while ($rw = $qry->fetch_array()) {
								    $title = $rw['name'];
									$im = $rw['image'];
									$cat = $rw['category'];
									$occ = $rw['occupation_name'];
									$anzsco = $rw['ANZSCO'];
									$cl = "";


									echo '<div class="col-xl-3 col-lg-6 col-md-6 filter-item gallery-item">';
                                    echo '    <div class="portfolio__single">';
                                    echo '        <div class="portfolio__img">';
                                    echo '            <a href="/image-gallery/uploads/' . $im . '" data-size="600x768">';
                                    echo '                <img src="/image-gallery/uploads/' . $im . '" alt="' . htmlspecialchars($title) . '">';
                                    echo '            </a>';
                                    echo '            <div>';
                                    echo '                <a href="/image-gallery/uploads/' . $im . '" class="img-popup"></a>';
                                    echo '            </div>';
                                    echo '            <div class="portfolio__content">';
                                    echo '                <p class="portfolio__sub-title">';
                                    if (!empty($anzsco)) {
                                        echo htmlspecialchars($anzsco) . ' - ';
                                    }
                                    if ($occ !== null) {
                                        echo htmlspecialchars(str_replace("_", " ", $occ));
                                    }
                                    echo '                </p>';
                                    echo '                <h4 class="portfolio__title"><a href="/#">' . htmlspecialchars($title) . '</a></h4>';
                                    echo '            </div>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '</div>';

								}
								echo "</div>";
							} else {
								echo "Query failed: " . $db->error;
							}
						}
					} else {
					}?> 
					
					
                     <div class="tabs-content">
                        <!-- Tab content for Immigration -->
                        <div class="tab active-tab" id="<?php echo $activeDisplayCategory; ?>">
                            <div id="search-results" class="row gallery filter-layout masonary-layout">
                                <?php
                                // Define the mapping of old categories to new categories
                                $categoryMapping = [
                                    'ACS_LATEST' => 'ACS',
                                    'VETASSESS_LATEST' => 'VETASSESS',
                                    'ENGINEERS_AUSTRALIA' => 'ENGINEERS AUSTRALIA',
                                    'LATEST_CPA_ICAA' => 'CPAA / CAANZ',
                                    'NAATI' => 'NAATI / PTE / IELTS',
                                    'PTE_IELTS' => 'NAATI / PTE / IELTS',
                                    'INVITES_PNP_CANADA_AUSTRALIA' => 'INVITES CANADA / AUSTRALIA',
                                    'VISA_GRANTS' => 'VISA GRANTS CANADA / AUSTRALIA',
                                    'IML' => 'IML'
                                    // Add new category mappings as needed
                                ];
                    
                                // Fetch active category from URL parameter
                                $category = isset($_GET['category']) ? $_GET['category'] : 'ACS_LATEST';
                    
                                // Determine active display category and SQL category filter
                                if (isset($categoryMapping[$category])) {
                                    $activeDisplayCategory = $categoryMapping[$category];
                                    if ($category === 'NAATI') {
                                        // If 'NAATI' category is selected, fetch both 'NAATI' and 'PTE_IELTS' categories
                                        $categoryFilter = "WHERE category IN ('NAATI', 'PTE_IELTS')";
                                    } else {
                                        // Otherwise, fetch based on the mapped category
                                        $categoryFilter = "WHERE category = '$category'";
                                    }
                                } else {
                                    // Default to ACS category if no valid category is found
                                    $activeDisplayCategory = 'ACS';
                                    $categoryFilter = "WHERE category = 'ACS_LATEST'";
                                }
                    
                                // Define pagination parameters
                                $itemsPerPage = 12;
                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    
                                // Define the SQL query to fetch items based on the active category
                                $q = "SELECT ug.*, o.occupation_name, o.ANZSCO 
                                      FROM user_gallery ug
                                      LEFT JOIN occupations o ON ug.occupation = o.id
                                      $categoryFilter
                                      ORDER BY ug.time_stamp DESC
                                      LIMIT " . ($page - 1) * $itemsPerPage . ", $itemsPerPage";
                    
                                $qry = $db->query($q);
                    
                                // Display items
                                while ($rs = $qry->fetch_array()) {
                                    $cat = $rs['category'];
                                    $title = $rs['name'];
                                    $im = $rs['image'];
                                    $occ = $rs['occupation_name'];
                                    $anzsco = $rs['ANZSCO'];
                                    $cl = getCategoryClass($cat);
                    
                                    // Output each portfolio item in the desired format
                                    echo '<div class="col-xl-3 col-lg-6 col-md-6 filter-item gallery-item">';
                                    echo '    <div class="portfolio__single">';
                                    echo '        <div class="portfolio__img">';
                                    echo '            <a href="/image-gallery/uploads/' . $im . '" data-size="600x768">';
                                    echo '                <img src="/image-gallery/uploads/' . $im . '" alt="' . htmlspecialchars($title) . '">';
                                    echo '            </a>';
                                    echo '            <div>';
                                    echo '                <a href="/image-gallery/uploads/' . $im . '" class="img-popup"></a>';
                                    echo '            </div>';
                                    echo '            <div class="portfolio__content">';
                                    echo '                <p class="portfolio__sub-title">';
                                    if (!empty($anzsco)) {
                                        echo htmlspecialchars($anzsco) . ' - ';
                                    }
                                    if ($occ !== null) {
                                        echo htmlspecialchars(str_replace("_", " ", $occ));
                                    }
                                    echo '                </p>';
                                    echo '                <h4 class="portfolio__title"><a href="/#">' . htmlspecialchars($title) . '</a></h4>';
                                    echo '            </div>';
                                    echo '        </div>';
                                    echo '    </div>';
                                    echo '</div>';
                                }
                                ?>
                    
                                
                            </div>
                           
                        </div>
                    </div>
				</div>
             	</div>
		</section>
   
    </div>
	<section class="portfolio">
			<div class="container">
                <div id="pagination" class="pagination mb-3">
                    <?php
                    // Count the total number of items based on the category filter
                    $totalItemsQuery = $db->query("SELECT COUNT(*) AS total FROM user_gallery $categoryFilter");
                    $totalItems = $totalItemsQuery->fetch_assoc()['total'];
    
                    // Calculate the total number of pages
                    $totalPages = ceil($totalItems / $itemsPerPage);
    
                    if ($totalPages > 1) {
                        $baseUrl = "?category=$category"; // Base URL for pagination links
    
                        // "Home" link
                        if ($page > 1) {
                            echo "<a href='{$baseUrl}&page=1'>Home</a>";
                        }
    
                        // "Previous" link
                        $prevPage = max(1, $page - 1);
                        if ($page > 1) {
                            echo "<a href='{$baseUrl}&page=$prevPage'>Prev</a>";
                        }
    
                        // Page links
                        $startPage = max(1, $page - 1); // Start displaying from one page before the current page
                        $endPage = min($totalPages, $startPage + 2); // Display up to three pages after the current page
                        for ($i = $startPage; $i <= $endPage; $i++) {
                            $activeClass = ($page == $i) ? 'active' : '';
                            echo "<a href='{$baseUrl}&page=$i' class='$activeClass'>$i</a>";
                        }
    
                        // "Next" link
                        $nextPage = min($totalPages, $page + 1);
                        if ($page < $totalPages) {
                            echo "<a href='{$baseUrl}&page=$nextPage'>Next</a>";
                        }
    
                        // "Last" link
                        if ($page < $totalPages) {
                            echo "<a href='{$baseUrl}&page=$totalPages'>Last</a>";
                        }
                    }
                    ?>
                </div>
                
                </div>
		</section>
    	<script>
			function updateUrl(category) {
				window.location.href = window.location.pathname + "?category=" + category;
			}
			
			// JavaScript to hide/show search results and pagination
			$(document).ready(function () {
				$("#reset-btn").click(function () {
					$("#search-results").show();
					$("#pagination").show();
				});

				<?php if (isset($_POST['Sub'])) : ?>
					$("#search-results").hide();
					$("#pagination").hide();
				<?php endif; ?>
			});
		</script>

      <script>
        // JavaScript function to handle tab switching
        function updateTab(tabName) {
            // Remove 'active' class from all tab buttons and tab contents
            document.querySelectorAll('.portfolio-filter li').forEach(function (el) {
                el.classList.remove('active');
            });
            document.querySelectorAll('.tabs-content .tab').forEach(function (el) {
                el.classList.remove('active-tab');
            });
    
            // Add 'active' class to the selected tab button and corresponding tab content
            document.querySelector('[data-tab="' + tabName + '"]').classList.add('active');
            document.getElementById(tabName + 'Tab').classList.add('active-tab');
        }
    
        // Initial tab selection based on URL or default selection can be added here
    </script>
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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = document.querySelectorAll('.lazy');
    
        var lazyLoad = function() {
            lazyImages.forEach(function(img) {
                if (img.getBoundingClientRect().top < window.innerHeight && img.getBoundingClientRect().bottom >= 0) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                }
            });
        };
    
        // Initial load
        lazyLoad();
    
        // Lazy load images as the user scrolls
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            });
    
            lazyImages.forEach(function(img) {
                observer.observe(img);
            });
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            // You can implement an alternative solution here
        }
    });
    </script>
    <!-- Initialize PhotoSwipe -->
	<!-- Initialize PhotoSwipe -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var initPhotoSwipeFromDOM = function(gallerySelector) {
            var parseThumbnailElements = function(el) {
                var thumbElements = el.querySelectorAll('.gallery-item'),
                    items = [];
    
                thumbElements.forEach(function(el) {
                    var linkEl = el.querySelector('a'),
                        size = linkEl.getAttribute('data-size').split('x'),
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };
                    items.push(item);
                });
    
                return items;
            };
    
            var options = {
                index: 0,
                maxSpreadZoom: 3,
                getDoubleTapZoom: function(isMouseClick, item) {
                    return item.initialZoomLevel * 2;
                },
                bgOpacity: 0.85,
                history: false,
                focus: false,
                showAnimationDuration: 0,
                hideAnimationDuration: 0,
                shareEl: false,
                zoomEl: true,
                fullscreenEl: true,
                arrowEl: true,
                pinchToClose: true,
                tapToToggleControls: false,
                clickToCloseNonZoomable: true,
                closeOnScroll: false,
                closeOnVerticalDrag: false,
                spacing: 0,
                modal: false,
                timeToIdle: 3000,
                timeToIdleOutside: 1000,
                captionEl: false,
                preloaderEl: true,
                tapToClose: false,
                clickToClose: false,
                escKey: true,
                getImageURLForShare: function() {
                    return items[options.index].src || '';
                }
            };
    
            var openPhotoSwipe = function(index, galleryElement) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    items = parseThumbnailElements(galleryElement),
                    gallery;
    
                options.index = index;
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                
                // Custom Slideshow Functionality
                var playButton = pswpElement.querySelector('.pswp__button--play');
                var pauseButton = pswpElement.querySelector('.pswp__button--pause');
                var slideshowInterval;
                var isPlaying = false;
    
                var startSlideshow = function() {
                    isPlaying = true;
                    slideshowInterval = setInterval(function() {
                        gallery.next();
                    }, 2000); // Change the interval as needed
                };
    
                var stopSlideshow = function() {
                    isPlaying = false;
                    clearInterval(slideshowInterval);
                };
    
                playButton.addEventListener('click', function() {
                    if (!isPlaying) {
                        startSlideshow();
                    }
                });
    
                pauseButton.addEventListener('click', function() {
                    if (isPlaying) {
                        stopSlideshow();
                    }
                });
    
                gallery.listen('close', function() {
                    stopSlideshow();
                });
    
                gallery.init();
            };
    
            var galleryElements = document.querySelectorAll(gallerySelector);
            galleryElements.forEach(function(galleryElement, index) {
                galleryElement.setAttribute('data-pswp-uid', index + 1);
                galleryElement.addEventListener('click', function(e) {
                    e.preventDefault();
                    var target = e.target || e.srcElement;
                    var clickedGallery = target.closest('.gallery');
                    var clickedThumbnail = target.closest('.gallery-item');
                    var index = Array.prototype.indexOf.call(clickedGallery.querySelectorAll('.gallery-item'), clickedThumbnail);
                    if (index >= 0) openPhotoSwipe(index, clickedGallery);
                });
            });
        };
    
        initPhotoSwipeFromDOM('.masonary-layout'); // Adjust the selector to match your gallery layout
    });
    
    </script>
    
    <script>
        function updateUrl(category) {
            const currentUrl = window.location.href.split('?')[0];
            const newUrl = `${currentUrl}?category=${category}`;
            window.location.href = newUrl;
        }
    </script>

    <!-- PhotoSwipe HTML structure -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <button class="pswp__button pswp__button--play" title="Play"></button>
                <button class="pswp__button pswp__button--pause" title="Pause"></button>
               
  
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

    </body>
    
    </html>
 