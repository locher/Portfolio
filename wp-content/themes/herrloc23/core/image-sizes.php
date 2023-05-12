<?php

add_theme_support('post-thumbnails');

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    //Custom image size
    //Landscape
    add_image_size('l_large', 1920, '');
    add_image_size('l_medium', 960, '');
    add_image_size('l_small', 480, '');

    //Portrait
    add_image_size('p_medium', '', 960);
    add_image_size('p_medium_crop', 720, 960, array('center', 'center'));
    add_image_size('p_small', '', 480);
    add_image_size('p_small_crop', 360, 480, array('center', 'center'));

    //Square
    add_image_size('s_medium', 960, 960, array('center', 'center'));
    add_image_size('s_small', 480, 480, array('center', 'center'));
    add_image_size('s_tiny', 150, 150, array('center', 'center'));
    
}

//Disable unused images sizes

function hloc_remove_unused_image_sizes()
{
    remove_image_size('1536x1536');
    remove_image_size('2048x2048');
}

add_action('init', 'hloc_remove_unused_image_sizes');
