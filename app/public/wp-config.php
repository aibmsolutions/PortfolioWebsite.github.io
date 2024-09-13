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
define( 'AUTH_KEY',          '7%IH:8rm&(L(wp/jJcuyAY([n4BV9fOp- :(0~z+t`j0vTjrlltf+:`~T?{//IXF' );
define( 'SECURE_AUTH_KEY',   ')kR$3lo/ri%X}_kFNTs^IFKocuoXraL6~)YpsY*0x^|m?:- pK[YAtM2ZOzZ:$8h' );
define( 'LOGGED_IN_KEY',     'Q+m[!N32n~LH5$gS_?-o?YVHV>pHc`V)bb7o~/wclVf_vv:EEy*G2$1F_E?Vf!gS' );
define( 'NONCE_KEY',         'jLa/T}R_J^W!x9|WQM7k>8F ~hzePaIio4x9c-X%_+u*%G-pN92^=WAM5:E^fZkP' );
define( 'AUTH_SALT',         't5QO<~cdSqE{bJ89ZBhcP6]6{!zaqKRmw#:O$lc*3@tCg(2tIgFLUnb~d;Wzt+~b' );
define( 'SECURE_AUTH_SALT',  ']XC#%V}X<rUpZph(4gIaW0*M1Hpq7/>$T15+?5K=%NT(dRzs1Xc2VU;u}qR~?C/A' );
define( 'LOGGED_IN_SALT',    '}e7N},L/9uOFXp5b3vUinfr1DS9cyI2D#rN4Sr.#;B;YFfC)3Xg.9GhDV+NgN-%}' );
define( 'NONCE_SALT',        'C_]E1D#?k;9 }Teqwy#>tJ+L12W`2|mjlot,aC8T1&YY QpN,37U3!^ l3`qY$Nf' );
define( 'WP_CACHE_KEY_SALT', '}I<OJ8w3c>|>,z7w):{r<l_z!-RyEW)V~)Z~AI.Rp&XDRg9HJn31#n9/&ol3EFH#' );


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
