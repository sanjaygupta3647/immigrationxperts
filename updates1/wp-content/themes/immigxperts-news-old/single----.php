	 e.preventDefault();
	 if($.trim($('#stu_name').val())==''){
		 $('#name_check').html('Please Fill the Student Name!');
		   return false;
		}
		else if($('#stu_name').val().length >35){
		 $('#name_check').html('Maximum 35 Allowed Only !!');
		  return false;
		}
		 
		var verf_name = $('#c_name').val(); 
		var stu_name = $('#stu_name').val();
		
		if(stu_name != verf_name){
		   $('#cname_check').show();
		   $('#cname_check').html("Student Name Not Matched !");
		   $('#cname_check').focus();
		   return false;
		 } 
		else if($.trim($('#m_name').val())==''){
		 $('#mname_check').html('Please Fill the Middle Name!');
		  return false;
		}
		else if($('#m_name').val().length >35){
		 $('#mname_check').html('Maximum 35 Allowed Only !!');
		  return false;
		}		
		var vfm_name = $('#cf_m_name').val(); 
		var sm_name = $('#m_name').val();
			
		 if(sm_name != vfm_name){
		   $('#confm_check').show();
		   $('#confm_check').html("Student Middle Name  Not Matched!");
		   $('#confm_check').focus();
		   return false;
		 }
		 
		else if($.trim($('#l_name').val())==''){
		 $('#lname_check').html('Please Fill the Last Name!');
		  return false;
		}
		else if($('#m_name').val().length >35){
		 $('#lname_check').html('Maximum 35 Allowed Only !!');
		  return false;
		}		
		var vfl_name = $('#cf_lname').val(); 
		var sl_name = $('#l_name').val();
			
		 if(sl_name != vfl_name){
		   $('#cf_lname_check').show();
		   $('#cf_lname_check').html("Student Last Name  Not Matched!");
		   $('#cf_lname_check').focus();
			return false;
		 }
		 
	   var mobile_val = jQuery('#mobile').val(); 
	   if((mobile_val.length > 10) ||(mobile_val.length <= 9)){
		   if(isNaN(mobile_val)){
			$('#mobile_check').show();
			$('#mobile_check').html("Text Not Allowed!");
			$('#mobile_check').focus();
			return false;
			}
			else{ $('#mobile_check').hide(); }
			$('#mobile_check').show();
			$('#mobile_check').html("Number should be 10 digits !");
			$('#mobile_check').focus();
			return false;
			}
		
		var mobile_nm = $('#mobile').val(); 
			var cmobile_nm = $('#c_mobile').val();
			
		if(cmobile_nm != mobile_nm){
		   $('#cfmobile_check').show();
		   $('#cfmobile_check').html("Mobile No. not Matched as Above!");
		   $('#cfmobile_check').focus();
			return false;
		  }
		
		var email = $('#email').val();
		 if(email == ''){
	      $('#email_check').show();
	      $('#email_check').html("Email id should not be Empty!");
	      $('#email_check').focus();
	      return false;
		}
	    else if(IsEmail(email)==false){
		 $('#email_check').show();
		 $('#email_check').html("Enter a valid Email Id!");
		 return false;
	    }
		
		else if($.trim($('#job_post').val())==''){
		 $('#post_check').html('Please Fill the Post Name!');
		  return false;
		}
		else if($('#job_post').val().length >35){
		 $('#post_check').html('Maximum 35 Allowed Only !!');
		  return false;
		}
	  else{
	  
	    $("#name_check").hide();
	    $("#mname_check").hide();
		$('#cname_check').hide();
		$('#confm_check').hide();
		$('#lname_check').hide();
		$('#cf_lname_check').hide();
		$('#mobile_check').hide();
		$('#cfmobile_check').hide();
		$('#email_check').hide();
		$('#post_check').hide();