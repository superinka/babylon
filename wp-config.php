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
define('DB_NAME', 'babylon');

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
define('AUTH_KEY',         '!cJh2&Q]+Mma0pNByC2ifo<d?9Q)CvdWA834@_M qDi1JL5JRmvc@!^mkAsO4[{?');
define('SECURE_AUTH_KEY',  'YBjazrC)bQCGNviH{$lx7E?w_-4~o:EWwV>mY#h;R2bmm?0W*=~.aGD_/nrP9}l)');
define('LOGGED_IN_KEY',    'il<:XPHY34k?WJT?s#f/f^+?W:JA1yqavMwTB85EYd4(Eg^w|<.iM=DXW$jZK|G&');
define('NONCE_KEY',        'H}s[tJ<=T*br4)lIJ>FUS!P(:|`N3GNa=krQw7/4r5LN`K8y`0Vs1;K>< +}^xv~');
define('AUTH_SALT',        '*nl+~^zPa]aX:2>BG_3#QvDv$py8:<A!2$,;*qc<6F9+F{iN6d/y>O6usy94WP C');
define('SECURE_AUTH_SALT', 'u,XAkW$&{$[:z$1* Uk@qkq,$Ik<G*|uj;YAYgU/>J3KrS+VxK;A:0lyR ?C6o%y');
define('LOGGED_IN_SALT',   'nJN2U#(Kd~JTn#[@0w_sY|FP)OL]/4ZtgYK|nBqUUkC~(a;S,A$6sidizyocn{^>');
define('NONCE_SALT',       'u(6Db_wfo|NKra]TLJzgN(Rf4A/8Ui=w@o)_%n_`3SlvBQ}t8Wm`pQDSaflJi[+.');

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
