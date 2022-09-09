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
define( 'DB_NAME', 'anshuman' );

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
define( 'AUTH_KEY',         'K&Jo]DnmENs|1ve<D<Jtp*61ziR WWIo5jl+bo<*ylzFh ,2zHYNVBs&A0s{dffV' );
define( 'SECURE_AUTH_KEY',  '%`iF*(Cro)V}]jA KO)I=/gh[^kD_Jbt@wiyF]UtKfa$RS[vr7I<4H]9AE|;ucSo' );
define( 'LOGGED_IN_KEY',    'a]7_~0KqKh|99nN?XE#S5pJQ?=SW+TsXl~wNp^@s4MZqg&:Y1!N=NfO6[iPxC1!6' );
define( 'NONCE_KEY',        '_V)b(2rL<)i?-uj%M&}w/;-A3$}@8>-J] UjrN-{#:m19{z ytM!ZAX8-u<BMnb|' );
define( 'AUTH_SALT',        '==8(!F3,:`y/<#b6v/~Ji3K@=t^w:P,Qz1!W690}}TFj]iMl;#zA2~)8-em-70&e' );
define( 'SECURE_AUTH_SALT', 'Y~]g5ZP`cAppH%/{BA/|pU>z%6`3yL^5-Otgk_XgGWMJsnqV443P>{Z@=VtVQQu9' );
define( 'LOGGED_IN_SALT',   'K1Du~(rZ*9p6 kXLLVnkD*FZa@A$v9[gwTi^5E:wm^Dd=t5NSaNEX{mR3&n$;Uy/' );
define( 'NONCE_SALT',       '$GM8a.%p;~=j&q2qG3.xNKV.,.7K/.OPRH:E^-aIvr|FaH]N=]l%kUHrR}z^$)8k' );

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
