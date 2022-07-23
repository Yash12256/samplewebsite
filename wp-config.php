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
define( 'DB_NAME', 'bca' );

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
define( 'AUTH_KEY',         '+X-xO7fMe0;>kz?<l]}Hxh]R3d<0l8`9WPxQ<HEnzO!}Q3xSz[ yxj/Tm|6OjYb3' );
define( 'SECURE_AUTH_KEY',  'q:rl$q~DW,a #(/w,<u`6aesLp<>9}oA> R)=Tdo?@Y8qfKIjf|z04rolK8R8=Ep' );
define( 'LOGGED_IN_KEY',    '$] zneg#5G4h5m*LZ Z.@{_DG5zhDTZ;z8VMo3TB]c5iqAz>FV4kzBUkz9:#<<V+' );
define( 'NONCE_KEY',        '%zx2-9VTesf#0Jy,kZJ6ubdRmx>10{?w-RIJVbx).6sn!<ar9Sp1V9/?U1TXD?a(' );
define( 'AUTH_SALT',        '2QXJiB!do9~-*&Dw~s5rY~x~o4nY~a 6VcoxUPX*=FK6,@r}xyvdUziG~pa@Jara' );
define( 'SECURE_AUTH_SALT', 'YAi6_Zw5I&#?/+_yKx5rk*XRf<?ej=a3@,am{OZ.U+g|NAFKcKRDiec)`wQvr6fK' );
define( 'LOGGED_IN_SALT',   '!Wjo.j-atL_?NMHqB+U=iPK4_l4xx4,>~i|6k=nL{Hb,l|(q,l%N_I3F*GBY!X{I' );
define( 'NONCE_SALT',       '84daHdvRL*nHme$f6(;Jtqdu_`S`Sz/4Z4B!Ta=~)ss}LTW2-U;e8i`0*<M@%O9l' );

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
