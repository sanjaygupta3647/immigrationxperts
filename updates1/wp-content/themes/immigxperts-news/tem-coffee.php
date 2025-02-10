<?php
/*
Template Name: Coffee with us
*/

get_header();?>
<div class="<?php echo 'page_'.$post->ID;?> bg-inner-2">  
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
   </div>
</div>


<div class="container">
  <?php while(have_posts()) : the_post();  ?>
    <div class="entry"><?php the_content(); ?></div>
  <?php endwhile;?>
</div>

<?php
//sleep(5);
//header('Location: ' . $_SERVER['HTTP_REFERER']);
header( "refresh:5;url=".$_SERVER['HTTP_REFERER']."" );
?>

<?php get_footer();?>



