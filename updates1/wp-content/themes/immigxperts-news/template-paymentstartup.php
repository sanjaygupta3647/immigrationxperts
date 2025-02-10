<?php 
/*
Template Name: Payment Startup
*/
get_header(); ?>

 
<div class="bg-inner-2">  
  <div class="container">
     <div class="row">
      <div class="contact-title"><?php  the_title();?></div>
      <div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
      </div>
    </div>
   </div>
</div>

<div class="contact-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <form method="post" action="<?php echo get_the_permalink(5982);?>" enctype="multipart/form-data">
          <fieldset>
            <legend>
              <h3 style="margin: 0;  overflow: hidden;  clear: both;  padding-top: 25px; padding-bottom: 15px; color:#007AAD ">Select Program For Payment</h3>
            </legend>
            <table cellpadding="5" width="100%">
            <tbody>
              <tr>
                <td valign="top">Program Name<span class="error">*</span> :</td>
                <td>
                  <select name="description" id="description" class="representative-form">
                    <option value="NULL">Select Program</option>
                    <option value="Australia PR One Time Payment">Australia PR One Time Payment</option>
                    <option value="Australia PR Stage 1 Registration">Australia PR Stage 1 Registration </option>
                    <option value="Australia PR Stage 2 On Positive Skill Assessment">Australia PR Stage 2 On Positive Skill Assessment</option>
                    <option value="Australia PR Stage 3 On EOI">Australia PR Stage 3 On EOI</option>
                    <option value="Australia Visitor Visa">Australia Visitor Visa</option>
                    <option value="Canada Express Entry Stage 1">Canada Express Entry Stage 1</option>
                    <option value="Canada Express Entry Stage 2">Canada Express Entry Stage 2</option>
                    <option value="Other">Other</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td valign="top">Program Cost<span class="error">*</span> :</td>
                <td>
                  <div class="col-md-8 col-sm-6 col-xs-12 no-padding-left no-padding-right">
                    <input name="fee" class="representative-form" id="fee" type="text" value="" readonly="readonly"/> 
                  </div>
                  <div class="col-md-3 col-sm-5 col-xs-12 pull-right no-padding-right no-padding-left">
                    <select name="currency" class="representative-form">
                      <option value="INR">INR</option>
                    </select>
                  </div>
                  <p class="other_service" style="display:none; color:#ff0000;"> Please insert amount in fee section</p>
                </td>
              </tr>

              <tr>
                <td valign="top">SGST @ (9%)<span class="error">*</span> :</td>
                <td><input name="sgst" class="representative-form" id="sgst" type="text" readonly="readonly"/> </td>
              </tr>

              <tr>
                <td valign="top">CGST @ (9%)<span class="error">*</span> :</td>
                <td><input name="cgst" class="representative-form" id="cgst" type="text" readonly="readonly"/> </td>
              </tr>

              <tr>
                <td valign="top">Your GSTIN :</td>
                <td><input name="your_gstin" class="representative-form" id="your_gstin" type="text" placeholder="Please fill your GSTIN for Invoice"> </td>
              </tr>

              <tr>
                <td valign="top">Convenience Fee(@2.36%)<span class="error">*</span> :</td>
                <td><input name="convenience_fee" class="representative-form" id="convenience_fee" type="text" readonly="readonly"/> </td>
              </tr>

              <tr>
                <td valign="top">Total Amount<span class="error">*</span> :</td>
                <td><input name="amount" class="representative-form" id="amount" type="text" value="" readonly="readonly"/> </td>
              </tr>

              <tr>
                  <th valign="top">Billing Address</th>
              </tr>

              <tr>
                <td valign="top">Name<span class="error">*</span> :</td>
                <td><input name="fname" id="fname" type="text" class="representative-form"/> </td>
              </tr>

              <tr>
                <td valign="top">Address<span class="error">*</span> :</td>
                <td><textarea name="address" id="address" style="width:100%"></textarea>   </td>
              </tr>

              <tr>
                <td valign="top">City<span class="error">*</span> :</td>
                <td><input name="city" id="city" type="text" value=""  class="representative-form" />  </td>
              </tr>

              <tr>
                <td valign="top">State/Province :</td>
                <td><input name="state" type="text" value=""  class="representative-form" />  </td>
              </tr>

              <tr>
                <td valign="top">ZIP/Postal Code<span class="error">*</span> :</td>
                <td><input name="postal_code" id="postal_code" type="text" value=""  class="representative-form" />  </td>
              </tr>

              <tr>
                <td valign="top">Country<span class="error">*</span> :</td>
                <td><input name="country" id="country" type="text" value=""  class="representative-form" />  </td>
              </tr>

              <tr>
                <td valign="top">Email<span class="error">*</span> :</td>
                <td><input name="email" id="email" type="text" value=""  class="representative-form" />  <span class="error_msg_email" style="display:none;">Please provide valid email address</span></td>
              </tr>

              <tr>
                <td valign="top">Telephone<span class="error">*</span> :</td>
                <td><input name="phone" id="phone" type="text" value=""  class="representative-form" />  </td>
              </tr>

              <tr>
                <td valign="top"><input name="terms" id="terms" type="checkbox" value="" checked="checked" /></td>
                <td>I have read and agreed to the <a href="https://www.immigrationxperts.com/terms-condition" target="_blank">Terms & Conditions</a> and <a href="https://www.immigrationxperts.com/refund-cancellation" target="_blank">Cancellation Policy</a> mentioned by Immigrationxpert.com.  </td>
              </tr>

              <tr>
                <td></td>
                <td><input name="submitted" value="Continue" type="submit" class="button-5" style="float: left;" />&nbsp; </td>  
              </tr>

              <tr> 
                  <td>&nbsp;</td>
                  <td>
                      <span class="error_msg" style="display:none;">Please fill all mandatory fields.</span>
                      <span class="error_msg2" style="display:none;">Please fill amount properly.</span>
                      <span class="error">*</span> <span>denotes required field.</span>
                  </td>  
              </tr>

            </tbody>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

<!--  Change Service and Set Payment Amount Script -->
<script>
$(document).ready(function() {
    $("#description").change(function(){
      $(this).removeClass("required");
      var description_value = $(this).val();
      if(description_value == "Australia PR One Time Payment")
      {
        $('#fee').val('60000');
        var sgst = 60000 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 60000 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 60000 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 60000 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');
      }
      else if(description_value == "Australia PR Stage 1 Registration")
      {

        $('#fee').val('30000');
        var sgst = 30000 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 30000 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 30000 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 30000 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');
      }
      else if(description_value == "Australia PR Stage 2 On Positive Skill Assessment")
      {

        $('#fee').val('35000');
        var sgst = 35000 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 35000 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 35000 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 35000 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');

      }
      else if(description_value == "Australia PR Stage 3 On EOI")
      {
        $('#fee').val('14000');
        var sgst = 14000 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 14000 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 14000 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 14000 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount); 
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');
      }
      else if(description_value == "Australia Visitor Visa")
      {
        $('#fee').val('15000');
        var sgst = 15000 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 15000 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 15000 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 15000 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');  
      }
      else if(description_value == "Canada Express Entry Stage 1")
      {

        $('#fee').val('42500');
        var sgst = 42500 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 42500 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 42500 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 42500 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');
 
      }
      else if(description_value == "Canada Express Entry Stage 2")
      {
        $('#fee').val('42500');
        var sgst = 42500 * 9/ 100;
        $('#sgst').val(sgst);
        var cgst = 42500 * 9/ 100;
        $('#cgst').val(cgst);
        var convenience_fee = 42500 * 2.36/ 100;
        $('#convenience_fee').val(convenience_fee);
        var totalamount = 42500 + sgst + cgst +convenience_fee; 
        $("#amount").val(totalamount);
        $("#fee").removeClass("required");
        $("#amount").removeClass("required");
        $("#sgst").removeClass("required");
        $("#cgst").removeClass("required");
        $("#convenience_fee").removeClass("required");
        $('.other_service').css('display','none');  
      }
      else
      {
        $('.other_service').css('display','block');
        $('#fee').removeAttr( "readonly" );
        $('#fee').val('');
        $("#amount").val('');
        $("#sgst").val('');
        $("#cgst").val('');
        $('#convenience_fee').val(''); 
      }
       
    });

      $("form").submit(function(e){
        var error_code = 0;
        var error_code_amount = 0;
        if($('#description').val() == "" || $('#description').val() == "NULL")
        {
          $('#description').addClass('required');
          error_code = 1;
        }
        if($('#fee').val() == "")
        {
          $('#fee').addClass('required');
          error_code = 1;
        }
        if($('#amount').val() == "")
        {
          $('#amount').addClass('required');
          error_code = 1;
        }
        if($('#sgst').val() == "")
        {
          $('#sgst').addClass('required');
          error_code = 1;
        }
        if($('#cgst').val() == "")
        {
          $('#cgst').addClass('required');
          error_code = 1;
        }
        if($('#convenience_fee').val() == "")
        {
          $('#convenience_fee').addClass('required');
          error_code = 1;
        }        
        if($('#fname').val() == "")
        {
          $('#fname').addClass('required');
          error_code = 1;
        }
        if($('#address').val() == "")
        {
          $('#address').addClass('required');
          error_code = 1;
        }
        if($('#city').val() == "")
        {
          $('#city').addClass('required');
          error_code = 1;
        }
        if($('#postal_code').val() == "")
        {
          $('#postal_code').addClass('required');
          error_code = 1;
        }
        if($('#country').val() == "")
        {
          $('#country').addClass('required');
          error_code = 1;
        }
        if($('#email').val() == "")
        {
          $('#email').addClass('required');
          error_code = 1;
        }
        if($('#telephone').val() == "")
        {
          $('#telephone').addClass('required');
          error_code = 1;
        }

        var customer_email = $('#email').val();
        if( !validateEmail(customer_email))
        {
          $('#email').addClass('required');
          $('.error_msg_email').css('display','block');
           error_code = 1;
        }

        if($('#description').val() == "Australia PR One Time Payment")
        {
           var fees = $('#fee').val();
           if(fees != 60000) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 60000 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 60000 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 60000 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 60000 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }

        else if($('#description').val() == "Australia PR Stage 1 Registration")
        {
           var fees = $('#fee').val();
           if(fees != 30000) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 30000 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 30000 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 30000 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 30000 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        else if($('#description').val() == "Australia PR Stage 2 On Positive Skill Assessment")
        {
           var fees = $('#fee').val();
           if(fees != 35000) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 35000 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 35000 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 35000 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 35000 + sgst +cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
         else if($('#description').val() == "Australia PR Stage 3 On EOI")
        {
           var fees = $('#fee').val();
           if(fees != 14000) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 14000 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 14000 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 14000 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 14000 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        else if($('#description').val() == "Australia Visitor Visa")
        {
           var fees = $('#fee').val();
           if(fees != 15000) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 15000 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 15000 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 15000 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 15000 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        else if($('#description').val() == "Canada Express Entry Stage 1")
        {
           var fees = $('#fee').val();
           if(fees !=42500) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 42500 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 42500 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 42500 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 42500 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        else if($('#description').val() == "Canada Express Entry Stage 2")
        {
           var fees = $('#fee').val();
           if(fees !=42500) 
           {
            $('#fee').addClass('required');
             error_code_amount = 1;
           }
           var sgst = 42500 * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 42500 * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = 42500 * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = 42500 + sgst + cgst +convenience_fee; 
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        else if($('#description').val() == "Other")
        {
           var fees = $('#fee').val();
           
           var sgst = fees * 9/ 100;
           var sgst_tax_field =  $('#sgst').val();
           if(sgst_tax_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = fees * 9/ 100;
           var cgst_tax_field =  $('#cgst').val();
           if(cgst_tax_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = fees * 2.36/ 100;
           convenience_fee = convenience_fee.toFixed(2);
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = +fees + sgst + cgst +convenience_fee; 
           totalamount = totalamount.toFixed(2);
           var totalamount_field = $("#amount").val();
           if(totalamount_field != totalamount)
           {
             $('#amount').addClass('required');
             error_code_amount = 1;
           }
        }
        if(!$('#terms').is(':checked'))
        {
          alert('Please agree to the terms & conditions');
          return false;
        }
        

        if(error_code == 1){
          $('.error_msg').css('display','block');
          return false;
        }

        if(error_code_amount == 1){
          $('.error_msg2').css('display','block');
          return false;
        }
      });

      $("#fee").focusout(function(){
        $(this).removeClass("required");
      });
      $("#amount").focusout(function(){
        $(this).removeClass("required");
      });
      $("#sgst").focusout(function(){
        $(this).removeClass("required");
      });
      $("#cgst").focusout(function(){
        $(this).removeClass("required");
      });
      $("#convenience_fee").focusout(function(){
        $(this).removeClass("required");
      });
      $("#fname").focusout(function(){
        $(this).removeClass("required");
      });
      $("#address").focusout(function(){
        $(this).removeClass("required");
      });
      $("#city").focusout(function(){
        $(this).removeClass("required");
      });
      $("#postal_code").focusout(function(){
        $(this).removeClass("required");
      });
      $("#country").focusout(function(){
        $(this).removeClass("required");
      });
      $("#email").focusout(function(){
        $(this).removeClass("required");
      }); 
      $("#telephone").focusout(function(){
        $(this).removeClass("required");
      });  

      $("#telephone").keydown(function (e) {
       // Allow: backspace, delete, tab, escape, enter and .
       if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
       // Allow: Ctrl+A, Command+A
       (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
       // Allow: home, end, left, right, down, up
       (e.keyCode >= 35 && e.keyCode <= 40)) {
         // let it happen, don't do anything
         return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) 
       {
         e.preventDefault();
       }
      });

      $("#fee").keydown(function (e) {
       // Allow: backspace, delete, tab, escape, enter and .
       if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
       // Allow: Ctrl+A, Command+A
       (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
       // Allow: home, end, left, right, down, up
       (e.keyCode >= 35 && e.keyCode <= 40)) {
         // let it happen, don't do anything
         return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) 
       {
         e.preventDefault();
       }
      });
 
      $("#postal_code").keydown(function (e) {
       // Allow: backspace, delete, tab, escape, enter and .
       if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
       // Allow: Ctrl+A, Command+A
       (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
       // Allow: home, end, left, right, down, up
       (e.keyCode >= 35 && e.keyCode <= 40)) {
         // let it happen, don't do anything
         return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) 
       {
         e.preventDefault();
       }
      });



      $('#fee').focusout(function() {
        var fee=$('#fee').val().replace(",","");
        var sgst_tax = fee * 9/ 100;
        sgst_tax = sgst_tax.toFixed(2);
        $('#sgst').val(sgst_tax);
        var cgst_tax = fee * 9/ 100;
        cgst_tax = cgst_tax.toFixed(2);
        $('#cgst').val(cgst_tax);
        var convenience_fee = fee * 2.36/ 100;
        convenience_fee = convenience_fee.toFixed(2);
        $('#convenience_fee').val(convenience_fee);
        var totalamount = + parseFloat(fee) + parseFloat(sgst_tax) + parseFloat(cgst_tax) + parseFloat(convenience_fee); 
        totalamount = totalamount.toFixed(2);
        $("#amount").val(totalamount);
      
      });
});



function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
</script>
<?php get_footer();?>