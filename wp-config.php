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
define('DB_NAME', 'westpainting');

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
define('AUTH_KEY',         'IUm`&[%OA]QklBulG%8?1xCW|sGaW2UY>yzkUck?PHensiV9w}LX FdqD>Vd| 1*');
define('SECURE_AUTH_KEY',  '0h^qA{HzHKn9P(^zQ%CCo}(pY^MEi+Gz!/~qWN7DZ=P)II~P@:+yuZ)8Op- #6bh');
define('LOGGED_IN_KEY',    '8GO1F[m4rSwQ;`2IJex0`.xPI:)JQt5dAN78oKfMXM6m43$w(6=R)r:P(?^HWz6R');
define('NONCE_KEY',        'xmwDoo932$J9md5F|#<kQX.JfCLp(pfO!Zk0w2+IiT$TlVGS$#.b9sy*pT?JOmFz');
define('AUTH_SALT',        'Mv4PaqyMSG&ZYzA[~0?gJxN]^17@Zp59cB4{J f`b!0ZGO4~YS/JbbQ;(J5:lq &');
define('SECURE_AUTH_SALT', ']<-$@Ty(*g./H>igq}I9gX.<iLsBh*u%M/#`UU.(RjAtm4;?-M1D02,iK5U_L&ds');
define('LOGGED_IN_SALT',   '_Hf e{2LG@6;u1HgZz:k]_K&7a,k0ry!0gXLu&p-cHV4=t$I]W5A!r;*T6k/4:{p');
define('NONCE_SALT',       '#VB+3k-BE8`3v2dL+!^+6Dt~~a7~rQL!3{FOcYy;%x$+UW+|sycz%-F<N24oop_@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpd_';

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
