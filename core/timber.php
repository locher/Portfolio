<?php

require_once( __DIR__ . '/../vendor/autoload.php' );
$timber = new Timber\Timber();

// Global context, available to all templates

function add_to_context($context) {

    // WP Templates
    $context['wp']['template'] = array(
        'front_page' => is_front_page(),
        'blog' => is_home(),
    );

    $context['menu'] = new Timber\Menu( 'main' );

    return $context;
}

add_filter('timber/context','add_to_context');

// Custom functions

require_once ABSPATH . 'wp-admin/includes/plugin.php';

add_filter( 'timber/twig', 'idx_add_kint_d' );

// Add d function (Require Kint debuger plugin)

function idx_add_kint_d( $twig ) {
    $twig->addFunction( new Timber\Twig_Function( 'd', 'd' ) );
    return $twig;
}
