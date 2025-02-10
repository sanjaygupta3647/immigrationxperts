<?php 

get_header();?>
<style>.target{display:block!important;}</style>
<div class="testimonial-bg">
<div class="container">
<div class="row">
<div class="testimonial-title">Testimonial</div>
</div>
</div></div>

<div class="testimonial-detail">
<div class="container">
<div class="row">
<?php
              while(have_posts()) : the_post();
               $img_id = get_post_thumbnail_id();
              $img_src = wp_get_attachment_image_src($img_id,'full', true);?>
        



<div class="testimonial-page">
<div class="container">
<div class="row">
<div class="team-heading"><h3><?php the_title();?></h3></div>
<div class="testimonial-line"></div>
</div>
</div></div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="client-testimonial-box hold_one">
<div class="client-testimonial-left">
<img src="<?php echo $img_src[0];?>">
</div>
<div class="client-testimonial-right">
<div class="up_content"><?php the_content();?></div>
</div>
</div>
</div>

<?php endwhile;?>
<div class="previous_testimonial"><?php echo previous_post_link('%link', 'Previous');?></div>
<div class="next_testimonial"><?php echo next_post_link('%link', 'Next');?></div>



</div>
</div></div>
<?php get_footer();?>