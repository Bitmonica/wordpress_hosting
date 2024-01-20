<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'xuwoikmy_avistatech' );

/** Database username */
define( 'DB_USER', 'xuwoikmy_avistatech' );

/** Database password */
define( 'DB_PASSWORD', 'x}K(~5T?Wz$M' );

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
define( 'AUTH_KEY',         'Nm0P*<{z&MC.LOG`)CV|kXoH=//w;4WLC`iZW^*oq]~/&KDdDYX;.3s/K|75,BJ:' );
define( 'SECURE_AUTH_KEY',  '&v=#NnuSu6y?Grg71pbRPL~=x8Z%B<nu)S)<e8 OKD;TrOaBCu;~L{K:l.[eD?lb' );
define( 'LOGGED_IN_KEY',    'f(86U$<uvI%te6vo{jF2r|<b`B@j[%9JCZB3QhT?J6u4hszcSXB88,oPlAcGl*#M' );
define( 'NONCE_KEY',        '(-JJsV<eSl>3dXx|H`SuIFV9&IWqgx~eub+)M`J{|;7~G/(C|{WNP%1>xC3N4H.A' );
define( 'AUTH_SALT',        '.`D:fo}f.MO1bD>c0~!=7rDS]}ewGXOo9vY%L1#d|R=^fAp&cw`gAb1DKlN|$zQx' );
define( 'SECURE_AUTH_SALT', 'JikgT89&iA<dCL)5ywu.K)uy B&m+G2y6Pv#oHfI6{A+ok5]#H/.q:Y< vBt<!Yk' );
define( 'LOGGED_IN_SALT',   'Cz7#[swl/4Oo?:kK#&gJ@_+YNYwnj<FVI)B6]_d=)mw.9b7$1a]Z^Ff]s$FHwJ]V' );
define( 'NONCE_SALT',       'la{Ro)~xPpNN8tA`)?vM#OD<1?)#CGc4U;H^D681HnBm4Zj4?9l_a8381SMnl|9@' );

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
