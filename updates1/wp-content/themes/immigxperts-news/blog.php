<?php
/*
 Template Name:  Blog Page
*/


get_header(); ?>

<div class="blog-bg">
<div class="container">
<div class="row">
<div class="blog-bg-title">Blog</div>
<div class="list-1 aligned">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      
</div>
</div>
</div></div>


 <div class="blog"> <div class="container"><div class="row">
 <div class="col-md-8 col-sm-8 col-xs-12">
<?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag"]' ); ?>

 <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts("cat=11&showposts=10&paged=".$paged);
while(have_posts()):the_post();
?>

<div class="blog-box">
 <div class="blog-heading"><a href="<?php echo get_permalink();?>"><?php the_title();?></a></div>
  <div class="article-category"><ul>
 <li><div class="createdby" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
<span itemprop="name" data-uk-tooltip=""><i class="fa-blog fa-user"></i><?php the_author(); ?></span></div>		
			
	
 <li>
<div class="category">
<time datetime="2015-10-01T10:12:26+00:00" itemprop="datePublished" data-uk-tooltip=""><i class="fa-blog fa-calendar"></i> <?php the_time('F jS, Y') ?></time>
</div>	</li>					
					
	 <li>		
<div class="category">
<meta itemprop="interactionCount" content="UserPageVisits:132">
<span data-uk-tooltip=""><i class="fa-blog fa-eye"></i><?php if(function_exists('the_views')) { the_views(); } ?></span>
</div>	</li>	
 
 </div>
 <div class="blog-text"><div class="blog-img"><a href="<?php echo get_permalink();?>"><?php the_post_thumbnail('medium'); ?></a></div>
 <?php echo get_the_excerpt();?> </div>
<div class="blog-button-read"><a class="blog-button" href="<?php echo get_permalink( $post->ID ); ?>" itemprop="url">
		<span class="icon-chevron-right"></span>Read more ...	</a></div>
</div>

<?php endwhile;?>
<div class="col-sm-12"><?php custom_pagination(); ?></div>




</div>
 <div class="col-md-4 col-sm-4 col-xs-12">
 
 <form role="search" method="get" id="searchform" class="searchform" action="http://demo.cmssuperheroes.com/themeforest/wp-candidate/">
	<div>
	<input type="text" class="textarea" value="" name="s" id="s" placeholder="Search">
	</div>
	</form>
 <div class="blog-category-box">

 <div class="Categories-heading">Categories</div>
 <div class="sidebar">


 <ul>
  
 <li><a href="<?php echo get_bloginfo('url');?>/category/australia">Australia</a></li>
  <li><a href="<?php echo get_bloginfo('url');?>/category/canada">Canada</a></li>
   <li><a href="<?php echo get_bloginfo('url');?>/category/new-zealand">New Zeland</a></li>
    <li><a href="<?php echo get_bloginfo('url');?>/category/denmark">Denmark</a></li>
	 <li><a href="<?php echo get_bloginfo('url');?>/category/hong-kong">Honk Kong</a></li>
	  <li><a href="<?php echo get_bloginfo('url');?>/category/singapur">Singapore</a></li>
 </ul>

 </div>

 </div>
 
 </div>
 </div> </div> </div>
 
<?php get_footer();?>





