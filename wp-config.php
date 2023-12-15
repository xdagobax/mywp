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
define( 'DB_NAME', 'mywp' );

/** Database username */
define( 'DB_USER', 'igualifyuser' );

/** Database password */
define( 'DB_PASSWORD', '@Igualify33' );

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
define( 'AUTH_KEY',         'C3xb`)U.^?;V6pn_+7d*apm^z_~A^ON16-C4RRt%:q9-tYBQFsmD`3RQvywa4*v}' );
define( 'SECURE_AUTH_KEY',  '&BhjHePrNeDgI9lk)A{~KB|Ym(d2rtf}x?duKw!%HlC_<)^&3B:?HIef;<H/,VFL' );
define( 'LOGGED_IN_KEY',    'vRX$G~Mpc1M(hl?mXkPY>mnktR_rBN_5fp_4W@}!;jpCQl9wE`fqBh[>C-?b_[k(' );
define( 'NONCE_KEY',        '/80G>8KcjdEU]>gaBxF4Dco6$W0Gu2d)+,x4AqdMtEim{}m#Wz;`leZKBp;[nhFd' );
define( 'AUTH_SALT',        '$QKy+f>Ndy+6)uRxTNtQZCq$C,:3}F9s<sb5L`dv`rzj4saMRV1tgfSj4YQ&gd{p' );
define( 'SECURE_AUTH_SALT', ';SpD9LdDt?8Bo$KY(P4Gxu6tTebtl|Bly_UDK^T,--]qx:/~d_x`c+BVnkAb?zkQ' );
define( 'LOGGED_IN_SALT',   'fI89FO:z ?t)?>1a}Bu]vc~[I8Xd~5DM8H;mJ$`3d)!:|OKe8(6a!Nf-RQ6D$0M!' );
define( 'NONCE_SALT',       'XeFAF:]fO2Tz9+}rM|`5cxR{Fn*Q/VQ9_DgaxV7lc_z&6flcL[H2.{%=.SIFLN]J' );

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
