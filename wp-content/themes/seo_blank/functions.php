<?php

add_action('wp_enqueue_scripts', 'seopeaks_styles');
add_action('wp_enqueue_scripts', 'my_scripts_method');
add_action('wp_enqueue_scripts', 'seopeaks_scripts');

function seopeaks_styles() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'bootstrap-responsive', get_template_directory_uri() . '/assets/css/bootstrap-responsive.css' );
	wp_enqueue_style( 'pluton', get_template_directory_uri() . '/assets/css/pluton.css' );
	wp_enqueue_style( 'jquery.cslider', get_template_directory_uri() . '/assets/css/jquery.cslider.css' );
	wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'contact-form', get_template_directory_uri() . '/assets/css/contact-form.css' );
};

function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
};

function seopeaks_scripts() {
	wp_enqueue_script('jquery.mixitup-js', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array(), null, true );
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), null, true );
	wp_enqueue_script('modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), null, true );
	wp_enqueue_script('bxslider-js', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array(), null, true );
	wp_enqueue_script('cslide-js', get_template_directory_uri() . '/assets/js/jquery.cslider.js', array(), null, true );
	wp_enqueue_script('placeholder-js', get_template_directory_uri() . '/assets/js/jquery.placeholder.js', array(), null, true );
	wp_enqueue_script('google.maps-js', 'https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap', array(), null, true );
	wp_enqueue_script( 'js/app', get_template_directory_uri() . '/assets/js/app.js', array(), null, true );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
	if ($args->menu === 'Main') {
		$atts['class'] = 'nav-item';

		if($item->current) {
			$atts['class'] .= ' active';
		}
	};

	return $atts;
}

add_filter( 'excerpt_length', function(){
	return 20;
} );




