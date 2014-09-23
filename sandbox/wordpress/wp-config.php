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
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'sandbox');

/** MySQL database password */
define('DB_PASSWORD', 'sandbox');

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
define('AUTH_KEY',         'zA~.+c/kXvXY)Rush;}(:68Kj}h|=#}S 7|SPiC&GOL|ATatg;-B:l=&]>m/ty@&');
define('SECURE_AUTH_KEY',  'z9_a.UA1mg>gm8LH:1 1bOH:KyykKyF#MLBG)&D#@H>0: &:w,6g$>_AX]ilgWdU');
define('LOGGED_IN_KEY',    'S~,$yAwY+nt*wg>n]I?r+S/;UblPv1++(6OhCI9z^B|ah820PbD`sc>BA/Z=-Oo^');
define('NONCE_KEY',        'yC2-akz7C5Q3~jYtD*s)]yJ#cv&-<?t-aQTXWY<0G*N}+y@<+rRD`)%CU<|_XL*B');
define('AUTH_SALT',        '9bxb?d0Y.@fQ!)8cs&WcHg*VDDB_%{]4v$Zy4hdRiXO9W#,y;jc#<p4,Y}bPrl5o');
define('SECURE_AUTH_SALT', '-c~W^G}g5493hG76r }k-bu-PRn0}!j#?X.35ffB6G$2^Ml79}tX9>i5u:K*M5y#');
define('LOGGED_IN_SALT',   'Fl`mX|>K8|pqD)blm`!/%+465~|d]e}hYK.h6E;UUVaT72&^tqLrB}Eo-L*5}6g6');
define('NONCE_SALT',       '*1aHi}+1nDs3R/+?l/jw|d=vW/eJFQ)r/^mx7eBK:-ga;wN9mqS4oF*.9BV~g[TI');

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
