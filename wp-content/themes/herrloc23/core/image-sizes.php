<?php

add_theme_support('post-thumbnails');

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    //Custom image size
    add_image_size('folioLandscape_xl', 1920, 350, array('center', 'center'));
    add_image_size('folioLandscape_l', 1200, 200, array('center', 'center'));
    add_image_size('folioLandscape_m', 600, 100, array('center', 'center'));

    add_image_size('folioScreenshot_l', 1000, '', false);
    add_image_size('folioScreenshot_m', 500, '', false);
}

//Disable unused images sizes

function hloc_remove_unused_image_sizes()
{
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
}

add_action('init', 'hloc_remove_unused_image_sizes');
