<?php



//===================================================================================================================
// The University of Tennessee Custom Widgets
//===================================================================================================================

// Create custom Highlight box widget
// --------------------------------------------------
class UT_Highlight extends WP_Widget {
  function UT_Highlight() {
          $widget_ops = array(
                    'classname' => 'UT_Highlight',
                    'description' => 'A highlight box for text, HTML, PHP, Javascript, and shortcodes'
					);

          $this->WP_Widget(
                    'UT_Highlight',
                    'UT Highlight Box',
                    $widget_ops
					);
	}
  function widget($args, $instance) { // widget sidebar output
                    extract($args, EXTR_SKIP);

					$text = apply_filters('widget_text', $instance['text'], $instance);
					$background = $instance['background'];

					echo    "<div class='box-light widget ".$background."'>"."\n";
		            echo    '<aside   class="widget %2$s">';



			        // Parse the text through PHP
			        ob_start();
			        eval('?>' . $text);
			        $text = ob_get_contents();
			        ob_end_clean();

			        // Run text through do_shortcode
			        $text = do_shortcode($text);

			        // Echo the content
			        echo wpautop($text);

		            //echo    $after_widget;
		            echo   '</aside></div><br class="clear">'."\n";
    }
    function update($new_instance, $old_instance) {
            $instance = $old_instance;
            if ( current_user_can('unfiltered_html') )
            	$instance['text'] =  $new_instance['text'];
			else
            	$instance['text'] = wp_filter_post_kses($new_instance['text']);
			$instance['background'] = $new_instance['background'];
			return $instance;
    }
    function form($instance) {

			$text = format_to_edit($instance['text']);
			$background = $instance['background'];


		    echo '<p><label for="'.$this->get_field_id('text').'">'._e('Text:').'</label>';
            echo '<textarea rows="12" id="'.$this->get_field_id('text').'" name="'.$this->get_field_name('text').'" class="widefat">'.$text.'</textarea></p>';
            echo '<p><label for="'.$this->get_field_id('background').'">'._e('Highlight Color:').'</label></p>';
			?>
			<select id="<?php echo $this->get_field_id('background');?>" name="<?php echo $this->get_field_name('background');?>" >
        <option <?php if ( 'box' == $instance['background'] ) echo ' selected'; ?> value="box">Default</option>
        <option <?php if ( 'smokey' == $instance['background'] ) echo ' selected'; ?> value="smokey">Smokey</option>
        <option <?php if ( 'orange' == $instance['background'] ) echo ' selected'; ?> value="orange">Orange</option>
        <option <?php if ( 'limestone' == $instance['background'] ) echo ' selected'; ?> value="limestone">Limestone</option>
        <option <?php if ( 'torch' == $instance['background'] ) echo ' selected'; ?> value="torch">Torch</option>
        <option <?php if ( 'river' == $instance['background'] ) echo ' selected'; ?> value="river">River</option>
        <option <?php if ( 'rock' == $instance['background'] ) echo ' selected'; ?> value="rock">Rock</option>
        <option <?php if ( 'eureka' == $instance['background'] ) echo ' selected'; ?> value="eureka">Eureka</option>
        <option <?php if ( 'switchgrass' == $instance['background'] ) echo ' selected'; ?> value="switchgrass">Switchgrass</option>
        <option <?php if ( 'valley' == $instance['background'] ) echo ' selected'; ?> value="valley">Valley</option>
        <option <?php if ( 'leconte' == $instance['background'] ) echo ' selected'; ?> value="leconte">Leconte</option>
        <option <?php if ( 'summitt' == $instance['background'] ) echo ' selected'; ?> value="summitt">Summitt</option>
        <option <?php if ( 'globe' == $instance['background'] ) echo ' selected'; ?> value="globe">Globe</option>
        <option <?php if ( 'sunsphere' == $instance['background'] ) echo ' selected'; ?> value="sunsphere">Sunsphere</option>
        <option <?php if ( 'leconte' == $instance['background'] ) echo ' selected'; ?> value="leconte">Leconte</option>
        <option <?php if ( 'regalia' == $instance['background'] ) echo ' selected'; ?> value="regalia">Regalia</option>
        <option <?php if ( 'legacy' == $instance['background'] ) echo ' selected'; ?> value="legacy">Legacy</option>
        <option <?php if ( 'buckskin' == $instance['background'] ) echo ' selected'; ?> value="buckskin">Buckskin</option>
        <option <?php if ( 'energy' == $instance['background'] ) echo ' selected'; ?> value="energy">Energy</option>
			</select>
			<?php
    }
}
register_widget('UT_Highlight');




// Unregister a few of the default WP Widgets
// --------------------------------------------------

function unregister_default_wp_widgets() {
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Calendar');
}
add_action('widgets_init', 'unregister_default_wp_widgets', 1);

// Create custom Dashboard Widget
// --------------------------------------------------

function ut_dashboard_widget() {
	require_once ( get_template_directory() . '/library/includes/widget-themeupdates.php' );
}



// Create the function use in the action hook
// --------------------------------------------------

function add_dashboard_utwidget() {
	wp_add_dashboard_widget('ut-theme-update-widget', 'UT WordPress Theme Updates', 'ut_dashboard_widget');
	global $wp_meta_boxes;

	// Get the regular dashboard widgets array
	// (which has our new widget already but at the end)

	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];

	// Backup and delete our new dashbaord widget from the end of the array

	$widget_backup = array('ut-theme-update-widget' => $normal_dashboard['ut-theme-update-widget']);
	unset($normal_dashboard['ut-theme-update-widget']);

	// Merge the two arrays together so our widget is at the beginning

	$sorted_dashboard = array_merge($widget_backup, $normal_dashboard);

	// Save the sorted array back into the original metaboxes

	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

// Hook into the 'wp_dashboard_setup' action to register our other functions

add_action('wp_dashboard_setup', 'add_dashboard_utwidget' );?>