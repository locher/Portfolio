<?php

// Add Breadcrumb in almost every page

function hloc_breadcrumb()
{
    //Change the pages you want the breadcrumb to display
    if (!is_admin() && !is_front_page()) {
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb();
        }
    }
}

add_action('hloc_breacrumb_place', 'hloc_breadcrumb');
