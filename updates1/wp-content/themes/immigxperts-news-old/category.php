<?php
	get_header(); ?>        
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9 post-list">
                       <?php while(have_posts()):the_post(); ?>
					   
                        <div class="post-item">
                            <div class="post-image pull-left">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>">
									<strong><?php $posttitle= get_the_title(); echo mb_strimwidth($posttitle, 0,60,'...'); ?></strong></a>
                            </h2>
                            <div class="post-content">
                             <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 140); ?></p>
							</div>
                            <div class="post-meta">
                            <!-- Author  -->
                            <span class="author">
                            <i class="fa fa-user"></i> immigration Experts</span> 
                            <!-- Meta Date -->
                             
                            <span class="time">
                            <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span> 
                            <!-- Category -->
                             
                            <span class="category pull-right">
                            <i class="fa fa-heart"></i>
                                <?php
                                 foreach((get_the_category()) as $category) { 
                                    echo $category->cat_name . ' '; 
                                 } 
                                ?>
                            
                            </span></div>
                        </div>
                      <?php endwhile ?> 
					  <?php wp_reset_postdata(); ?>                        
					  <div class="col-md-12">
					    <div class="pull-right">
						 <?php custom_pagination(); ?>
						</div>
                      </div>
                    </div>
					
                    <!--sidebar start-->
					
					<div class="sidebar col-sm-12 col-md-3">
                        <div class="widget">
                                <?php dynamic_sidebar( 'page-sidebar' ); ?>  
                                <div class="clearfix"></div>
                        </div>
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
									<span class="time"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
										</div>
									</div>
								</li>
								<?php
								   endwhile; endif;
								   wp_reset_query();
								?>
								
							</ul>
						<!-- <div class="widget my-feeds">
                            <div class="widget-title">
                                <h3 class="title">Flickr Photos</h3>
                            </div>
                            <div class="social-feed flickr-feed"></div>
                        </div>
                        <div class="widget my-feeds">
                            <div class="widget-title">
                                <h3 class="title">Instagram Photos</h3>
                            </div>
                            <div class="social-feed instagram-feed"></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer(); ?>