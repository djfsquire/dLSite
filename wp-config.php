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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'F0yOBtVd_)ydsK>m/fG(i&e74iDp])PklStLfz )Ae:u1>1[8OZgW~X22m]ZIZ2 ');
define('SECURE_AUTH_KEY',  '>m:qA[+23--p5]VT$U!)x/=E;FZp*meOSrF-r[SoL%.*N6+?5L7RX,mKwgavy/?#');
define('LOGGED_IN_KEY',    '>zXJib&?7Fj-[rY|G2BmOOeZh9tb9Yt3V>}{-V)[G_kWA-@[v9d|IF! )lx#psXb');
define('NONCE_KEY',        '=/a+5na-jjG]SAJEYoM/-!it!-_:CjIqCwcgm=L[ZV !aVkjX%[r|u|`?1e:0jho');
define('AUTH_SALT',        'cV%i<jYBn?-nIzj!WStT)Y:ZYX%0)nY2utogC-&Ek>&3|?z P#42-.V4wG#o5I5-');
define('SECURE_AUTH_SALT', 'RLGP|+? 6|.X(?5H~1xdD>c,ie@M)(h,/qF.3Ef2Iq`%.{77>?sl|)=dGl@411eQ');
define('LOGGED_IN_SALT',   'w1Q/Nv (C]4w-H :*O/~MqUB_>BMIlc<5{~h~LS[MN{1A-hc,+?dW_>e>gk/D<.j');
define('NONCE_SALT',       '{Hdg#(]4f&oiOE.-?-Msq`>*sl_5}l@=h^q+26973 Cmw^kLNIpxJ_+>hvN$=ii,');

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
