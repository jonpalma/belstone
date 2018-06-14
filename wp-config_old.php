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
define('DB_NAME', 'db172894_belstone');

/** MySQL database username */
define('DB_USER', 'db172894_mixen');

/** MySQL database password */
define('DB_PASSWORD', 'Now.9537@@');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s172894.gridserver.com');

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
define('AUTH_KEY',         ',yZW1/:@FM>+LNii g@fP6&7 0`,sVv(jQn4-Iq9U/3|~Dk=%utH]ccBC#J~LJOy');
define('SECURE_AUTH_KEY',  'Df1PgsTemnWYdCDt*oL(gT z`nnKKol0CUIfr~hMuI<;kyl`Gi{`7,8{IMj+cM)_');
define('LOGGED_IN_KEY',    'sH5GZ{s+uGC(qnN|J,4z}8yc!`/)h1QXTZ]o-4dC18kR!IT2Au?dqp_%Adq7S_a_');
define('NONCE_KEY',        '6K:=rd^r;SZiTGk!].$R-iLS>yk?hffb<@XJ=PcY%B&pCluR`=M{ia=IuhNP4EJ:');
define('AUTH_SALT',        'iAlIN_GI+c-PS;}sXGUu$6o^ve/|:[FU.Dhmg:m3hex~mT&1VQO2^t+S$P`weQBW');
define('SECURE_AUTH_SALT', 'cbQIP(qr5`#26E&rbD|/Csrkq#^/2B1HLXD~x:MM6?gA)1m.jQSG2=]oFT2;O(+L');
define('LOGGED_IN_SALT',   'd_HF^_m-;tHQ;(&]IT)O:PP@Dvq#/hni(U)Q!q*d&WotIisIJncDTCg,qs`s#B(T');
define('NONCE_SALT',       '6ddA>~06POz9Ximwfqc#96i!^JG<gxQV{M~`.`*TR1a,M!SM*m$<Ivx1TU:2%BVO');

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
