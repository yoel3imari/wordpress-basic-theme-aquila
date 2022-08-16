<?php

/**
 * header
 * 
 * @package Aquila
 * 
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <?php aquila_enqueue_assets(); ?>
    <title>Aquila</title>
</head>

<body>
    <?php
    // add wp_body_open() to older version of wp 
    if (!function_exists('wp_body_open')) {
        function wp_body_open()
        {
            do_action('wp_body_open');
        }
    }else {
        wp_body_open();
    }
    ?>
    <div id="masthead" class="site-header" role="banner">
        <header>
            <?php get_template_part('/components/navbar'); ?>
        </header>

        <div id="content" class="site-content">
        </div>