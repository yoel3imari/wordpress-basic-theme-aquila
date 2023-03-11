<?php
/**
 * @package myTHEME
 */
namespace MYTHEME\Inc\Traits;

trait Singleton
{
    public function __construct()
    {
    }

    public function __clone()
    {
    }

    final public static function get_instance()
    {
        static $instance = [];

        $called_calss = get_called_class();

        if (!isset($instance[$called_calss])) {
            $instance[$called_calss] = new $called_calss();

            return $instance[$called_calss];
            do_action(sprintf('mytheme_singleton_init%s', $called_calss));
        }

        return $instance[$called_calss];
    }
}