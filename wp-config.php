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
define('DB_NAME', 'tutorialdb');

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
define('AUTH_KEY',         '3TJW8bsS!!!4yeD_<en2CP<i>zL$NO74153s3W*6YD&8eC#jyzRO&k7-H=O=d/BH');
define('SECURE_AUTH_KEY',  'p.yG~UT^K IUomi5Az9O]$1h.HEzimFkz+uxSlr<#JitG0F1g4Dt|zc)AJOMF#{w');
define('LOGGED_IN_KEY',    '@Bz58BmqA [1)^yWcH^g&QPY`%=k~a^f2|6l7zE~<[h~DLCA%/}zTS$sYOR{}TtL');
define('NONCE_KEY',        'gmP6hu9mj-Bs>fejy+C9+4)Q4Dn%afMPPST>zbC<>k%xsre4V0Ei?ZI gwW`u }A');
define('AUTH_SALT',        '&Iu MUm`AVe5@fO^i4O`3&cynI4~j]8JPAK^h6&6p;QLgF4Ww=a[*tWPwYJwPh0-');
define('SECURE_AUTH_SALT', 'S ;>72+aOt0]E#+vS+mg8%7coAr#sr2=6uriL}v^|tbed1F$WJ~l6X=?{04,yOrI');
define('LOGGED_IN_SALT',   '`_Gm$4~pdz6r={#2Ft%EqN{d|O nd[T1,9D`KoD_R%Uxx h)a)[NYMH?#pv](1mc');
define('NONCE_SALT',       'UHtN[=~e@<aBC{%SHP?F65IO:&-~8KB ]8z1?;SXjEC}c1|gBiCQ,US)xyNpk}_+');
define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD', 'direct');

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
require_once(ABSPATH . 'wp-settings.php');
