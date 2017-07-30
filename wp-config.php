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
define('DB_NAME', 'mysql');

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
define('AUTH_KEY',         'TN&sR|;VT|l?FhNjfUU,Db,;ypjByh,t-NEK~h88sLu=`bz,+IE3V)Zfm#h=i!5n');
define('SECURE_AUTH_KEY',  ',DWS-e&2,E}*B+s|)wNdwu+SCNhj~uLPmnTfe:bwv3.?..H[y|~6Uj8N.o/(>tP2');
define('LOGGED_IN_KEY',    '|N{z]Ai2Lu-K4&I6hyl[CE;f]:kdv5:RQ#uhq,W{>u!4>Ls&vQUblJ_wT[zEPko-');
define('NONCE_KEY',        'o0}W:FWZrALV@TC{N;evsx4EXI^b?>QI}G=BTcRc8s?{0z/:%E(%;d95r&|27`~q');
define('AUTH_SALT',        '##KKMKv;k3{]7NeD#}}!=F9oFbun1=,VOM;bhPpR~$P%JvSVx-r~u61?-xq76*hx');
define('SECURE_AUTH_SALT', 'e(o_:H*Q*d@%jco!JPe-[M0cl_w}901;NpRWzFeSzxO:ZlqY^rCz-Hoz7!vRGW>6');
define('LOGGED_IN_SALT',   '?x*%J?iBN<^LH1n4u$8^x/d+c>/{h<q%trqE&Jayc8Er8r$m93#;fX&zkY`<,tl:');
define('NONCE_SALT',       '4,c0<tF<=93(Sy(8^G2|uhguwDTgXkg&mGHF OxkYs=/o@!*JPf4@C2h$ncD~Ki*');

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
