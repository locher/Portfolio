<?php

// robots.txt

add_filter('robots_txt', 'hloc_custom_robot', 10, 2);

function hloc_custom_robot($output, $public)
{
    return 'User-agent: *
    Sitemap: '.WP_HOME.'/sitemap_index.xml';
}

// Yoast breadcrumb

add_filter('wpseo_breadcrumb_separator', 'ta_custom_breadcrumb_separator');

function ta_custom_breadcrumb_separator() {
    return '<span class="breadcrumb__separator"></span>';
}