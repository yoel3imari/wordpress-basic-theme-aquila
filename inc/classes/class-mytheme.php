<?php
/**
 * Bootstrap the theme
 * 
 * @package myTHEME
 */

namespace MYTHEME\Inc;

use MYTHEME\Inc\Traits\Singleton;

class MyTheme
{
    use Singleton;

    protected function __construct()
    {
        //load class
        Assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions and filters
    }

    protected function setup_theme()
    {
        // theme options
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true
        ]);
        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-img' => '',
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]);

        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        global $CONTENT_WIDTH;
        if (!isset($CONTENT_WIDTH))
            $CONTENT_WIDTH = 1240;
    }
}