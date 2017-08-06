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
define('DB_NAME', 'finalproject');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'o2B9[?_bv--0xcAo|hG[WI<LmS{m2 X/fh)#=KHwBKt~`e.0BlDuajQ_r`rJEq:s');
define('SECURE_AUTH_KEY',  'o8?h9CdtY?QP2jnoY0@9a`+B5|q1<ffN#L.|$L}yCWP/eCB&SnYN0&aK5J=!#%aA');
define('LOGGED_IN_KEY',    'k+DVT+Qyw+kg@r}y,Sk]{sG;BRU+NO5;4&r:k:[6K+W!Xm]r0A]]QZLG%ctG6yoI');
define('NONCE_KEY',        'Zgg }k{},VgHVj>x:-PKTOLSn.(Hn*P*~UOYvMG$qng^tHM&_jq`1<;hE1#OhIj7');
define('AUTH_SALT',        'z8c`5geHPMYATXrLR2T<zRx2r=+RL/9p5U/koS^S}Qga!m(SdjE0Rl+L6ascd/Ke');
define('SECURE_AUTH_SALT', '3?J>x/lWjatI6bQFHo^9s,P>wf/9C;Z)`EILLyw&u4[,sGiLY?SUUsas$r|eIo#`');
define('LOGGED_IN_SALT',   ':+47a<~m`^b<[)eMiWm*vhQs.7ab%2-<udb;mV^J<D2^z6n{Bk+LiLiB|;% &qO7');
define('NONCE_SALT',       'KJNPa>(8(Kf[#,hx2^Y?MgHK&rDERf8uZhaVurf;TC5kCQ/dx,?_=X;XL2:[l`z5');

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
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
