<div class="insurance-details__services-info">
    <h1 class="">Singapore</h1>
</div>



<div class="sidebar__single sidebar__category">
    <h3 class="sidebar__title">Find Out Now</h3>
    <form class="get-insurance__form" action="/testt/newmail/sendformdata/" method="POST" onsubmit="return validateForm()">
        <div class="get-insurance__content-box">
            <div class="row">
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Name*" name="name" required>
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="email" placeholder="Email*" name="email" required>
                </div>
				
				 <div class="col-xl-12 mt-1 get-insurance__content-box">
					<select id="country-code" name="country-code" required style="	height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255);	box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray);	font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);">
						<!-- Options will be dynamically added here using jQuery -->
						<option value="+91" selected>India (+91)</option>
					</select>					
				</div>
				
				<div class="col-xl-12 mt-4 get-insurance__content-box">
					<input type="tel" id="phone1" name="phone1" placeholder="Mobile Number*" required pattern="[6-9]\d{9}" maxlength="12" style="height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255); box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray); font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);">
					<input type="text" id="phone" name="phone" hidden>
					<p id="phone-error" style="color: red; display: none;">Please enter exactly 10 digits</p>
				</div>
				
                <div class="col-xl-12 mt-4  get-insurance__input-box">
                    <input type="text" placeholder="Age" name="age" required>
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Education" name="qualification" required>
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                    <input type="text" placeholder="Your City" name="city" required>
                </div>
                <div class="col-xl-12 get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="experience" required>
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
            <div class="col-xl-12 get-insurance__input-box">
                <select class="selectpicker" id="selectpicker" required aria-label="Default select example" onchange="configureDropDownLists(this,document.getElementById('visa'))" name="country">
                    <option selected value="">Country Interested In</option>
                    <option value="Australia">Australia</option>
                    <option value="Canada">Canada</option>
                    <option value="New_Zealand">New Zealand</option>
                    <option value="UK">UK</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-xl-12 get-insurance__input-box ">
                <select class="selectpicker Other" id="visa" aria-label="Default select example" name="visa" required>
                <option selected value="">Select Visa Type</option>
				<option value="Permanent Residency (PR)">Permanent Residency (PR)</option>
				<option value="Study">Study</option>
				<option value="Tourist/Visitor">Tourist/Visitor</option>
                </select>

            </div>
            <div class="col-xl-12 get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="consultation" required>
                    <option selected >Free Consultation</option>
                    <option value="On Phone">On Phone</option>
                    <option value="On Video call (30 mins)">On Video call (30 mins)</option>
                    <option value="Coffee with us - in Branch">Coffee with us - in Branch</option>
                </select>
            </div>
            <div class="get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="branch" required>
                    <option selected value="">Nearest Branch</option>
                    <option value="Noida Head Office">Noida Head Office</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lucknow">Lucknow</option> <!--<option value="mumbai">MUMBAI</option> -->
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
        </div>
         <input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">
		 <div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
        <button type="submit" class="thm-btn get-insurance__btn">Get free consultation</button>
		<p id="phone-error-message" style="color: red; display: none;">Please enter exactly 10 digits</p>
    </form>
</div>
<div class="sidebar-info mt-4" id="sidebar">
    <div class="thumbnail">
        <img src="https://www.nationwidevisas.com/images/Gurugram-Contact-Us.jpg" class="img-fluid"
            alt="Gurugram-Contact-Us">
        <div class="loc-caption">
            <h5>TALK TO OUR EXPERTS</h5>
            <p class="mb-0"><strong>Email:</strong><a href="mailto:info@immigrationxperts.com">info@immigrationxperts.com</a></p>
            <p class="mb-0"><strong>Phone:</strong>  0120-6618123 / 0120-6618124</p>
        </div>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></script>
