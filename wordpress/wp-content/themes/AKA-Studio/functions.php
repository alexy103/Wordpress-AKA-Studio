<?php

// Activer la gestion du <title> par WordPress
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('aka-style', get_template_directory_uri() . '/css/style.css');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/6839368886.js', [], null, true);

    $theme_js_path = get_template_directory_uri() . '/js/';

    wp_enqueue_script('theme-index', $theme_js_path . 'index.js', [], null, true);
    wp_enqueue_script('theme-menu', $theme_js_path . 'menu.js', [], null, true);
    wp_enqueue_script('theme-navigation', $theme_js_path . 'navigation.js', [], null, true);
    wp_enqueue_script('theme-about', $theme_js_path . 'about.js', [], null, true);
    wp_enqueue_script('theme-work', $theme_js_path . 'work.js', [], null, true);
    wp_enqueue_script('theme-contact', $theme_js_path . 'contact.js', [], null, true);
    wp_enqueue_script('theme-friendslider', $theme_js_path . 'friendSlider.js', [], null, true);
    wp_enqueue_script('theme-opinionslider', $theme_js_path . 'opinionSlider.js', [], null, true);
});
