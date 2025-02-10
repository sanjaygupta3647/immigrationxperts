<?php
$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<!-- Canonical tag -->
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Settle in Australia with Immigration Experts</title>
    <meta name="description" content="Dreaming of moving to Australia? Our expert immigration consultants guide you through every step of the process. Contact us today!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <!-- Modal Video-->
    <link rel="stylesheet" href="vendor/modal-video/css/modal-video.min.css">
    <!-- Leaflet-->
    <link rel="stylesheet" href="vendor/leaflet/leaflet.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	  <style>
		  .limg{
			  width:165px !important;
		  }


		@media only screen and (max-width: 600px) {

		  .limg{
			  width:160px !important;
	  
		  }
	  </style>
	  	  <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-EN0JV7ZG2B"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-EN0JV7ZG2B');
	</script>
  </head>
  <body>
    <!-- navbar-->
    <!-- Header Area wrapper Starts -->
	 <div class="enquirenoside" id="deskhide" style="text-align: right;
        position: fixed;
        transform: rotate(270deg);
        right: -42px;
        top: 50%;
        z-index: 10000;">
        <button data-bs-toggle="modal" data-bs-target="#modalEnquireForm" class="btn btn-danger" style="border-top-left-radius: 12px; border-top-right-radius: 12px;background-color:#015fc9" onclick="popupid(8)">Enquiry Now</button>
    </div>
	  
    <div class="site-header-menu-inner cmt-stickable-header">
      <div class="container">
          <div class="row" style="padding:2%">
              <div class="col-lg-12">
                  <!--site-navigation -->
                  <div class="site-navigation d-flex flex-row align-items-center justify-content-between">
                      <!-- site-branding -->
                      <div class="site-branding ">
                          <img id="logo-img" class="img-center limg" src="img/logo.png" alt="logo-img" >
                      </div><!-- site-branding end -->
                      <div class="d-flex flex-row">
                          <div class="d-none d-xl-block">
                              <p style="font-size:18px"><span style="margin-right: 40px;">Get FREE Consultation for <strong style=" color: #015fc9;">AUSTRALIA IMMIGRATION</strong></span> <span><i class="lni lni-phone"></i>&nbsp;<a href="tel:+919999467686" style="font-weight:700">+91 9999467686</a></span></p>
                          </div>
						   <p style="    font-size: 14px;    margin-top: 20px;margin-right: 20px;font-weight:700 " class="d-block d-xl-none"><span><i class="lni lni-phone"></i>&nbsp;<a href="tel:+919999467686">+91 9999467686</a></span></p>
                      </div>
                  </div><!-- site-navigation end-->
              </div>
          </div>
      </div>
	</div>

		<style>
			.img-responsive.mobile {
			  display: none;
			}

			@media only screen and (max-device-width: 480px) {
			  .img-responsive {
				display: none;
			  }
			  .img-responsive.mobile {
				display: block;
			  }
	  </style>

  <!-- Features Section -->
  <section class="py-1 bg-light">
      <div class="container">
        <div class="row align-items-center gx-lg-0">
          <div class="col-lg-5">
            <div class="pe-lg-3">
				<img class="img-fluid img-responsive" src="img/michael.jpg" alt="" width="90%">
			  <img class="img-fluid img-responsive mobile" src="img/australia-mobile-banner.webp" alt="">
			  </div>
          </div>
          <div class="col-lg-7">
            <div class="p-4 p-md-5 shadow bg-white">
              <h3 class="">Work, Live & Settle in Australia.</h3>
              <p class="">With a PR visa, you can get the life you've always dreamed of.</p>
              <!-- <p class="h6 mb-1 text-uppercase text-primary mb-3">Sign up for a free, expert consultation</p> -->
              <div class="row">
                <div class="col-lg-9">					
					
			   <form method="POST" id="banner_form" action ="/testt/newmail/land/">
				<div class="row">
					<div class="col-12 float-left">
						<h4 style="color: black;" class="h6 mb-1 text-uppercase text-primary mb-3">Check Your Eligibility</h4>
					</div>
					<br><br>
					</div>
						<div class="row gy-3">
							<div class="col-lg-12">
								<input type="text" class="form-control" name="name" placeholder="Full Name" required="" style="padding: 0.4rem;">
							</div>
							<div class="col-lg-12">
								<input type="email" class="form-control" name="email" placeholder="Email" required="" style="padding: 0.4rem;">
							</div>
							<div class="col-lg-12">
								<input type="number" class="form-control" name="phone" placeholder="Phone" required="" style="padding: 0.4rem;">
							</div>
							<div class="col-lg-12">
								<input type="text" class="form-control" name="city" placeholder="State/City" required style="padding: 0.4rem;">
							</div>
							<div class="col-lg-12">
								<select id="age" name="age" class="select-field s-select" required="">
                					  <option value="">Select Your Age</option>
                					  <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
                					</select>
							
							</div>
							<div class="col-lg-12">										
								<select name="edu" class="form-control" required="" style="padding: 0.4rem;">
								  <option value="">Select Your Highest Education</option><option value="3 Year Diploma">3 Year Diploma</option><option value="Graduation">Graduation</option><option value="PG Diploma">PG Diploma</option><option value="Master">Master</option><option value="PHD/Doctorate">PHD/Doctorate</option>
								</select>
							</div>
							<div class="col-lg-12">										
								<select name="exp" class="form-control" required="" style="padding: 0.4rem;">
									<option value="">Select Your Work Experience</option><option value="1 to 2 Years">1 to 2 Years</option><option value="2 to 3 Years">2 to 3 Years</option><option value="3 to 4 Years">3 to 4 Years</option><option value="4 to 5 Years">4 to 5 Years</option><option value="5 to 6 Years">5 to 6 Years</option><option value="6 to 7 Years">6 to 7 Years</option><option value="7 to 8 Years">7 to 8 Years</option><option value="8 to 9 Years">8 to 9 Years</option><option value="10+ Years">10+ Years</option>
								</select>
								
							</div>
							<input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">
							<div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
							
							<center><button class="btn btn-outline-primary" name="google_submit_frm_desk" type="submit" id="banner_Submit_button">Apply Now</button>
							</center>
						</div>
					</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Slider -->
    
    <style type="text/css">
      .mobileheight { 
        margin-top: 1%;
      }
      @media screen and (max-width: 500px) {
      .mobileheight { 
      margin-top: 5%;}
      }
      </style>
	  
	   <center><h6 style="background:#015fc9;padding:2%;color:white">India’s #1 Australian Immigration Consultants – Immigration Experts (MARA Registered® Immigration Consultant.)	</h6></center>
	   
	  
	<section class="py-3">
	  <div class="container text-center">
		<header class="mb-5">
		  <div class="row">
			<div class="col-lg-7 mx-auto">
			  <!-- <p class="h6 text-uppercase text-primary mb-0">Our services</p> -->
			  <h2>Get Australia PR Visa in <span style="color:#015fc9">8-10 months</span></h2>
			</div>
		  </div>
		</header>
		<div class="row align-items-stretch gy-4">
		  <div class="col-lg-4 col-md-6">
			<div class="px-4 py-5 border border-2 border-dash h-100">
			  <!--<svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
				<use xlink:href="#laptop-screen-1"> </use>
			  </svg>-->
				<img src="img/ic3.png" alt="Avatar" class="image" style="width:50%"> 
			  <h3 class="h5">Australia 189 Visa </h3>
			  <p class="text-sm mb-0 text-muted">The Australia 189 Visa, also known as the Skilled Independent Visa (subclass 189), is a permanent residency visa for skilled workers who are not sponsored by an employer, a state or territory, or a family member. It allows skilled individuals to live and work in Australia permanently. </p>
			  <br>
			  <center><button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" style="background:#015fc9;font-size:13px;border-radius:5px;color:white" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" onclick="popuid(2)">Check Eligibility For Australia PR</button></center>
			</div>
		  </div>
		  <div class="col-lg-4 col-md-6">
			<div class="px-4 py-5 border border-2 border-dash h-100">
			  <img src="img/ic2.png" alt="Avatar" class="image" style="width:50%"> 
			  <h3 class="h5">Australia 190 Visa</h3>
			  <p class="text-sm mb-0 text-muted">The Australia 190 Visa, officially known as the Skilled Nominated Visa (subclass 190), is a permanent residency visa that allows skilled workers who are nominated by an Australian state or territory government to live and work in Australia.</p>
			  <br>
				<center><button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" style="background:#015fc9;font-size:13px;border-radius:5px;color:white" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" onclick="popuid(3)">Check Eligibility For Australia PR</button></center>
			</div>
		  </div>
		  <div class="col-lg-4 col-md-6">
			<div class="px-4 py-5 border border-2 border-dash h-100">
				   <img src="img/ic1.png" alt="Avatar" class="image" style="width:50%"> 
			  <h3 class="h5">Australia 491 Visa</h3>
			  <p class="text-sm mb-0 text-muted">The Australia 491 Visa, also known as the Skilled Work Regional (Provisional) visa (subclass 491), is a temporary visa designed for skilled workers who wish to live and work in regional Australia. This visa requires sponsorship by an Australian state or territory government or an eligible relative residing in a designated regional area.</p>
			  <br>
				 <center><button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" style="background:#015fc9;font-size:13px;border-radius:5px;color:white" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" onclick="popuid(4)">Check Eligibility For Australia PR</button></center>
			</div>
		  </div>
		</div>
	  </div>
	</section>


		<style>

		  .des_form {
			  display: block;
			  width: 100%;
			  line-height: 26px;
			  font-size: 14px;
			  box-shadow: 0 8px 24px #020a16;
			  color: #848484;
			  background: #f7f7f7;
			  border: 1px solid transparent;
			  border-radius: 30px;
			  background-image: none;
			  background-clip: padding-box;
			  margin-top:25px;
		  }
      </style>
	  
	   
	   
	<section class="counter-section section-padding">
      <div class="bg-primary py-5 text-white"><div class="container"><div class="row gy-4"><div class="col-lg-3 col-md-6"><div class="d-flex align-items-center"><h6 class="h2 mb-0">16+</h6><p class="ms-3 flex-grow-1 text-uppercase mb-0">Years Of Immigration Experience</p></div></div><div class="col-lg-3 col-md-6"><div class="d-flex align-items-center"><h6 class="h2 mb-0">100%</h6><p class="ms-3 flex-grow-1 text-uppercase mb-0">Client Service Satisfaction</p></div></div><div class="col-lg-3 col-md-6"><div class="d-flex align-items-center"><h6 class="h2 mb-0">35K+</h6><p class="ms-3 flex-grow-1 text-uppercase mb-0">Applications Experience</p></div></div><div class="col-lg-3 col-md-6"><div class="d-flex align-items-center"><h6 class="h2 mb-0">100%</h6><p class="ms-3 flex-grow-1 text-uppercase mb-0">PR Visa Success Rates</p></div></div></div></div></div>
    </section>
	
    
    <!-- Features Section -->
    <section class="py-3 pt-5 bg-light">
      <div class="container pt-1">
        <div class="row">
          <div class="col-lg-7 order-2 order-lg-1">
            <!--<p class="h6 mb-1 text-uppercase text-primary mb-3">Our main features</p>-->
            <h2 class="mb-4">About Immigration Experts</h2>
            <p class="text-sm text-muted">Apical Immigration Experts is one of India’s best immigration consulting companies. Established in 2012 in India from a small office, our company has MARA Registered® Immigration consultant. </p>
            <ul class="list-check list-unstyled row px-3 mb-4 gy-2">
              <li class="text-sm text-muted col-lg-6"><b>PR Visa Success Rates - 100%</b></li>
			  <li class="text-sm text-muted col-lg-6"><b>Client Service Satisfaction - 100%</b></li>
			  <li class="text-sm text-muted col-lg-6"><b>Years Of Immigration Experience - 16+</b></li>
			  <li class="text-sm text-muted col-lg-6"><b>Applications Experience - 35k+</b></li>
            </ul>
            <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">
              <li class="list-inline-item px-4 mr-0 border-left">
                <span data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" class="btn btn-common" href="#" style="background: #015fc9; color: white; padding: 2%;" onclick="popupid(5)">Get Free Consultation</span>
              </li>
              <li class="list-inline-item pl-4 border-left">
                <h6 class="mb-0"><a href="tel:+919999467686" style="color:black">+91 9999467686</a></h6>
                <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-5  ms-auto mb-4 mb-lg-0 order-1 order-lg-2">
            <div class="p-2 border">
			  <img class="img-fluid" src="img/australia-flag.webp" alt="">
			  </div>
          </div>
        </div>
      </div>
    </section>
	
	
	<!-- Features Section -->
    <section class="py-3 bg-light">
      <div class="container pt-1">
        <div class="row align-items-center gx-lg-0">
          <div class="col-lg-5">
			<div class="p-2 ">
				<img class="img-fluid" src="img/feature-img.jpg" alt="">
			</div>            
          </div>
          <div class="col-lg-7">
            <div class="p-4 p-md-5 shadow bg-white">
             <!-- <p class="h6 mb-1 text-uppercase text-primary mb-3">Why choose us</p>-->
              <h2 class="mb-5">To be eligible for Australia PR in 2024?</h2>
              <div class="row">
                <div class="col-lg-12">
                  <ol class="list-check list-unstyled mb-0">
                    <li class="mb-4">
                      <p>Age: Below 45 years</p>
               
                    </li>
                    <li class="mb-4">
                      <p>Points required: Minimum 65 points in the points grid.</p>
                  
                    </li>
                    <li class="mb-4">
                      <p>Experience: Have 3 years of work experience</p>
                      
                    </li>
                    <li>
                      <p>Qualifation: Must be graduate or above</p>
                     
                    </li>
                  </ol>
				  <center><button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" style="background:#015fc9;font-size:13px;border-radius:5px;color:white" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" onclick="popuid(2)">Check Eligibility For Australia PR</button></center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	 <center><h5 style="background:red;padding:2%;color:white">NO VISA - NO FEES POLICY - GET 100% REFUND ON VISA REJECTION*.</h5></center>

    <!-- Features Section -->
    <section class="py-3 bg-light">
      <div class="container">
        <div class="row">
		  		  
          <div class="col-lg-7  order-2 order-lg-1">
            <!--<p class="h6 mb-1 text-uppercase text-primary mb-3">Our main features</p>-->
            <h2 class="mb-4">Benefits Of Australia Permanent Residency Visa.</h2>
            <p class="text-sm text-muted">Australia Permanent Residency not only comes with the freedom of life and work in Canada but also some great benefits which allows you to feel very much at your home country.</p>
            <ul class="list-check list-unstyled row px-3 mb-4 gy-2">
				<li class="text-sm text-muted col-lg-6"><b>Live and Work in Australia</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Sponsor spouse, children and parents</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Free Healthcare benefits</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Free Education for Children</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Free Social Security Benefits</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Freedom of Multiple Entries</b></li>
				<li class="text-sm text-muted col-lg-6"><b>More Salaries and less Expense</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Better standard of Living</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Welcoming People and Companies</b></li>
				<li class="text-sm text-muted col-lg-6"><b>Retirement Benefits</b></li>
            </ul>
            <ul class="list-inline py-4 border-top border-bottom d-flex align-items-center">
              <li class="list-inline-item px-4 mr-0 border-left">
                <span data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" class="btn btn-common" href="#" style="background: #015fc9; color: white; padding: 2%;" onclick="popupid(6)">Get Free Consultation</span>
              </li>
              <li class="list-inline-item pl-4 border-left">
                 <h6 class="mb-0"><a href="tel:+919999467686" style="color:black">+91 9999467686</a></h6>
                <p class="small font-weight-normal text-muted mb-0">Call to ask any question</p>
              </li>
            </ul>
          </div>
          
		  <div class="col-lg-5 ms-auto mb-4 mb-lg-0 order-1 order-lg-2">
            <div class="p-2 ">
				<img class="img-fluid" src="img/opera.jpg" alt="">
			</div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Features Section -->
    <section class="pt-3 pb-5 bg-light">
      <div class="container">
        <div class="row">
		  <div class="col-lg-5">
            <div class="p-2 ">
				<img class="img-fluid" src="img/3rd.jpg" alt="">
			</div>
          </div>
		  
          <div class="col-lg-7">
            <h2 class="mb-4">High Demand Occupations in Australia (Salaries)</h2>          
            <table class="table table-bordered">
				<thead>
				  <tr>
					<th>Occupation</th>
					<th>Annual Salary in (AUD)</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>IT</td>
					<td>$99,642 – $ 145, 000</td>
				  </tr>
				  <tr>
					<td>Marketing &amp; Sales</td>
					<td>$84,072 – $103,202</td>
				  </tr>
				  <tr>
					<td>Engineering</td>
					<td>$92,517 – $110,008</td>
				  </tr>
				  <tr>
					<td>Hospitality</td>
					<td>$60,000 – $75,000</td>
				  </tr>
				  <tr>
					<td>Healthcare</td>
					<td>$101,569- $169279</td>
				  </tr>
				  <tr>
					<td>Accounting &amp; Finance</td>
					<td>$77,842 – $92,347</td>
				  </tr>
				  <tr>
					<td>Human Resources</td>
					<td>$80,000 – $99,519</td>
				  </tr>
				  <tr>
					<td>Construction</td>
					<td>$72,604 – $99,552</td>
				  </tr>
				  <tr>
					<td>Manufacturer</td>
					<td>$90,569 – $108,544</td>
				  </tr>
				</tbody>
			  </table>
          </div>
          
        </div>
      </div>
    </section>
    
   <section class="media text-center pb-2 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="h2 text-center mb-0 font-weight-bold">Our Media Mentions</p>
				</div>
			</div>
			
			<div class="row mt-3">
				<div class="col-lg-3">			 
					<a href="https://www.aninews.in/news/business/business/apical-immigration-experts-pvt-ltd-inaugurates-its-new-branch-in-the-largest-and-capital-city-of-uttar-pradesh-lucknow20220620183022/" target="_blank"> 
					 <img src="img/ani.jpg" alt="" class="img-fluid  img-responsive"> 
				     <center><img src="img/ani1.jpg" alt="" class="img-fluid img-responsive mobile">  </center></a>
				   
				</div>
				<div class="col-lg-3">			
					<a href="https://www.hindustantimes.com/brand-stories/apical-immigration-experts-inaugurates-its-new-branch-in-lucknow-uttar-pradesh-101655820824404.html" target="_blank"> 
					<img src="img/ht.jpg" alt="" class="img-fluid  img-responsive"> 		   
					<center><img src="img/ht1.jpg" alt="" class="img-fluid img-responsive mobile"> </center> </a>			   
				</div>
				<div class="col-lg-3">			  
					<a href="https://theprint.in/ani-press-releases/apical-immigration-experts-pvt-ltd-inaugurates-its-new-branch-in-the-largest-and-capital-city-of-uttar-pradesh-lucknow/1004593/" target="_blank"> 
					<img src="img/the_print.jpg" alt="" class="img-fluid  img-responsive"> 		   
					<center><img src="img/the_print1.jpg" alt="" class="img-fluid img-responsive mobile">  </center></a>			   
				</div>
				<div class="col-lg-3">			 
					<a href="https://economictimes.indiatimes.com/company/apical-immigration-experts-private-limited/U74900UP2014PTC063079" target="_blank"> 
					<img src="img/etimes.jpg" alt="" class="img-fluid  img-responsive"> 			   
					<center><img src="img/et1.jpg" alt="" class="img-fluid img-responsive mobile"> </center>
					</a>			   
				</div>
			</div>
			
		</div>
	</section>
	
	<section class="py-5">
		<div class="container">
			<!-- <p class="h6 mb-1 text-uppercase text-primary mb-3">Our clients say</p> -->
			<div class="row">
				<div class="col-lg-12">
					<center><h2 class="mb-5">Our Client's Says</h2></center>
				</div>
			</div>
			<div class="swiper testimonials-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Priyanka Goel</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">Thank you Nirupama Shandilya Mam , Miss Vidhi Srivastava and there team member specially Mr Prakhar who are so helpful and loyal about their service. They explained well me the whole process for skill assessment and made it a stress free process all throughout. Today i get positive skill assessment with 8.5 years experience i am so happy and highly recommend Immigration experts to my friends and family who is looking for a great migration agent.</br>
							Thank you Immigration experts</p>
						</div>
					</div>
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Tushar Agarwal</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">I want to take a moment to thank Mr. Manish, Vidhi, Prakhar and Kritika for all their hard work on my case. My case was very complicated and not easy to handle. Mr. Manish and his team gave me the confidence and worked through my case. The team believes in showing result and they are the best team that I have worked with. Thanks to their efforts, my case resulted in a positive outcome from ACS</p>
						</div>
					</div>
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Anushka Sethi</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">We have met Immigration Expert team in February and Nirupama has pushed us to file for Australia PR. Started our procedure in March and by the second week of April our ACS was filed. Vidhi, Prakhar and her team have worked hard on the documents to prepare a case in such a way that our skills assessment outcome came in 2 weeks time. I am having positive experience with the Immigration Expert team and would say they work with dedication.</p>
						</div>
					</div>
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Rahul Attri</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">The service provided by Immigration Experts is truly commendable. I feel incredibly fortunate to have received my ACS positive outcome within just 15 days, and I attribute this success to you and your team. Your professionalism, integrity, ethics, knowledge and commitment to excellence truly set you apart. I highly recommend the services to anyone in need of immigration assistance. </br>Thank you for your outstanding support</p>
						</div>
					</div>
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Vishesh Ahuja</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">I recently applied for skill assessment through Immigration Experts and I got a positive result. Nirupama had confidence in my case from the very beginning even though my earlier result was negative when I applied through some other agent. Kritika was my case officer and her team and she handled the case very smoothly.</p>
						</div>
					</div>
					<div class="swiper-slide p-3">
						<div class="testimonial p-1 shadow-sm mb-5">
							<div class="d-flex align-items-center mb-4">
								<div class="ms-0">
									<h5 class="mb-0">Mehul garg</h5>
									<ul class="small list-inline text-primary mb-0">
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
										<li class="list-inline-item m-0"><i class="fas fa-star"></i></li>
									</ul>
								</div>
							</div>
							<p class="text-muted text-sm mb-0">I just received positive outcome for skill assessment. Thank you immigration experts for helping me at each and every step especially Rajni mam who cleared the process very clearly before beginning of the application🙏🏻. Special thanks to Vivek who helped me in the situation where i got stuck, he cleared all my doubts in one go.😌 </br>
							Looking forward for the further steps 👍👍</p>
						</div>
					</div>
					
					
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Navigation -->
				
			</div>
		</div>
	</section>


    <section id="contact-map" style="padding:2%">
      <div class="container" style="background: #015fc9; border-radius: 20px; top: -40px; z-index: 999;padding:2%">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center my-2">
              <h5 class="wow fadeInUp text-white" data-wow-delay="0.2s">Get a call back From the Expert Australia Immigration Experts!</h5>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
				<form id="contact_section" action="/testt/newmail/land/" method="POST">
				  <div style="margin-bottom:3%">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
							<input type="text" class="form-control des_form" placeholder="Name" name="name" required="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
							<input type="text" class="form-control des_form" placeholder="Email" name="email" required="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
							<input type="number" class="form-control des_form" placeholder="Phone" name="phone" required="">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
							<input type="text" class="form-control des_form" name="city" placeholder="State/City" required >
							</div>
						</div>
						
					</div>

					<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
						<select name="age" id="age" class="form-control des_form" required="">
						  <option value="">Select Your Age</option>
						  <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
						</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<select name="edu" id="edu" class="form-control des_form" required="">
							  <option value="">Select Your Highest Education</option><option value="3 Year Diploma">3 Year Diploma</option><option value="Graduation">Graduation</option><option value="PG Diploma">PG Diploma</option><option value="Master">Master</option><option value="PHD/Doctorate">PHD/Doctorate</option>
							</select>           
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
								<select name="exp" id="exp" class="form-control des_form" required="">
								  <option value="">Select Your Work Experience</option><option value="1 to 2 Years">1 to 2 Years</option><option value="2 to 3 Years">2 to 3 Years</option><option value="3 to 4 Years">3 to 4 Years</option><option value="4 to 5 Years">4 to 5 Years</option><option value="5 to 6 Years">5 to 6 Years</option><option value="6 to 7 Years">6 to 7 Years</option><option value="7 to 8 Years">7 to 8 Years</option><option value="8 to 9 Years">8 to 9 Years</option><option value="10+ Years">10+ Years</option>
							  </select>            
						</div>
					</div>
				</div>			
			</div>
			<input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">
			<div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
			<div class="row">
				<div class="col">
					<center><input type="submit" class="btn btn-common" name="form_submit_contact_us" value="Check Your Eligibility" style="background:white;box-shadow: 0 8px 24px #000000;"></center>
				</div>
			</div>
		</form>		
            </div>
          </div>
        </div>
      </div>
    </section>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

    <style>
       .sociIjji{
        color:white !important;
        padding:2%;
      }
    </style>
    <footer class="bg-dark">
     
      <div class="bg-dark py-2 text-white">
        <div class="container">
          <div class="row py-3">
            <div class="col-lg-4 col-md-6">
              <h5 class="mt-3 mb-4 fw-bold">Head Office</h5>
              <p>i-THUM Tower, Tower A Office No. #610, 6th Floor,(Opposite Electronic City Metro) Station Noida Sector 62, Pin-201309 </br></br>
			  </p>
			  
			  <h5 class="mt-3 mb-4 fw-bold">Delhi Branch</h5>
              <p>OFFICE ADDRESS - 4A/36 Tilak Nagar, Near Axis Bank, New Delhi 110018</br></br>
			  </p>
			  
			  
            </div>
            <div class="col-lg-4 col-md-6">
			
				
			  <h5 class="mt-3 mb-4 fw-bold">Pune Branch</h5>
              <p> OFFICE ADDRESS - No. 6, 2nd Floor, 1196 B, Srishti Chambers, Ghole Road, Near Dayneshwar Paduka Chowk,Shivaji Nagar,Pune-411005</br></br>
			  </p>
			  
			  <h5 class="mt-3 mb-4 fw-bold">Hyderabad Branch</h5>
              <p>OFFICE ADDRESS: Office No. 309 , 3rd Floor , Kukatpally JNTU Rd, Landmark - Metro Pillar A723 , Beside Manjeera Mall, Hyderabad, Telangana 500072</br></br>
			  </p>
			  
            </div>
			
            <div class="col-lg-4 col-md-6">
				
              <h5 class="mt-3 mb-4 fw-bold">Contact Info</h5>
              <ul class="list-unstyled">
                <li class="mb-2">Contact us: +91-9999-4676-86 , </br> +91-9999-4676-76 </li>
                <li class="mb-2">Email us: info@immigrationxperts.com</li>
                <li class="mb-2">(Work Hours: Mon-Sat: 10am - 6:30pm</li>
              </ul>
			  
              <h5 class="mt-3 mb-4 fw-bold">Social Links</h5>
			  <p>                
                <a href="https://twitter.com/immixperts" target="_blank" style="margin-right: 13px;font-size: 23px;color: #015fc9;"><i class="fab fa-twitter"></i></a>
				<a href="https://www.facebook.com/ImmigrationXpertsIndia/" target="_blank" style="margin-right: 13px;font-size: 23px;color: #015fc9;"><i class="fab fa-facebook"></i></a>
				<a href="https://www.linkedin.com/company/immigrationxperts" target="_blank" style="margin-right: 13px;font-size: 23px;color: #0077b0;"><i class="fab fa-linkedin-in"></i></a>
				<a href="https://www.instagram.com/immigrationexpertsofficial/" target="_blank" style="margin-right: 13px;font-size: 23px;color: #c7226f;"><i class="fab fa-instagram"></i></a>
				<a href="https://www.quora.com/profile/Manish-Srivastava-Immigration-Experts" target="_blank" style="margin-right: 13px;font-size: 23px;color: #c41a00;"><i class="fab fa-quora"></i></a> 
				<a href="https://www.youtube.com/@Apicalimmigrationexperts" target="_blank" style="margin-right: 13px;font-size: 23px;color: #f70000;"><i class="fab fa-youtube"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-darker py-4">
        <div class="container text-center">
          <p class="mb-0 text-muted text-sm">&copy; 2024 Copyright Apical Immigration Experts All rights reserved. </p>
        </div>
      </div>
    </footer>    
	  
	   <!--mobile footer strip-->
	  <style>
		    #mobbb{
			  display:none;
			}
			@media only screen and (max-width: 600px) {
			  #mobbb{
				display: block;
			  }
			}
	  </style>
	  	
	<div id="mobbb" style="z-index:1000000">
		<div class="container-fluid" style=" position: fixed;   bottom: 0px;z-index:1000000">
		  <div class="row text-center"style="padding:1%;background:#f2f2f2" >
			<div class="col-4">
				<a href="tel:+91 9999467686"><img src="icons/phone_n.png" alt="Subscribe SVG" width="30px" height="30px" style="margin-bottom:15%">
				</a>
				<p style="margin-top:-10px;font-size:14px"><b>Call</b></p>
			</div>
			<div class="col-4" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#modalEnquireForm" onclick="popupid(1)">
			<img src="icons/enquire_n.png" alt="Consultation SVG" width="30px" height="30px" style="margin-bottom:15%">
				<p style="margin-top:-10px;font-size:14px"><b>Enquire Now</b></p>
			</div>
			<div class="col-4">
				<a href="https://wa.me/919999467686"><img src="icons/whatsapp_n.png" alt="Call SVG" width="30px" height="30px" style="margin-bottom:15%">
					<p style="margin-top:-10px;font-size:14px;color:black"><b>Whatsapp</b></p></a>
				
			</div>
		  </div>
		</div>
	</div>
<!--end mobile footer strip -->
	

	    <!-- Enquire now modal-->
	
	<div class="modal fade" id="modalEnquireForm" >
	  <div class="modal-dialog modal-md modal-notify modal-danger" role="document">
		<!--Content-->
		<div class="modal-content text-center" style="border-radius: 30px;">
		  <!--Header-->
		  <div class="modal-header d-flex justify-content-center">
			<!-- <p class="heading">Are you sure?</p> -->
				<div><img src="img/logo.png" alt="" style="padding-top:0px;width:40%"></div>
			  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		  </div>

		  <!--Body-->
		  <div class="modal-body">
			  <div class="row">
				  <div class="col-md-12">
		  <center><h6 style="text-align:center;color: #333;
		font-size: 28px;
		line-height: 32px;
		font-weight: 700;
		margin-bottom: 15px;
		text-transform: uppercase;"><span style="border-top:2px solid #d4a55d">Enquire</span> Now

	</h6>
		
		</center>
	   
	</div>
	</div>

				<form method="POST"  action="/testt/newmail/land/" id="enquireform" name="enquireform">
				<div class="hflex-form">				  
					<input type="text" class="text-field-2 s-input" id="name" placeholder="Name*" name="name" required="" data-error="Please enter your name">
					<input type="email" class="text-field-2 s-input" id="email" placeholder="Email*" name="email"required="" data-error="Please enter your Email">
					<input type="number" class="text-field-2 s-input"  id="phone" name="phone" placeholder="Phone No*"required="" data-error="Please enter number">
					<input type="text" class="text-field-2 s-input" id="city" placeholder="State/City*" name="city" required>
				</div>
			   
					<select id="age" name="age" class="select-field s-select" required="">
					  <option value="">Select Your Age</option>
					  <option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
					</select>

					<select id="edu" name="edu" class="select-field s-select" required="">
					  <option value="">Select Your Highest Education</option><option value="3 Year Diploma">3 Year Diploma</option><option value="Graduation">Graduation</option><option value="PG Diploma">PG Diploma</option><option value="Master">Master</option><option value="PHD/Doctorate">PHD/Doctorate</option>
					</select>

					<select id="exp" name="exp" class="select-field s-select" required="">
					  <option value="">Select Your Work Experience</option><option value="1 to 2 Years">1 to 2 Years</option><option value="2 to 3 Years">2 to 3 Years</option><option value="3 to 4 Years">3 to 4 Years</option><option value="4 to 5 Years">4 to 5 Years</option><option value="5 to 6 Years">5 to 6 Years</option><option value="6 to 7 Years">6 to 7 Years</option><option value="7 to 8 Years">7 to 8 Years</option><option value="8 to 9 Years">8 to 9 Years</option><option value="10+ Years">10+ Years</option>
					</select>
					 <input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">

					<div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
				<input type="submit" name="submit_form_popup"  class="btn btn-default " style=" background-color:#015fc9; color:white" value="Submit">
			</form>

		  </div>
		</div>
		<!--/.Content-->
	  </div>
	</div>
<!-- End enquire now modal -->
	 
<!-- eligibility_form now modal -->
	    
    <!-- JavaScript files-->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/modal-video/js/modal-video.js"></script>
    <script src="vendor/leaflet/leaflet.js"></script>
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	  
		<script>
		function popuid(btnid)
		{
			$('#popid_form').val(btnid); 
		}
		function popupid(btnid)
		{
			$('#popupid_form').val(btnid); 
		}
	</script>
	  <script src="https://www.google.com/recaptcha/api.js?render=6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></script>
	
  </body>
</html>