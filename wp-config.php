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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Zz1dZ$)!>f@YWB;O+dLbhlv@$x+$^S4z@xPHm^IL5S]zx|)(*/4(Hu9Du+U+w8}E');
define('SECURE_AUTH_KEY',  '%GoujHq79ti~IT+]Rv_+F-J l,J;m6sM(_< 6Xs2`p_+`q@epUQ<;]b6]MrRXX?c');
define('LOGGED_IN_KEY',    '#W|SXD5Z.,Im(Q7Qh)V ,P_aI}d+4ZyCO,F>.-:|(%fFo-e(BRe;T-7;><tA/UI{');
define('NONCE_KEY',        'v<[muTyGmreweb)R|Mj+u>aPfd/}zZW{b0Hh;l].cWQ&#wA:%vM+F-zQE~, S:R~');
define('AUTH_SALT',        '*=ZW!>Xo<^!ib^DX@]:UUXTdh8}v`EfFvhkk>VjMS>w4 ?$9NgT`dy0|)?<ol8zD');
define('SECURE_AUTH_SALT', '0PM )c!cucYp%XeD1*N[8;nd[D9+[m:h<CGG,zRA.Q_yA(~h<Kg:85/dRHiVHGjk');
define('LOGGED_IN_SALT',   '{otG57~@&0y-C[jcqZCbj|<.6d:/0erqjS5M(n}o=PlKJ;+p6J;nY~ 8YI?~s(l-');
define('NONCE_SALT',       '?{x-]^g&[0OfJG5+sE<m$AH|l`dKx)`|@wR#_*JWw9#?|Fc9*<{A3H}&MA?gS(99');

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
