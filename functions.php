<?php
//Includes
//include:

//
//
//Theme Support
function buzzteq_theme_setup(){
	//Image Feature
	add_theme_support('post_thumbnails');
	//Primary Menu Feature
	register_nav_menus(array(
			'primary'		=> __('The Primary Menu')
	));
}
add_action('after_setup_theme', 'buzzteq_theme_setup');

//
//
//Excerpt Length
function set_excerpt_length(){
	return 70;
}
add_filter('excerpt_length', 'set_excerpt_length');

//
//
//JavaScript Feature
function jvscrpt_script(){
	wp_enqueue_script('jvscrpt-script', get_stylesheet_directory_uri() . 'js/app.js', array('jquery'), false, false );
}
add_action('wp_enqueue_scripts', 'jvscrpt_script');

//
//
//
