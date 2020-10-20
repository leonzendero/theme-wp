<?php

add_action('wp_enqueue_scripts', 'dt_style');
add_action('wp_enqueue_scripts', 'dt_scripts');

function dt_style()
{

    wp_enqueue_style('style-bootstrap', get_template_directory_uri() . '/assets/scss/bootstrap.min.css');
    wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/scss/style.css');
}

function dt_scripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(jquery), 'null', true);
    wp_enqueue_script('script-app', get_template_directory_uri() . '/assets/js/app.js', array(jquery), 'null', true);
}