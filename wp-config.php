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
define( 'DB_NAME', 'WhatMobileNow_db' );

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
define( 'AUTH_KEY',         '#zb%{wl}L;B#6Ro#.6(3,iAHzGK1vk+/>;$-rtw~etMD]Jvy.;UlfkyBx7uOg)?C' );
define( 'SECURE_AUTH_KEY',  'iFb8pU53)jV)@:GP6cV$zz#573wQHQ>]zbwgIG:`Q7X?zC(6P b$g)R({g5aA<[.' );
define( 'LOGGED_IN_KEY',    'OhkA2x@gv^.^;];&K6i;*:qdRJ8?6u&GRy_G$O]mdYPc_Pda^bf!qN[=A<l?-cYR' );
define( 'NONCE_KEY',        'e>5[a=&}{RNX,aW^zM&<~ :7al2z^(UKl3MU1`$y;1MPH ?%gAA&Bxaj}nD).*MC' );
define( 'AUTH_SALT',        '4{I 7Z41<,WwEzWY~!Rvd!oh8jWmG)9#tmK,0rzQ,jnV@<w$du0+4Cr{5:KC-e*x' );
define( 'SECURE_AUTH_SALT', 'U_.`pRrFX[,IfZk<B!?L0&s~b<d>1yTb^(;H+.NN_}DpGXy$/5{hi?2k3^s:gpk.' );
define( 'LOGGED_IN_SALT',   '%A0h}gr_}T*0F!XZ#^RG|gWSRTEyk]a;PECfT+X!#LK:p$eYPj,5Uv/LiBMG,rCg' );
define( 'NONCE_SALT',       'O$$>,/1z$fd1tA6p2DK4F0mPg34?uUl-keO^M=M[eDbUhpuN[?.![Qw*gc)F1l5N' );

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
