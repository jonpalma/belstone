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
define('DB_NAME', 'wp_belstone');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '5Xt~UmOt48[o<V}|e^0%XJK)BNyq8E[iQgg0,vR+yv@R|:S[|tSRDp1zLqv&SQU<');
define('SECURE_AUTH_KEY',  '*qE_!p}9XQJ~7H<MJlnr1+R@&~v_@}Q[obvc`U:c%p+4H{?%YR e~)#P(S?e&/LD');
define('LOGGED_IN_KEY',    'Yq@cE2f=Rd8`;y5*y<s~%J ZdjGPlwbOAv0^fg  Wq6OZYlSKO4@`~32Ow*WDIM;');
define('NONCE_KEY',        't)-,U%P/URW`2ewp_U:*eiJ55PJC,IcTaKg:m<w#l-i=Zl%fI=5*)Dko<3;A2hnm');
define('AUTH_SALT',        '@KkE!ZHc_KwtL{4R9A2AQ]f@1(XsTJREVyExE+*|T~+9W0LhxFX}9esTPf]^Z>Hm');
define('SECURE_AUTH_SALT', '>^^M}=#OOMdUm^L2pSxR9l28 5<{{1,KGN~R}i20nrIoQ)qA4O`cs*Nn@mW2t,;d');
define('LOGGED_IN_SALT',   '<=UcE4(]tw^YWMo60=n=y0g9&>FNt7>@cs{-c|MoK{FGCd7 xijR`46sXR,zWRSx');
define('NONCE_SALT',       '?x^}r][-`H17*fVb=9,,QfGtbZw))z,D72bGr&1jH:tq[q%0Ua mzc!Ku=G!x|7h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
