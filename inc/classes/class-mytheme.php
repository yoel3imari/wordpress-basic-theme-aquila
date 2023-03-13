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
        add_theme_support( 'custom-background', [
            'default-color' => '#fff',
            'default-img' => '', 
        ] );
    }
}