<?php

function mashi_scripts()
{
    wp_enqueue_style('mashi-style', get_stylesheet_uri());

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');

    wp_enqueue_script('custom_script', get_template_directory_uri() . '/js/footerFixed.js');
}
add_action('wp_enqueue_scripts', 'mashi_scripts');

function mashi_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'global' => 'Global Menu'
        )
    );
}
add_action('after_setup_theme', 'mashi_setup');
