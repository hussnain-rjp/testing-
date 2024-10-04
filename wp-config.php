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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'FX&]a>1d&o3L&mgeRu7#2t-zyE$V8AP5dM]&(x:L6bg&EN,r>+/2&5Z[9AK#Zf7k' );
define( 'SECURE_AUTH_KEY',  'qfEy_K]H/,5v;p<DZ}t*-(:1OV)1/s{V?8*zU-7*$qM NPfS!1/SpNn|@~o[O3vd' );
define( 'LOGGED_IN_KEY',    '/&Seou{ASQ(gs(E~.sF[sXC41!#(<<Z]ya,sum?gh&689^LW59mM*xJk7>Mb/t)5' );
define( 'NONCE_KEY',        'kAZ,jNvZh*aEU/gi9p|m#JTIo{+1n+*o:SE1}Qd?Fv(<od})gyp5xsEYGep;VV#R' );
define( 'AUTH_SALT',        'qxqg=x,tK5Ea/l`-9n?g1-wtEFr~Dt?3){Wcbh%q<@ {9kh@2>}r~WI,c+_za84X' );
define( 'SECURE_AUTH_SALT', '`t`4~9tCIV2t9OT=.$iE:GGIdk)}C7e>/Jhd_(znz2Te%6X7`*Hc^;FOP(gA=44X' );
define( 'LOGGED_IN_SALT',   '0r@XkvFD}Nh?4ucf0?ZOuuRrXGs{($*]*,TCQZ]gq#Do}DZ.NV@8aV})?u7@`Eq)' );
define( 'NONCE_SALT',       '%]afE2V96y%_ D0&!q@32Rf<xJmvKbwR`km8NZy2O]:[OTyR(4AR$K=U-d5.<pbh' );

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
