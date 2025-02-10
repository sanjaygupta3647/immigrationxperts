
<?php

include_once '../image-gallery/config/Database.php';
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

include '../metadata.php'; ?>

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
	<link href="/assets/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/global.css">
    <style>
        .search-type-btn.active {
            background-color: #007bff;
            color: white;
        }
        .searchs button {
            margin-top: 15px;
        }
        .result-card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
			text-align: left;
        }
        .result-card h3 {
            margin-top: 0;
        }
        .result-card p {
            margin: 5px 0;
        }
        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        .alert-info {
            background-color: #d9edf7;
            color: #31708f;
            border-color: #bce8f1;
        }
        .alert-warning {
            background-color: #fcf8e3;
            color: #8a6d3b;
            border-color: #faebcc;
        }
        .alert-danger {
            background-color: #f2dede;
            color: #a94442;
            border-color: #ebccd1;
        }
        .job-title-link {
            color: #337ab7;
            text-decoration: none;
            font-size: smaller;
        }
        .job-title-link:hover {
            text-decoration: underline;
        }
        
    </style>
    <style>
        table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
    
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Select all table elements
            const tables = document.querySelectorAll("table");

            // Wrap each table with a div having class 'table-responsive'
            tables.forEach(table => {
                // Create a div element
                const wrapper = document.createElement('div');
                wrapper.classList.add('table-responsive');

                // Insert the wrapper before the table
                table.parentNode.insertBefore(wrapper, table);

                // Move the table inside the wrapper
                wrapper.appendChild(table);
            });
        });
    </script>
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
                        <li style="color: #ffffff;"><a href="https://www.immigrationxperts.com/canada-immigration/" style="color: #ffffff;">Canada</a></li>
                    </ul>
                    <h2 style="color: #b8e1f0;">NOC Code Canada</h2>
                </div>
            </div>
        </section>
       
        <!--Page Header End-->


       		 <!-- Start our code -->
	 <section>
    <div class="container col-xl-10 col-lg-10 col-md-10">
        <div class="row text-center">
             <div class="">
                <div class="job-by-btn text-center mb-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-4 col-md-4 mt-2">
                            <a id="jobtitlebtn" class="btn btn-outline-primary search-type-btn active"> 
                                <span class="job-title">Search by Job Title</span>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mt-2">
                            <a id="noccodebtn" class="btn btn-outline-primary search-type-btn"> 
                                <span class="btn-noc">Search by NOC Code</span>
                            </a>
                        </div>
                    </div>
                </div>

                <form role="search" id="searchFormNoc">
					<div class="row mt-3" id="secjobtitle">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="jobTitle" class="form-label">Enter a Job Title</label>
								<input type="text" class="form-control" id="search" name="search" placeholder="e.g., Graphic Designers and Illustrators">
							</div>
						</div>
					</div>

					<div class="row mt-3" id="secjobnocdiv" style="display: none;">
						<div class="col-xl-6 col-lg-6 col-md-6">
							<div class="form-group">
								<label for="ddlVersionsNoc" class="form-label">Version</label>
								<select class="form-control" id="ddlVersionsNoc" name="nocVersion">
									<!-- Options will be dynamically added here -->
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label for="nocCode" class="form-label">Enter a NOC Code</label>
								<select class="form-control select2" id="nocCode" name="nocCode">
									<option disabled="" selected="" hidden="" value="">Example 14201 - Banking insurance</option>
									<!-- Options will be dynamically added here -->
								</select>
							</div>
						</div>
					</div>

					<input type="hidden" name="searchType" id="searchType" value="">

					<div class="searchs text-center">
						<button type="submit" class="btn btn-primary" id="searchBtn">Search</button>
						<button type="button" class="btn btn-secondary" id="resetBtn">Reset</button>
					</div>
				</form>

                <div id="searchResults" class="mt-4">
                    <!-- Detailed job results will be displayed here -->
                </div>
            </div>
        </div>
   <div class="row mt-5 cards-sec align-items-center ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="bussiness  text-center " style="border: 1px solid gray; background-color: #F2F2F2; padding: 28px;">
                        <picture>
                        <img src="/assets/images/icon/businessman.webp" class="img-fluid lazyloaded" alt="settle-icon" style="width: 45%;" width="100" height="100">
                        </picture> 
                        <p class="" style="font-weight: bold; line-height: 1.4; margin-top: 8px;">Express Entry Draws List</p>
                       <a href="/canada-immigration/all-express-entry-draws/">Check Now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class="salary text-center  card-height " style="border: 1px solid gray; background-color: #F2F2F2; padding: 28px;">
                        <picture>
                        <img src="/assets/images/icon/67.webp" class="img-fluid lazyloaded" alt="settle-icon" style="width: 45%;" width="100" height="100">
                        </picture>
                        <p class=" " style="font-weight: bold; line-height: 1.4; margin-top: 8px;">Canada 67 Points Calculator</p>
						<a href="/canada-immigration/67-canada-immigration-point-system/" class="transition">Check Now</a>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                    <div class=" criteria text-center  card-height " style="border: 1px solid gray; background-color: #F2F2F2; padding: 28px;">
                       <picture>
                       <img src="/assets/images/icon/calc.webp" class="img-fluid lazyloaded" alt="settle-icon" style="width: 45%;" width="100" height="100">
                       </picture>
                        <p class=" " style="font-weight: bold;line-height: 1.4; margin-top: 8px;">
                           Canadian CRS Calculator</p>
                        <a href="/canada-immigration/canada-comprehensive-ranking-crs-points-calculator/" class="transition">Check Now</a>
                    </div>
                </div>

            </div>
	
            <div id="noc-hide" class="mt-5 mb-5">
                <h2 class="txt mb-2">Find your NOC</h2>
                <p>As of November 16, 2022, Immigration, Refugees, and Citizenship Canada (IRCC) has adopted the 2021 version of the National Occupation Classification (NOC) system. This update has significant implications for Canada PR and Work Permit applicants, as well as those with active profiles in the Express Entry system. It's essential to understand and select the correct NOC code for your Canada PR application.</p>
					
                <h3 class="txt mt-2">NOC Code Requirement for Express Entry Program</h3>
			        <p>To qualify for a Canada PR Visa via the Express Entry program, you must have work experience in a skilled occupation classified under NOC TEER Categories 0, 1, 2, 3, 4, or 5.</p>
             
				<h3 class="txt mt-2">What are the other Immigration programs you can be eligible for?</h3>
                <p>If your work experience falls under NOC TEER Categories 0, 1, 2, or 3, you can apply for a Canada PR Visa through the Atlantic Immigration Pilot Program (AIPP). For occupations in Categories 4 and 5, you can apply via Provincial Nominee Programs (e.g., OINP, AINP, BCPNP) or AIPP. Temporary workers are not PR holders, but some continue to immigrate here permanently as PR holders.</p>

             

               <h3 class="txt mt-2">How to find the right NOC Code for Canada PR Visa?</h3>
                <p>When choosing your NOC code, prioritize matching it with your job duties rather than the job title. IRCC will review your duties to ensure they align with the selected NOC code during the application process.</p>
                <p>This emphasizes the need to accurately align your duties with the NOC code for a successful immigration application.
                </p>
            </div>
            
            <div class="row mb-5 mt-4">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div><img src="/assets/images/icon/noc_footer.webp" alt="noc_footer" class="img-fluid lazyloaded" width="642" height="367" loading="lazy">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="need-help mt-5 text-center">
					 <h3 class="txt">Need Help Finding A Job </br>In Canada?</h3>
                    <div class="mt-4">
                         <a href="/contact-us-today/" class="btn btn-danger">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

	
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
    <script src="/assets/js/insur.js"></script>
	
		  <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script>
    $(document).ready(function() {
        // Initialize Select2
        $('#nocCode').select2();

        // Function to add custom classes to Select2 generated span elements
        function addCustomClassToSelect2() {
            $('#nocCode').next('.select2-container').addClass('form-control select2-container--focus').attr({
                'dir': 'ltr',
                'style': 'width: auto;',
                'data-select2-id': 'select2-data-16-thrq'
            });
        }

        // Load NOC versions when the document is ready
        $.ajax({
            url: '/get_noc_versions/',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var $versionSelect = $('#ddlVersionsNoc');
                $versionSelect.empty(); // Clear existing options

                // Populate select options with data from the server
                $.each(data, function(index, item) {
                    $versionSelect.append($('<option>', {
                        value: item.id,
                        text: item.version
                    }));
                });

                // Load NOC codes for the initial version
                loadNocCodes($versionSelect.val());
            },
            error: function() {
                console.error('Failed to fetch NOC versions.');
            }
        });

        // Load NOC codes based on selected version
        function loadNocCodes(versionId) {
            $.ajax({
                url: '/search_by_noc_code/',
                type: 'GET',
                data: { versionId: versionId },
                dataType: 'json',
                success: function(data) {
                    var $nocCodeSelect = $('#nocCode');
                    $nocCodeSelect.empty(); // Clear existing options

                    // Add default option
                    $nocCodeSelect.append('<option disabled selected hidden value="">Example 14201 - Banking insurance</option>');

                    // Populate select options with data from the server
                    $.each(data, function(index, item) {
                        $nocCodeSelect.append($('<option>', {
                            value: item.noc_code,
                            text: item.noc_code + ' - ' + item.job_title
                        }));
                    });

                    // Reinitialize select2 to reflect new options
                    $nocCodeSelect.select2();

                    // Add custom classes to the Select2 generated span elements
                    addCustomClassToSelect2();
                },
                error: function() {
                    console.error('Failed to fetch NOC codes.');
                }
            });
        }

        // Handle version change
        $('#ddlVersionsNoc').on('change', function() {
            var selectedVersionId = $(this).val();
            loadNocCodes(selectedVersionId);
        });

        // Handle form submission
        $('#searchFormNoc').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var searchType = $('#jobtitlebtn').hasClass('active') ? 'jobtitle' : 'noccode';
            var formData = $(this).serialize();

            $.ajax({
                url: '/search/',
                type: 'POST',
                data: { searchType: searchType, formData: formData },
                success: function(response) {
                    $('#searchResults').html(response);

                    // Hide #noc-hide section if search results are displayed
                    if ($('#searchResults').html().trim() !== "") {
                        $('#noc-hide').hide();
                    } else {
                        $('#noc-hide').show();
                    }
                },
                error: function() {
                    $('#searchResults').html('An error occurred while searching.');
                }
            });
        });

        // Toggle between search types
        $('#jobtitlebtn').on('click', function() {
            $(this).addClass('active');
            $('#noccodebtn').removeClass('active');
            $('#secjobtitle').show();
            $('#secjobnocdiv').hide();
        });

        $('#noccodebtn').on('click', function() {
            $(this).addClass('active');
            $('#jobtitlebtn').removeClass('active');
            $('#secjobtitle').hide();
            $('#secjobnocdiv').show();
        });

        // Handle click on job title link to fetch details
        $(document).on('click', '.job-title-link', function(event) {
            event.preventDefault();
            var nocCode = $(this).data('noc-code');

            $.ajax({
                url: '/search/',
                type: 'POST',
                data: { searchType: 'noccode', formData: 'nocCode=' + nocCode },
                success: function(response) {
                    $('#searchResults').html(response);

                    // Hide #noc-hide section if search results are displayed
                    if ($('#searchResults').html().trim() !== "") {
                        $('#noc-hide').hide();
                    } else {
                        $('#noc-hide').show();
                    }
                },
                error: function() {
                    $('#searchResults').html('An error occurred while fetching details.');
                }
            });
        });

        // Add custom classes after Select2 initialization
        addCustomClassToSelect2();

        // Reset form
        $('#resetBtn').on('click', function() {
            $('#searchFormNoc')[0].reset(); // Reset form fields
            $('#nocCode').val(null).trigger('change'); // Reset Select2
            $('#searchResults').empty(); // Clear search results
            $('#noc-hide').show(); // Show the noc-hide section when reset
        });
    });
</script>

	 
</body>

</html>