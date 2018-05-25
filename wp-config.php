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
define('DB_NAME', 'amberstalk');

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
define('AUTH_KEY',         '#J+t),yOerE|2Cvip*)idDf_;bO&J8tY[u},[D:)u#pMTi{+al:F6gGw%@?hdR;1');
define('SECURE_AUTH_KEY',  '%|{p$[G(?@|A4.2C;G].N-6reH6/#{)!1-mG+QAN%)~j{Q(sd#s$kWdJ@kV@7~:z');
define('LOGGED_IN_KEY',    '@(0LDRp+Q>82!GInzi]b<stOb+Yz)ZcK>WPMNq@y)pmNB7|^HBj,&8m `L+RLwV[');
define('NONCE_KEY',        ' 4Y/c[U;}2<&MjJ0i#)`x;ej2:Ebsn1KGr`f-;k4]Xo~aJvGuyh@4l4G-t`$~,LP');
define('AUTH_SALT',        'M{uH-,Si?y10piYmyuCTuF,?l(2-DWl>}pd1lRn:3xlh9c}Kiev[=K63fxteR;sR');
define('SECURE_AUTH_SALT', '|HVi4HHyZyP8OcZMD-Tuli!qD;.|>ezkcZjKK#srMBm.D+F}Ec&~Q^C&oc@0ft=i');
define('LOGGED_IN_SALT',   'Up&y0Y -P&hP OJ*B!Q/c,tP?v oil(z1Of=_;t5yG;c]qq=Vzw `D&ENYUY6O_t');
define('NONCE_SALT',       'c6Kw1iV0oz4WT@Yo&JPh9r,1/9-0Ij6&/|ppDc_7y/}$,c8r}L5SW2D:XcB(6TW,');

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
