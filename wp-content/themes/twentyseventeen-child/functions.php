<?php

// Inherit the parent theme style
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Enqueue all scripts
function add_theme_scripts() {
	
	// Add dynamic navigation script
	wp_enqueue_script( 'dynamic_navigation', get_stylesheet_directory_uri().'/assets/js/dynamic_navigation.js', array ( 'jquery' ), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>