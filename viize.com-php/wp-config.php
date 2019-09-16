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
define('DB_NAME', 'viize');

/** MySQL database username */
define('DB_USER', 'viize');

/** MySQL database password */
define('DB_PASSWORD', 'UeQNps1d');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/)AGzyi/OFvOn9S0`Hx=i@Os{O>8g)kD_$I@BKXighd:!dA3{X!5Wc~&kyWlp0sH');
define('SECURE_AUTH_KEY',  '5~1UR[1#zHrT+]H8b?dzQzIOml2+!mGI*2dAqp,V>9|_6yeu*=zZLXz/3)_ms$iZ');
define('LOGGED_IN_KEY',    'xLtObIdKDbi*5e>(=N2T[Mc8i4#Z.c_`cWwL<<gjM q8SJZE2},=fK=|/8(aHvIT');
define('NONCE_KEY',        ':jD:sVV2Y/L{KQ_>_~3T={1,aIUkG#Ipx`uW<hIlx<=Qu#kl{]y1arhZ`mvvxGN{');
define('AUTH_SALT',        '+unDxZ;Fiu)XA_GGJ^INz]YZ6e.I}!>gS?bPi{gh3LQk.#Bkc4&I@W^0Q{hVp!FZ');
define('SECURE_AUTH_SALT', '5h4l^8)pSRsgghq>Gm.~ }!MO!>Gj=}yb)7E8G+|&bKo[@i,?8[gD&^yC6t:is:A');
define('LOGGED_IN_SALT',   ',G WI_FA={.w@qp;#R{&_!;dDIr6&qe7(@VS]XJ]%q{_Tl:klU_k>EdZ]j s$[K}');
define('NONCE_SALT',       '[n#N8 haE<egL9>ZpPjr1~=s/COqqA9$e`AHdr!QK8Fz.wzCStmQ_x|lx!! Q2Db');

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
