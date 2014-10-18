<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '`#oJi6#g#qgVTn/wBT>i+&yL+YB^G}3Pn5ZD7QjQO|E`7pI.{C,OJ-I1?i&QVftC');
define('SECURE_AUTH_KEY',  '=r30P2YHVLCBtfwP$Ybuqr[7`n}itCW34)RR5%UAva%#H~Qk3!g;Q=~9lUn,X%K#');
define('LOGGED_IN_KEY',    '*TiyrUIKouZ~=AJzO>?=|qcL/Nr:WJ[]RXbiR;GkA,hKF4}dXDbJg4-r=]X-,Ob6');
define('NONCE_KEY',        'uzXDpyHvR*w.awS-h2fCw|3-XhdQP]z%fom/_0<n&3^lgRUEDSS@(U?d=TYDG}3e');
define('AUTH_SALT',        'YI =A90~$*w,#7[IFv%rn,-Vud?@CX;gnazM_;[}#c;q!m(.$$Q~pjLzk+vvD$OE');
define('SECURE_AUTH_SALT', '^;C*.2Z6T06flm%n3fU&aJvHnQ+9&E|XG]};.NI0|&xK^LKCv<5RZts+avh^ztkC');
define('LOGGED_IN_SALT',   'p*eSjz-:]`Mmfls?w;8<bR^6,^;.bUM2]jIyo<d~8?Br2jx5Bl@aq1X5J*R5}=Yw');
define('NONCE_SALT',       'fJ_R=Yt?`7LKtd3Mu4gx+NM)q]yP4;p0Y;:7  {u22nOe<60Rs?P[N)s[KGyxm]R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
