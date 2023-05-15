<?php

/**
 * CSS
 */

function hloc_styles()
{
    wp_register_style('starterTheme', get_template_directory_uri() . '/dist/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('starterTheme');
}

add_action('wp_enqueue_scripts', 'hloc_styles');
add_action('enqueue_block_editor_assets', 'hloc_styles');

/**
 * JS
 */

function hloc_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        // Global script

        wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js', '', NULL, true);
        wp_enqueue_script('gsap');

        wp_register_script('gsapScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js', '', NULL, true);
        wp_enqueue_script('gsapScrollTrigger');

        wp_register_script('gsapScrollTriggerText', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js', '', NULL, true);
        wp_enqueue_script('gsapScrollTriggerText');

        wp_register_script('scripts-vendors', get_template_directory_uri() . '/dist/js/main.js', '', NULL, true);
        wp_enqueue_script('scripts-vendors');
    }
}

add_action('wp_enqueue_scripts', 'hloc_scripts');


// Load conditional scripts
function hloc_conditional_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        if (getenv('WP_ENV') == 'production') {
            $file_name = 'custom-scripts.min.js';
        } else {
            $file_name = 'custom-scripts.js';
        }
    }
}

//add_action('wp_enqueue_scripts', 'hloc_conditional_scripts');

// Remove wp-embed

function hloc_dequeue_scripts() {
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_enqueue_scripts', 'hloc_dequeue_scripts' );

// Remove gutenberg styles

function hloc_remove_block_library_css()
{
    wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'hloc_remove_block_library_css' );

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'global-styles' );
} );

// Remove jquery

add_filter( 'wp_enqueue_scripts', 'change_default_jquery');

function change_default_jquery( ){
    wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');   
}