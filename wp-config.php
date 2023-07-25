<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'american_institute' );

/** MySQL database username */
define( 'DB_USER', 'codefliesdev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dev@2090#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+^+7iF+ZihB*m*Gla *Lpq.UrLfM).T4Jy$a?T EMmFY JAk>OqpkCbs5SRH9.|U' );
define( 'SECURE_AUTH_KEY',  'o5,q9F=h{Xkb-pon{sfh,nv= U`WZudB3)Y${D1#*{#ljQ]JT NJO3aICeFD)_{9' );
define( 'LOGGED_IN_KEY',    'J*O.@_~i)SU_5achhBnQ(Hi0;S zV)LwYOx3ZzkecJ1>,Qk5VKRZ8V.TDqurd0$|' );
define( 'NONCE_KEY',        'TvLY&ZB:6Zr[?Ce5{HN0H%o/F5ngTPWCp_8N)Kr9*u`v|p-XL=EA/xsjL[.WF<#,' );
define( 'AUTH_SALT',        'v=M-YNs@LES{a<l.}h-PQQ%*i,oe{ML~F_v5<I)F5w@BOV![W@,qtY2;oC)!hYD9' );
define( 'SECURE_AUTH_SALT', '[e)HOb{!AgM8Sk!:A?6@UgyJ>|4dEZ9n-N/)W`+&V3V^?&@:H bBHkiSFHh_qSY)' );
define( 'LOGGED_IN_SALT',   '?_0emKKpI;wR<TR*D;W3Po0J!gN6^K~%00N;Ut@}(4;/{BK}?o]8iFGvXkFrguR~' );
define( 'NONCE_SALT',       '73d8>xzoSo5kNx|A2Al<$w{gHhF?<[X6lq@ZiMl$6^6+k$ae/h56j2bsBm9bhCzi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
