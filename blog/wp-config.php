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
define('DB_NAME', 'Blog');

/** MySQL database username */
define('DB_USER', 'b13_19053720');

/** MySQL database password */
define('DB_PASSWORD', '4rmxyq5j');

/** MySQL hostname */
define('DB_HOST', 'sql308.byethost13.com');

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
define('AUTH_KEY',         '43*Tg_je`KOsIfXb-f`)61)#TU$2o,KR--If`_Q++Z_-o[mU:@;y3nMI47xGBjyK');
define('SECURE_AUTH_KEY',  'r]N+q+xG/7Yz/+2~4.q@ck0QW}:s0:vPI8|@KM:nv`O,lo9G47DqfjW^+-039=}/');
define('LOGGED_IN_KEY',    '|ip-CfP@WGSp/#ds`b=Em+Z_y+8{9++PUp r-P@Dk|@(uIMEc6;Qt39W=wHNW`JZ');
define('NONCE_KEY',        'b~3D@K]5:iQ]Pv#5VTj!Xx<<QK?M*<ld`ZQ~C$G-<b&@qf-]xgoa<e=jWpXU2At2');
define('AUTH_SALT',        'I_Em:Cd7|Ycj_^&JY-%p|}3{Z~-Y0!TBH=-1shUD(WQ}z!?+*g~jIzi-&pJEJ8E=');
define('SECURE_AUTH_SALT', 'jte^k4&1}i-Zez@6<=o1eoHC,~9QxFl]f.jY8})+%b/t# BfWj3%-,$nsnr-8#(4');
define('LOGGED_IN_SALT',   'Zzwt]:K m,}|d0$W=#x%liwFBlV:@J)d%|uyxG0g^(e#?w1ZjCuSvVQDDn?%J0z!');
define('NONCE_SALT',       'PI1H[-SSWzDGC`?|G.2=1TaA103DFBd>Ls0b@(lU%c<N@6`g;6j|Mk:(cZI<#7:{');

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
