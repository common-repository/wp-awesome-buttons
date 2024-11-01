<?php 
/*
Plugin Name: Awesome buttons
Plugin URI: 
Description: This plugin add some awesome buttons in your wordpress. You can add buttons via post editor with shortcode. You can use buttons in your widgets or your theme's php files as well.
Author: Developer Name
Author URI: 
Version: 1.0
*/



function awesome_buttond_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'style' => '',
		'link' => '#',
		'text' => 'Your Text',
	), $atts ) );

	return '
		<a href="'.$link.'" class="btn btn-'.$style.'"">'.$text.'</a>
    ';
}	
add_shortcode('btn', 'awesome_buttond_shortcode');



function awesome_button_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts( array(
		'style' => '',
		'link' => '#',
		'text' => 'Your Text',
	), $atts ) );

	return '<a id="style_'.$style.'" href="'.$link.'" class="awesome_button">'.$text.'</a>';
}	
add_shortcode('btn2', 'awesome_button_shortcode');



/*Some Set-up*/
define('AWESOME_BUTTONS_WP', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Including all files */
function awesome_buttons_wp_files() {
	// wp_enqueue_script('lazy-p-lightbox-main-js', LAZY_P_WP_LIGBTBOX_FREE.'js/litebox.min.js', array('jquery'), 1.0, true);
	wp_enqueue_style('awesome-buttons-main-css', AWESOME_BUTTONS_WP.'css/buttons.css');
	wp_enqueue_style('awesome-buttons-bootstrap-css', AWESOME_BUTTONS_WP.'css/bootstrap.css');
}
add_action( 'wp_enqueue_scripts', 'awesome_buttons_wp_files' );






?>