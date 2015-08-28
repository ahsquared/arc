<?php
//Do not delete these. Doing so WILL break your site.
define( 'WP_CONTENT_URL', 'http://arc.dev/arc-assets' );
define( 'WP_CONTENT_DIR', '/Users/ahayter/Sites/arc/arc-assets' );
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_arc');


/** MySQL database username */
define('DB_USER', 'root');


/** MySQL database password */
define('DB_PASSWORD', 'dev@ccess14');


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
define('AUTH_KEY', '%hl.@&,]8MJFL6^TqS{*)#N_yKp1v0xd[;~<X>5:mOcEH(ebrwIgUjWuCk9D`!Qf ');
define('SECURE_AUTH_KEY', 'wv.!em1<d7G*X&b|0FUQT@Z$hKu)~(]j;arV5lfAR^C_{i4q98[pSnstLW/E%x3N ');
define('LOGGED_IN_KEY', '#Om%L&VfQl@q!5*_zi}Sy]1>3.eP/rnp(hgD^0,$s~YMkH{|TCcd6B?Ax9UGIjoJ ');
define('NONCE_KEY', 'f%!yEaA8i?ctQlqZ@US(Xz1_&;~nJOko<HWs|>YC/2g#G[^xu9Rj3]mK6:h7e,Nb ');
define('AUTH_SALT', 'bE[`>8R#m/W.oTvr70^L_y%Xhp:V)e3tD5,gC]w(f!i1uJFA&@P6HB$~<dz}Ic{N ');
define('SECURE_AUTH_SALT', '4dcx#hDC|Vb9JLUTKGt$z,N`X3spZQ_08H]myF;?W:P^{.j1EvguRa*oie/B>2Iq ');
define('LOGGED_IN_SALT', '$zg@8cb})`Y^,j7Tf0FXCaW>tx?RS]r<P_6!G;3DldI#.nheZ/VAo~OJ(q:y|5&E ');
define('NONCE_SALT', 'dSs$CfAW4<j_J1cE|2?eqFO#.G!7kiTMB}@Lw>V%z*nZ]`PYD/0h^vp~Q&3yNoU8 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arc1542_';


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
