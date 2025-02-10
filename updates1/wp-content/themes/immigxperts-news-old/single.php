<?php get_header(); ?>
		
		  
            <!--div class="page-header">
                <div class="container">
                    <h1 class="title">Single Blog Post</h1>
                </div>
                <div class="breadcrumb-box">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="/immigrationnews/">Home</a></li>
                            <li class="active"><!--?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div-->
            <!-- page-header -->
            <section class="page-section">
                <div class="container">
				<div class="row">
				  <?php if( have_posts() ) the_post(); ?>
					<div class="col-sm-12 col-md-9">
						<div class="row">
							 <div class="col-sm-12" style="margin-top:15px;">
								 <div class="post-image opacity ft_img"><?php the_post_thumbnail( 'full'); ?></div>
								 <h1 class="title"><?php the_title(); ?></h1>
								<div class="post-content top-pad-20">
									
									<?php echo get_the_content(); ?>
									
								</div>
								<div class="post-meta">
									<!-- Author  -->								
									<span class="author"><i class="fa fa-user"></i>immigration Experts</span>
									<!-- Meta Date -->
									
									<!-- Comments -->
									<!--span class="category "><i class="fa fa-heart"></i></span>
									<!-- Category >
									<span class="comments pull-right"><i class="fa fa-comments"></i> Comments 112</span-->
									 <span class="time pull-right">
										<i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
									 </span>
									 
									 
									 
									 <p class="text-right">
								    <button onclick="shareOnFB()" style="border:2px solid #3b5998; color:#3b5998;" type="button" class="socialmedia_fb btn btn-sm"><i class="fa fa-facebook-f"></i></button>
                                    <button onclick="shareOntwitter()" style="border:2px solid #00acee; color:#00acee;" type="button" class="socialmedia_tw btn btn-sm"><i class="fa fa-twitter"></i></button>
                                    <button onclick="shareOnwhatsapp()" style="border:2px solid #075e54; color:#075e54;" type="button" class="socialmedia_wp btn btn-sm"><i class="fa fa-whatsapp"></i></button>
                                    <button onclick="shareOnlinkedin()" style="border:2px solid #0e76a8; color:#0e76a8;" type="button" class="socialmedia_link btn btn-sm"><i class="fa fa-linkedin"></i></button>
                                </p>
									 
									</div>
							</div>		
						</div>
						<hr>
						
						<!--next & previous post start-->
						<!--div class="row">
							<div class="col-md-5 col-sm-12"><p class="previous"><b>Previous Post:</b> <1?php previous_post_link(); ?></p></div>
							<div class="col-md-2 col-sm-12"><p class="Home"><a href="/"><img src="<1?php echo get_template_directory_uri(); ?>/img/home_icon.png" style="width:38px; margin:0px 40%;"></a></p></div>
							<div class="col-md-5 col-sm-12"><p class="next"><1?php next_post_link(); ?>&nbsp;<b> :Next Post</b></p></div>
						</div>
						<!--next & previous post End-->
						
					</div>
					
					<div class="sidebar col-sm-12 col-md-3">
						<div class="widget">
                                <?php dynamic_sidebar( 'page-sidebar' ); ?>  
                                <div class="clearfix"></div>
                        
							
							
							<div class="widget-title">
							<h3 class="widgettitle">Popular Posts</h3>
							</div>
							<ul class="latest-posts">
							
							   <?php
								  query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
								  order=DESC');
								  if (have_posts()) : while (have_posts()) : the_post();
							   ?>
									
								<li>
									<div class="post-thumb">
									   <?php the_post_thumbnail(array('class'=>'img-rounded', 84,84)); ?>
									</div>
									<div class="post-details">
										<div>
											<a href="<?php the_permalink(); ?>"><?php $posttitle= get_the_title(); echo mb_strimwidth($posttitle, 0,30,'...'); ?></a>
										</div>								
										<div class="meta">
											<!-- Meta Date -->
											<span class="time"><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></span>
										</div>
									</div>
								</li>
								<?php
								   endwhile; endif;
								   wp_reset_query();
								?>
								
							</ul>							
							
							
						    <!-- category-list -->
						</div>
						
										
					</div>
				</div>
				</div>
            </section>
			
		
		
		<!--?php
			//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<a href="<!?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <!?php the_title_attribute(); ?>"><!?php the_title(); ?></a>
 <!?php
endwhile;
}
wp_reset_query();
}

?-->

		
			
    <script>
		function shareOnFB(){
			   var currentURL = window.location.href;
			   var pageTitle = document.title;
			   var url = "https://www.facebook.com/sharer/sharer.php?u="+currentURL+"&t="+pageTitle;
			   window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
			   return false;
		  }

		function shareOntwitter(){
				var currentURL = window.location.href;
				var pageTitle = document.title;
				var url = 'https://twitter.com/intent/tweet?url='+currentURL+'&via=oneclickvisas&text='+pageTitle;
				TwitterWindow = window.open(url, 'TwitterWindow',width=600,height=300);
				return false;
			}

		function shareOnlinkedin(){
				var currentURL = window.location.href;
				var pageTitle = document.title;
				var url = 'https://www.linkedin.com/shareArticle?mini=true&url='+currentURL+'&title='+pageTitle+'&source=LinkedIn';
				TwitterWindow = window.open(url, 'TwitterWindow',width=600,height=300);
				return false;
			}

		function shareOnwhatsapp(){
				var currentURL = window.location.href;
				var pageTitle = document.title;
				var url = 'https://api.whatsapp.com/send?text='+pageTitle+' : '+currentURL;
				TwitterWindow = window.open(url, 'TwitterWindow',width=600,height=300);
				return false;
			}
  </script>
			
			
			
        <?php get_footer(); ?>   
