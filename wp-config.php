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
define('DB_NAME', 'wordpressbs2');

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
define('AUTH_KEY',         '](sgEk7%`|{O[2Rs558.V<H+1<Bouz#A=$|5-J+hN+vM{<d>(kSIIGLiP2]=P=#W');
define('SECURE_AUTH_KEY',  '2riCTxk[iZ0l5(HPVyf5[_/):#t:O]/.64x(82qt~qD&MmX;xek38E>g#@Q3l0b<');
define('LOGGED_IN_KEY',    'HWIWS#oljzUV{2Dla_sZtn@R`#^Wx|(1o :710G+ZABgSRpl[_?mxT?M#Y%f-#v-');
define('NONCE_KEY',        'D)~aMw/6<kV{Kx1GSkJdo?<GH1&lJe*fl,Uqp3D7SnBku4MWX*0Gu-9!R.95^M)Y');
define('AUTH_SALT',        'hE/s(g$yi?3}<Oj4.ft)d:T.Z_S32g>WqJGe)rHnFr} xtS=_&`XvW#TiCUsf!^~');
define('SECURE_AUTH_SALT', '/!DCuQIc .RPc?Cq@y(LK>bZ~^|jiSpXjs[G)k.LI.qLWN+W]$Qv6U >f-?(m5</');
define('LOGGED_IN_SALT',   '~J2Se27//VG_6C,<r1OtFsy&mPe7vUbWOy2DH+`_)HRCnr(sYb^8Py8yv}eq!Icr');
define('NONCE_SALT',       ')leMp^wXR]@bZu60`!&7P=hsjV]f?vmZ?p*4-ZRYATZd*z#@,=_CRA~i:G2L:z*w');

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
