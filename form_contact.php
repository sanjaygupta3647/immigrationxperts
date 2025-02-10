<form class="get-insurance__form" action="/testt/newmail/mail_crm_contact_us/" method="POST" >
    <div class="get-insurance__content-box">
        <div class="row">
            <div class="col-xl-6 get-insurance__input-box">
                <input type="text" placeholder="Full name" name="name"  required autocomplete="off">
            </div>
            <div class="col-xl-6 get-insurance__input-box">
                <input type="email" placeholder="Email address" name="email"  required autocomplete="off">
            </div>
           <div class="col-xl-6 get-insurance__input-box">
				<select id="country-code" name="country-code" required style="	height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255);	box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray);	font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);">
					<!-- Options will be dynamically added here using jQuery -->
					<option value="IN|+91" selected>India (+91)</option>
				</select>					
			</div>
			
			<div class="col-xl-6 get-insurance__input-box">
				<input type="tel" id="phone1" name="phone1" placeholder="Mobile Number*" pattern="[6-9]\d{9}" maxlength="12" style="height: 60px; width: 100%; border: 1px solid #dfe3e7; background-color: rgb(255, 255, 255); box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.05); outline: none; font-size: 16px; color: var(--insur-gray); font-weight: 400; padding: 0 30px 0; border-radius: var(--insur-bdr-radius);" required autocomplete="off">
				<input type="text" id="phone" name="phone" hidden>
				<p id="phone-error" style="color: red; display: none;">Please enter exactly 10 digits</p>
			</div>
            <div class="col-xl-6 get-insurance__input-box">
                <input type="text" placeholder="Your Age" name="age"  required autocomplete="off">
            </div>
            <div class="col-xl-6 get-insurance__input-box">
                <input type="text" placeholder="Your Qualification" name="qualification"  required autocomplete="off">
            </div>
            <div class="col-xl-6 get-insurance__input-box">
                <input type="text" placeholder="Your City" name="city"  required autocomplete="off">
            </div>
            <div class="col-xl-6 get-insurance__input-box">
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
            <div class="col-xl-6 get-insurance__input-box">
                <select class="selectpicker" id="selectpicker" aria-label="Default select example" onchange="configureDropDownLists(this,document.getElementById('visa'))" name="country" required>
                    <option selected value="">Country Interested In</option>
                    <option value="Australia">Australia</option>
                    <option value="New_Zealand">New Zealand</option>
                    <option value="UK">UK</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-xl-6 get-insurance__input-box ">
                <select class="selectpicker Other" id="visa" aria-label="Default select example" name="visa" required>
                <option selected value="">Select Visa Type</option>
				<option value="Permanent Residency (PR)">Permanent Residency (PR)</option>
				<option value="Study">Study</option>
				<option value="Tourist/Visitor">Tourist/Visitor</option>
                </select>

            </div>
            <div class="col-xl-6 get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="consultation" required>
                    <option selected >Free Consultation</option>
                    <option value="On Phone">On Phone</option>
                    <option value="On Video call (30 mins)">On Video call (30 mins)</option>
                    <option value="Coffee with us - in Branch">Coffee with us - in Branch</option>
                </select>
            </div>
            <div class="col-xl-6 get-insurance__input-box">
                <select class="selectpicker" aria-label="Default select example" name="branch" required>
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
    </div>
      <input type="hidden" name="canonical_url" value="<?php echo htmlspecialchars($canonical_url); ?>">

     <!-- Math CAPTCHA -->
    <div class="math-captcha-container">
        <label for="math_question">Solve: <span id="math-question"></span></label>
        <input type="text" id="math_answer" name="math_answer" required>
        <input type="hidden" name="math_correct_answer" id="math_correct_answer">
    </div>

    <!-- Google reCAPTCHA -->

    <div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
     <input type="text" name="honeypot" style="display:none">
       <input type="hidden" id="form_start_time" name="form_start_time">
    <button type="submit" class="thm-btn get-insurance__btn">Get free consultation</button>
</form>
<script>
function configureDropDownLists(countryDropdown, visaDropdown) {
    var selectedCountry = countryDropdown.value;
    var visaOptions = {
        "Australia": ["Student Visa", "Work Visa", "Tourist Visa"],
        "Canada": ["Student Visa", "Work Visa", "Tourist Visa"],
        "New_Zealand": ["Student Visa", "Work Visa", "Tourist Visa"],
        "UK": ["Student Visa", "Work Visa", "Tourist Visa"],
        "Other": ["Other Visa Type"]
    };

    visaDropdown.innerHTML = "";

    if (selectedCountry in visaOptions) {
        for (var i = 0; i < visaOptions[selectedCountry].length; i++) {
            var option = document.createElement("option");
            option.value = visaOptions[selectedCountry][i];
            option.text = visaOptions[selectedCountry][i];
            visaDropdown.appendChild(option);
        }
    } else {
        var option = document.createElement("option");
        option.value = "Select Visa Type";
        option.text = "Select Visa Type";
        visaDropdown.appendChild(option);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    var countryDropdown = document.getElementById('selectpicker');
    var visaDropdown = document.getElementById('visa');

    countryDropdown.addEventListener('change', function() {
        configureDropDownLists(countryDropdown, visaDropdown);
    });
});
</script>

<script>
    // Math CAPTCHA
    function generateMathCaptcha() {
        const num1 = Math.floor(Math.random() * 99) + 1;
        const num2 = Math.floor(Math.random() * 99) + 1;
        const question = `${num1} + ${num2}`;
        const answer = num1 + num2;
        
        document.getElementById('math-question').textContent = question;
        document.getElementById('math_correct_answer').value = answer;
    }

    document.addEventListener('DOMContentLoaded', generateMathCaptcha);

    // Phone Validation
    $(document).ready(function() {
        $('#country-code').on('change', function() {
            var countryCode = $(this).val().split('|')[1];
            $('#phone').val(countryCode + $('#phone1').val());
        });

        $('#phone1').on('input', function() {
            var phoneValue = $(this).val();
            if (phoneValue.length === 10 && /^[6-9]\d{9}$/.test(phoneValue)) {
                $('#phone-error').hide();
                $('#phone').val($('#country-code').val().split('|')[1] + phoneValue);
            } else {
                $('#phone-error').show();
            }
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Set the form start time
    document.getElementById('form_start_time').value = Math.floor(Date.now() / 1000);

    document.getElementById('form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'error') {
                alert(data.message); // Show error message in alert
            } else if (data.status === 'success') {
                window.location.href = '/thankyou.php'; // Redirect to thank you page
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again.');
        });
    });
});
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></script>

