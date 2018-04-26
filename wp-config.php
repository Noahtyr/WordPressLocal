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
define('DB_NAME', 'wdpress');

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
define('AUTH_KEY',         'z$%X6~Q!o%().ru|+lsK6GnTsk)3s;2caAiB!Qf,Pdi!zyr[T>7`JIi,@_o)=6C=');
define('SECURE_AUTH_KEY',  'j|ZX{c#k-&#CX8B$O-tnm!kpXG,@kOQWkIN%-~~D@(}(uVs8I~4|@ m}X=lvi}i ');
define('LOGGED_IN_KEY',    'hR1Rh(dY-y`Rg~>rb1.b7Ot]S)9t>.p>+?BvW1L,X}mHQDXrd>1a+;>U{p`v!J~D');
define('NONCE_KEY',        ']iB&^|DDYSU=0QD]=FNd>ER~!VBl0mi^ U[szV;}Ac7<~l{+1U>PemX)PG{_Fc>e');
define('AUTH_SALT',        '|Y$$~jO;&! WWHGO)n7c]9)eIO}p]u-1r[Z.^ph(1qi:=bg|u43GU<T9N^8_O1Y9');
define('SECURE_AUTH_SALT', '+1XSiKiAg}]?3&&tqD*M$2%~.Fdz[.; %WtfDBY!UJ-ELr~W6~d{39xIaEog))@v');
define('LOGGED_IN_SALT',   '$M[]G^yICA#84EbSqzy=f$%TFi7fx39,HPbQ]2BC@-VVC`1w;gB>I_!R:%d|B6q[');
define('NONCE_SALT',       'N90EJcf[gx]T!S?FBjqWj&zq@xReK2W+]c0jDK]2iAYaw`PBSmp+cdQ~R8qDc[JT');

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
