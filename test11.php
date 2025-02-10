<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Immigration Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
        .input-box {
            margin-bottom: 15px;
        }
        .input-box input, .input-box select, .input-box textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        .error {
            color: red;
            display: none;
        }
    </style>
</head>
<body>

<form class="get-insurance__form" action="/testt/newmail/testmail/" method="POST">
    <div class="input-box">
        <input type="text" placeholder="Full name" name="name" required>
    </div>
    <div class="input-box">
        <input type="email" placeholder="Email address" name="email" required>
    </div>
    <div class="input-box">
        <select id="country-code" name="country-code" required>
            <option value="IN|+91" selected>India (+91)</option>
            <option value="US|+1">United States (+1)</option>
            <option value="UK|+44">United Kingdom (+44)</option>
            <!-- Add other country codes as needed -->
        </select>
    </div>
    <div class="input-box">
        <input type="tel" id="phone1" name="phone1" placeholder="Mobile Number*" required pattern="[6-9]\d{9}" maxlength="10">
        <input type="text" id="phone" name="phone" hidden>
        <p id="phone-error" class="error">Please enter exactly 10 digits starting with 6-9</p>
    </div>
    <div class="input-box">
        <input type="text" placeholder="City" name="city" required>
    </div>
    <div class="input-box">
        <input type="number" placeholder="Age" name="age" required>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Highest Qualification" name="qualification" required>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Work Experience" name="experience" required>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Visa Type" name="visa" required>
    </div>
    <div class="input-box">
        <input type="text" placeholder="Country Interested In" name="country" required>
    </div>
    <div class="input-box">
        <textarea name="message" placeholder="Write a message"></textarea>
    </div>

    <!-- Hidden Honeypot Field -->
    <input type="text" name="honeypot" style="display:none">
    
    <!-- Math CAPTCHA -->
    <div class="math-captcha-container">
        <label for="math_question">Solve: <span id="math-question"></span></label>
        <input type="text" id="math_answer" name="math_answer" required>
        <input type="hidden" name="math_correct_answer" id="math_correct_answer">
    </div>

    <!-- Google reCAPTCHA -->
    <div class="g-recaptcha" data-sitekey="6LeQwdspAAAAADdAR7RETB-KvzgNRVrmCQYin-6y"></div>
     <input type="hidden" id="form_start_time" name="form_start_time">
    <!-- Submit Button -->
    <button type="submit" class="thm-btn">Get free consultation</button>
</form>
<script>
    // Math CAPTCHA
    function generateMathCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
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



</body>
</html>
