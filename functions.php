<?php

/**
 * Theme function
 * 
 * @package Aquila
 * 
 */

function aquila_enqueue_assets()
{
    wp_register_style('style', get_template_directory_uri() . '/assets/style/style.css', [], filemtime(get_template_directory() . '/assets/style/style.css'), "all");
    wp_register_style('bootstyle', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', [], false, "all");
    wp_register_script('js', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_template_directory() . '/assets/js/script.js'), true);
    wp_register_script('bootjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', [], false, true);

    wp_enqueue_style('style');
    wp_enqueue_style('bootstyle');
    wp_enqueue_script('js');
    wp_enqueue_script('bootjs');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_assets');
