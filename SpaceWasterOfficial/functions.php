<?php 

function SpaceWasterOfficial_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());

}


add_action('wp_enqueue_scripts', 'SpaceWasterOfficial_resources');

//Navigation Menus
register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		'social' => __('Social Menu')

	));

//Custom Header Image
$args = array (
	'width'  =>  1008,
	'height' =>  97, 
	'default-image' => get_template_directory_uri() . '/image/header.jpg',
	'uploads'		=> true,
);

add_theme_support('custom-header', $args);