//Load google re-captcha
var onloadCallback = function() {
	grecaptcha.render('google_recaptcha', {
	  'sitekey' : '6LfCDZofAAAAALcU-UJtcP_eq7fYOnxH5EAfTlIq'
	});
};


$("#calculator_form").submit(function(event) {
	event.preventDefault();
	$("#calculated_result").html('')
	
	if($('input[name="visa_subclass"]:checked').length === 0) {
		$(".card_visa_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".card_visa_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="age"]:checked').length === 0) {
		$(".card_age_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".card_age_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="hq"]:checked').length === 0) {
		$(".card_qualifications_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".card_qualifications_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="aus_edu_qua"]:checked').length === 0) {
		$(".australian_card_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".australian_card_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="exp_outside"]:checked').length === 0) {
		$(".work_exp_out_aus_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".work_exp_out_aus_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="work_with_aus"]:checked').length === 0) {
		$(".work_exp_with_aus_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".work_exp_with_aus_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="eng_ablity"]:checked').length === 0) {
		$(".english_language_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".english_language_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="partner_skills"]:checked').length === 0) {
		$(".partner_skill_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".partner_skill_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="accredited_language"]:checked').length === 0) {
		$(".accredited_language_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".accredited_language_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="professional_pro"]:checked').length === 0) {
		$(".professional_pro_sec").addClass('bg-error');
		$('html, body').animate({ scrollTop: $(".professional_pro_sec").offset().top }, 1000);
		return false;
	}
	if($('input[name="user_name"]').val() == '') {
		//$(".user_name").addClass('bg-error');
		$('input[name="user_name"]').focus();
		return false;
	}
	if($('input[name="email"]').val() == '') {
		//$(".user_email").addClass('bg-error');
		$('input[name="email"]').focus();
		return false;
	}
	if($('input[name="phone"]').val() == '') {
		//$(".user_phone").addClass('bg-error');
		$('input[name="phone"]').focus();
		return false;
	}
	
	var rcres = grecaptcha.getResponse();
	if(rcres.length){
		grecaptcha.reset();
	
		$('.totaladd').attr("disabled", true);
		$('.totaladd').html("Please wait...");
		
		var form = $(this);
		$.ajax({
			type: "POST",
			url: 'calculate.php',
			data: form.serialize(),
			success: function(data){
				var resData = $.parseJSON(data);
				var userdata = new FormData();
				userdata.append("NAME", $('.user_name').val() );
				userdata.append("EMAIL", $('.user_email').val() );
				userdata.append("COUNTRYCODE", $('.country_code').val() );
				userdata.append("PHONE", $('.user_phone').val() );
				userdata.append("City", $('.user_city').val() );
				userdata.append("ConsultingBranch", $('.ConsultingBranch').val() );
				userdata.append("Message_Note", $('.Message_Note').val() );
				userdata.append("SUBSOURCE", "Australia Points Calculator" );
				userdata.append("TotalPoints", resData.totalPoint );
				userdata.append("_wpcf7_unit_tag", 'australia-points-calculator' );
				//userdata.append("total-point", 'N/A' );
				
				$.ajax({url:"https://immigrationxperts.com/wp-json/contact-form-7/v1/contact-forms/4954/feedback",
					type: "POST",
					data: userdata,
					contentType: false,
					processData: false,
					cache: false,
					success:function(data){
						//window.location.href="https://www.immigrationxperts.com/thank-you";
					}
				});
				
				$('.totaladd').html("Calculate");
				$('.totaladd').attr("disabled", false);
				$("#calculated_result").html(resData.message);
				//$('#calculator_form')[0].reset();
				$('input[name="user_name"]').val('');
				$('input[name="email"]').val('');
				$('input[name="phone"]').val('');
			}
		});

	}else{
		alert("Please verify CAPTCHA first.");
		return false;
	}
	
});
//}

// Calculation 
$('input[name="visa_subclass"]').click(function(){
	if($(this).prop("checked") == true){
		$(".card_visa_sec").removeClass('bg-error');
	}
});
$('input[name="age"]').click(function(){
	if($(this).prop("checked") == true){
		//alert("Checkbox is checked. Age is "+$(this).val() );
		$(".card_age_sec").removeClass('bg-error');
	}
});
$('input[name="hq"]').click(function(){
	if($(this).prop("checked") == true){
		$(".card_qualifications_sec").removeClass('bg-error');
	}
});
$('input[name="aus_edu_qua"]').click(function(){
	if($(this).prop("checked") == true){
		$(".australian_card_sec").removeClass('bg-error');
	}
	
	if( $(this).val() == 'Yes' ){
		$('.regional_study_section').show();
		$('.specialist_qualification_section').show();
	}else{
		$('.regional_study_section').hide();
		$('.specialist_qualification_section').hide();
	}
});

$('input[name="exp_outside"]').click(function(){
	if($(this).prop("checked") == true){
		$(".work_exp_out_aus_sec").removeClass('bg-error');
	}
});
$('input[name="work_with_aus"]').click(function(){
	if($(this).prop("checked") == true){
		$(".work_exp_with_aus_sec").removeClass('bg-error');
	}
});
$('input[name="eng_ablity"]').click(function(){
	if($(this).prop("checked") == true){
		$(".english_language_sec").removeClass('bg-error');
	}
});
$('input[name="partner_skills"]').click(function(){
	if($(this).prop("checked") == true){
		$(".partner_skill_sec").removeClass('bg-error');
	}
});
$('input[name="accredited_language"]').click(function(){
	if($(this).prop("checked") == true){
		$(".accredited_language_sec").removeClass('bg-error');
	}
});
$('input[name="professional_pro"]').click(function(){
	if($(this).prop("checked") == true){
		$(".professional_pro_sec").removeClass('bg-error');
	}
});
;
