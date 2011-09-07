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
define('DB_NAME', 'Wordpress');

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
define('AUTH_KEY',         'U5s24;cGv|M|t{n3~jl!n/tb)XK=jn}nXJl:G2o4PN^%N[2#!, ?^kxs<%`~vw^P');
define('SECURE_AUTH_KEY',  'dJGSdZDO#y_v>8:V?Pa} %$it/HNw-rj}N|9)!HiP%Y<a.$;zWQwV0a55(x0!w}f');
define('LOGGED_IN_KEY',    'hG6N&P4LUh={UjA8</|)x<Kk(d[Uw*CVVN(!4BDPr68[gCdn(_~Q_@`UW]^ra#zu');
define('NONCE_KEY',        'iG4:@3*L4:->|Q>R/MF0`e|-=BhJEKmR>zxw:@FlK0U*|XK#IEMzZ/HRT+P5fOKr');
define('AUTH_SALT',        ' JdlQ|!wZ%GOeQezO2}u23+d1Az`i{!.#,c9wuLCC,h<7p^wFlW|x9d9oflv>+x9');
define('SECURE_AUTH_SALT', 'Hyl8BZnW8PQNu@nu>}D@$^4pmtQZ/o9&A-3%*VL(n).7oTfZ.`fZd!B|ybn8R2JS');
define('LOGGED_IN_SALT',   'QMox6ti>7DJ ZIvmJaHLP-C*)o;f1BMecDAIuN39X5|vp`|U{-yG=lE>~H:8)L.b');
define('NONCE_SALT',       'E7u1#e,4G:a;rr&#0i{i`1:E: QaN44=}.bkkoV5ZCPpD:LB-;jx*B=I6PgAOqW^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
