<?php include '../metadata.php'; ?>
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
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <h2 class="section-title__title">Skilled Occupation List</h2>
                          
							<p>An essential requirement for prospective applicants for Skilled visas, <strong>current as of 2025</strong>, is having a skilled occupation on the Medium and Long-term Strategic Skills List (MLTSS), the Short-term Skilled Occupation List (STSOL) or the Regional Occupation List (ROL) of relevant legislative instrument.</p>
							<ul>
								<li>Occupations included in the MLTSSL list (212 occupations) are eligible to apply for <a target="_blank" href="https://www.immigrationxperts.com/australia-immigration/australia-pr-sub-class-189-skilled-independent-visa/"><b>Subclasses 189</b></a>, 190 and 491.</li>
								<li>Occupations included in the STSOL list (215 occupations) are eligible to apply for <a target="_blank" href="https://www.immigrationxperts.com/australia-immigration/skilled-nominated-visa-190/"><b>Subclasses 190</b></a> and 491.</li>
								<li>Occupations included in the ROL list (77 occupations) are eligible to apply for <a target="_blank" href="https://www.immigrationxperts.com/australia-immigration/skilled-work-regional-provisional-subclass-491-visa/"><b>Subclass 491</b></a>.</li>
							</ul>
							<p>Below is the complete list of eligible <strong>skilled occupations</strong> or <strong>combined list</strong> as prescribed in Legislative Instrument LIN 19/051</p>
							
							</br>
							<div class="table-responsive">
							<table id="myTable" class="table table-striped table-bordered dataTable no-footer" aria-describedby="myTable_info">
								<thead>
									<tr>
										<th>ANZSCO</th>
										<th>Name</th>
										<th>List</th>
										<th>Assessing Authority</th>
										<th>Skill Level</th
									</tr>
								</thead>
								<tbody>
									<?php
									// Include the database connection script
									include_once '../image-gallery/config/dbpdo.php';

									// Query to fetch data
									$sql = "SELECT anzsco_code, name, list, assessing_authority, skill_level FROM anzsco_occupations";
									$stmt = $pdo->query($sql);

									// Fetch and display rows
									while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
										echo '<tr>';
										// Create a link to the details page, passing the anzsco_code as a query parameter
										echo '<td class="sorting_1"><a href="/australia-immigration/skilled-occupation-details.php?anzsco_code=' . htmlspecialchars($row['anzsco_code']) . '" title="View details">' . htmlspecialchars($row['anzsco_code']) . '</a></td>';
										echo '<td>' . htmlspecialchars($row['name']) . '</td>';
										echo '<td><span class="badge-list">' . htmlspecialchars($row['list']) . '</span></td>';
										echo '<td>' . htmlspecialchars($row['assessing_authority']) . '</td>';
										echo '<td>' . htmlspecialchars($row['skill_level']) . '</td>';
										echo '</tr>';
									}
									?>
								</tbody>
							</table>

							</div>
                        </div>
						<?php include '../assistyou.php';?>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <?php include 'australia-sidebar.php';?>
                    </div>
                </div>

            </div>

        </section>
        <!--News Details End-->

         <?php include 'partner.php';?>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    
	<script>
   
	
	$(document).ready(function () {
    // Determine the size of the data dynamically
    var dataLength = $('#myTable tbody tr').length; // Get number of rows in the table
    
    // Create a dynamic length menu based on data size with doubling strategy
    var lengthMenuOptions = [];
    var baseSize = 50; // Start with 50 as base size

    // Double the base size up to a maximum reasonable limit (e.g., 2000)
    while (baseSize < dataLength) {
        lengthMenuOptions.push(baseSize);
        baseSize *= 2; // Double the size
    }
    
    // Always add the "All" option to allow viewing all rows at once
    lengthMenuOptions.push(-1);

    // Destroy existing DataTable instance if it exists
    if ($.fn.DataTable.isDataTable('#myTable')) {
        $('#myTable').DataTable().destroy();
    }

    // Initialize DataTable with dynamic length menu
    $('#myTable').DataTable({
        "lengthMenu": [lengthMenuOptions, lengthMenuOptions.map(x => x === -1 ? 'All' : x.toString())],
        "pageLength": 50 // Default page length to 50
    });
});

    </script>
	
	


     <script src="/assets/js/insur.js"></script>
	 <script src="/assets/js/country.js"></script>
</body>

</html>