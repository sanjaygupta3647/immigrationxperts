<?php 
/*
Template Name: States
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

<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/css/style.css" type="text/css" id="" media="print, projection, screen" />
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(function() {
	$("#rowspan").tablesorter({debug: true});
});
</script>
<div class="container">
  <?php while(have_posts()) : the_post();  ?>
  <div class="entry"><?php the_content(); ?></div>
  <?php endwhile; ?>
</div>
<?php get_footer();