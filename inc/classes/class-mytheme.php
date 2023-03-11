<?php
/**
 * Bootstrap the theme
 * 
 * @package myTHEME
 */

namespace MYTHEME\Inc;
use MYTHEME\Inc\Traits\Singleton;

class MYTHEME {
    use Singleton;

    protected function __construct()
    {
        //load class
        $this->set_hooks();
    }

    protected function set_hooks() {
        //actions and filters
        
    }
}