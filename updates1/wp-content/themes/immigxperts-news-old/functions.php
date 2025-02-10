<?php 

add_theme_support( 'post-thumbnails' );

register_nav_menus( array('primary' => 'Primary Menu'));



function Immigration_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'ImmigrationExperts' ),
		'id'            => 'sidebar-1',
		
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'ImmigrationExperts' ),
		'id'            => 'page-sidebar',
		
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'ImmigrationExperts' ),
		'id'            => 'footer-one',
		
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'ImmigrationExperts' ),
		'id'            => 'footer-two',
		
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'ImmigrationExperts' ),
		'id'            => 'footer-three',
		
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'ImmigrationExperts' ),
		'id'            => 'footer-four',
		
	) );

}
add_action( 'widgets_init', 'Immigration_widgets_init' );




function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}



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


function your_submenu_class($menu) {

$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  

return $menu;  

}

add_filter('wp_nav_menu','your_submenu_class'); 




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
add_action('rest_api_init', 'register_rest_images' );


 function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}



