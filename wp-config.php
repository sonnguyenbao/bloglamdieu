<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bloglamdieu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '{;:6XJb2x``F$;Tk5>*e~h~@?@0/nVep^kL5~B]w<r/n%vEBI/F:C.;bgQH32F+v');
define('SECURE_AUTH_KEY',  'a5JpIC)Ln/%wDFsbH@-s$]$x G/KTa!Gp` G]kqWa&%ZSe1 id]lC;|U(hD5I3tU');
define('LOGGED_IN_KEY',    '|Sj#1v5+/Q[{R5h582a+bwO_xDwT,n1fU][U+o_fT>wlv7;FrX)6Pe~p& w4#g!X');
define('NONCE_KEY',        'm2/N9:MQDYUWfKN2ORl^R%F0uNk^n%pNNAca``oQ6t`j~*dZ!>z8uM#S@Fit|{Qk');
define('AUTH_SALT',        '2(5Z0DA*k8iR76B>[Gl=r&(5P9XDEzVj%lK6geJR>vQz+O(24RF+9p<K0J&@Jt4k');
define('SECURE_AUTH_SALT', 'YF>lkkz8=FcPt+FK0h%OYq#ev!vkfRNrePb4e~BQ_%K+z#{!8ROHQfa;pm!1l&Vr');
define('LOGGED_IN_SALT',   '=5]-?oh3cT`=nrz(;iGbB0M3/dg9-oro@Y1^UL)*{(:Bj%3HovQil!6B^!e`fgqV');
define('NONCE_SALT',       '`M^Jzr~nFjj~LTE0MUy`}Ef]OgWRc^t:*Ets+JO04Slq3?aqY=k=D:_jvU%Ircpu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
