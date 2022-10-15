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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'subaru' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Y2u_0{s5K#se9o{1zj?rcNz_Z1zAu7kr:jUVr_cuny>abK`dRG(YL?u 4%qm-KQ?' );
define( 'SECURE_AUTH_KEY',  'IbS4^FE%8wk`j6L`6_{cYO=sE%%Rj84+A/3@S%5wF;EfYUiNn~!M?r|-Nl4YX/ir' );
define( 'LOGGED_IN_KEY',    '0^ AU {1&JrO8Pi+3O Pbc$m^/eAfMP),SP}z<.<<)H(jA-DxA8^zi.KyUFWhvPY' );
define( 'NONCE_KEY',        'j!^dyY|.MReT9(qw{?X[(,)>#@kRPV3;@c7w;|e_O-b4vJn4pP&;phCBpaM7V 6>' );
define( 'AUTH_SALT',        'J6c }}9Zal{d xkb:6z__}oKZT;$-y1kXgPilC[bU%k)u8:~vtDs{SpbWv=2$?HZ' );
define( 'SECURE_AUTH_SALT', '( Nr0G0A97j^0DXnH3uZ;4Ml}QFNf}p{5g>?57l@rjA,P6II,z0r<]7v/q5v>):&' );
define( 'LOGGED_IN_SALT',   '=kd9Bi[1~2&X3G5)S*0#1V7G^l{Vz|+qH09m@n+UJ1d%?wMJ0!_wEZ!>hv2Q[<@G' );
define( 'NONCE_SALT',       'I]}4&<KFTCME{_Hp`M8 ^J^1!Sqz+T72;)R1rsw<Q|]Yyy+q:#ff!?^6IT!x:E%u' );

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
