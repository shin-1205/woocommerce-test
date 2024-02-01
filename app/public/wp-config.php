<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '|oqCd3c$R9-wZJSh&?)nQecGhlsrdfqXiuDnx0 Sy,{+UVDY:(KLu>bnY=u_D2A*' );
define( 'SECURE_AUTH_KEY',   'T$4nP*P?S+vZ6Y;nZ%vvZBG;d+a?K(wPLpKK6lJFVJTs=oqj&-897}b63SxDeY-y' );
define( 'LOGGED_IN_KEY',     '[:AD,U}maIS9!g#MQ~82YfA!P[-[wUOE[M>*gc4!gZzsE0=+4e7E*,ai9B;~[s.w' );
define( 'NONCE_KEY',         ',TK[H}1;KU@cU8cI(wQ(L#QWPrP0$3RlBHSPG(]Xjv9|  wui_j!#*E4Y J/5J~R' );
define( 'AUTH_SALT',         'FUzZL=sTUO,{[9^zLfFg0@EhcqqMV`aM Nba]K/50b>cIY^ah|(0Pxu$&{:E])&r' );
define( 'SECURE_AUTH_SALT',  'R}*]:x?yd+|W+e+Er#_lo=amE#?FWU9;%%zE[UP;BDEJ}[5e{P<HIY{?{z{R;N`0' );
define( 'LOGGED_IN_SALT',    'qMy Msss!c.t2q94H[+^7DG0C$g !J%)Pu4ckZHTmdZjRu:[-|2HEMFu[OUx1n0L' );
define( 'NONCE_SALT',        '9rt`uG29cVJ,9ep?AmicOo>Dk7&k5YcT=YfHS@$ey.`gbJrM,)Z-X(IsaoC5~jT9' );
define( 'WP_CACHE_KEY_SALT', 'o#WeHG(W f84{9i<%;oQOsj(hCRO&f&ALn+>r*{O~^dVpLQ/Ag:nblQ*xJAid 0$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
