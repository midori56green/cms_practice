<?php

add_action('after_setup_theme', '0329_setup');
function 0329_setup() {
	// get title
	add_theme_support('title-tag');

	// menuの有効か
	register_nav_menus(array(
		'mainnav' => 'mainnavigation'
	));
}

// read stylesheet
add_action('wp_enqueue_scripts', '0329_enqueue_script');
function 0329_enqueue_script() {
	wp_enqueue_style('0329', get_stylesheet_directory_uri().'style.css');
	wp_enqueue_style('0329', get_stylesheet_directory_uri().'style-l.css');
}

