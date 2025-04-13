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
define( 'DB_NAME', 'site1_db' );

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
define( 'AUTH_KEY',         'A;^){xfaw]1eXl%6t&9|l) pfFO{`L.LLa}MfRO 9KAoKj%zF!FV8%DLQtiF>q,f' );
define( 'SECURE_AUTH_KEY',  'pKKH<Gu]PD&&S@QMk[[Qa#es-<*pI[]HY)5s?zNZx[J;[ f=>0(:C=^P#}AcQ#As' );
define( 'LOGGED_IN_KEY',    'pcMg&r.W+G}Ta|*R:a6,:+o}?Hk$8]Yf~{4IMNq!dn)#.OBxs]<SHQ9h{A0.MF=@' );
define( 'NONCE_KEY',        'f)p[W)5j7Zg^IDEQ<mF&s`MIkniw)v~u|BhJe[33iEkiyM&{=s!NWjP7x;0YxN[>' );
define( 'AUTH_SALT',        'yA27y:C+rQ1V^rnB~tWlcM!501:S&z/[21UlAPejPS#1XXWC[_);lWQWEZo6g][P' );
define( 'SECURE_AUTH_SALT', 'x/QeR/2{3qz!R/lB@s`HBz4&C.>T+fSutboy<8%Nxc^$|P*.2rT3]Pf|H)mkIC`|' );
define( 'LOGGED_IN_SALT',   '@.(O/b.`AjuPyv~9G]%XjL*U9VJ+^3o6Kx- LSL[vAc5kM26A(tTU-/$d^v.d)KM' );
define( 'NONCE_SALT',       'yzUPh(o=!o{V5Z`gC6.+8B[w-@7*v4oz72HBF0MM[>_|X,Fh 0s:x1XoBv+4$!RX' );

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
