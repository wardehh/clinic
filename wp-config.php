<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'clinic2' );

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
define( 'AUTH_KEY',         'ze1t!a0dMX.qZ>Tg-hLXLg8TbQ(I&,v]H&F@YA+dM9l6yY[Xs&@|_%R-G<<M@6f>' );
define( 'SECURE_AUTH_KEY',  'K?^L5cgz roZJuNYDc$7DjK!(B]6pf}`& {#407er/~$tQk}q,d6iMCG[8$:{kx{' );
define( 'LOGGED_IN_KEY',    'E~dh3Etsm0WzwjEjZ.or>nGrPF5}E^#S`A3XdWYDx`aIg;9FqgCO>QaeOtud,Oh1' );
define( 'NONCE_KEY',        '5VKKyEL,,RQ7T}>U^V:W|EnR <*C+oB4i*WT]KbGYfXav%OVq2ETq{gTtwpn8g>v' );
define( 'AUTH_SALT',        '&[DCO-o*~J#Yna|`jBYs+bk&hJdcOAwBfBrrV|i(ZyC0X6Q=uYhD>0r^{r3^*VMZ' );
define( 'SECURE_AUTH_SALT', 'sXaghkS=s>aM/nOB#`hJIu5zQc0oP~I;tg1Tt6GT+v+sPy?mbZ1L?UPIkV[YD4mh' );
define( 'LOGGED_IN_SALT',   'c^Tr72)VD7E:41}#2XSds:kfpQ_G1R!{LU5[w3(vZ6tj[fWHOG4 }5 ks-x~.Gq{' );
define( 'NONCE_SALT',       '6t1p2w*4ymUsiM8]E:[oc!(j;sg qDF#4SH$J&JZh%zpU@ Hncd~#BVjp75#>IXQ' );

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
