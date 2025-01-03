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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'xf]uKmL9e]03}n<,P!(~HRa+NG>T8@6&XnBoUSQW2(//C WR(;|y70HGtg2<!UyY' );
define( 'SECURE_AUTH_KEY',   '.|D_r2o;KkiNj.pWA*CJ&(Mh)Y(^/[z^_vd`=)yEo[QPpWCa@P@&3oKi@uEKT(Zc' );
define( 'LOGGED_IN_KEY',     '(Grx9d{7e#%*PKI4X7~-?JcbSz}+84JAGft2V8[98xD_MGdkW bZ#]=PL/qq&.BC' );
define( 'NONCE_KEY',         'DG]&f4Vn*F-13:c4_.{/4Z[M;Z+3;/g%pa!aCR#ekwZAS4y4?U@,0%B>$BKP}**%' );
define( 'AUTH_SALT',         '{+ZcE].3)y:|F&Z9feqzI*C/3=b(+VMpLkd5%#M=9;2G5yMIRg<jSd!fWw=g)/IM' );
define( 'SECURE_AUTH_SALT',  '&eVT w.7`(SnUafhsZ?+QENIB5ZUvf^2SS!`]pG;Co4B_BG^]Zy>j);XD|-IH>1^' );
define( 'LOGGED_IN_SALT',    '0hUbnBd4PTRt[fhad^,/p83(=dyI_K!X<Xj67p9zH44Y.u3D#g9FP$<Mxb&0b+Qp' );
define( 'NONCE_SALT',        '=wQt9=,w6jw,we` .U`ae}Z$lbSi7*g6DNlM&A3(2Q|n^^c{W!5F-;mx^0bC#%io' );
define( 'WP_CACHE_KEY_SALT', 'YTJ QD#n3Lp(I=1L~oO4}-4 @]<CcW/u8Vt;a9W+q_7Vb<=mcO8Pud=<}iJ@EM3)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
