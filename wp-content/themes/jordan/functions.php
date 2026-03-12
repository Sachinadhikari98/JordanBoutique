<?php

function jordan_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'jordan_theme_setup');


function jordan_register_menus() {

    register_nav_menus(array(
        'primary-menu'   => 'Header Menu',
        'footer-shop'    => 'Footer Shop Menu',
        'footer-boutique'=> 'Footer Boutique Menu'
    ));

}

add_action('after_setup_theme', 'jordan_register_menus');
