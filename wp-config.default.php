<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


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
define('AUTH_KEY',         'x{+p=sT?[E[S#QsiB-?zb/8G+]l--ex|(Q8&8bSsxGU|h1xnE|~GsdrqNr1335|=');
define('SECURE_AUTH_KEY',  '9D~(6NO8:D,0M~+)?Z+i-~LhKE[3+K`;8XA+|-I-E#Cabqx47+2)f.evqerQ:|{0');
define('LOGGED_IN_KEY',    'jdl)Yv&S5 @>`Q`/,E-LtTx9vI1eT([(6|kHM&V8wL-oB/wf-6*}Tuov`~Bmvg-q');
define('NONCE_KEY',        'g)-),Y1{Z&*Zbm@-V|4(n5v {I~+`r2(kB?v0{0r{YNu}YZ{ x2,s2Z(]g+MW-GB');
define('AUTH_SALT',        'cJBwg|$-AE-pYfA!J+@1x|mk *i.C0fC=1rm2ym6s>R[z.&MGyfqev;^)A^1xa`P');
define('SECURE_AUTH_SALT', 'u8KB7$U}m,*nqEDBneVc6AB+iPA_,K/g:a6qN/r-O0LmAVa8yzdc8~~SeQ;M<|K/');
define('LOGGED_IN_SALT',   '5Jiz~ %<2^H#Tzlq)eQw-?{c+ge]-~>* SB_$&pH)zuzu-j-WgBQ!rzZd:X;.|q+');
define('NONCE_SALT',       '_5:V<KS>gY|X(iH?l0eg{`}WT}>+ :o8:+fM,D;H;Ab~]C3[tciZJtch#-5luS{L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'arc1542_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

//define( 'WP_CONTENT_DIR',  ABSPATH.'assets');
//define( 'WP_CONTENT_URL',  $protocol.$hostname.'/assets');

define( 'W3TC_DYNAMIC_SECURITY', md5( rand( 0, 999999 ) ) );
