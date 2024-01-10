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
define( 'DB_NAME', 'testsite' );

/** Database username root*/
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
define( 'AUTH_KEY',         'hyldkk~Df+5kneB2I7e<B>W@|&0^SG`&yY,6|(#/EqL$;8/YXT?/):(+|d8Q%rTn' );
define( 'SECURE_AUTH_KEY',  '{MSV#3gJ,rQ5|m`.``1%9=*YSdIwQ)N([W`:*W ) ^N&06QMRFYd]!oG:,=W ol1' );
define( 'LOGGED_IN_KEY',    '>Q@e=dTDl tm~,RbV+:y?3|]_;N]YyHk=l&UFU&{ u+tT1U^l9A _kvM8SCd9mC*' );
define( 'NONCE_KEY',        '4h`@Tc.. 064nE8sEb1[J#Z/GXX=iFoU3S$:;>-1B+K;*38`hj,PuLb`x/aABm?J' );
define( 'AUTH_SALT',        'O3Cg<wbnlR..?U2^W&|k.ARp::a|te|aVH?(s7cKb6&BIi*&t4YXMT4q?4dbX-}A' );
define( 'SECURE_AUTH_SALT', 'Ju--N-hX7PGS,hAtEeGX*%D*3K(~Z <p|{+z[Q$Q/nvskKy4T[J})4F2CFNY7,fu' );
define( 'LOGGED_IN_SALT',   '@CS`6EgBQSA;Gzx) *^^BSwx!Eni)V@7e[C#aGVTkW$g@CJ^ ,ibS]:%(xhQq<&6' );
define( 'NONCE_SALT',       '}$,v-oa|. :kA$,f4nEn[*d$TX0Hf.QCd&)7a?Sn5x?~sG-ny=^w+)s.f}Lqia+M' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
