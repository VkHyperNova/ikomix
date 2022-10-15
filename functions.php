<?php

// STYLESHEETS
function load_stylesheets() {
    wp_register_style('bootstrap5', get_template_directory_uri() . '/bootstrap5/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap5');
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