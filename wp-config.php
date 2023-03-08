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
define( 'DB_NAME', 'coffee' );

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
define( 'AUTH_KEY',         '`ivO[fA{-Ls1^* y-6r0iNTN,F;(_#4w)+lq9j]G $lAh+~f)YkkR`hc&6A<J.p@' );
define( 'SECURE_AUTH_KEY',  'X).?}JpT-}wPnl7ocM~unn:esuL|)>&$>vlSj/,]yV[AEk;dDKrm8f|o,tn*l;{2' );
define( 'LOGGED_IN_KEY',    '0g0k]57Ypp;d4/pZaIAoT]lDhDjH,+ZhN}X6w^T5Xy@K8C(J+}TP!#_B&wG~}p|0' );
define( 'NONCE_KEY',        'ao>V><}t>[<pkr>G;}zh$O){%KPiJm2>S G^?ByH> uZBgBrMxvXBx`eHI]6>2|1' );
define( 'AUTH_SALT',        'Xa.kn@%p0@UC}n&p*$?ZoJBrM!pqZov>Zvvefif0p6);h&.G[%!{8]in;w]wY3zJ' );
define( 'SECURE_AUTH_SALT', '#b?6!*Sq7MVYOF=^;*))GZ6kCevbk{>:S,k}sj.,va`%&}0PF=`R_KE0^u@%j6v(' );
define( 'LOGGED_IN_SALT',   'F9>YU6V8*<1;Lh-aUc,K?<uCYu;s0l3-dF{=M9NRHfN:]G~U1,`>EW!_-~-pd2H`' );
define( 'NONCE_SALT',       '.J:KsRv){7aekZzi|Z)f:8]pzMt0*f^8GPo[];`dJ%,4|ZhVnLo/:jA8/z-cEb%r' );

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
