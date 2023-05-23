<?php

$context = \Timber\Timber::get_context();
$context['post'] = new \Timber\Post();

$url = $context['post']->url;

if($url){
    $context['folioUrl'] = parse_url($url);
}

\Timber\Timber::render('templates/single-portfolio.twig', $context);
