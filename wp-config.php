<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chuondiep');

/** MySQL database username */
define('DB_USER', 'chuondiep');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         'Z|>| p;sV|~/ccQ$sOIv+wn`d4GX}ir-Srn,?f228Q<[yFK(LOv&:%gj ETEE2+;');
define('SECURE_AUTH_KEY',  ']C%J%n/,Q+f*;y@RJ3qk}a3mGZYls(<C37+hmuoM[c3YV}}:C&cKffRyB[Q@ST+3');
define('LOGGED_IN_KEY',    'p|blRd)m$v|?;yOvEy%?U1i1Y|##K$QP_=aUr=7D%8K;*1Wl+Rz;9h/`4+Jt6nYN');
define('NONCE_KEY',        'Iv(K~+V[3]KQI:39s,XVcK8_Tw.z&BX)mT!Gv=CnbbQm9y*!&RBrl7;fUeFv!%HD');
define('AUTH_SALT',        'e=>T{1s{o)szdSSO/n7xOa,+a4KTl6&F~[IYY<2}?%%]/|##rx%2Y)R$K2g$2$v2');
define('SECURE_AUTH_SALT', '*FFR>dcH$)}(8Ak}{/jVrcMn7WS(|$4o/az<NQ[[`;0+At[m^VxX{NVgk#6~Nw) ');
define('LOGGED_IN_SALT',   'IzFUK^=h0<Z9mtb+Y$Cs27|ApT^zd#CXeiZF^z*&2qKZW7$T!q;wp$4a#/1Z/K0X');
define('NONCE_SALT',       'Oe Zhif|]&jOjQ(=$(bBAo}JJSwy/8$?-B$QNu| C-T][o.iY|*A Q4x+g?Q}MDj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
