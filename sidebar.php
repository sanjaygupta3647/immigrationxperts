<div class="insurance-details__services-info mb-0">
    <h4 style="color: var(--insur-white);font-weight: 600; text-align: center;">Study Abroad</h4>
</div>

<div class="sidebar__single sidebar__category">
     <h3 class="sidebar__title">Points Calculator</h3>
    <div class="thumbnail">
        <div class="loc-caption">
           <div class="container">
            <div class="row">
            <a href="https://www.immigrationxperts.com/australia-pr-points-calculator/" style=" margin: 3px;"  target="_blank" class="btn btn-default btn-sm col btn btn-danger btn-inner">Australia Points<br>Calculator</a>
            <!-- <a href="https://www.immigrationxperts.com/canada-immigration/canada-comprehensive-ranking-crs-points-calculator/" style=" margin: 3px;" target="_blank" class="btn btn-default btn-sm  col btn btn-danger btn-inner ml-2">Canada CRS<br>Calculator</a> -->
            </div>
            </div>
        </div>
    </div>
</div>
<a href="https://www.immigrationxperts.com/australia-immigration/benefits-of-immigration-to-australia/"> <img src="/assets/images/aus1.png" class="img-fluid"  alt="Gurugram-Contact-Us"></a>

<!-- <a href="https://www.immigrationxperts.com/canada-immigration/benefits-of-immigration-to-canada/"> <img src="/assets/images/can1.png" class="img-fluid mt-3"  alt="Gurugram-Contact-Us"></a> -->


<div class="insurance-details__services-box">
    <ul class="insurance-details__services-list list-unstyled">
        <!-- <li><a href="/study-in-canada/">Study in Canada<span class="icon-plane"></span></a></li> -->
        <li><a href="/study-in-australia/">Study in Australia<span class="icon-plane"></span></a></li>
        <li><a href="/study-new-zealand-1/">Study in New Zealand<span class="icon-plane"></span></a></li>
        <li><a href="/study-in-ireland/">Study in Ireland<span class="icon-plane"></span></a></li>
    </ul>
</div>


<div class="sidebar__single sidebar__category">
    <h3 class="sidebar__title">Find Out Now</h3>
       <form class="get-insurance__form" action="/testt/newmail/sendformdata/" method="POST">
            <div class="row">
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Name*" name="name">
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="email" placeholder="Email*" name="email">
                </div>
				<div class="col-xl-12 get-insurance__input-box">
					<select id="country-code" name="country-code" required style="	height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255);	box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray);	font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);">
						<!-- Options will be dynamically added here using jQuery -->
						<option value="+91" selected>India (+91)</option>
					</select>					
				</div>
				
				<div class="col-xl-12 get-insurance__input-box">
					<input type="tel" id="phone1" name="phone1" placeholder="Mobile Number*" required pattern="[6-9]\d{9}" maxlength="12" style="height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255); box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray); font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);">
					<input type="text" id="phone" name="phone" hidden>
					<p id="phone-error" style="color: red; display: none;">Please enter exactly 10 digits</p>
				</div>
				
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Age" name="age">
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Education" name="qualification">
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Your City" name="city">
                </div>
                <div class="get-insurance__input-box">
                    <select class="selectpicker" aria-label="Default select example" name="experience">
                    <option selected value="">Experience</option>
                    <option value="0-1 Year">0-1 Year</option>
                    <option value="1 Year">1 Year</option>
                    <option value="2 Years">2 Years</option>
                    <option value="3 Years">3 Years</option>
                    <option value="4 Years">4 Years</option>
                    <option value="5 Years">5 Years</option>
                    <option value="6 Years">6 Years</option>
                    <option value="7 Years">7 Years</option>
                    <option value="8 Years">8 Years</option>
                    <option value="9 Years">9 Years</option>
                    <option value="10 Years">10 Years</option>
                    <option value="10+ Years">10+ Years</option>
                </select>
            </div>
            <div class="get-insurance__input-box">
                <select class="selectpicker" id="selectpicker" aria-label="Default select example" onchange="configureDropDownLists(this,document.getElementById('visa'))" name="country">
                    <option selected value="">Country Interested In</option>
                    <option value="Australia">Australia</option>
                    <option value="New_Zealand">New Zealand</option>
                    <option value="UK">UK</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="get-insurance__input-box ">
                <select class="selectpicker Other" id="visa" aria-label="Default select example" name="visa">
                <option selected value="">Select Visa Type</option>
				<option value="Permanent Residency (PR)">Permanent Residency (PR)</option>
				<option value="Study">Study</option>
				<option value="Tourist/Visitor">Tourist/Visitor</option>
                </select>

            </div>
            <div class="get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="consultation">
                    <option selected>Free Consultation</option>
                    <option value="On Phone">On Phone</option>
                    <option value="On Video call (30 mins)">On Video call (30 mins)</option>
                    <option value="Coffee with us - in Branch">Coffee with us - in Branch</option>
                </select>
            </div>
            <div class="get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="branch">
                    <option selected value="">Nearest Branch</option>
                    <option value="Noida Head Office">Noida Head Office</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lucknow">Lucknow</option> 
                    <!--<option value="mumbai">MUMBAI</option> -->
                    <option value="Pune">Pune</option>
                   <option value="Hyderabad">Hyderabad</option>
                    <!-- <option value="Chennai">Chennai</option> -->
                    <option value="Other">Other</option>
                </select>
                </div>
                <div class="get-insurance__input-box text-message-box">
                    <textarea name="message" placeholder="Write a message"></textarea>
                </div>
            </div>
            <input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">
			 <div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
        <button type="submit" class="thm-btn get-insurance__btn">Get free consultation</button>
    </form>
	<script>
    $(document).ready(function() {
        $('.selectpicker').attr('required', 'required');
    });
</script>
</div>
<!-- Include Bootstrap CSS -->

<!-- Include jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
  /* Adjust the transition duration for sliding animation */
  .carousel-item {
    transition: transform 0.3s ease-in-out; /* Change this value to control the slide transition speed */
  }
</style>

<!-- Image Slider -->
<div id="carouselExample" class="carousel slide mt-3" data-ride="carousel" data-interval="2000"> <!-- Reduced interval to 2 seconds -->
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
    <li data-target="#carouselExample" data-slide-to="2"></li>
  </ol>

 


<div class="sidebar-info mt-4" id="sidebar">
    <div class="thumbnail">
        <img src="/assets/images/Gurugram-Contact-Us.jpg" class="img-fluid"  alt="Gurugram-Contact-Us">
        <div class="loc-caption">
            <h5>TALK TO OUR EXPERTS</h5>
            <p class="mb-0"><strong>Email:</strong><a href="mailto:info@immigrationxperts.com">info@immigrationxperts.com</a></p>
            <p class="mb-0"><strong>Phone:</strong>  <a href="tel:9999467686">+91 9999-467686</a> / <a href="tel:9999467676">+91 9999-467676 </a></p>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></script>

