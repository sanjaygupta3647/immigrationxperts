<?php 

/** Template Name: Contact Us Page

**/

get_header();?>



<div class="contact-page">
    <div class="container">
        <div class="row">
        	<div class="contact-title">Contact us</div>
            <div class="list-1">
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
                <div class="contact-text"><?php echo get_field('contact_top_content');?></div>
            </div>
    		<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="contact-info-box">
                	<div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-info">
                                <div class="contact-info-heading"><?php echo get_field('contact_info_tile');?></div>
                                <div class="contact-info-line"></div>
                            </div>
                        	<div class="contact-text"><?php echo get_field('contact_info_content');?></div>

                          
                                <div class="contact-info">
                                <div class="contact-info-heading"><?php echo get_field('offshore_office_title');?></div>
                                <div class="contact-info-line"></div>
                                </div>
                                <div class="info-box-title"><?php echo get_field('offshore_office_second_title');?> </div>
                                <div class="contact-text">
                                <?php echo get_field('offshore_office_content');?>
                                </div>
                                   

                        </div>
                
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-info">
                            	<div class="contact-info-heading-2">
								<?php echo get_field('contact_form_title_right_side');?>
                                </div>                       
                                <div class="contact-info-line"></div>
                            </div>
                            <div class="contact-inner">

 <?php echo do_shortcode(' [contact-form-7 id="8246" title="Contact page form new"]');?>

                          

                            </div>


                           


                        </div>
                   </div>
                </div>
   			</div>
    
    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="contact-info-box">
                <div class="row">
                    <div class="contact-info">
                        <div class="contact-info-heading"><?php echo get_field('branch_office_title');?></div>
                        <div class="contact-info-line"></div>
                    </div>
                                                  
                    <div class="contact-text">
                        <?php echo get_field('branch_office_content');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    </div>
    
    </div></div>





<div class="upcoming">

<div class="container">

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">

<div class="upcoming-box">

  <div class="contact-info-heading"><?php echo get_field('upcoming_office_title');?> </div><div class="contact-info-line"></div>



<div class="contact-text">

<div class="upcoming-office-box"><img src="<?php echo get_field('upcoming_office_image_1');?>" class="img-responsive">

</div>

<div class="upcoming-office-box"><img src="<?php echo get_field('upcoming_office__image_2');?>" class="img-responsive">

</div>

<div class="upcoming-office-box"><img src="<?php echo get_field('upcoming_office_image_3');?>" class="img-responsive">

</div>

<div class="upcoming-office-box"><img src="<?php echo get_field('upcoming_office_image_4');?>" class="img-responsive">

</div>



</div></div>

</div></div>

</div></div>



<div class="map">



<div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14008.3447733187!2d77.3722703!3d28.6271787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5e2f5b6f142c0099!2sImmigration+Consultants+in+Noida%2C+Delhi+for+Australia%2C+Canada!5e0!3m2!1sen!2sin!4v1523454653360" width="45%" height="300" frameborder="0" style="border:0;margin-left:5%;" allowfullscreen></iframe>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6468941419985!2d77.24800061508073!3d28.55033138245029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1153149282d3969b!2sImmigration+Consultants+in+Delhi+for+Australia%2C+Canada!5e0!3m2!1sen!2sin!4v1523432665019" width="45%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

</div>









<?php get_footer();?>