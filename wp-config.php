<?php

define( 'WP_CONTENT_DIR', '/Users/ahayter/Sites/arc/cmhsrc-assets' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.
define( 'WP_CONTENT_URL', 'http://arc.dev/cmhsrc-assets' ); // Do not remove. Removing this line could break your site. Added by Security > Settings > Change Content Directory.

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
define('DB_NAME', 'wp_cmhsrc');

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
define('AUTH_KEY',         ' #Z0n4M3v71x2cEap3eUH9fy=rrUF0J=HD G3d ^(zx%g!YtQr;lWKR9$BAI*rx?');
define('SECURE_AUTH_KEY',  'GLJ_3s]-=s?^Q<^^ 0BZ0~|zj>Roa<32vr%n&+0E4}Jgt8=|L+H,HDx*Ykj^=KFL');
define('LOGGED_IN_KEY',    'WfT?W(#m8wH354|};Uk,@>osf$EZ g=M2azM<}q_,N[%jlJC>DnD`a#5{z4G|gGV');
define('NONCE_KEY',        'Kwy`%94KdM=(e )VF+d]yU:Prs.B^qn~2F=b8!)fb?4?}1B43l2ienAr~D6/`c37');
define('AUTH_SALT',        'A1P<]$divm`3k||P:CDyB2_1<6qJj>c1LP+lUz^)F_-cpdSNcF-= }Q-C3Bl-GuA');
define('SECURE_AUTH_SALT', 'cfR4?:3=J$|CFbBr|d;d2.(^-=WZm H@=@AZZTr/6q2O=eGQ+UUntT9tWQ:oqr;O');
define('LOGGED_IN_SALT',   '868W*w2cQOxi78k36cw7.rrCoeET_^@vhj_O+tQZF1OSsl#,tS^iU-pBk-=.@d^Y');
define('NONCE_SALT',       'qjDQO^+~)88_-(SXw^Z3Cr[AJ|.?^nP|G&q3XxJq-r@)1($tcH_d+L*#L+vnP&gJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nb6gc6vd8l_';

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
