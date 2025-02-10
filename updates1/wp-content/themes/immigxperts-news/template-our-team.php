<?php 
/*
Template Name: Our Team
*/
get_header();?>

<div class="our-team"> 
<div class="container">
<div class="row">
<div class="contact-title"><?php the_title();?></div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
    </div>
</div>
</div></div>



<div class="team">
<div class="container">
<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">
<div class="team-heading"><h3>Meet our Staff </h3></div>
<div class="testimonial-line"></div></div>
</div> 
</div></div>


<div class="team">
<div class="container">
<div class="row">


<?php $args = array(
              'post_type' => 'our_team',
              'posts_per_page' => -1
    );
query_posts($args);
while(have_posts()) : the_post();
$img_id = get_post_thumbnail_id();
$img_src = wp_get_attachment_image_src($img_id,'full',true);?>
<div class="col-md-12 col-sm-12 col-xs-12" id="<?php echo( basename(get_permalink()) );?>">
<div class="team-box">
<div class="team-img">
<div class="hoereffect">
<img class="img-responsive" src="<?php echo $img_src[0];?>" alt="<?php the_title();?>" >
<div class="overlay">
<div class="box-search"></div>
</div>
</div>
</div>
<div class="team-con-box">
<div class="team-box-title"><?php the_title();?></div>
<div class="team-con">
<span><?php echo get_field('secondary_title');?></span><br><?php echo get_the_content();?></div>
<div class="team-icon">
<?php if(get_field('facebook_link')){?>
<span> <a href="<?php echo get_field('facebook_link');?>" target="_blank"><i class="fa-team fa-facebook" aria-hidden="true"></i></a></span>
<?php } 
if(get_field('twitter_link')){?>
<span>  <a href="<?php echo get_field('twitter_link');?>" target="_blank"><i class="fa-team fa-twitter" aria-hidden="true"></i></a></span>
<?php } ?>

<?php  
if(get_field('linkedin_link')){?>
<span>  <a href="<?php echo get_field('linkedin_link');?>" target="_blank"><i class="fa-team fa-linkedin" aria-hidden="true"></i></a></span>
<?php } ?>

</div>
</div>
</div>
</div>
<?php endwhile; wp_reset_query();?>
</div>
</div>
</div>
<?php get_footer();?>