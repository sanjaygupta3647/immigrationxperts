<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
 define('WP_HOME','https://www.immigrationxperts.com/updates/');
define('WP_SITEURL','https://www.immigrationxperts.com/updates/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'immigrat_immiNews');

/** MySQL database username */
define('DB_USER', 'immigrat_immiNews');

/** MySQL database password */
define('DB_PASSWORD', 'jRh}!KN#6]nI$5we@1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-}}G]%]Rd-7aS>F%16R9+(5nj_|g[~%&NuVu%dy)&TD73PR- ^mW=D6}3Z$kE7G]');
define('SECURE_AUTH_KEY',  'z?nIfJk31CpqiL6c%-%[:6 qyo,@Q/Ym!f*;L{++0Qr$kXYO_Q2n0bH~^M0k!ij*');
define('LOGGED_IN_KEY',    'N0a9=<,8.n# ]q.>WW/s^?V~1bFG}__J`:#xh{XmpgA^oC,](P8$ZQaV1:XD[:~{');
define('NONCE_KEY',        '.2u^ycB3:dQ8_D9^~C:Gn8=epMq> HeM+iFZ-`%~Q>)F^FU.ji)uGG9wFZ82*i3Y');
define('AUTH_SALT',        'knR@jjM>LjuO%R/5<=6Y}iMrY|zgr*x.8fV&,OP$c`>e{`<M>;k%#v4*)V$jUpP ');
define('SECURE_AUTH_SALT', 'a!SBKj($so`yRjsxsJb}kM#Y~OOXY vlCNo6GESgo|T#Q d)l=QDcJUW:p-..Pf(');
define('LOGGED_IN_SALT',   'to?395S}XiG5/m!f]UdO@YIctTOC4#3{S?TKf2}0s+29r>y2qW-)G?!A $3Fgd`W');
define('NONCE_SALT',       '_5_ex@S XI}ZC=6V+W5qwVI>u08[Za!._:i$yLKI,@;sY)vj@={z|2?XFA<b~)0Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
ini_set('memory_limit', '128M'); // Increase memory limit to 128 MB

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
