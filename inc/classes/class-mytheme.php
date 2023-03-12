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
}