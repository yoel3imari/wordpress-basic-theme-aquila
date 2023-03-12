<?php

namespace MYTHEME;
use MYTHEME\Inc\MyTheme;

/**
 * Theme functions
 * 
 * @package myTheme
 * 
 */

if (!defined('MYTHEME_DIR_PATH')) {
    define('MYTHEME_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('MYTHEME_DIR_URI')) {
    define('MYTHEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once MYTHEME_DIR_PATH . '/inc/helpers/autoloader.php';

function get_mytheme_instance()
{
    MyTheme::get_instance();
}

get_mytheme_instance();

function mt_enqueue_scripts()
{
    echo 'mt_enqueue_scripts';
}

// add_action('wp_enqueue_scripts', 'mt_enqueue_scripts');