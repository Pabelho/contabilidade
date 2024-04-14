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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'contabilidade_db' );

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
define( 'AUTH_KEY',         'G&6np=^1<6EzQ}gd&snIU^gTOZ5}Wg$|M|{[&S O8}3Mb=/]M-9$:HWxL];:+)@N' );
define( 'SECURE_AUTH_KEY',  '!.v>&WZgI(=n[/3a868BB1o.xf_Mu%.+Iw,;l1&=r8qj@.8&oH+|h6h7C]AFyK9M' );
define( 'LOGGED_IN_KEY',    'k!{Cyzgu*M&G5ia??J*!g}B3|0AKBc-u8Z[TRaABG{&IfK0P;eai()yl#r/Nfh]D' );
define( 'NONCE_KEY',        '%l<W1<5+ru4#cs=Zx:8|~vQvy`!GJ/{tucfZ_-$qa(m).USNMX3J,f-^`}O!yqQd' );
define( 'AUTH_SALT',        'Bo]r,/R5:nO]g)4!Nwo4au*Vs>c{gTb%LJZ.b@&g;]Gh_yCBgqB0:_n:<[93I9b:' );
define( 'SECURE_AUTH_SALT', '+i`qjrF?uBE5,N=:;*eEI&<3BFd`cIpKc a8W1v{A(vHvgG06uPl$Z]I*N1&MCYA' );
define( 'LOGGED_IN_SALT',   'i9MPC]ehL` K9rtaypky<+LW+q^i3U&[%{m[CR<g^(jCWI<}0eN(+:3A`~]LrTe6' );
define( 'NONCE_SALT',       'lZltbk.=<+HBXo&WAIP!a{@Df]3|*/sRIM*wGM45}i/p-7t:S3?;6!`L#nXysj4E' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
