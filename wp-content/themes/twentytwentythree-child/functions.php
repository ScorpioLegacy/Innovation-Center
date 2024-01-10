<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function enqueue_child_theme_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css', array('bootstrap'));
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2'); // 'bootstrap' is the handle of the Bootstrap stylesheet.
}

add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');



function enqueue_google_font() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=FontName&display=swap', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_google_font');






?>
