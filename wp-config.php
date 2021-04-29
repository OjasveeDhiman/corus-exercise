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
define('DB_NAME', 'corus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         '8snplVsfNSNvs=J0Zp=w1`L?,:l.vYQ7&z@{QN7/D83aVZRDdW$8F?:y9q9xfv?9');
define('SECURE_AUTH_KEY',  'wKEm;dzuulNX(LF&4MXx+;RsU2nJ$U-do$/c z*yU:KNM}ByO693c<^^mQ1&z~2<');
define('LOGGED_IN_KEY',    'eam_ |?^uMwI<A.1hj?ei1*1+3MXwK?0#]?ww@U1(-!<XnLufHBF*fEjX6C0&2Wt');
define('NONCE_KEY',        'l`8iA-,xFti72}J8oi9n$C~>s;}`6@uX;]7ks|%gal%zK?bTz`lRq)/-vz~(H%At');
define('AUTH_SALT',        '@|&M)qn|48fI;{G,w7RI8Q,hLQh{@Ox(8]<*^1P6zFmCG62>H2xK@-S<;4B&6DYs');
define('SECURE_AUTH_SALT', '{O:6Vrg_lwZ-k-NjIcB%TJLuQY%|iqZ?9`Sr;]hd QPy3-;6#M(wl+VuA~W(Q&5x');
define('LOGGED_IN_SALT',   '[Sa0CdYUX`XZGkGh *dj_/eMY]7+RHB/3(0YC  oQo:Neo1e[Y= 3/N)GU*ay2Ks');
define('NONCE_SALT',       'I0nt8a<md[u[wxE`ADF@;%Q7AoX*A)</c44SxB3k7gB-oNBeJ27{5NUXnopOLsjG');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpvoj_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
