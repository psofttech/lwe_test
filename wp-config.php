<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', '/var/www/html/wp_test_git/'); // Added by Revisr
define('DB_NAME', 'wordpress_test_git');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J]JUUMV/R.D{PV+Ey!$2Q3d<kwd}3=c.Fu=m1%r0VM{Y}.s>US_~)J-*r4|HN8bo');
define('SECURE_AUTH_KEY',  'Y^>QONb?+Y3|K}9w|: m+4&;d8~as8WKq1J!)V]eF1Z}1B Z%=,FSSRa,d!7SOP$');
define('LOGGED_IN_KEY',    ',nMJP#05g@^Rv-2LC,88>X/NnQ.ZxZG+Rx>=q2VZ43Q<QK1!KF iIZKi(MmG9K*,');
define('NONCE_KEY',        '<nZ332r2Z)Yhh[3(T`7.-pPV?}RNB.aHpr|H|}qhuD/Ei&WEOy+f1f@ !Q$9N]_S');
define('AUTH_SALT',        'K>!F3^ILAZb!5WY+sa}h?;kF8qn3x&7P-h[.z.!mS#:^FP5(Y* lPLt2}n|1zm_d');
define('SECURE_AUTH_SALT', '5ssey@KOe0-4c!e5<hZ2K[NlN!a%`|L )mC wNNRkak{i_g0]6) ^IX;vBj^`Jz&');
define('LOGGED_IN_SALT',   'L*fr(8=lRnH`Nv@X!80qB(]a*JYgB^AqS;-C];B,=?(U(x{|$4T42o)dZ:$Al_go');
define('NONCE_SALT',       '-w.kTNZ{,UBf_|iD3,p<|R&RwZ4|!N_*!_XiT]o5uzfdag5rQ1]{PAWxgq|Nw06Y');

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

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
