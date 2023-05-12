<?php

/**
 * Custom Post Type
 */

add_action('init', 'hloc_custom_post_type');

function hloc_custom_post_type()
{
    //Compétences
    register_post_type('skill', array(
        'labels' => array(
            'name' => 'Compétences',
        ),
        'public' => true,
        'hierarchical' => false, //true for pages, false for posts
        'has_archive' => false,
        'can_export' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-clipboard',
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'supports' => array( 'title','revisions'),
        'show_in_rest' => true
    ));

    //Portfolio
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
        ),
        'public' => true,
        'hierarchical' => false, //true for pages, false for posts
        'has_archive' => false,
        'can_export' => true,
        'menu_position' => 25,
        'menu_icon' => 'dashicons-format-gallery',
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'supports' => array( 'title','revisions', 'thumbnail'),
        'show_in_rest' => true
    ));

}

/**
 * Custom Taxo
 */


add_action('init', 'hlco_skills_add_taxonomies', 0);

function hlco_skills_add_taxonomies()
{
    $args = array(
        'hierarchical'      => true,
        'labels'            => array(
            'name' => 'Catégories'
        ),
        'show_ui'           => true,
        'show_admin_column' => true
    );

    register_taxonomy('skills', array('skill', 'portfolio'), $args);
}
