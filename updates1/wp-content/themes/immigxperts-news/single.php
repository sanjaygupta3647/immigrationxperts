<?php get_header(); ?>
 <section id="bread-cum">
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                                <li><a href="https://www.immigrationxperts.com">Home</a></li>
                                <li><a href="https://www.immigrationxperts.com/updates">News</a></li>
                                <li class="active"> <?php echo get_the_title(); ?> </li>
                            </ol>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



<div class="container">
<?php while(have_posts()) : the_post(); setPostViews(get_the_ID()); ?> 
<div class="entry">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="news-imgfull">
			<?php the_post_thumbnail('full'); ?>
		</div>
	<?php endif ?>
	<?php the_content(); ?>
    
    <?php echo getPostViews(get_the_ID()); ?>
<div class="news-like">
<?php //echo do_shortcode('[Social9_Share]');?>
</div>
</div>
<?php //if ( comments_open() || get_comments_number() ) : comments_template();endif;
endwhile;?>

  <div class="row">     
    <div class="col-md-8 col-sm-12 ">
            <div class="related_post">
            <?php
            //for use in the loop, list 5 post titles related to first tag on current post
            $tags = wp_get_post_tags($post->ID);
            if ($tags) {
            echo '<span><b>Related Post:</b></span>' ;
            $first_tag = $tags[0]->term_id;
            $args=array(
            'tag__in' => array($first_tag),
            'post__not_in' => array($post->ID),
            'posts_per_page'=>1,
            'caller_get_posts'=>1
            );
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
            &nbsp;<a href="<?php the_permalink() ?>" rel="bookmark" style="color:#fff;" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></br>
             
            <?php
            endwhile;
            }
            wp_reset_query();
            }
            ?>
            
            </div>
    </div>
        <div class="col-md-4 col-sm-12 "></div>
    </div>


<div class="row">
    <div class="col-md-5 col-sm-12"><p class="previous"><b style="color:#fff;">Previous Post:</b> <?php previous_post_link(); ?></p></div>
    <div class="col-md-2 col-sm-12"><p class="Home"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/home_icon.png" style="width:38px; margin:0px 40%;"></a></p></div>
    <div class="col-md-5 col-sm-12"><p class="next"><?php next_post_link(); ?>&nbsp;<b style="color:#fff;"> :Next Post</b></p></div>
</div>


</div>
</main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer(); ?>