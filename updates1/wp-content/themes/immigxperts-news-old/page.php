<?php
get_header(); ?>       
                
        <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9 post-list">
                       <?php $argspost=array('post_type'=>'post', 'category_name'=>'news','posts_per_page' => 8, 'order' => 'desc',);
                        $looppost= new WP_Query($argspost);
                        $i=1;
                        ?>
                       <?php if($looppost->have_posts()):?>
                       <?php while($looppost->have_posts()) : $looppost->the_post(); ?> 
                    
                        <div class="post-item">
                            <div class="post-image pull-left">
                                <?php the_post_thumbnail(array(320,282)); ?>
                            </div>
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong></a>
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
			        <?php endif ?>
				    <?php wp_reset_postdata(); ?>  
                        <!-- post -->
                        
                        <div class="col-md-12">
                            <nav class="navbar-right">
                            <ul class="pagination">
                                <li class="disabled">
                                    <span>
                                        <span aria-hidden="true"><i class="fa fa-angle-left"></i>Previous</span>
                                    </span>
                                </li>
                                <li class="active">
                                    <span>1 
                                    <span class="sr-only">(current)</span></span>
                                </li>
                                <li class="">
                                    <span>2 
                                    <span class="sr-only">(current)</span></span>
                                </li>
                                <li class="">
                                    <span>3 
                                    <span class="sr-only">(current)</span></span>
                                </li>
                                <li class="">
                                    <span>4 
                                    <span class="sr-only">(current)</span></span>
                                </li>
                                <li>
                                    <span>
                                        <span aria-hidden="true">Next<i class="fa fa-angle-right"></i></span>
                                    </span>
                                </li>
                            </ul>
                        </nav>
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
                                <li>
                                    <div class="post-thumb">
                                        <img class="img-rounded" src="<?php echo get_bloginfo('template_url');?>/img/sections/blog/1.jpg" alt="" title="" width="84" height="84" />
                                    </div>
                                    <div class="post-details">
                                        <div class="title">
                                            <a href="#">
                                            <!-- Text -->
                                            The standard chunk of Lorem Ipsum used since .</a>
                                        </div>
                                        <div class="meta">
                                            <!-- Meta Date -->
                                            <span class="time">
                                            <i class="fa fa-calendar"></i> 03.11.2014</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img class="img-rounded" src="<?php echo get_bloginfo('template_url');?>/img/sections/blog/2.jpg" alt="" title="" width="84" height="84" />
                                    </div>
                                    <div class="post-details">
                                        <div class="title">
                                            <a href="#">
                                            <!-- Text -->
                                            The standard chunk of Lorem Ipsum used since.</a>
                                        </div>
                                        <div class="meta">
                                            <!-- Meta Date -->
                                            <span class="time">
                                            <i class="fa fa-calendar"></i> 03.11.2014</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <img class="img-rounded" src="<?php echo get_bloginfo('template_url');?>/img/sections/blog/3.jpg" alt="" title="" width="84" height="84" />
                                    </div>
                                    <div class="post-details">
                                        <div class="title">
                                            <a href="#">
                                            <!-- Text -->
                                            The standard chunk of Lorem Ipsum used since.</a>
                                        </div>
                                        <div class="meta">
                                            <!-- Meta Date -->
                                            <span class="time">
                                            <i class="fa fa-calendar"></i> 03.11.2014</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                    
                        
                        
                        <!--div class="widget">
                            <div class="widget-title">
                                <h3 class="title">Category</h3>
                            </div>
                            <div id="MainMenu2">
                                <div class="list-group panel">
                                    <a href="#demo2" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu1">Category List</a>
                                    <div class="collapse in" id="demo3">
                                    <a href="#SubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu2">Standard Post 
                                    <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse list-group-submenu" id="SubMenu2">
                                    <a href="#" class="list-group-item" data-parent="#SubMenu2">Standard Layout 1</a> 
                                    <a href="#" class="list-group-item" data-parent="#SubMenu2">Standard Layout 2</a> 
                                    <a href="#" class="list-group-item" data-parent="#SubMenu2">Standard Layout 3</a> 
                                    <a href="#" class="list-group-item" data-parent="#SubMenu2">Standard Layout 4</a> 
                                    <a href="#" class="list-group-item" data-parent="#SubMenu2">Standard Layout 5</a> 
                                    <a href="#SubSubMenu2" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu2">Standard 3 
                                    <i class="fa fa-caret-down"></i></a>
                                    <div class="collapse list-group-submenu list-group-submenu-2" id="SubSubMenu2">
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu2">Standard</a> 
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu2">Standard</a></div></div>
                                    <a href="javascript:;" class="list-group-item">Gallery Post</a> 
                                    <a href="javascript:;" class="list-group-item">Video Post</a> 
                                    <a href="javascript:;" class="list-group-item">Image Post</a> 
                                    <a href="javascript:;" class="list-group-item">Audio Post</a> 
                                    <a href="javascript:;" class="list-group-item">Quote Post</a> 
                                    <a href="javascript:;" class="list-group-item">Link Post</a></div>
                                </div>
                            </div>
                            <!-- category-list>
                        </div-->
                        
                        
                        <div class="widget">
                            <div class="widget-title">
                                <h3 class="title">Tags</h3>
                            </div>
                            <ul class="tags">
                                <li>
                                    <a href="#">Corporate</a>
                                </li>
                                <li>
                                    <a href="#">business</a>
                                </li>
                                <li>
                                    <a href="#">agency</a>
                                </li>
                                <li>
                                    <a href="#">medical</a>
                                </li>
                                <li>
                                    <a href="#">studio</a>
                                </li>
                                <li>
                                    <a href="#">university</a>
                                </li>
                                <li>
                                    <a href="#">motors</a>
                                </li>
                                <li>
                                    <a href="#">charity</a>
                                </li>
                                <li>
                                    <a href="#">realestate</a>
                                </li>
                                <li>
                                    <a href="#">app</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">fitness</a>
                                </li>
                                <li>
                                    <a href="#">band</a>
                                </li>
                                <li>
                                    <a href="#">wedding</a>
                                </li>
                                <li>
                                    <a href="#">sports</a>
                                </li>
                                <li>
                                    <a href="#">fashion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer(); ?>