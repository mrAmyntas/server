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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bas' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YfGmjAq,W80)IU)E5uai5xcL|c==d*Q)7TSxwWkYlhH_DD%RW!zUdD)GtT[):gY#' );
define( 'SECURE_AUTH_KEY',  'HVJqs<t]yt-l(u$?z[>SA#~fImO3PU[+74$`%3d! (7?B*3|2PhZlk).}7jk$_R7' );
define( 'LOGGED_IN_KEY',    '=m_%#x[-WFjtL*G1ZR@#tes)&%9w&(@8.J0k-;ia}r}c1Y._Ms?|%2&cGQ<IR3ZX' );
define( 'NONCE_KEY',        'g]9^u>Wn[7E22 =Ff1vb%ZaWL@6v_K1wGtL+<3gsYa=Dx%(vzLfe)G75fDn]JC(,' );
define( 'AUTH_SALT',        'c0Qzxd&d^+6la=/sqe7r:,?5`COxAB?&X#GrQy1nKyI9y|eT#YV&>;}<-5z,wdj,' );
define( 'SECURE_AUTH_SALT', '#*<*Xsm:i*a!:Cwt<]Rp jen_.SB-e|htWA1rt@P ej.Km!3u%dXGHaY.PghX&o$' );
define( 'LOGGED_IN_SALT',   'gIH>Z*;oq??0_i+Daa|_f#?WqM$uk@y>yoSE1rB6VhFJ)pGXm& db9fNc`ZSDE}L' );
define( 'NONCE_SALT',       'MQ,~(PnXtz<7Lo@ejN]R,=,Re2[LNoCr58GloD=.OJCs-i7deGe;z*!.zmuWM.jm' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
