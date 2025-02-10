<?php
    register_nav_menus( array(
		'primary'  			 => __( 'Top primary menu', 'twentyfourteen' ),
		'mobile_main_menu'   => __( 'Mobile main menu', 'twentyfourteen' ),
		'mobile_branch_menu' => __( 'Mobile branch menu', 'twentyfourteen' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'twentyfourteen' ),
		'top'   => __( 'Top menu', 'twentyfourteen' ),
		'mobile_menu'   => __( 'Mobile menu', 'twentyfourteen' ),
		'footer_menu'   => __( 'Footer menu', 'twentyfourteen' ),
	) );

	
function twentyfourteen_widgets_init() {


	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'twentyfourteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twentyfourteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

		register_sidebar( array(
		'name'          => __( 'header social link', 'twentyfourteen' ),
		'id'            => 'header_social',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'canada express entry assesment', 'twentyfourteen' ),
		'id'            => 'canada_express',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

		register_sidebar( array(
		'name'          => __( 'Positive skills assesments', 'twentyfourteen' ),
		'id'            => 'positive_skills',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

		register_sidebar( array(
		'name'          => __( 'Australia Free Visa Assessment', 'twentyfourteen' ),
		'id'            => 'australia_free_visa',
		'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
   register_sidebar(array(
	    'name'=> 'country menu',
	    'id'=>'country_menu',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

   register_sidebar(array(
	    'name'=> 'Contact us',
	    'id'=>'contact_us',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

   register_sidebar(array(
	    'name'=> 'Footer Image',
	    'id'=>'footer_image',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

 register_sidebar(array(
	    'name'=> 'Footer left Image',
	    'id'=>'footer_left_image',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

   register_sidebar(array(
	    'name'=> 'Copy Right',
	    'id'=>'copy_right',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

   register_sidebar(array(
	    'name'=> 'Footer Right Image',
	    'id'=>'footer_right_image',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

register_sidebar(array(
	    'name'=> 'Social Link',
	    'id'=>'social_link',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

register_sidebar(array(
	    'name'=> 'Top Second Menu',
	    'id'=>'top_second_menu',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

register_sidebar(array(
	    'name'=> 'Footer Content',
	    'id'=>'footer_content',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));
		
register_sidebar(array(
	    'name'=> 'Primary Menu',
	    'id'=>'primary_menu',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));
register_sidebar(array(
	    'name'=> 'Mobile Main Menu',
	    'id'=>'mobile_main_menu',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));
register_sidebar(array(
	    'name'=> 'Mobile Branch Menu',
	    'id'=>'mobile_branch_menu',
	   	'description'   => 'content for First Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));

register_sidebar(array(
	    'name'=> 'Newsletter',
	    'id'=>'newsletter',
	   	'description'   => 'content for Newsletter Widget',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>',));      	
  
}



add_action( 'widgets_init', 'twentyfourteen_widgets_init' );


add_theme_support( 'post-thumbnails' );

/**********************************************************************************************************/

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = get_the_author();

        }

    return $title;

});

function custom_pagination() {
	global $wp_query;
	$big = 999999999;
	$pages = paginate_links(array(
	'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
	'format' => '?page=%#%',
	'current' => max(1, get_query_var('paged')),
	'total' => $wp_query->max_num_pages,
	'prev_next' => false,
	'type' => 'array',
	'prev_next' => TRUE,
	'prev_text' => '&larr; Previous',
	'next_text' => 'Next &rarr;',
	));
	if (is_array($pages)) {
	$current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	echo '<ul class="pagination">';
	foreach ($pages as $i => $page) {
	if ($current_page == 1 && $i == 0) {
	echo "<li class='active'>$page</li>";
	} else {
	if ($current_page != 1 && $current_page == $i) {
	echo "<li class='active'>$page</li>";
	} else {
	echo "<li>$page</li>";
	}
	}
	}
	echo '</ul>';
	}
}


add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}
