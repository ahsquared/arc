<?php
/**
 * Development environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment
 * in this file.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */

// from iThemes
//Do not delete these. Doing so WILL break your site.
define( 'WP_CONTENT_URL', 'http://cmhsrc-test.utk.edu/ARCI/arc-assets' );
define( 'WP_CONTENT_DIR', '/home/cmhsrc12/public_html/ARCI/arc-assets' );
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The driver used to communicate with the database (specifically referenced by DataOne's API's*/
define('DB_DRIVER', 'mysql');

/** The name of the database for WordPress */
define('DB_NAME', 'cmhsrc12_wp');

/** MySQL database username */
define('DB_USER', 'cmhsrc12');

/** MySQL database password */
define('DB_PASSWORD', 'Missiondriven!!');

/** MySQL hostname */
define('DB_HOST', 'mysql.utk.edu');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache
