<?php 
/*
Template Name: Positive Skills
*/
get_header();?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/juqery_isotope/css/style.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.ns-images').fancybox();
    });
</script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/juqery_isotope/js/jquery.isotope.js"></script> 

<div class="positive-skill">
<div class="container">
<div class="row">
<div class="blog-bg-title"><?php the_title();?></div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
</div>
</div>
</div>
</div>



<div class="positive-assessment">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="positive-skill-list">

  <div class="positive-tabs">
  <div class="portfolioFilter">
  <ul>
  <li>
  <a href="#" data-filter="*" class="current">All Positive Skill Assessments</a>
  </li>
   <?php $args = array('hide_empty' => 0); 
   $terms = get_terms('skill_assessment_category', $args);
   foreach($terms as $term)
    {  ?> 
      <li><a href="#" data-filter=".<?php echo $term->slug;?>"><?php echo $term->name;?></a></li>
    <?php }?>
  </ul>
  </div>
  </div>

  
 
      
   <div class="tab-content"> 
   <div class="portfolioContainer">

   <?php $args = array(
                 'post_type' => 'skill_assessments',
                 'posts_per_page' => -1,  
                );
   query_posts($args);
   while(have_posts()) : the_post();
  $img_id = get_post_thumbnail_id();
  $thumb_src = wp_get_attachment_image_src($img_id, 'thumbnail' , true);
  $img_src = wp_get_attachment_image_src($img_id, 'full' , true);
  $post_terms = wp_get_post_terms( $post->ID, 'skill_assessment_category');?>
  <?php if($img_id){?>
  <div class="pdfbox <?php foreach($post_terms as $post_term){ echo $post_term->slug." ";}?> ">
    <a class="ns-images" href="<?php echo $img_src[0];?>" data-fancybox-group="gallery"><img src="<?php echo $thumb_src[0];?>" alt="<?php the_title(); ?>"></a>
    <div class="pdfboxtitle"><?php the_title(); ?></div>
  </div>
  <?php } ?> 
  

  
   <?php endwhile; wp_reset_query();?> 
 </div>
</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">

$(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
        $(this).closest('a').find('.li').addClass('active');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});

</script>
<?php get_footer() ;?>