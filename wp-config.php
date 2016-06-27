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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'festdssk_wordpress_7');

/** MySQL database username */
define('DB_USER', 'festd_wordpres_a');

/** MySQL database password */
define('DB_PASSWORD', 'z!i81NBAp5');

/** MySQL hostname */
define('DB_HOST', 'srv-db-plesk09.ps.kz:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Wyg&yGeZ602k8KY6e634mKZV!bfdvM21ApX6OJ)w6KN7f5@9J3hnINQ%Iv^KEJlz');
define('SECURE_AUTH_KEY',  'hQDbN12jPmH8%#C(kjrmYEP5IJ5O18DUT3y0XTM0suX9*o3NbjTIIdcd#lUx(7kd');
define('LOGGED_IN_KEY',    'fJDP)xQQ9w&yy6rx)FjYc%L4lTvRJnimkfyuS(lwVJ%uzK4!AjQJb6ffdriF@zcm');
define('NONCE_KEY',        'XrNc)Z%K!HEcnfoRTEnaS11G3xY@HA2#oLOPAVWk4Tgpe*YxH@*I86Cpdvu#&C^^');
define('AUTH_SALT',        'bzQPf1ZP^VGHdJ@dlleMv8vs)Wv9Z14AIu^S3Z0j6ru*I6tNKo#kTd(*bWFcQ7WQ');
define('SECURE_AUTH_SALT', 'dchcrDhk*84ehTyzCwW8ukZB%!kFQ7TW8#yo%#qNdgOXBBkaxYQ0m5@14Rv5Iwdz');
define('LOGGED_IN_SALT',   'ZacY&SGpghNOJ8sOduJ*XpAPi7FLbEmP92ek&9Bu78AMF#R@rl0YP32ap@(%Jd^A');
define('NONCE_SALT',       'ZIw@N%B*%DIb0^se2DSbCp@fmpN8cHzOmysqBiQQllSQ^e0xmoHad*#Fb!i4Kt&q');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>