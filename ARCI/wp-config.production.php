<?php
/**
 * Production environment config settings
 *
 * Enter any WordPress config settings that are specific to this environment 
 * in this file.
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */
  

// ** MySQL settings - You can get this info from your web host ** //
/** The driver used to communicate with the database (specifically referenced by DataOne's API's*/
define('DB_DRIVER', 'mysql');

/** The name of the database for WordPress */
define('DB_NAME', 'michelin_wp');

/** MySQL database username */
define('DB_USER', 'michelinDB_prod');

/** MySQL database password */
define('DB_PASSWORD', 'acyAjqr6RyFJrP@6bEDD');

/** MySQL hostname */
define('DB_HOST', '172.24.32.11');

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