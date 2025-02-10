<?php include 'metadata.php'; ?>
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

	 <style>
        body, html {
            scroll-behavior: smooth;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1100;
        }
        .banner {
            background-image: url('https://via.placeholder.com/1920x400'); /* Replace with your banner image URL */
            height: 400px;
            background-size: cover;
            background-position: center;
            margin-top: 70px; /* Space for the fixed header */
        }
        .fixed-section-nav {
            position: fixed;
            top: 100px; /* Stick to the top */
            left: 0;
            right: 0;
            z-index: 1000; /* Above other content */
            background-color: #f8f9fa; /* Match your site's background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
        }
        section {
            padding: 10px 0;
            border-bottom: 0px solid #ddd;
        }
		
		
		.weather-section {
			padding: 15px;
			background-color: #abb5bd;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		.options__title {
			font-weight: 600;
			font-size: 1.25rem;
		}
		.temperature-unit {
			font-size: 1rem;
			color: #666;
		}
		.list-group-item {
			font-size: 0.95rem;
		}

    </style>
</head>

<body>
    <?php include 'header.php';?>

    <div class="page-wrapper">

        <!--Page Header Start-->
        <section class="page-header" style="background: linear-gradient(to right, #01406b, #00bdce); color: #fff; padding: 70px 0 70px;">  
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/" style="color: #ffffff;">Home</a></li>
                        <li style="color: #ffffff;"><span>/</span></li>
                        <li style="color: #ffffff;">Study Abroad</li>
                    </ul>
                    <h2 style="color: #b8e1f0;">Study in Germany</h2>
                </div>
            </div>
        </section>

        <!--Page Header End-->

        <!--News Details Start-->

    <!-- Section Navigation -->
    <div id="sectionNav" class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#section1">FAST FACTS</a></li>
                <li class="nav-item"><a class="nav-link" href="#section2">TOP UNIVERSITIES</a></li>
                <li class="nav-item"><a class="nav-link" href="#section3">VISA</a></li>
                <li class="nav-item"><a class="nav-link" href="#section4">COST OF LIVING</a></li>
                <li class="nav-item"><a class="nav-link" href="#section5">WORK OPPORTUNITIES</a></li>
                <li class="nav-item"><a class="nav-link" href="#section6">FAQs</a></li>
            </ul>
        </div>
    </div>

    <!-- Page Sections -->
	
	<section id="section1" class="process">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Study in Germany</h2>
                </div>
			
                <div class="process__inner">
                    <div class="process-shape-1">
                        <img src="/assets/images/shapes/process-shape-1.png" alt="">
                    </div>
                    <div class="row">
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-select"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Berlin</h3>
                                    <p class="process__text">Capital</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-2">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-meeting"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">83 Million</h3>
                                    <p class="process__text">Population</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-3">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-agreement"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">German</h3>
                                    <p class="process__text">Language</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-4">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-insurance-agent"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">458,210</h3>
                                    <p class="process__text">International Students</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                    </div>
                </div>
                
				<div class="process__inner">
                    <div class="process-shape-1">
                        <img src="/assets/images/shapes/process-shape-1.png" alt="">
                    </div>
                    <div class="row">
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-select"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">$ 4.5 Trillion</h3>
                                    <p class="process__text">GDP</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-2">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-meeting"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">+49</h3>
                                    <p class="process__text">Dialing Code</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-3">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-agreement"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">Euro</h3>
                                    <p class="process__text">Currency</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                        <!--Process Single Start-->
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="process__single process__single-4">
                                <div class="process__icon-box">
                                    <div class="process__icon">
                                        <span class="icon-insurance-agent"></span>
                                    </div>
                                    <div class="process__count"></div>
                                </div>
                                <div class="process__content">
                                    <h3 class="process__title">400+</h3>
                                    <p class="process__text">Universities</p>
                                </div>
                            </div>
                        </div>
                        <!--Process Single End-->
                    </div>
                </div>
                
            </div>
        </section>
	
   <section   class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                              
                                <h2 class="section-title__title">Why Study in Germany?</h2>
                            </div>
                            <p class="about-two__text">Germany is a leading destination for international students due to its world-renowned education system, strong economy, and multicultural environment. The country offers excellent academic programs, especially in fields like engineering, IT, business, and the sciences. Public universities in Germany often have low or no tuition fees, making it an affordable option. Germany’s robust infrastructure, research opportunities, and high employment rate for graduates add further appeal, making it an ideal choice for students worldwide.</p>
                           
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="about-two__middle">
                            <div class="about-two__img-box">
                                <div class="about-two__img">
                                    <img src="/assets/images/backgrounds/about-two-img-1.webp" alt="">
                                </div>
                                <div class="about-two__dots float-bob-y">
                                    <img src="/assets/images/shapes/about-two-dots.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="about-two__counter">
                            <ul class="list-unstyled about-two__counter-list">
                                <li>
                                    <div class="about-two__counter-single">
                                        <p class="about-two__counter-text-1">International Graduates</p>
                                        <p class="about-two__counter-text-2">Thousands of students have successfully completed their studies in Germany, gaining globally recognized degrees.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-two__counter-single">                                       
                                        <p class="about-two__counter-text-1">Satisfied Alumni</p>
                                        <p class="about-two__counter-text-2">Germany's top-quality education and welcoming environment have left hundreds of international students satisfied with their study experience.</p>
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
   
	
	<section id="section2" class="news-carousel-page">
    <div class="container">
		<div class="section-title text-center">                    
			<h2 class="section-title__title">Top Universities to Study in Germany</h2>
		</div>		
	
        <div class="row">
            <div class="thm-owl__carousel owl-theme owl-carousel news-carousel carousel-dot-style" data-owl-options='{
                "items": 3,
                "margin": 30,
                "smartSpeed": 700,
                "loop": true,
                "autoplay": true,
                "autoplayTimeout": 6000,
                "nav": false,
                "dots": true,
                "responsive": {
                    "0": { "items": 1 },
                    "768": { "items": 3 },
                    "992": { "items": 4 }
                }
            }'>
               
<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/2.JPG" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 5.5 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>University of Europe For Applied Sciences</a></h3>
                        </div>
                    </div>
                </div>
<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/3.JPG" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 6 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>EU Business School</a></h3>
                        </div>
                    </div>
                </div>
				<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/4.JPG" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 6 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>Berlin School of Business and Innovation (BSBI)</a></h3>
                        </div>
                    </div>
                </div>

<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/5.jpg" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 5.5 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>SRH - Hochschulen Heidelberg</a></h3>
                        </div>
                    </div>
                </div>

<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/6.jpg" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 6 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>Gisma University of Applied Sciences</a></h3>
                        </div>
                    </div>
                </div>

<!-- Carousel items -->
                <div class="item">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="/assets/images/uni/7.jpg" alt="University of Leicester">
                        </div>
                        <div class="news-one__content">
                            <ul class="list-unstyled news-one__meta">
                                <li><a><i class="far fa-calendar"></i> 5.5 Minimum IELTS Required</a></li>
                                <li><a><i class="far fa-comments"></i> Private Type</a></li>
                            </ul>
                            <h3 class="news-one__title"><a>Steinbeis University</a></h3>
                        </div>
                    </div>
                </div>


                <!-- Repeat .item for each slide -->
                <!-- You can add more slides here -->
            </div>
        </div>
    </div>
</section>
		
		
	<section class="cta-one cta-two">
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__inner">
                        <div class="cta-one__left">
                            <h3 class="cta-one__title">Get your Dream PTE or IELTS Score with </br>Leverage Live Classes</h3>
                        </div>
                        <div class="cta-one__right">
                            <div class="cta-one__call">
                                <div class="cta-one__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="cta-one__call-number">
                                    <a href="tel:9999467676">+91 9999-467676</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="cta-one__img">
                            <img src="/assets/images/resources/cta-one-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


		
	<section id="section3" class="news-carousel-page">
		<div class="container">
		<div class="section-title text-center">                    
			<h2 class="section-title__title">Post Admission Experience</h2>
		</div>
			
		
			<div class="row">
				<div class="col-6">
				    <h3 class="feature-one__title"><a href="about.html">Visa for Germany</a></h3>
				 <div class="thm-owl__carousel owl-theme owl-carousel news-carousel carousel-dot-style" data-owl-options='{
						"items": 2,
						"margin": 30,
						"smartSpeed": 700,
						"loop": true,
						"autoplay": true,
						"autoplayTimeout": 6000,
						"nav": false,
						"dots": true,
						"responsive": {
							"0": { "items": 1 },
							"768": { "items": 2 },
							"992": { "items": 2 }
						}
					}'>
					<!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">
							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>Technical University of Munich (TUM)</a></h3>
								<h6 class="cost">Cost - € 52</h6>
								<p class="news-one__text">Known for engineering and technology programs.</p>
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				   <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">
							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>Ludwig Maximilian University of Munich (LMU)</a></h3>
								<h6 class="cost">Cost - € 62</h6>
								<p class="news-one__text">A top choice for humanities, social sciences, and natural sciences.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				   <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">
							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>Ludwig Maximilian University of Munich (LMU)</a></h3>
								<h6 class="cost">Cost - € 60</h6>
								<p class="news-one__text">A top choice for humanities, social sciences, and natural sciences.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				   <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>Heidelberg University</a></h3>
								<h6 class="cost">Cost - € 62</h6>
								<p class="news-one__text">Germany's oldest university, well-regarded for medical and life sciences.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				    <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>Humboldt University of Berlin</a></h3>
								<h6 class="cost">Cost - € 65</h6>
								<p class="news-one__text">Famous for its research programs, especially in arts and humanities.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				    <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>University of Freiburg</a></h3>
								<h6 class="cost">Cost - € 58</h6>
								<p class="news-one__text">A preferred choice for international students for environmental sciences and medicine.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				    <!-- Carousel items -->
					<div class="item">
						<div class="news-one__single">							
							<div class="news-one__content">
								 <h3 class="news-one__title"><a>RWTH Aachen University</a></h3>
								<h6 class="cost">Cost - € 59</h6>
								<p class="news-one__text">Known for its strong engineering and technical programs.</p>                      
							</div>
						</div>
					</div>
					<!-- Carousel items -->
				   				   
					<!-- You can add more slides here -->
				</div>
				</div>
				

				<div class="col-6 weather-section">
					<div class="row">
						<div class="col-12">
							<!-- Weather Header with Temperature Units Toggle -->
							<div class="d-flex justify-content-between align-items-center">
								<h3 class="options__title">Weather</h3>
								<div class="temperature-unit">
									<span class="celcius">°C</span> / <span class="fahrenheit">°F</span>
								</div>
							</div>
							<hr>
						</div>
					</div>

					<!-- Weather Min/Max Labels for Desktop & Mobile -->
					<div class="row mb-2">
						<div class="col-6 text-left"><strong>City</strong></div>
						<div class="col-6 text-right">
							<span>Min</span> / <span>Max</span>
						</div>
					</div>

					<!-- Weather List -->
					<ul class="list-group">
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<span>Berlin</span>
							<span>
								<span class="celcius">3°C</span> / <span class="fahrenheit">8°F</span>
							</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<span>Munich</span>
							<span>
								<span class="celcius">1°C</span> / <span class="fahrenheit">8°F</span>
							</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<span>Heidelberg</span>
							<span>
								<span class="celcius">3°C</span> / <span class="fahrenheit">8°F</span>
							</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<span>Cologne</span>
							<span>
								<span class="celcius">4°C</span> / <span class="fahrenheit">9°F</span>
							</span>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<span>Frankfurt</span>
							<span>
								<span class="celcius">4°C</span> / <span class="fahrenheit">9°F</span>
							</span>
						</li>
					</ul>
				</div>
				<!-- Optional CSS for styling -->
			</div>
		</div>
	</section>
			
			
			
	<section id="section4" class="about-ten">
            <div class="container">
			
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-ten__image wow fadeInUp animated animated animated" data-wow-delay="00ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <img src="/assets/images/backgrounds/about-ten-1.webp" alt="insur">
                            <div class="about-ten__image__shape">
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp animated animated animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="about-ten__content">
                            <div class="section-title-seven text-left">
                                
                                <h2 class="section-title-seven__title">Monthly Living Expenses in Germany</h2>
                            </div>
                            <p class="about-ten__content__text">
                                "The cost of living in Germany varies by city but typically ranges from €850 to €1,200 per month, covering rent, food, transportation, and other essentials. Major cities like Berlin and Munich tend to be on the higher end, while smaller towns offer more affordable options."
                            </p>
                            <div class="about-ten__content__bottom">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-ten__content__image">
                                            <img src="/assets/images/backgrounds/about-ten-2.webp" alt="insur">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-ten__fact-wrapper">
                                            
                                            
                                            <ul class="about-ten__list list-unstyled">
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>1. Accommodation (€250–€500 per month)</li>
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>2. Food (€150–€250 per month)</li>
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>3. Transportation (€30–€70 per month)</li>
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>4. Health Insurance (€80–€110 per month)</li>
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>5. Miscellaneous Expenses (€50–€100 per month)</li>
                                                <li><span class="about-ten__list__icon"><i class="insur-four-icon-checked"></i></span>6. Total Monthly Budget: €850–€1,200</li>
                                            </ul>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
			
			
			
	<section id="section5" class="feature-one">
            <div class="container">
			
			<div class="section-title text-center">                 
				<h2 class="section-title__title">Part time Careers & </br> Work Opportunities in Germany</h2>
			</div>
			
			
                <div class="feature-one__inner">
                    <div class="row">
                        <!--Feature One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-insurance"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="/assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">Part-time Work Opportunitie</a></h3>
                                    <p class="feature-one__text">International students from non-EEA countries are allowed to work in Germany for either 140 full working days or 280 half working days per year. These days are counted based on actual work performed, excluding holidays, public holidays, and sick days. Alternatively, they can work up to 20 hours per week during term time.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                        <!--Feature One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="feature-one__single">
                                <div class="feature-one__single-inner">
                                    <div class="feature-one__icon">
                                        <span class="icon-cashback"></span>
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__shape">
                                        <img src="/assets/images/shapes/feature-one-shape-1.png" alt="">
                                    </div>
                                    <h3 class="feature-one__title"><a href="about.html">Post Study Work VISA</a></h3>
                                    <p class="feature-one__text">Students who complete their studies in Germany are eligible for an 18-month Job Seeking Visa, often called a post-study work visa. It’s advisable to start job hunting during your final semester, as the extended work period starts once you receive your final exam results.</p>
                                </div>
                            </div>
                        </div>
                        <!--Feature One Single End-->
                       
                    </div>
                </div>
            </div>
        </section>

    <section id="section6" class="container">
    <div class="section-title text-center">
        <h2 class="section-title__title">FAQ's</h2>
    </div>
        
    <div class="faq-one__single">
        <div class="accrodion-grp faq-one-accrodion faq-one-accrodion-1" data-grp-name="faq-one-accrodion-1">
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4><span>Q</span> Do I need to know German to study in Germany?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p class="about-one__text-2">Not necessarily, as many universities offer English-taught programs. However, knowing German can enhance your experience and increase job opportunities.</p>
                    </div>
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4><span>Q</span> Is health insurance mandatory?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p class="about-one__text-2">Yes, health insurance is compulsory for all students in Germany.</p>
                    </div>
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4><span>Q</span> Can I work after completing my studies?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p class="about-one__text-2">Yes, non-EU students can apply for an 18-month job-seeking visa to look for employment.</p>
                    </div>
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4><span>Q</span> Are scholarships available for international students?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p class="about-one__text-2">Yes, there are several scholarships, including DAAD, Deutschlandstipendium, and university-specific ones.</p>
                    </div>
                </div>
            </div>
            <div class="accrodion">
                <div class="accrodion-title">
                    <h4><span>Q</span> How much time does it take to get a study visa?</h4>
                </div>
                <div class="accrodion-content" style="display: none;">
                    <div class="inner">
                        <p class="about-one__text-2">It can take between 6-12 weeks, so it’s advisable to apply as early as possible.</p>
                    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sectionNav = document.getElementById('sectionNav');
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        const sectionNavHeight = sectionNav.offsetHeight;

        // Set sectionNav to fixed when scrolling past the first section
        window.addEventListener('scroll', function () {
            const firstSectionTop = sections[0].getBoundingClientRect().top;

            if (firstSectionTop <= 0) {
                sectionNav.classList.add('fixed-section-nav');
            } else {
                sectionNav.classList.remove('fixed-section-nav');
            }

            // Highlight active link based on scroll position
            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                
                // Check if the section is in view
                if (rect.top <= sectionNavHeight && rect.bottom > sectionNavHeight) {
                    navLinks.forEach(link => link.classList.remove('active'));
                    navLinks[index].classList.add('active');
                }
            });
        });

        // Smooth scrolling for section links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId.startsWith("#")) {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Adjust scroll position to account for fixed sectionNav height
                        const offsetTop = targetElement.offsetTop - sectionNavHeight;

                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
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