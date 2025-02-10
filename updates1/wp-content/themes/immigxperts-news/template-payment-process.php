<?php 
/*
Template Name: Payment Process
*/
session_start();
if(!$_POST['amount'])
{
  header('Location: '.get_the_permalink(5862));
}
get_header(); 
$_SESSION['amount'] = $_POST['amount']; 
?>

 
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


<div class="container" style="margin-bottom:50px;">
  <?php while(have_posts()) : the_post();  ?>
  <div class="entry"><?php the_content(); ?></div>
  <?php endwhile;?>
<div class="entry">

<center>

  <form  method="post" action="https://www.immigrationxperts.com/post.php" name="frmTransaction" id="frmTransaction" >     
    <table width="600" cellpadding="2" cellspacing="2" border="0">
      <tr>
        <th colspan="2"><h3>Check Your Entries And Continue Payment</h3></th>
      </tr>
    
      <input name="channel" type="hidden" value="10"/>
      <input name="account_id" type="hidden" value="20458"/>
      <input name="secretkey" type="hidden" value="f7c4a8165464987d2f72a60f5a1679a3" size="35"/>
      <input name="reference_no" type="hidden" value="<?php echo time();?>" />
      <input name="mode" type="hidden" value="LIVE" />
      <input name="return_url" type="hidden" size="60" value="https://www.immigrationxperts.com/response.php" />


      <!--<input name="description" type="text" value="Test Product" />-->
      <?php if(isset($_POST['exam_center'])){?>
      <tr>
        <td class="fieldName">Program Name<span class="error">*</span> </td>
        <td align="left">
          <input type="hidden" name="description" value="<?php echo 'PTE Exam Center: '.$_POST['exam_center'].', '.'Purpose: '.$_POST['purpose'].', '.'Qty: '.$_POST['voucher_quantity'];?>" />
          <input name="fee" id="fee" type="hidden" value="<?php echo $_POST['fee'];?>" />
          <input name="sgst" id="sgst" type="hidden" value="<?php echo $_POST['sgst'];?>" />
          <input name="cgst" id="cgst" type="hidden" value="<?php echo $_POST['cgst'];?>" />          
          <input name="your_gstin" id="your_gstin" type="hidden" value="<?php echo $_POST['your_gstin'];?>" />
          <input name="convenience_fee" id="convenience_fee" type="hidden" value="<?php echo $_POST['convenience_fee'];?>" />
        
          <input type="text" value="PTE Voucher" readonly="readonly" />
        </td>
      </tr>
      <?php }else{?>
      <tr>
        <td class="fieldName">Program Name<span class="error">*</span> </td>
        <td align="left">
          <select name="description" id="description">
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
        <td class="fieldName" width="50%">Program Fee<span class="error">*</span></td>
        <td  align="left" width="50%"><input name="fee" id="fee" type="text" value="<?php echo $_POST['fee'];?>" disabled/></td>
      </tr> 
      <tr>
        <td class="fieldName">SGST @ (9%) <span class="error">*</span> </td>
        <td align="left">
        <input name="sgst" id="sgst" type="text"  value="<?php echo $_POST['sgst'];?>" disabled/>
        </td>
      </tr>
      <tr>
        <td class="fieldName">CGST @ (9%) <span class="error">*</span> </td>
        <td align="left">
        <input name="sgst" id="cgst" type="text"  value="<?php echo $_POST['cgst'];?>" disabled/>
        </td>
      </tr>
      <tr>
        <td class="fieldName">Your GSTIN </td>
        <td align="left">
        <input name="your_gstin" id="your_gstin" type="text"  value="<?php echo $_POST['your_gstin'];?>"/>
        </td>
      </tr>
      <tr>
        <td class="fieldName">Convenience Fee(@2.36%)<span class="error">*</span> </td>
        <td align="left">
        <input name="convenience_fee" id="convenience_fee" type="text"  value="<?php echo $_POST['convenience_fee'];?>" disabled/>
        </td>
      </tr>
      <tr>
      <?php }?>
      
      <td class="fieldName" width="50%">Total Amount <span class="error">*</span></td>
      <td  align="left" width="50%">
        <input name="amount" id="amount" type="text" value="<?php echo $_SESSION['amount'];?>" readonly="readonly"/> 
        <select name="currency" >
          <option value="INR">INR</option>
        </select>
      </td>
      </tr>
   
    
        <tr>
            <th colspan="2">Billing Address</th>
        </tr>

        <tr>
            <td class="fieldName">Name <span class="error">*</span> </td>
            <td align="left">
            <input name="name" id="name" type="text" value="<?php echo $_POST['fname'];?>"/></td>
        </tr>
      <?php if(isset($_POST['exam_center'])){?>
        <input name="address" type="hidden" value="Test address" />
        <input name="city" type="hidden" value="Noida" />
        <input name="state" type="hidden" value="UP" />
        <input name="postal_code" type="hidden" value="201301" />
        <input name="country" id="country" type="hidden" value="IND" />
      <?php }else{?>
        <tr>

            <td class="fieldName">Address <span class="error">*</span></td>
            <td align="left">
                <textarea name="address" id="address"><?php echo $_POST['address'];?></textarea>  
            </td>
        </tr>

        <tr>
            <td class="fieldName">City <span class="error">*</span></td>

            <td align="left">
            <input name="city" id="city" type="text" value="<?php echo $_POST['city'];?>"/>            </td>
        </tr>

        <tr>
            <td class="fieldName">State/Province</td>
            <td align="left">
               <input name="state" type="text" value="<?php echo $_POST['state'];?>"/>
            </td>
        </tr>

        <tr>
            <td class="fieldName">ZIP/Postal Code <span class="error">*</span></td>
            <td align="left">
                <input name="postal_code" id="postal_code" type="text" value="<?php echo $_POST['postal_code'];?>"/>            </td>
        </tr>
        <tr>
            <td class="fieldName">Country <span class="error">*</span></td>
            <td align="left">
              <input name="country" id="country" type="text" value="IND" readonly="readonly"/>
            </td>
        </tr>
        
        <?php }?>
        <tr>
            <td class="fieldName">Email <span class="error">*</span></td>
            <td align="left">
            <input name="email" id="email" type="text" value="<?php echo $_POST['email'];?>"/>          
            <span class="error_msg_email" style="display:none;">Please provide valid email address</span>
            </td>
        </tr>  

        <tr>

            <td class="fieldName">Telephone <span class="error">*</span></td>
            <td align="left">
            <input name="phone" id="telephone" type="text" value="<?php echo $_POST['phone'];?>"/>
            </td>
        </tr>
      
        <tr>
            <td class="fieldName" align="left" colspan="2">
              <input name="terms" id="terms" type="checkbox" value="" checked="checked" />
              I have read and agreed to the <a href="https://www.immigrationxperts.com/terms-condition" target="_blank">Terms & Conditions</a> and <a href="https://www.immigrationxperts.com/refund-cancellation" target="_blank">Cancellation Policy</a> mentioned by Immigrationxpert.com.
            </td>
        </tr>
     
        <tr>
            <td class="fieldName">&nbsp;</td>
            <td align="left"> 
            
            <input name="submitted" class="wpcf7-submit" value="Submit" type="submit" />&nbsp; 
            </td>
        </tr>
  
        <tr> 
            <td class="fieldName">&nbsp;</td>
            <td align="left">
                <span class="error_msg" style="display:none;">Please fill all mandatory fields.</span>
                <span class="error_msg2" style="display:none;">Please go back and fill amount properly.</span>
                <span class="error">*</span> <span>denotes required field.</span>
            </td>  
        </tr>
    </table>
</form> 
</center> 




<!--  Change Service and Set Payment Amount Script -->
<script> 
$(document).ready(function() {
	$("#description").val("<?php echo $_POST['description'];?>");
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
      }
      else
      {
        $('#fee').val('');
        $("#amount").val('');
        $('#sgst').val('');
        $('#cgst').val('');
        $('#convenience_fee').val(''); 
      }
       
    });

      $("form").submit(function(e){
        var error_code = 0;
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
        if($('#name').val() == "")
        {
          $('#name').addClass('required');
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 60000 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 30000 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 35000 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var totalamount = 35000 + sgst + cgst +convenience_fee;
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 14000 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 15000 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 42500 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = 42500 * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
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
           var sgst_field =  $('#sgst').val();
           if(sgst_field != sgst)
           {
             $('#sgst').addClass('required');
             error_code_amount = 1;
           }
           var cgst = fees * 9/ 100;
           var cgst_field =  $('#cgst').val();
           if(cgst_field != cgst)
           {
             $('#cgst').addClass('required');
             error_code_amount = 1;
           }
           var convenience_fee = fees * 2.36/ 100;
           var convenience_fee_field = $('#convenience_fee').val();
           if(convenience_fee_field != convenience_fee)
           {
              $('#convenience_fee').addClass('required');
              error_code_amount = 1;
           }  
           var totalamount = fees + sgst + cgst +convenience_fee; 
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
      $("#name").focusout(function(){
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
});

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
</script>
</div>
</div>
<?php get_footer();?>