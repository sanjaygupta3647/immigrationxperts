<?php
get_header(); ?>
        
        <section class="home_cards">
            <div class="container">
              <div class="row-flex">
				<div class="card_main">
                  <div class="content">
                    <?php $args=array('post_type'=>'post','category_name'=>'news','posts_per_page' => 1,);
                        $loop1= new WP_Query($args);
                        $i=1;
                    ?>
                    <?php if($loop1->have_posts()):?>
                    <?php while($loop1->have_posts()) : $loop1->the_post(); ?>
                      <a href="<?php the_permalink(); ?>">
                        <picture>
                          <?php the_post_thumbnail( 'medium_large', array('class'=>'lazyloaded',752,501) ); ?>
                        </picture>
                        <div class="caption_box">
                         <h4><?php  the_title(); ?></h4>
                           <p>By <a href="<?php the_permalink(); ?>" title="Posts by Immigrationxperts" rel="author">Immigration Experts </a></p>
                        </div>
                      </a>
                    <?php endwhile ?> 
                    <?php endif; ?>	      
                    <?php wp_reset_postdata(); ?> 
                  </div>
                </div>
                                            
                <div class="card_side">
			      
                   <?php $args=array('post_type'=>'post', 'category_name'=>'australia-new','posts_per_page' => 2,);
                    $loop1= new WP_Query($args);
                    $i=1;
                    ?>
                   <?php if($loop1->have_posts()):?>
                   <?php while($loop1->have_posts()) : $loop1->the_post(); ?> 
                    
                    <div class="card">
                      <a href="<?php the_permalink(); ?>">
                        <picture>
                            <img width="524" height="349" src="<?php the_post_thumbnail( 'medium_large' ); ?>" alt="" class="lazyloaded" data-ll-status="loaded">
                        </picture>
                        <div class="caption_box">
                            <h4><?php  the_title(); ?></h4>
                              <p>By <a href="<?php the_permalink(); ?>" title="Immigrationxperts" rel="author">Immigration Experts</a></p>
                        </div>
                       </a>
                    </div>
                  <?php endwhile ?> 
			      <?php endif ?>
				  <?php wp_reset_postdata(); ?>    
                </div>
             </div>
            </div>
        </section>
        
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9 post-list">
                       
                       <?php while(have_posts()) : the_post(); ?> 
                    
                        <div class="post-item">
                            <div class="post-image pull-left">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><strong>
                                    <?php $posttitle= get_the_title(); echo mb_strimwidth($posttitle, 0,60,'...'); ?></strong>
                                </a>
                            </h2>
                            <div class="post-content">
                              <p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 150); ?></p>
                            </div>
                            <div class="post-meta">
                            <!-- Author  -->
                            <span class="author">
                            <i class="fa fa-user"></i> Immigration Experts</span> 
                            <!-- Meta Date -->
                             
                            <span class="time">
                            <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span> 
                            <!-- Category -->
                             
                            <span class="category pull-right hide-mobile">
                            <i class="fa fa-heart"></i>
                                <?php
                                 foreach((get_the_category()) as $category) { 
                                    echo $category->cat_name . ' '; 
                                 } 
                                ?>
                            
                            </span>
                           </div>
                        </div>
                        
                        <?php endwhile; ?> 
                        <?php wp_reset_postdata(); ?>  
                            <!-- post -->
                          <div class="clearfix"></div>  
                      <div class="col-md-12">
					    <div class="pull-right">
						   <?php custom_pagination(); ?>
						</div>
                       </div>
                    </div>
                    
                    
                    <div class="sidebar col-sm-12 col-md-3">
                        <div class="widget">
                                <?php dynamic_sidebar( 'page-sidebar' ); ?>  
                                <div class="clearfix"></div>
                        </div>
                        <div class="widget-title">
                            <h3 class="title">Recent Posts</h3>
                        </div>
                            <ul class="latest-posts">
							  <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
                              <?php while ($the_query -> have_posts()) : $the_query -> the_post();?>
								<li>
                                <div class="post-thumb">
                                   <?php the_post_thumbnail(array('class'=>'img-rounded', 84,84)); ?>
                                </div>
                                <div class="post-details">
                                    <div>
                                        <a href="<?php the_permalink(); ?>"><?php $title = get_the_title(); echo mb_strimwidth($title, 0, 30); ?></a>
                                    </div>								
                                    <div class="meta">
                                        <span class="time"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></span>
                                    </div>
                                </div>
								</li>
								<?php
								   endwhile;
								   wp_reset_query();
                                ?>
							</ul>                           
                       
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>