<?php

// Dynamic ACF

// Default save json location

add_filter('acf/settings/save_json', 'hloc_acf_json_save_point');

function hloc_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

// Add acf json loading folder location

add_filter('acf/settings/load_json', 'hloc_acf_json_load_point');

function hloc_acf_json_load_point($paths)
{
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}
