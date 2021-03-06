<?php


// Portfolio
function portfolio_taxonomy()
{
    register_taxonomy_for_object_type('category', 'portfolio'); // Register Taxonomies for Category
    register_post_type('portfolio', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Portfolio', 'html5blank'),
            'singular_name' => __('Portoflio', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'category'
        ),
        'menu_icon' => 'dashicons-screenoptions'
    ));
}

add_action('init', 'portfolio_taxonomy'); // Add our HTML5 Blank Custom Post Type

// Offres
function offres_taxonomy()
{
    register_taxonomy_for_object_type('category', 'offres'); // Register Taxonomies for Category
    register_post_type('offres', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Offres', 'html5blank'),
            'singular_name' => __('Offre', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
			'page-attributes'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'category'
        ),
        'menu_icon' => 'dashicons-megaphone'
    ));
}

add_action('init', 'offres_taxonomy'); // Add our HTML5 Blank Custom Post Type
