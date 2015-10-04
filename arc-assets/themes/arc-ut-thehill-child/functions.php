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

// inline quote shortcode
function arc_block_quote($atts, $content = null) {
    $a = shortcode_atts(array(
        "align" => '',
        "source" => ''
    ), $atts);
    $footer = "";
    if ($a["source"] != "") {
        $footer = '<footer>' . esc_attr($a["source"]) . '</footer>';
    }
    return '<blockquote class="arc-blockquote ' . esc_attr($a["align"]) . '">' . do_shortcode($content) . $footer . '</blockquote>';
}
add_shortcode("arc-block-quote", "arc_block_quote");

// Register Publications Post Type
function publications_post_type() {

    $labels = array(
        'name'                => _x( 'Publications', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Publication', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Publication', 'text_domain' ),
        'name_admin_bar'      => __( 'Publication', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Publication:', 'text_domain' ),
        'all_items'           => __( 'All Publications', 'text_domain' ),
        'add_new_item'        => __( 'Add New Publication', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'new_item'            => __( 'New Publication', 'text_domain' ),
        'edit_item'           => __( 'Edit Publication', 'text_domain' ),
        'update_item'         => __( 'Update Publication', 'text_domain' ),
        'view_item'           => __( 'View Publication', 'text_domain' ),
        'search_items'        => __( 'Search Publication', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'Publication', 'text_domain' ),
        'description'         => __( 'A Publication Entry', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'publication', $args );

}
add_action( 'init', 'publications_post_type', 0 );

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