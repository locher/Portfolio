<?php

/* Template Name: About  */

$context = \Timber\Timber::get_context();
$post = new \Timber\Post();
$context['post'] = $post;

\Timber\Timber::render('templates/page.twig', $context);
