<?php
//Do not delete these. Doing so WILL break your site.
define( 'WP_CONTENT_URL', 'http://ahsquared.com/arc/arc-assets' );
define( 'WP_CONTENT_DIR', '/home/ahsqdcom/public_html/arc/arc-assets' );
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
define('DB_NAME', 'ahsqdcom_wp_arc');


/** MySQL database username */
define('DB_USER', 'ahsqdcom_wp_arc');


/** MySQL database password */
define('DB_PASSWORD', '8G8e3RdutfCPYkVL');


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
define('AUTH_KEY', 'GSdY {.Hq!!Dn|V(N(/+C/JL+C;c:l4y38-3W*.!R8c4ZXL EI=6GuerX,tPh=#~');
define('SECURE_AUTH_KEY', 'SXAaCx@*:$KRy)Q2qBvWWz#fv>VD&vaw&AwgY,[Q~w<,eKYu!(%ufRABL)4pd4L)');
define('LOGGED_IN_KEY', ';8{P4#;B.+xbw-v>2?o7PP,[wZbAqNhii.X@`Pb7Az8Wh}R9{6DDhyqE=s4a5!i#');
define('NONCE_KEY', '86NEhP?I#6;)WJRKb)#if|N|id|#$ OK6{##D!jeFa[]KDyLk?Uq{<g.//`@/lj3');
define('AUTH_SALT', ' =DDXMI{Nu%_Yav9?$+]9:_6|UG{5PR5A),_uE!8YOSiO@^NP3AkWk^N5jBxZ*}+');
define('SECURE_AUTH_SALT', '0+8)pHQ@)>-w80`jq/t@i/m@gN.5s[Q*~l1[Sd0A?JX6.t%mq.[y<?? L>54(iJS');
define('LOGGED_IN_SALT', 'u.E@a; ?AW5w%HJ<Dvswtqw5l]v:,5Kp2$}26{0<LrpoYZh{)AkbRG62u{VpT:Fh');
define('NONCE_SALT', '7v9AjwtVOJ` >&]%e?^VEJkZy5$^Xg+rBURL^~<sg3rbHf^LdU<I|d<o88:s$^Jd');

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
