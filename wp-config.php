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
define( 'DB_NAME', 'kaydenoshaughnessyphotography' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'oshaughnessykayden2007' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'g~(~sH+a~:c,$liI!cOT?uf=)cD$#[bA,*hE_|6HFHV5MxXxjx.~%<^UbONB%a6$' );
define( 'SECURE_AUTH_KEY',  '+w,4UMBMwa6q@N?^.~u*;;:N!ri4aZb7Tf(#9 3te@nvQ! 47XCPkL!62UOtR W8' );
define( 'LOGGED_IN_KEY',    '[MH:|2R-eW:vkQjt;7xV*:TFaD]O  vU+o=2<GN7mB5Lho{wjj@r{GNOO,!bJh,.' );
define( 'NONCE_KEY',        'xDo9K<<nQ%2y60t?wGA2or~Os;c|J 5ped~euk.s3Xp,BBxJW.~>()UXLwJ}@lOm' );
define( 'AUTH_SALT',        'jeYK6qwv6Y&r88c5^5m@j!VgZ }{jUR!>i*l^[<][-+`8KvF7>Bqc?wZge2To/&5' );
define( 'SECURE_AUTH_SALT', '^Qh|j<{70P8j7*,!Z4@x Mrp<K{TH}-:ZKu1-d=ee5P(u:2cHn3uzVeCw>,j>w/Q' );
define( 'LOGGED_IN_SALT',   '(xe*fypYIVCSZp{vUO>,MTL4x[le^: 7;:=TbW}ac4l6y6cq}g_v2[I&G0p(fY+L' );
define( 'NONCE_SALT',       'LB&Das1t1kjeOz^v=:*G t=6loxeihLdpPN5@O9R!CZ{BAa^VT#HTbSPW`b-/6>i' );

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
