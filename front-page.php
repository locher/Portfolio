<?php

$context = \Timber\Timber::get_context();
$context['post'] = new \Timber\Post();

$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => -1,
);
$context['portfolio'] = Timber::get_posts($args);

\Timber\Timber::render('templates/front-page.twig', $context);
