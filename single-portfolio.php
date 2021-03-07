<?php

$context = \Timber\Timber::get_context();
$context['post'] = new \Timber\Post();

//Prev and next post

$prev_post = get_adjacent_post(false,'',false); 

if ( is_a( $prev_post, 'WP_Post' ) ){
	$context['prevPost'] = array(
		'title' => get_the_title($prev_post->ID),
		'link' => get_permalink($prev_post->ID)
	);
}

$next_post = get_adjacent_post(false,'',true); 

if ( is_a( $next_post, 'WP_Post' ) ){
	$context['nextPost'] = array(
		'title' => get_the_title($next_post->ID),
		'link' => get_permalink($next_post->ID)
	);
}

\Timber\Timber::render('templates/portfolio.twig', $context);