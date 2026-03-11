<?php

function jordan_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'jordan_theme_setup');


function theme_register_menus() {

    register_nav_menus(array(
        'primary-menu' => 'Primary Header Menu',
        'footer-menu'  => 'Footer Menu'
    ));

}

add_action('after_setup_theme', 'theme_register_menus');
