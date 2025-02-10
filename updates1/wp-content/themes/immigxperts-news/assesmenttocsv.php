<?php
include('../../../wp-load.php');
?>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(document).ready(function(){


	$(document).on('click', '.hold_one .script', function(){
		$(this).closest('.hold_one').find('.dialog-script').dialog({
		  //resizable: false,
		  modal: true,
       });
	});
	
	$(document).on('click', '.hold_two .script_two', function(){
		$(this).closest('.hold_two').find('.dialog-script_two').dialog({
		  //resizable: false,
		  modal: true,
       });
	});
    
    /*$(".script").click(function(){
    $( ".dialog-script" ).dialog({
      //resizable: false,
      modal: true,
    });
    });
	
	$(".script_two").click(function(){
    $( ".dialog-script_two" ).dialog({
      //resizable: false,
      modal: true,
    });  
    });*/ 
});
</script>
<div style="background:#0074A2; padding:20px; margin:0px 0 20px 0; color:#fff;">
	<form action="<?php echo get_bloginfo('template_url');?>/assesmentcsvgenerate.php" method="post" style="padding: 0px;
margin: 0px;
text-align: center;">
<!-- 		<select name="year" id="year" onchange="" size="1" style="font-size: 16px;
padding: 5px 10px;
margin: 0px;"> 
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
</select> -->
		<select name="month" id="month" onchange="" size="1" style="font-size: 16px;
padding: 5px 10px;
margin: 0px;"> 
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
		<input type="submit" name="dcsv" value="Download" style="padding: 5px 20px;
font-size: 14px;">

	</form>
</div>
<table style="width: 100%;
font-family: arial;
font-size: 12px;" cellpadding="5" cellspacing="0">
	<tr bgcolor="#FFBA00">
		<td>S.N.</td>
		<td>Date(Y-M-D)</td>
		<td>Name</td>
		<td>Email</td>
		<td>Contact Number</td>
		<td>Best Time</td>
		<td>Age</td>
		<td>Qualification</td>
		<td>Applicant Resume</td>
		<td>Spouse Resume</td> 
	</tr>
	<tr><td colspan="8"><hr></td></tr>
	<?php 
	$sn=1;
	$ql= mysql_query("select as_date, as_fname, as_email, as_number, as_timetotalk, as_dob, as_qualification,as_main_applicant_resume, as_main_applicant_resume from wp_assesment order by as_date DESC");
			while($rs=mysql_fetch_array($ql)){ ?>
	<tr>
		<td><?php echo $sn; ?></td>
		<td><?php echo $rs['as_date']; ?></td>
		<td><?php echo $rs['as_fname'] .' '. $rs['as_lname']; ?></td>
		<td><?php echo $rs['as_email']; ?></td>
		<td><?php echo $rs['as_number']; ?></td>
		<td><?php echo $rs['as_timetotalk']; ?></td>
		<td><?php echo $rs['as_dob']; ?></td>
		<td><?php echo $rs['as_qualification']; ?></td>
		<?php if($rs['as_main_applicant_resume']){?>
		<td>
		<div class="hold_one">
		<button class="script">Resume</button>
		<div style="display:none" class="dialog-script" style="width:1000px;">
		<?php echo do_shortcode('[embeddoc url="'.$rs['as_main_applicant_resume'].'"]');?> 
		</div>
		</div>
		</td><?php }?>
		<?php if($rs['as_spouse_resume']){?>
		<td>
		<div class="hold_two">	
		<button class="script_two">Resume</button>
		<div style="display:none" class="dialog-script_two" style="width:1000px;">
		<?php echo do_shortcode('[embeddoc url="'.$rs['as_main_applicant_resume'].'"]');?> 
		</div> 
		</div>
		</td><?php }?>
		
	</tr>
	<?php $sn++; }  ?>
</table>
<style>.ui-dialog{width:1000px!important;}</style>