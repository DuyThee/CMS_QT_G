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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_v631' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'N(,~/WPbhpA_0tZ(gkJ~u;qU5?u6L,RwC&33TO<,)0)tJWD9m, A5V>9X;*-0cdp' );
define( 'SECURE_AUTH_KEY',  't|M<fu!UexTybV@&;bd02S5Qd!7$X`@j^#/Ys qTAZ+>Q|[,Vt2|PPZea~bX=Dee' );
define( 'LOGGED_IN_KEY',    '6a]bYyKnm+mzPeYcd/bG NHNGmmO=!bc%{sitMRW|Gqza-pW^D-Ces#I%{IhX2A2' );
define( 'NONCE_KEY',        'ckl,^Nf>c825yxFR^fA~!s:t@Zd=Dl/>kWTIv8rT@/aAfl^=d~^aNT(*TN^[gUDo' );
define( 'AUTH_SALT',        'kvU=$m)XP+fr a25!Yl!6tl;UG_`eV(ftLU O@!.3E)Q$nufdYpo^}T/}HHmbi>(' );
define( 'SECURE_AUTH_SALT', ' *[@6#uW,N821Vi2;!KN^b==zR2cnBwdOxjf9<V}TPpx#b??Zyz}G7gaL,0z6N=.' );
define( 'LOGGED_IN_SALT',   'w[5_n28_/glkiL1i5dz-u^4n;Ic@WtEOK@3pCxwj03jS0(w[X,%=mkkgO{}pI7[,' );
define( 'NONCE_SALT',       'PXTES`MZWwYt2`!rS$&%Gl0>:kgoRp WcsvQArSP5q?lr&&0o}?7U21:m]|*Z%Hf' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
