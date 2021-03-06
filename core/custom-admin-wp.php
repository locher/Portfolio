<?php

//Remove WP logo in admin toolbar and add the environment

function idx_admin_bar_remove_logo()
{
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'idx_admin_bar_remove_logo', 0);
