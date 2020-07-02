<?php

add_action('after_setup_theme','lnbtheme_setup');

function lnbtheme_setup() {
	load_theme_textdomain('lnbtheme',TEMPLATEPATH.'/languages');
}

require_once('inc/theme_options.php');
require_once('inc/shortcodes.php');

function register_my_menus() {
	register_nav_menus(
		array( 'header-menu' => __( 'Header Menu' ) )
		);
}
add_action( 'init', 'register_my_menus' );

if (function_exists('register_sidebar'))
	register_sidebar(array(
	'name' => 'Footer',
	'id' => 'footer',  
	'before_widget' =>  '<div class="footer-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>'
	));

if (function_exists('register_sidebar'))
	register_sidebar(array(
	'name' => 'Sidebar 1',
	'id' => 'sidebar_1',  
	'before_widget' =>  '<div class="footer-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
	
if (function_exists('register_sidebar'))
	register_sidebar(array(
	'name' => 'Sidebar 2',
	'id' => 'sidebar_2',  
	'before_widget' =>  '<div class="footer-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	));
	
add_theme_support ( 'post-thumbnails' );	
add_theme_support ( 'post-formats', array('link') );		
?>
