<?php

/**
 * Theme functions
 * 
 * @package myTheme
 * 
 */

function mt_enqueue_scripts()
{
    // styles
    wp_register_style(
        'bootstrap-css',
        get_template_directory_uri() . '/assets/lib/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css',
        [],
        false,
        'all'
    );
    wp_register_style(
        'stylesheet',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
    // JS
    wp_register_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/lib/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js',
        [],
        false,
        true
    );
    wp_register_script(
        'script',
        get_template_directory_uri() . '/assets/script.js',
        [],
        filemtime(get_template_directory() . '/assets/script.js'),
        true
    );

    // enqueue
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('stylesheet');

    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'mt_enqueue_scripts');