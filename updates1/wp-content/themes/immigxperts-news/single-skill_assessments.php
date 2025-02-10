<?php get_header(); ?>
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


<div class="container">
<?php while(have_posts()) : the_post();  ?> 
<div class="entry">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="news-imgfull1">
			<?php the_post_thumbnail('full'); ?>
		</div>
	<?php endif ?>
	<?php the_content(); ?>
<div class="news-like">
<?php //echo do_shortcode('[Social9_Share]');?>
</div>
</div>
<?php //if ( comments_open() || get_comments_number() ) : comments_template();endif;
endwhile;?>
</div>
</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>