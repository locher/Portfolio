<?php

add_theme_support( 'post-thumbnails' );

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');
    
    add_image_size('folio-mini-crop', 500, 312, array('center', 'top'));
    add_image_size('folio-fullsize', 1440, '', false);
    add_image_size('folio-fullsize-mobile', 800, '', false);

    add_image_size('header', 1920, 1080, array('center', 'center'));
    add_image_size('header-mobile', 960, 540, array('center', 'center'));

}

//Disable unused images sizes

function idx_remove_unused_image_sizes()
{
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
}

add_action('init', 'idx_remove_unused_image_sizes');