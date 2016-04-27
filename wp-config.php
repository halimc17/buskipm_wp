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
define('DB_NAME', 'buskipm_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '#,r-z}_T6Y`OZG.W[Uf]dl%o|L<OHLL|Rnd,#Q.VE_gcj?T6Xmumw(MwR!.5oI$=');
define('SECURE_AUTH_KEY',  ',M}IPp?k+a3bgbH^6)v  YW%p`,Mk3GL[;-s/2foJy=9-_OxbcAjPHsAwo1xh7h<');
define('LOGGED_IN_KEY',    'h+~?fp]N#=_()2Cc}%fgCM3h[!e[yz2+|I=dx]1D>OnN|b^6paaGCreWXo8YNz#X');
define('NONCE_KEY',        'VJ!;qKEe-G=T]wipQUT>d$flg2I!D1X~d-]|3Xy(iLn!EIXHY($FYL!Cc#zT2^CL');
define('AUTH_SALT',        'g?Dr_^o9lF1M<.%avHtc<0mR-ORo&^8T&8-cVC$(Q4K;f8.v^=@U3tP3LdP1)(~u');
define('SECURE_AUTH_SALT', 'YOp7{^pq1~h7y!Y82hPNCHeITmh#Gc@|JL3q?@7(;@#|?@R{{5!}84jk/#;HK]eq');
define('LOGGED_IN_SALT',   '`i[B>lolXN]W%jrL{a}Km?i{1^p^ls Q-{cdwxn-WY)tyI@~i{hVGVS/92Hj#fK$');
define('NONCE_SALT',       'b{e}J]|J|d6twxjfKK_r5qOoC;!$D;neAs0mxzlS7g|nXi^B8SNs< -gGRnf^k|~');

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
