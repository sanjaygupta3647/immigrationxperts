<?php 

/** Template Name: Delhi NCR

**/

get_header();?>

<div class="australia-bg">
<div class="container">
<div class="row">
<div class="contact-title"><?php echo get_field('australia_main_title');?></div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
    </div>
</div>
</div>
</div>


<div class="australia">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="heading"><h1><?php echo get_field('country_first_title');?></h1><br>
<div class="seprator-australia">
<?php if(get_field('country_first_title')){?>
<img src="<?php echo get_template_directory_uri ();?>/images/seprator.png">
<?php } ?>
</div>
</div>
<div class="text-box-center">
<div class="delhi-ncr-form">
	
	<?php 
	global $wp;

	if(home_url( $wp->request )=='https://www.immigrationxperts.com/australia-immigration-consultants-in-delhi-ncr'){
	 	echo do_shortcode('[contact-form-7 id="7632" title="Delhi NCR"]');
	}else if(home_url( $wp->request )=='https://www.immigrationxperts.com/canada-immigration-consultants-in-delhi-ncr'){
		echo do_shortcode('[contact-form-7 id="7641" title="Delhi NCR Canada"]');
	}
	?>
</div>
<?php echo get_field('australia_first_content');?>
</div>
</div>


 
<?php if(get_field('first_box_image_') && get_field('first_box_title') && get_field('first_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
<img src="<?php echo get_field('first_box_image_');?>" class="img-responsive" alt="<?php echo get_field('first_box_title');?>">
<div class="overlay">
<div class="box-search"></div>
</div>
 </div>
</div>
<div class="australia-inner-box"><div class="australia-box-heading"><span><?php echo get_field('first_box_title');?></span></div>
<div class="australia-box-text"><?php echo  get_field('first_box_content');?></div>
<div class="australia-read-more"><a href="<?php echo get_field('first_box_link');?>">read more...</a></div></div>
</div>
</div>
<?php } ?>

<?php if(get_field('second_box_title') && get_field('second_box__image') && get_field('second_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
<img src="<?php echo get_field('second_box__image');?>" class="img-responsive" alt="<?php echo get_field('second_box_title');?>">
<div class="overlay">
 <div class="box-search"></div>
</div>
</div>
</div>
<div class="australia-inner-box">
<div class="australia-box-heading"><span><?php echo get_field('second_box_title');?></span></div>
<div class="australia-box-text"><?php echo get_field('second_box_content');?></div>
<div class="australia-read-more"><a href="<?php echo get_field('second_box_link');?>">read more...</a></div></div>
</div>
</div>
<?php } ?>


<?php if(get_field('third_box_title') && get_field('third_box_image') && get_field('third_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
<img src="<?php echo get_field('third_box_image');?>" class="img-responsive" alt="<?php echo get_field('third_box_title');?>">
<div class="overlay">
<div class="box-search"></div>
</div>
</div>
</div>
<div class="australia-inner-box">
<div class="australia-box-heading">
<span><?php echo get_field('third_box_title');?></span>
</div>
<div class="australia-box-text"><?php echo get_field('third_box_content');?></div>
<div class="australia-read-more">
<a href="<?php echo get_field('third_box_link');?>">read more...</a>
</div>
</div>
</div>
</div>
<?php } ?> 


<?php if(get_field('fourth_box_title') && get_field('fourth_box_image') && get_field('fourth_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
<img src="<?php echo get_field('fourth_box_image');?>" class="img-responsive" alt="<?php echo get_field('fourth_box_title');?>">
<div class="overlay">
<div class="box-search"></div>
</div>
</div>
</div>
<div class="australia-inner-box">
<div class="australia-box-heading">
<span><?php echo get_field('fourth_box_title');?></span> 
</div>
<div class="australia-box-text"><?php echo  get_field('fourth_box_content');?></div>
<div class="australia-read-more">
<a href="<?php echo get_field('fourth_box_link');?>">read more...</a>
</div>
</div>
</div>
</div>
<?php } ?>


<?php if(get_field('fifth_box_title') && get_field('fifth_box_image') && get_field('fifth_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
<img src="<?php echo get_field('fifth_box_image');?>" class="img-responsive" alt="<?php echo get_field('fifth_box_title');?>">
<div class="overlay">
<div class="box-search"></div>
</div>
</div>
</div>
<div class="australia-inner-box">
<div class="australia-box-heading">
<span><?php echo get_field('fifth_box_title');?></span>
</div>
<div class="australia-box-text"><?php echo get_field('fifth_box_content');?></div>
<div class="australia-read-more">
<a href="<?php echo get_field('fifth_box_link');?>">read more...</a>
</div>
</div>
</div>
</div> 
<?php } ?>


<?php if(get_field('six_box_title') && get_field('six_box_image') && get_field('six_box_link'))
{?>
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="australia-box">
<div class="australia-img">
<div class="hovereffect">
     <img src="<?php echo get_field('six_box_image');?>" class="img-responsive" alt="<?php echo get_field('six_box_title');?>">
        <div class="overlay">
         <div class="box-search"></div>
        </div>
    </div>
</div>

<div class="australia-inner-box"><div class="australia-box-heading"><span><?php echo get_field('six_box_title');?></span>
</div>
<div class="australia-box-text"><?php echo get_field('six_box_content');?></div>
<div class="australia-read-more"><a href="<?php echo get_field('six_box_link');?>">read more...</a></div></div>
</div>
</div>
<?php } ?>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12">
      <?php while(have_posts()) : the_post();  ?>
        <?php the_content(); ?>
      <?php endwhile;?>
  </div>
</div>
</div>
</div>
</div>
</div>
<!--- Box Section End Here -->


<div class="australia-bottom">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="heading">
<?php echo get_field('australia_second_title');?><br>
<div class="seprator-australia">
<?php if(get_field('australia_second_title')){?>
<img src="<?php echo get_template_directory_uri ();?>/images/seprator.png">
<?php } ?>
</div>
</div>
<div class="text-box-center">
<?php echo get_field('australia_second_content');?>
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="text">
    <?php echo get_field('australia_bottom_content');?> 
    </div>
</div>

</div>
</div>
</div>


<?php get_footer();?>