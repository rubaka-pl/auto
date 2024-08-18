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
define('DB_NAME', 'auto_bd');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'QO_BArf7#5|P}9rl7GskvaEtz8z%t>1OWtt,5/Uw`%/_I:C_k`p=GpY8{6B.5o@~');
define('SECURE_AUTH_KEY',  'XJDMPw&ri_OKJP/U?N(4C3nDIK)U7E gkWAltG;QV2W0} U!BD#E/_az%TPKL6/t');
define('LOGGED_IN_KEY',    'icJ{TT;(K<zW@@Uk0){i1&Q-7CTF$&[0$<CISs)noR|oJ]-x.lA7~/h$x+Ed]1&<');
define('NONCE_KEY',        'dWdtu1]OT4FMG.Yj9&a1p2Fk#1zKO),tEPJle|w(a^&.MR)@IG#F7=|}r$$33k)[');
define('AUTH_SALT',        '.UzH8?C.v$_);B}2P<@@:+*<j1ER$1_`OD// tj)S(!lf$50b{Lto?LI>TK9_7$6');
define('SECURE_AUTH_SALT', '{wG8^I2_;>ZDeh,kIgM|(y|X;{&*]}JY/.@}UOM7lE!gkZCl8=E- F>*N!a7j|/|');
define('LOGGED_IN_SALT',   'H+Pq0@u}4e`l;h|@7Z*U20O_C#_]??C9lSIx!3m_haJKs,+;(Cc[}AR>kUvLD-r=');
define('NONCE_SALT',       'yH}*/ BEW!=;*@7_7IOWWY$n!P%74!P`r-]{lX;F[@Puv0393Y*OjC(9,>uTe$aC');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
