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
define( 'DB_NAME', 'agence' );

/** Database username */
define( 'DB_USER', 'agenceuser' );

/** Database password */
define( 'DB_PASSWORD', 'Fr276at327qv*' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Support de SSH2 pour le transfert SFTP */
define('FS_METHOD', 'ssh2');
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
define( 'AUTH_KEY',         'STad-z[9a+0%= 5cI:lE8;z61yj2*-aLJ3pemx$I!=oZ!V4T4NPRwJ[2g3(KAefS' );
define( 'SECURE_AUTH_KEY',  'n|c,(Uy]zl).[-J.h<QKdJTY0Gf9Ojf_M6r.3b}xb:6k9W<]?wTl4AEs?~dXTiH.' );
define( 'LOGGED_IN_KEY',    '{zX-SC`z$$Dk7:8w|vAb% Q/,:eB4j`p) R(Kl0O{&~y]C[},aB4@_wEEQ%Y&pa#' );
define( 'NONCE_KEY',        'nvg|*]cRJ>5Qjn3*JSS.S4+0Hrntt276&3MN0^,(6p+l>/QU9B,hCbx+M};cY9xT' );
define( 'AUTH_SALT',        '=ibS{}sU)YaMBwv`p0|]y|Y0<O7:x?{[=,l,<uX^%;w,I;TfWa]Pz?Q=c7Bcz]S`' );
define( 'SECURE_AUTH_SALT', 's@n&tMA5Pr)x90c>FbWG?;3jX|]s lw[In:*yO,28d=SjD0K LXu:GS!lR!zYY2-' );
define( 'LOGGED_IN_SALT',   '{:Ul!,HQw1H|cz;Y5OxfxULoM#!F@eU01qzz_Pe]r59GI?9F>xaEq_pNUN<?TOS[' );
define( 'NONCE_SALT',       'z]/|/{RjR^E5jmbPG_otlTIx<!}e@.gIEJnk3[vot-3>3Uyr{aCeobjk<~Nu/T.?' );

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


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
