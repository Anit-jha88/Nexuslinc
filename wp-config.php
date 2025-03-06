<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nexuslinc_nexuslinc' );

/** Database username */
define( 'DB_USER', 'nexuslinc_nexuslinc' );

/** Database password */
define( 'DB_PASSWORD', 'jROd^+(J+xul' );

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
define( 'AUTH_KEY',         '#Z$NG_1MkaPK&DFC)57PY}s:eGr_ZrkA])0%( BgLu>UG9UfM$cRQ,m+TuPMSv:v' );
define( 'SECURE_AUTH_KEY',  '7m*uJ#!Xz-yi@oTGw($qS3&NDd#eaB(slWh<#%npK+Eg<CDH.UCsr4~jBsg</]Uj' );
define( 'LOGGED_IN_KEY',    'eweM3[1A.m~1WfZ$vv){UoCsVj0a(3|~x^C%o$!KXPW)}ZmC:{OSB55L;)T?*K-O' );
define( 'NONCE_KEY',        'e5TtVyV:T{WZ_J>Z02j8]q7?b_ Sgw>xwqF*#$z9ggs_gpf 0en,/;^uy#d#2!8R' );
define( 'AUTH_SALT',        'JdFO57)K47BKV{+0[3<#|*v28vsq~?3~#T!qF.{$<CR KI@`A1nEQVj>TJ}ix)X!' );
define( 'SECURE_AUTH_SALT', '!Dd4cUDXHae*^SIUmN+%GJ~:?b5D]#[c?NCblp{Q5[$W =NW{J!*!5Uz$&^y#Yx.' );
define( 'LOGGED_IN_SALT',   '-6`ND5i6%:0b(7.(z%T+30uSX@9::/EX [!rQ72m$vF4!>N4B(UO@afY;X9BY,Wd' );
define( 'NONCE_SALT',       '- E*GWca@uHc#4vsJ`dXL^&vV!C^NrvgZ&K}`1Iv1UVROf3Upn{hm6Y?2VN!JZ 0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'nx_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
