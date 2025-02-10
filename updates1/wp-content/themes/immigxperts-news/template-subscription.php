<?php 
/** Template Name: Subscription Form Page
**/
get_header();?>

<div class="contact-page">
	<div class="container">
		<div class="row">
			<div class="contact-title">Subscribe to our Newsletter</div>
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
			<div class="col-md-12 col-sm-12 col-xs-12">
				
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="contact-info-box">
					<div class="newsletter-text">Find out more about these newsletters</div>
					<div class="col-sm-7">
					<style>
			          #SubscribeUsForm label.error {color:#FF0000; font-size:12px;}
			        </style>
			        <form action='http://immixpert.cp.foxymark.com/subscribe-us/?u=gASfiIiOiMnIsISM1EzMiojIsJyeuETR' method='post' name='SubscribeUsForm' id='SubscribeUsForm'>
			          <input name="send_vm" type="hidden" value="1" />
			          <input name="stat" type="hidden" value="7" />
			          <table width='100%' border='0' cellpadding='2' cellspacing='2'>
			            <tr>
			              <td align='left' valign='middle'>Email Id<span style='color:#ff0000'>*</span></td>
			              <td><input type='text' name='emailid' id='emailid'class='required email'  value='' maxlength='150' /></td>
			            </tr>
			            <tr>
			              <td width='21%' align='left' valign='middle'>Name<span style='color:#ff0000'>*</span></td>
			              <td width='79%'><input type='text' name='name' id='name' class='required' maxlength='50' value='' /></td>
			            </tr>
			            <tr>
			              <td align='left' valign='middle' style="text-transform:capitalize">mobile.<span style='color:#ff0000'>*</span></td>
			              <td><input name='mobile' id='mobile' type='text'  value='' class='required' /></td>
			            </tr>
			            <tr>
			              <td align='left' valign='middle'>&nbsp;</td>
			              <td>
			                <div style="max-width:250px; background:#f3f3f3; border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;behavior: url(/_lib/PIE.htc); ">
			                  <table border='0' cellspacing='2' cellpadding='2'>
			                    <tr>
			                      <td colspan='2' align='left' valign='top'><div style='font-size:15px;'><strong>Security Check</strong></div></td>
			                    </tr>
			                    <tr>
			                      <td  align='left' valign='top'><div style='width:200px; height:55px;' id='cpatcha_img_div'><img src='http://immixpert.cp.foxymark.com/captcha/joinus.jpg?r=SHi57A2k' id='_captchaImg' /></div><br /><input name='_captchaName' type='hidden' value='joinus' /></td>
			                      <td width='34' align='center' valign='top'>
			                      <a style='cursor:pointer;' onClick="refreshCaptcha('_captchaImg')" title='Try Diffrent Image'><img src='http://immixpert.cp.foxymark.com/images/restart.png' /></a>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td colspan='2' align='left' valign='top'><input name='_captchaVal' type='text' class='required' id='_captchaVal' title='Please Enter Image Text' style='width:230px;' /></td>
			                    </tr>
			                  </table>
			                </div>
			              </td>
			            </tr>
			            <tr>
			              <td align='left' valign='middle'>&nbsp;</td>
			              <td><input type='submit' name='_submit' id='_submit' value='Submit' /></td>
			            </tr>
			          </table>
			        </form>
			        <script type="text/javascript" src='http://immixpert.cp.foxymark.com/_lib/js/subscribe.js'></script>
			        </div>
			        <div class="col-sm-5">
				        <?php if(has_post_thumbnail()):
							$feature_image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true);?>
							<img class="img-responsive" src="<?=$feature_image[0]?>">
						<?php endif ?>
			        </div>

				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.newsletter-text {
	    /*border: 2px solid red;*/
	    font-size: 18px;
	    margin: 0 0 0 10px;
	    /*padding: 8px;*/
	}
</style>

<?php get_footer();?>