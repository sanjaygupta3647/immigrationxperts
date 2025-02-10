<?php
// Include necessary files
include_once '../image-gallery/config/db.php';

// Initialize variables
$anzsco_code = "";

// Check if anzsco_code is provided
if (isset($_GET['anzsco_code'])) {
    $anzsco_code = htmlspecialchars($_GET['anzsco_code']);

    // Initialize database connection
    $database = new Database();
    $conn = $database->getConnection();

    // Prepare and execute the SQL statement with JOIN
    $stmt = $conn->prepare("
        SELECT d.*, o.name 
        FROM anzsco_occupations_details d
        JOIN anzsco_occupations o ON d.anzsco_code = o.anzsco_code
        WHERE d.anzsco_code = ?
    ");
    $stmt->bind_param("s", $anzsco_code);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the details if available
    if ($result->num_rows > 0) {
        $details = $result->fetch_assoc();
        // Sanitize all fields in the $details array
        array_walk($details, function (&$value) {
            $value = ($value);
        });
    } else {
        echo "Details not found.";
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No ANZSCO code provided.";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Skilled Occupation List - ImmigrationExperts</title>

<meta property="og:title" content="Skilled Occupation List - ImmigrationExperts" />
<meta property="og:description" content="The skilled occupation list or combined list (MLTSSL, STSOL and ROL) contains the occupations that are eligible under the General Skilled Migration program for subclass 189, 190 and 491 visas" />

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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="/assets/css/insur.css" />
    <link rel="stylesheet" href="/assets/css/insur-responsive.css" />

</head>

<body>
      <?php include '../header.php';?>

    <div class="page-wrapper">

        <!--Page Header Start-->
		<section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;"><a href="https://www.immigrationxperts.com/australia-immigration/" style="color: #ffffff;">Australia</a></li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Skilled Occupation List</h2>
                </div>
            </div>
        </section>
		
        
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-7">
                        
                        <div class="news-details__left">
							 <h2 class="section-title__title mb-5"><?php echo $details['name']; ?> - <?php echo $details['anzsco_code']; ?></h2>						 
							 
							<table class="table table-bordered details-table table-striped" style="border-color: black;">
								<tbody>									
									<tr>
										<th class="txt mt-2">Description</th>
										<td><?php echo nl2br(($details['description'])); ?></td>
									</tr>              
									<tr>
										<th class="txt mt-2">Skills Assessment Requirements</th>
										<td><?php echo nl2br(($details['skills_assessment_requirements'])); ?></td>
									</tr> 
									<tr>
										<th class="txt mt-2">Group Title</th>
										<td><?php echo nl2br(($details['group_title'])); ?></td>
									</tr>
									<tr>
										<th class="txt mt-2">Group Description</th>
										<td><?php echo nl2br(($details['group_description'])); ?></td>
									</tr>								   
								</tbody>
							</table>
							<h2 class="txt mt-4">How to calculate your points (skilled visas)</h2>
							    
							  	<p class="about-one__text-2">
                                      To apply for a <span style="color: #0000ff;"><a href="https://www.immigrationxperts.com/australia-immigration/australia-immigration-points-system/">skilled visa,</a></span> you must determine your <span style="color: #0000ff;"><a href="https://www.immigrationxperts.com/australia-pr-points-calculator/">points score.</a></span> The minimum required to be eligible is <span style="color: #ff6600;"> 65 points. </span>However, depending on your occupation, the demand, and the state you are applying to, you may need a higher score to receive an invitation.
							  	</p>
							
							<a href="skilled-occupation-list.php" class="btn btn-outline-primary search-type-btn  mt-4"> 
                                <span class="btn-noc">Back to Skilled Occupation List</span>
                            </a>							
                            <?php include '../assistyou.php';?>
                        </div>
                    </div>
                    
                </div>

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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable({
        "aLengthMenu": [50]
    });
    });
    </script>

     <script src="/assets/js/insur.js"></script>
	 <script src="/assets/js/country.js"></script>
</body>

</html>