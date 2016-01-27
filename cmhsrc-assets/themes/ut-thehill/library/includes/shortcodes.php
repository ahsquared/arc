<?php

//===================================================================================================================
// Shortcodes, get your shortcodes
//===================================================================================================================

// Make a highlight box
function highlight_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
		"color" => '',
		"text" => ''
	), $atts));
   $content = wpautop(trim($content));
   return '<div class="box-light '.$color.' tx'.$text.'">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'highlight', 'highlight_shortcode' );



// Make a dark highlight box
function darkhighlight_shortcode( $atts, $content = null ) {
   return '<div class="box">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'darkhighlight', 'darkhighlight_shortcode' );

//	Right Column
function ut_rightcolumn($atts, $content = null) {
   return '<div class="rightcolumn">' . do_shortcode($content) . '</div>';
}
add_shortcode("rightcolumn", "ut_rightcolumn");

//	Left Column
function ut_leftcolumn($atts, $content = null) {
   return '<div class="leftcolumn">' . do_shortcode($content) . '</div>';
}
add_shortcode("leftcolumn", "ut_leftcolumn");

//	Half Column
function ut_halfcolumn($atts, $content = null) {
  	extract(shortcode_atts(array(
  		"align" => ''
  	), $atts));
   return '<div class="half '.$align.'">' . do_shortcode($content) . '</div>';
}
add_shortcode("half", "ut_halfcolumn");

//	One Fourth Column
function ut_onefourth($atts, $content = null) {
  	extract(shortcode_atts(array(
  		"align" => ''
  	), $atts));
   return '<div class="one-fourth column '.$align.'">' . do_shortcode($content) . '</div>';
}
add_shortcode("onefourth", "ut_onefourth");


//	One Third Column
function ut_onethird($atts, $content = null) {
	extract(shortcode_atts(array(
		"align" => ''
	), $atts));
   return '<div class="one-third column '.$align.'">' . do_shortcode($content) . '</div>';
}
add_shortcode("onethird", "ut_onethird");

//	Two Third Column
function ut_twothird($atts, $content = null) {
	extract(shortcode_atts(array(
		"align" => ''
	), $atts));
   return '<div class="two-thirds column '.$align.'">' . do_shortcode($content) . '</div>';
}
add_shortcode("twothirds", "ut_twothird");


//Clear
function ut_clear( $atts ){
 return '<br class="clearshortcode">';
}
add_shortcode( 'clear', 'ut_clear' );

//Accordion Actions
// Folds
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);

function fold($atts, $content = null) {
	extract(shortcode_atts(array(
		"title" => '#',
		"group" => '#'
	), $atts));
   remove_filter( 'the_content', 'wpautop' );
   
	return '<div class="accordion-group">
                  <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse'.$group.'">'. $title .'</a></div><div id="collapse'. $group .'" class="accordion-body collapse"><div class="accordion-inner">'. do_shortcode($content) . '</div></div></div>';
				}
add_shortcode("fold", "fold");  
// Wrap
function accordion($atts, $content = null) {
   $content = wpautop(trim($content));
   remove_filter( 'the_content', 'wpautop' );
	return '<div class="accordion" id="accordion2">'. do_shortcode($content) .'</div>';
}
add_shortcode("accordion", "accordion");  

//Callout
function callout($atts, $content = null) {
	extract(shortcode_atts(array(
		"align" => '#'
	), $atts));
   $content = wpautop(trim($content));
	return '<div class="callout '.$align.'">'. do_shortcode($content) .'</div>';
}
add_shortcode("callout", "callout");  


// Mobile NivoSlider Links

function mobile($atts) {
	
	return '<p class="mobile-nivo"><a class="button" href="'.site_url().'/nivoslider/'.the_slug().'/">View Slideshow</a></p>';
				}
add_shortcode("mobile", "mobile");  

//==[ icon shortcodes ===============
// Make a download icon
function icon_download_shortcode( $atts, $content = null ) {
   return '<i class="fa fa-download-alt">' . do_shortcode($content) . '</i> ';
}
add_shortcode( 'icon-download', 'icon_download_shortcode' );

// Make a map icon
function icon_map_shortcode( $atts, $content = null ) {
   return '<i class="fa fa-map-marker">' . do_shortcode($content) . '</i> ';
}
add_shortcode( 'icon-map', 'icon_map_shortcode' );

// Make a chevron right icon
function icon_chevron_right_shortcode( $atts, $content = null ) {
   return '<i class="fa fa-chevron-right">' . do_shortcode($content) . '</i> ';
}
add_shortcode( 'icon-arrow-right', 'icon_chevron_right_shortcode' );


// Make a chevron left icon
function icon_chevron_left_shortcode( $atts, $content = null ) {
   return '<i class="fa fa-chevron-left">' . do_shortcode($content) . '</i> ';
}
add_shortcode( 'icon-arrow-left', 'icon_chevron_left_shortcode' );


// Make a file icon
function icon_file_shortcode( $atts, $content = null ) {
   return '<i class="fa fa-file">' . do_shortcode($content) . '</i> ';
}
add_shortcode( 'icon-file', 'icon_file_shortcode' );
?>