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
define( 'DB_NAME', 'ShopBag' );

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
define( 'AUTH_KEY',         '{?;f!tVnZ.M{[2FFr&^/}~6~^Bx]BOx9Y:hKCup=r+7~!:*@9nzv,?,Gm4xe5`8v' );
define( 'SECURE_AUTH_KEY',  'Dzt1{}k9YHRN~VZ$P?JK} &uCKH|3>$5N/!;5s=it dnh2`=H4;Z/Bc+l1B{Cj%!' );
define( 'LOGGED_IN_KEY',    'E-fX>x,b&YNhJ@G$6 z(:zewu A SbwvUNIppwwUWy|l-o/`uh4jm.Hr RQ[t_p(' );
define( 'NONCE_KEY',        'o|r8rqe@p}~%tSJ|+4zL.rYXJ|2OcZ61!m[WLzUC#tey:w?G$SV:}F6`Y&)>[1Cz' );
define( 'AUTH_SALT',        'P/*t5FQQVdiNQC+&bYS%6wG=|mnaX=DjuGa B/4sO0A#_m;[DX$_m94|g3`insEF' );
define( 'SECURE_AUTH_SALT', 'T1[@Rt6~8$6DDCkGaATyyx|~,uWA8 |0X8=qy|FGJP{WsYXUAV2f^7&{n}8%sbro' );
define( 'LOGGED_IN_SALT',   'uGiM|eJ`7$<&3!=)62%)b4IcI^SoNh0<@B<6OAJwm(!mPvgODHHYK3Q!CCAq;xLA' );
define( 'NONCE_SALT',       '_N#2O]H@<wk!#sk$2vUqg:d,H,KM[X##z8:`?0,CQk_m1ss#;.M;OW=L8]X/Z&:`' );

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
