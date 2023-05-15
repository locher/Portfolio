<?php

/* Template Name: Portfolio  */

$context = \Timber\Timber::get_context();
$post = new \Timber\Post();
$context['post'] = $post;

$args = array(
    'post_type' => 'portfolio' ,
    'orderby' => 'date' ,
    'order' => 'DESC' ,
    'posts_per_page' => -1,
);
$context['portfolio'] = \Timber\Timber::get_posts($args);

\Timber\Timber::render('templates/portfolio.twig', $context);
