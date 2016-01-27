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
define( 'WP_CONTENT_URL', 'http://www.ahsquared.com/arc/arc-assets' );
define( 'WP_CONTENT_DIR', '/home/ahsqdcom/public_html/arc/arc-assets' );
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );

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

// Define WordPress Site URLs if not already set in config files
if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', $protocol . rtrim($hostname, '/arc/'));
}
if (!defined('WP_HOME')) {
    define('WP_HOME', $protocol . rtrim($hostname, '/arc/'));
}

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
