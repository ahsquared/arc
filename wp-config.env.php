<?php
/**
 * Setup environments
 *
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 *
 * You can define the current environment via:
 *     define('WP_ENV', 'production');
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


// Set environment based on hostname
switch ($hostname) {
    case 'arc.dev':
    case 'localhost':
    case 'intellij.idea.ide':
    	define('WP_ENV', 'local');
    	break;

    case 'ahsquared.com':
    case 'www.ahsquared.com':
        define('WP_ENV', 'development');
        break;

    case 'cmhsrc-test.utk.edu':
        define('WP_ENV', 'staging');
        break;

    case 'cmhsrc.utk.edu':
    default:
        define('WP_ENV', 'production');
}
