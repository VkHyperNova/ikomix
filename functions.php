<?php

// STYLESHEETS
function load_stylesheets() {

    //Load BOOTSTRAP CSS
    wp_register_style('bt4', get_template_directory_uri() . '/bt4/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bt4');

    // Load My Style CSS
    wp_register_style('vk-style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('vk-style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// JQUERY
function load_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery-3.6.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts', 'load_jquery');

// SCRIPTS
function load_scripts(){
    wp_register_script( 'vk-script', get_template_directory_uri() . '/scripts.js', '', 1, true);
    wp_enqueue_script('vk-script');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// BOOTSTRAP
function load_bootstrap(){
    wp_register_script('bt4', get_template_directory_uri() . '/bt4/js/bootstrap.min.js', array(), false, 'all');
    wp_enqueue_script('bt4');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');

// NAVIGATION
add_theme_support('menus'); // Menus will show up in WP THEMES

register_nav_menus(
    array(
        'top-menu' => __('Top menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),

    )
);


/**
 * Register Custom Navigation Walker with Bootstrap
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );