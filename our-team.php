<?php
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
        <section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;">Team</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Our Team</h2>
                </div>
            </div>
        </section>

        <!--Page Header End-->

        <!--Team Page Start-->
        <section class="team-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/manish.jpg" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.facebook.com/people/Manish-Srivastava/pfbid02wkMKtLpHygPZrLWZYKsSJgJgFyy57wQgQVhEpQWRNJTxiTVHvHwXXGQFrP2RQ3NUl/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://www.linkedin.com/in/manishsrivastava-immigrationexperts/"  target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">CEO , Founder</p>
									<h3 class="team-one__name"><a href="#">Manish Srivastava</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/Nirupama_Shandilya.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/nirupama-shandilya-477110135/"  target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Sales Head</p>
									<h3 class="team-one__name"><a href="#">Nirupama Shandilya</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                    
                    	<!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/Divay_Nagpal.jpg" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/divay-nagpal-a1577a191/"  target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Branch Head - Delhi</p>
									<h3 class="team-one__name"><a href="#">Divay Nagpal</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                    
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/nitu.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="#"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Client Relationship Manager</p>
									<h3 class="team-one__name"><a href="#">Neetu Negi</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                    
                   
                    
                    <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/vidhi.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/vidhi-srivastava-6a0049319/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Case Manager</p>
									<h3 class="team-one__name"><a href="#">Vidhi Srivastava</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                   
					 <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/vivek.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/vivek-singh-bba9012b5/" target="_blank"><i class="fab fa-linkedin-in" ></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Case Manager</p>
									<h3 class="team-one__name"><a href="#">Vivek Singh</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                   
					 <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/ajit.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/ajit-99337931b/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Case Specialist</p>
									<h3 class="team-one__name"><a href="#">Ajit</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                   
					 <!--Team One Single Start
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/Manisha_Bhati.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/manisha-bhati-21144311a/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Process Head (Canada)</p>
									<h3 class="team-one__name"><a href="#">Manisha Bhati</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                   Team One Single End-->
                   
					 <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/neha.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/neha-gupta-6bb192191/" target="_blank"><i class="fab fa-linkedin-in" ></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Senior Sales Manager</p>
									<h3 class="team-one__name"><a href="#">Neha Gupta</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                    <!--Team One Single End-->
                   
				
                     <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/rajesh.webp" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="https://www.linkedin.com/in/rajesh-panchal/" target="_blank"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">Digital Marketing </p>
									<h3 class="team-one__name"><a href="#">Rajesh Vishwakarma</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div> 
                    <!--Team One Single End-->
                    
                     <!--Team One Single Start-->
                    <div class="col-xl-3 col-lg-3 col-md-6  wow fadeInUp" data-wow-delay="100ms">
                        <div class="item">
							<div class="team-one__single">
								<div class="team-one__img">
									<div class="team-one__img-box">
										<img src="/assets/images/team/divyani.png" alt="">
									</div>
									<ul class="list-unstyled team-one__social">
										<li><a href="#"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
									</ul>
								</div>
								<div class="team-one__content">
									<p class="team-one__sub-title">PTE Trainer</p>
									<h3 class="team-one__name"><a href="#">Diyani</a></h3>
									<ul class="list-unstyled team-one__social-two">
										<li><a href="#"><i class="fas fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div> 
                    <!--Team One Single End-->
					
                </div>
            </div>
        </section>
        <!--Team Page End-->


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