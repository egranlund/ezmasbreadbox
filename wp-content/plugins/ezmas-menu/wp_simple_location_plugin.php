<?php
/*
   Plugin Name: WordPress Food Menu
   Plugin URI: http://projectaesir.com
   Description: This plugin allows a user to create a simple menu on their site.  The menu can
   have multiple headers (i.e. Breakfast, Lunch, Dinner, Dessert).  Each menu header, when clicked,
   will display the items belonging to it.  The header and item areas can be placed in different
   areas.
   Version: 1.0
   Author: Eric Granlund
   Author URI: http://projectaesir.com
*/

defined( 'ABSPATH' ) or die( 'Cannot access this directly' );

//include shortcodes
include(plugin_dir_path(__FILE__) . 'inc/wp_location_shortcode.php');
//include widgets
include(plugin_dir_path(__FILE__) . 'inc/wp_location_widget.php');

class wp_simple_location{
	
	//properties
	private $wp_location_trading_hour_days = array();
	
	//magic function (triggered on initialization)
	public function __construct(){
				
		add_action('init', array($this,'register_location_content_type')); //register location content type
		add_action('admin_enqueue_scripts', array($this,'enqueue_admin_scripts_and_styles')); //admin scripts and styles
		add_action('wp_enqueue_scripts', array($this,'enqueue_public_scripts_and_styles')); //public scripts and styles
		
		register_activation_hook(__FILE__, array($this,'plugin_activate')); //activate hook
		register_deactivation_hook(__FILE__, array($this,'plugin_deactivate')); //deactivate hook
	}
		
	//register the location content type
	public function register_location_content_type(){
		
		//Labels for post type
		$labels = array(
			'name'               => 'Food Menus',
			'singular_name'      => 'Food Menus',
			'menu_name'          => 'Food Menus',
			'name_admin_bar'     => 'Food Menus',
			'add_new'            => 'Add New', 
			'add_new_item'       => 'Add New Food Menu',
			'new_item'           => 'New Food Menu', 
			'edit_item'          => 'Edit Food Menu',
			'view_item'          => 'View Food Menu',
			'all_items'          => 'All Food Menus',
			'search_items'       => 'Search Food Menus',
			'parent_item_colon'  => 'Parent Food Menu:', 
			'not_found'          => 'No Food Menus found.', 
			'not_found_in_trash' => 'No Food Menus found in Trash.',
		);
		
		//arguments for post type
		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'publicly_queryable'=> true,
			'show_ui'           => true,
			'show_in_nav'       => true,
			'query_var'         => true,
			'hierarchical'      => false,
			'supports'          => array('title','custom-fields'),
			'has_archive'       => true,
			'menu_position'     => 20,
			'show_in_admin_bar' => true,
			'menu_icon'         => 'dashicons-location-alt',
			'rewrite'            => array('slug' => 'food_menus', 'with_front' => 'true')
		);
		
		//register post type
		register_post_type('wp_food_menu', $args);
	}
	
	//enqueus scripts and stles on the back end
	public function enqueue_admin_scripts_and_styles(){
		wp_enqueue_style('wp_location_admin_styles', plugin_dir_url(__FILE__) . '/css/wp_location_admin_styles.css');
	}
	
	//enqueues scripts and styled on the front end
	public function enqueue_public_scripts_and_styles(){
		wp_enqueue_style('wp_location_public_styles', plugin_dir_url(__FILE__). '/css/wp_location_public_styles.css');
	}
	
	//triggered on activation of the plugin (called only once)
	public function plugin_activate(){
		
		//call our custom content type function
		$this->register_location_content_type();
		//flush permalinks
		flush_rewrite_rules();
	}
	
	//trigered on deactivation of the plugin (called only once)
	public function plugin_deactivate(){
		
		//flush permalinks
		flush_rewrite_rules();
	}
}

// create an instance of the plugin
$wp_simple_location = new wp_simple_location();