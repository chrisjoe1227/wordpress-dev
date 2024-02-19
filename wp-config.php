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
define( 'DB_NAME', 'wordpress-dev' );

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
define( 'AUTH_KEY',         'M+b0|x[>Q h2th8[N!_kYTN1*Ift-K_4zaF697D0Kn2PcnEX6lzDbT#]@Y@b5bIS' );
define( 'SECURE_AUTH_KEY',  'fPN~I|TqNzwH-`(xN>8?Hzo:p5yH*GYo%LLlMQ3dDbD[EEW<dNp4lT0y1o]j%O0m' );
define( 'LOGGED_IN_KEY',    'Q~&cP23D(,BIE1N4OQGT$YDGdk/25%|dUDPBs@X`vzt*md2|&H:Upj^!>oeI[<ZU' );
define( 'NONCE_KEY',        '47,j.=i,NGQMk&-F6(jp;v0wt`JfpF~A~Im2Yxg5n~{{A:0Z.c&K{]-Q{xx/7CPK' );
define( 'AUTH_SALT',        '~up6 eH<U5gF*[U)A[*l_13nNAX0?(H*:i$De%_=vbeApkig.UzP)wm[)=j-8-XP' );
define( 'SECURE_AUTH_SALT', '-?l+~_g5d:Ux$o>U&~0*i4#}Nm}Iyj*O@P=^U,p>e)}fR!o(i]1QJZ{tLl]TH*AC' );
define( 'LOGGED_IN_SALT',   '2Dm> ?Nwhp76ZjVI)q= !]c0Y/<p?CP&0_:>_7aM3,#)FSR(>H:MS<2N=16I92JX' );
define( 'NONCE_SALT',       'd$L=dH$m6f.|UzSx/$U?+O)=s.HfqfNRUd_D4jyLi_A+/X2kr2+4c]{PUbx%0O)t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
