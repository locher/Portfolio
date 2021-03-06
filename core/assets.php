<?php

//-----------------------------------------------------
// JAVASCRIPT
//-----------------------------------------------------

function idx_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        //$file_name = 'scripts.min.js';
        $file_name = 'scripts.js';

        wp_register_script('scripts-vendors', get_theme_file_uri() . '/dist/js/'.$file_name, array('jquery-core'), '1.0.0', true);
        wp_enqueue_script('scripts-vendors');
    }
}

add_action('wp_enqueue_scripts', 'idx_scripts');


//-----------------------------------------------------
// CSS
//-----------------------------------------------------

function idx_styles()
{

    //$file_name = 'style.min.css';
    $file_name = 'style.css';

    wp_register_style('blanktheme', get_theme_file_uri() . '/dist/'.$file_name, array(), '1.0', 'all');
    wp_enqueue_style('blanktheme');
}

add_action('wp_enqueue_scripts', 'idx_styles');
