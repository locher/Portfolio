<?php

function hloc_register_menu()
{
    register_nav_menus(array(
        'main' => __('Main menu', 'hloc'),
        'footer' => __('Footer menu', 'hloc'),
    ));
}

add_action('init', 'hloc_register_menu');
