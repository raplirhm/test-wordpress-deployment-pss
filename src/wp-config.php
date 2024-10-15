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

 define( 'WP_REDIS_HOST', 'redis-server' );
 define( 'WP_REDIS_PORT', 6379 );
 define( 'WP_REDIS_PREFIX', 'dolanan' );
 define( 'WP_REDIS_DATABASE', 0 ); // 0-15
 define( 'WP_REDIS_TIMEOUT', 1 );
 define( 'WP_REDIS_READ_TIMEOUT', 1 );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '3wiLpDatN!^gx103/SW&P-?/<x/tR*=|tr-fOqx5[zfSx?13@=_o!J-tM#iQ-0s0' );
define( 'SECURE_AUTH_KEY',  'rr_C`ZL?Bc@3Ullwk!,~?/AEU<vJ{(# A$}/p<$}4{Q*tf&3Bol<0PE88i%ZxUp#' );
define( 'LOGGED_IN_KEY',    'r|bS(IZgR6UTs9-9_up.Te8y7#-x1T._*<]L,zse;Bh-9r92lS{f4YHLky|/3sKE' );
define( 'NONCE_KEY',        'Na^teIp):#} F]g/Ih)0~B1@y2RbucE[T6nNFR!si+,)R4AEpiD?&:Zr.;-cBgIQ' );
define( 'AUTH_SALT',        '3b=k@8BP#(-9$@!lH#kL8KfOf^g=E~4.K74$4ol%4:z+*I!Bx4Er)7m>+cN&a0,@' );
define( 'SECURE_AUTH_SALT', 'nc~( I!G2KGuVW<vF`?9a#rZLJz3;Kw#0Y{!6%it4AtFJa3apU16mmBy)92zQjGy' );
define( 'LOGGED_IN_SALT',   'EU#hYgC3EN_w P)0J/~~[~?jk @}q _#hp1f6JDLPYX c:WX*g-(ln4p:>{~e/@.' );
define( 'NONCE_SALT',       '3Y,qokD{(z,^N])P hr^[#+Ck6Rm)m0.J3d9n!fbj]#{=2dfW%I&h_s;u FJx2.A' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
