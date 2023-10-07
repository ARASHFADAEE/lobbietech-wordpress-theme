<?php

function add_theme_scripts(){
    wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/css/bootstrap.min.css' , array() , false , 'all');
    wp_enqueue_style('font-icon' , get_template_directory_uri() . '/css/font-icons.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_template_directory_uri() . '/css/style.css' , array() , false , 'all');



    //add js script
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery.min.js' , array() , false , true);
    wp_enqueue_script('bootstrap' , get_template_directory_uri() . '/js/bootstrap.min.js' , array() , false , true);
    wp_enqueue_script('pluginss' , get_template_directory_uri() . '/js/plugins.js' , array() , false , true);
    wp_enqueue_script('jsscript' , get_template_directory_uri() . '/js/scripts.js' , array() , false , true);
    wp_enqueue_script('cookie-1' , get_template_directory_uri() . '/js/cookies.js' , array() , false , true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


//add support img and title tag in site
function run_setup(){
    add_theme_support('title-tag');
    // add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    register_nav_menus(
        array(
            'main-menu' => __( 'header-menu' ),
        )
    );
}
add_action('after_setup_theme' , 'run_setup');



//the_expert() expert custom for posts 

function custom_excerpt_length($length) {
    return 20; 
}
add_filter('excerpt_length', 'custom_excerpt_length');

function custom_excerpt_more($more) {
    return ' ...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//custom logo in theme
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 39,
		'width'                => 123,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

