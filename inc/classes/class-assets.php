<?php
/** 
 * Assets
 * @package mytheme
 */

namespace MYTHEME\Inc;

use MYTHEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register styles.
        wp_register_style('bootstrap-css', MYTHEME_DIR_URI . '/assets/lib/bootstrap/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('style', MYTHEME_DIR_URI . '/style.css', [], filemtime(MYTHEME_DIR_PATH . '/style.css'), 'all');

        // Enqueue Styles.
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('style');

    }

    public function register_scripts()
    {
        // Register scripts.
        wp_register_script('bootstrap-js', MYTHEME_DIR_URI . '/assets/lib/bootstrap/js/bootstrap.min.js', ['jquery'], false, true);
        wp_register_script('script', MYTHEME_DIR_URI . '/script.js', ['jquery'], filemtime(MYTHEME_DIR_PATH . '/assets/script.js'), true);

        // Enqueue Scripts.
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('script');
    }
}