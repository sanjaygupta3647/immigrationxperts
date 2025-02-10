<?php 
/** template Name:Testimonial

*/
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
get_header();?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>		
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

<div class="testimonial-bg">
<div class="container">
<div class="row">
<div class="testimonial-title"><?php the_title();?></div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
</div>
</div>
</div></div>

<div class="testimonial-page">
<div class="container">
<div class="row">
<div class="team-heading"><h3>What People are Saying </h3></div>
<div class="testimonial-line"></div>
</div>
</div></div>

<div class="client-testimonial">
<div class="container">
<div class="row">
<?php echo do_shortcode('[ajax_load_more post_type="testimonial" posts_per_page="10" max_pages="0" button_label="Load More"]');?>
<?php /*$args = array(
              'post_type' => 'testimonial',
              'paged' => $paged
                );
              query_posts($args);
              while(have_posts()) : the_post();
              $img_id = get_post_thumbnail_id();
              //$img_src = wp_get_attachment_image_src($img_id,'full', true);*/?>

<!--<div class="col-md-12 col-sm-12 col-xs-12">
<div class="client-testimonial-box hold_one">
<div class="client-testimonial-left">
<img src="<?php //echo etheme_get_resized_url($img_id,120,120,true);?>">
</div> 
<div class="client-testimonial-right">
<?php //$less_content = truncate_post_return(250);?>

<div class="up_content">
<?php //echo $less_content;?>
</div>
<div class="target">
<?php //echo get_the_content();?>
</div>
<span><?php //echo get_field('testimonial_name');?></span>
<a href="javascript:void(0);"  class="script" id="readmorelink">read more</a>
</div> 

</div>
</div>
 <?php //endwhile; ?>
<div class="col-sm-12"><?php //custom_pagination(); ?></div>
<?php //wp_reset_query();?>-->
</div>
</div></div> 
<?php get_footer();?> 


<script type="text/javascript" language="javascript">
$(document).ready(function() {
	$(document).on('click', '.hold_one .script', function(){
	$('.target').hide( "slide", {direction: "up" }, 2000 );	
	$('.up_content').show("slide",{direction: "up" }, 3000);
	$('.noscript').html('read more');
    $(this).closest('.hold_one').find('.up_content').hide("slide",{direction: "up" }, 1000);
    $(this).closest('.hold_one').find('.target').show( "slide", {direction: "up" }, 2000 );
	$(this).closest('.hold_one').find('a.script').html( "Close" );
	$(this).closest('.hold_one').find('.script').removeClass( "script" );
	$(this).closest('.hold_one').find('a').addClass( "noscript" );
	
	
	  
    });

    $(document).on('click', '.hold_one .noscript', function(){
    $(this).closest('.hold_one').find('.target').hide( "slide", {direction: "up" }, 2000 );
    $(this).closest('.hold_one').find('.noscript').removeClass( "noscript" );
    $(this).closest('.hold_one').find('a').addClass( "script" );
    $(this).closest('.hold_one').find('.up_content').show("slide", {direction: "up" },2000);
    $(this).closest('.hold_one').find('a').html( "read more" );
    });
}); 
</script>
<style>.target{ display:none;}</style>