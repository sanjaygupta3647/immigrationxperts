<?php get_header();?>
  <section id="bread-cum">
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                                <li><a href="https://www.immigrationxperts.com">Home</a></li>
                                <li class="active"><a href="https://www.immigrationxperts.com/updates/">News</a></li>
                            </ol>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
<div class="container">
<div class="row">
<div class="col-md-12 col-md-12">
<div class="Search-country-options">

<p>Find immigration news countrywise</p>

<select onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);">
<option value="">- Search by Country -</option>
  <option value="<?php echo get_site_url(); ?>/category/news/australia-new/">Australia</option>
  <option value="<?php echo get_site_url(); ?>/category/news/canada-news/">Canada</option>
  <option value="<?php echo get_site_url(); ?>/category/news/denmark-news/">Denmark</option>
  <option value="<?php echo get_site_url(); ?>/category/news/france-news/">France</option>
  <option value="<?php echo get_site_url(); ?>/category/news/india-news/">India</option>
  <option value="<?php echo get_site_url(); ?>/category/news/new-zealand-news/">New Zealand</option>
  <option value="<?php echo get_site_url(); ?>/category/news/uk-news/">UK</option>
  <option value="<?php echo get_site_url(); ?>/category/news/usa-news/">USA</option>
</select>
</div>
</div>
</div>
</div>

<div class="news-inner">
<div class="container">
<div class="row">

<!-- Blog Entries Column -->
<div class="col-md-8 col-sm-12 ">
<?php while(have_posts()):the_post();
$img_id = get_post_thumbnail_id();?>
<div class="news-box">
<!-- First Blog Post -->
<div class="blog-heading">
<a href="<?php the_permalink();?>"><?php the_title();?></a></div>
<div class="news-heading">
<span><div class="glyphicon glyphicon-time"></div> Posted on <?php echo get_the_date(); ?> at <?php the_time(); ?> </span> <span itemprop="name" data-uk-tooltip=""><i class="fa-blog fa-user"></i><?php the_author(); ?></span> </div> <hr>

<?php if($img_id){?>
<div class="news-img">
<div class="hovereffect news-img1">
<?php the_post_thumbnail('medium'); ?>
<div class="overlay">
<div class="box-search"></div>
</div>
</div> 
</div> 
<?php } ?> 

<div class="news-text"> <?php echo get_the_excerpt();?></div>
<div class="blog-button-read"><a class="blog-button" href="<?php echo get_permalink( $post->ID ); ?>" itemprop="url">
    <span class="icon-chevron-right"></span>Read more ... </a></div>
<div class="news-like">
<?php //echo do_shortcode('[Social9_Share]');?>
</div>
</div>
<?php endwhile;?>
<div class="col-sm-12"><?php custom_pagination(); ?></div>
</div>

    
     <div class="col-md-4 col-sm-4 col-xs-12">
 
 <form role="search" method="get" id="searchform" class="searchform" action="">
  <div>
  <input type="text" class="textarea" value="" name="s" id="s" placeholder="Search">
  </div>
  </form>
  
  
  <div class="blog-category-box bg_color">

     <h2 class="side_heading">Connect With Experts</h2> 
   <div class="Categories-heading"></div>
     <p style="color:#fff;">Get calls from immigration experts for a better understanding of Visa needs.</p>
      <?php dynamic_sidebar('Content Sidebar'); ?>
   </div>
 
  
 <div class="blog-category-box">

 <div class="Categories-heading">Categories</div>
 <div class="sidebar">


 <ul>
  
 <li><a href="<?php echo get_bloginfo('url');?>/category/news/australia-new">Australia</a></li>
  <li><a href="<?php echo get_bloginfo('url');?>/category/news/canada-news">Canada</a></li>
   <li><a href="<?php echo get_bloginfo('url');?>/category/news/new-zealand-news">New Zeland</a></li>
    <li><a href="<?php echo get_bloginfo('url');?>/category/news/denmark-news">Denmark</a></li>
 </ul>
 
         <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group Item #1
                    </button>
                  </h5>
                </div>
            
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>


 </div>

 </div>
 
 </div>
    

</div>     
</div>
</div>
<?php get_footer();?>