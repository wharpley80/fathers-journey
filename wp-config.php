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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fathers_journey');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JK;?{L6qS4N 2zVA4Bw~uRJ&E|myLDr1z~U$ v-}`~]xVmZ5}LAv0:f<>BytHO|=');
define('SECURE_AUTH_KEY',  'BtGnP#?>#iO`Mw1w!JR?Dc<jjIc.RIz)_6v4.&H[=!nNIP}E$S>27cj_@Hv(o6%v');
define('LOGGED_IN_KEY',    '}D+|7W]);7+v9VL`ve4Hl(9c1`~)b_|av^+&|qM|5T)l8SGYW;j ]kBda<*g6r|i');
define('NONCE_KEY',        '-VSPS`i*1yd7+MGCY1sFNper$p;*:Y36O|zZ.hHV51pix+T0LS6cajYfcPeFm{qw');
define('AUTH_SALT',        'm_/tLN#jO/arL4O)p:Xn,-MT@9SjEff&P]e?A%^(TqBPqOtfO3Q2{$79EHHz`1g*');
define('SECURE_AUTH_SALT', 'I>K;GjI*/m_0Qth?BOi-AMh?0[I(2Eh8k6C:E<ZG?9m|G6y2W%q&M:=ldAQVfyIa');
define('LOGGED_IN_SALT',   '>jKu*>ke2IGsW0Q#oQy$0D5qh:oP=pF:oC:s7MX=;21dsn!+{ead^WnWBJRz*E:w');
define('NONCE_SALT',       'y3Zsm4,Zz1TJzv)|MGY}]mKTYs$ 6KE&?=^JzAyXv9-HC^Sn$p,}n0^f<PFN;_J?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
