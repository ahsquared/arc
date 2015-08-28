<?php

// add stylesheets, including the parent stylesheet
function arc_enqueue_styles() {
    wp_enqueue_style( 'arc-typography', 'http://fonts.googleapis.com/css?family=Lato:400,300,300italic,700,900' );
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'arc_enqueue_styles' );

// add the theme js
function arc_enqueue_scripts() {
    wp_enqueue_script( 'arc-main', get_stylesheet_directory_uri() . '/js/min/main-min.js', array(), '20150310', true );
}
add_action( 'wp_enqueue_scripts', 'arc_enqueue_scripts' );

//	2 Column text
function arc_twocolumn($atts, $content = null) {
    extract(shortcode_atts(array(
        "align" => ''
    ), $atts));
    return '<div class="two-column '.$align.'">' . do_shortcode($content) . '</div>';
}
add_shortcode("two-column", "arc_twocolumn");

//===================================================================================================================
// Theme Options Page / This creates the options page
//===================================================================================================================

/*
// Set up wordpress
// Set thumbnail sizes, post types allowed, menus set up, rewrite title html, make it HTML5, etc.
// A great deal of this will come from Twenty Thirteen, as that is the theme The Hill grew from.
require_once ( get_template_directory() . '/library/includes/wordpress-setup.php' );

// Custom Settings
require_once ( get_template_directory() . '/library/includes/custom-settings.php' );

// Make the Site Info page
require_once ( get_template_directory() . '/library/includes/site-info.php' );

// Make the options page
// Make the options option. Also, edit the body tag to actually implement the options
// UT work.
require_once ( get_template_directory() . '/library/includes/theme-options.php' );


// Bootstrap shortcodes
// This is taken from the web. But we're using a lot of BS functionality, so let's include it. Unedited.
require_once ( get_template_directory() . '/library/includes/bootstrap-shortcodes.php' );

// Sidebars
// Lets define the sidebars and the particular HTML it needs to output
// UT Work
require_once ( get_template_directory() . '/library/includes/sidebars.php' );

// Widgets
// Lets define the sidebars and the particular HTML it needs to output
// UT Work
require_once ( get_template_directory() . '/library/includes/widgets.php' );

// Shortcodes
// All of the UT-specific shortcodes are in this file. Leftcolumn, rightcolumn, etc.
// UT Work
require_once ( get_template_directory() . '/library/includes/shortcodes.php' );

// UT Stuff
// Very odd UT stuff. The login logo. The UT user, etc.
// UT Work
require_once ( get_template_directory() . '/library/includes/utk.php' );

// JSN
// Here we have the magic sauce that populates the page finder
// UT Work
require_once ( get_template_directory() . '/library/includes/generateJsonForSuperSearch.php');

// Enqueue all the stylesheets and scripts
require_once ( get_template_directory() . '/library/includes/scripts.php' );

// Add aria walker class extension
require_once(get_template_directory() . '/library/includes/ariaWalker.php');

*/