<?php 

function alberga_resources(){
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
	
add_action('wp_enqueue_scripts','alberga_resources');

//Navigation Menu
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));