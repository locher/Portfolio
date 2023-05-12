<?php

require_once(get_theme_file_path().'/vendor/autoload.php');

$timber = new Timber\Timber();

// Global context, available to all templates

function add_to_context($context): array
{

    // WP Templates
    $context['wp']['template'] = array(
        'front_page' => is_front_page(),
        'blog' => is_home(),
    );

    //Add mainMenu to Timber context
    global $mainMenu, $footerMenu;
    $context['menus']['main'] = new \Timber\Menu('main');
    $context['menus']['footer'] = new \Timber\Menu('footer');

    //Options pages
    $context['options'] = get_fields('option');

    return $context;
}

add_filter('timber/context', 'add_to_context');

// Custom functions

require_once ABSPATH . '/wp-admin/includes/plugin.php';
add_filter('timber/twig', 'hloc_add_custom_fn');

function hloc_add_custom_fn($twig)
{
    $twig->addFunction(new Timber\Twig_Function('d', 'd'));
    return $twig;
}

// Add new path for timber includes

add_filter( 'timber/twig', function( \Twig_Environment $twig ) {
    $twig->getLoader()->addPath( get_stylesheet_directory() . '/dist' );
    $twig->getLoader()->addPath( get_stylesheet_directory() . '/assets' );
    return $twig;
});
