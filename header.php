<?php
/**
 * Header file
 * 
 * @package myTheme
 */
?>

<!doctype html>
<html lang="<?php get_language_attributes(); ?>">

<head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <header class="header" role="banner">
        <!-- place navbar here -->
        <?php get_template_part('components/headers/header_1') ?>
    </header>