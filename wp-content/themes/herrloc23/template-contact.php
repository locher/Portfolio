<?php

/* Template Name: Contact  */

$context = \Timber\Timber::get_context();
$post = new \Timber\Post();
$context['post'] = $post;

\Timber\Timber::render('templates/contact.twig', $context);
