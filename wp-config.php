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
define('DB_NAME', 'MaTunisiePortail');

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
define('AUTH_KEY',         '70zGzTxGUXunZoOK-.`VH`HZyid[ =%bh%Bas{EVNs`{qXK]ysR2/y.R-ZSS4W}K');
define('SECURE_AUTH_KEY',  'im;gXZteRi~`7xuaZIE!jR5vJ*;9 qd7#_#CpY0>Cjyxc I2|^.p:kd@UweX(.7 ');
define('LOGGED_IN_KEY',    '4Y0DQ^r#9W_tyWd{U!f@1_!{?IpjEz;}0$|*`axvwh0=MVLVT7%#`{fG0h*[?S9`');
define('NONCE_KEY',        '~LdfZ&+dLojGFg=ugmZUB^Hlob>,;z%f9{F*Av[&4$(cJ2F?ZS]lf7bfWV,n<mCN');
define('AUTH_SALT',        'JWti(~sfyT`X ($uB.2,8KIUo@heP3X9ch|b;mFcpxyY& _k&Xgqn#7}q1A-4H)G');
define('SECURE_AUTH_SALT', 'Nx,a}W#A&B=U *4D#CN Xw4.c`S:GQ:&~n7aZ}Yb#5GgaLCoLoBG3@_?om=8E<k3');
define('LOGGED_IN_SALT',   '@X3DoGHwn;0s]C_jbaS/kvpKq5@.x<qZK(xM^4S,~ldEFXJxEeXAb)$}c.4Sfp}D');
define('NONCE_SALT',       '@S_D(]e{wa2PBdPH&1-v0!zXZ &v:e-05k$ :$d-<R16::=@_D8%2HS+ bo<eRw&');

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
