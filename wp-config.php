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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost3307' );

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
define( 'AUTH_KEY',         'uL0H#;70?cY}m:&g;|W(`z[t#vv=b e50jb:2$h7T{-o}ylg)BXH[ts_:8wGOq>>' );
define( 'SECURE_AUTH_KEY',  '6gd^UXf^a{Fut=x)dl_DNGF2C*Gv|>n}U33`EsH*=V#&Aq)ARzw,,Nu(:%a&k(S)' );
define( 'LOGGED_IN_KEY',    'DVExVq{)8lnEjAmw,XFYnog:krd+ovK2/B[mXbMvYqT$|t,C==*NXk`g/vJqf=@2' );
define( 'NONCE_KEY',        '|zGb2+q@`8/~a!A#e&,BzvnfeGnhp(^*[vX!F+j#y_(-m%(%0.5*{iWI#~YzqXU ' );
define( 'AUTH_SALT',        'gPfUrf6WYP +k u0% -^G>9=$qTWO-^j2LXU`lbO)KIy<!T>qRU7xpVfFpiY{vi(' );
define( 'SECURE_AUTH_SALT', 'WwOel:DaK:E}reg1WtwTi$<O.-y``epJQu+yQS3-L]QXO6VTTsI)NM>(^.-?TIC&' );
define( 'LOGGED_IN_SALT',   'xMj?,K;F<z3E0,d*R5bp[[9RS1,8x{0PVo@DE$f|JwlZs5-$V(__wnC8D.YJFB*h' );
define( 'NONCE_SALT',       '^. $Yu YmiD^bm9d|l;J)f}6t*uR,1N&kmh<htA1&%1nbe*IpX3hBk1E<Ts%^CV^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
