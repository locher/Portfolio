<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$context_Timber = Timber::context();
$context_Timber['block'] = $block;
$context_Timber['fields'] = get_fields();

// On créé des posts pour chaque skill, pour pouvoir facilement récupérer les champs ACF liés
if(is_array(get_field('skills')) && !is_null(get_field('skills')) ){

	// On vire l'actuel champ ACF skill pour le remplacer par un plus complet
	$context_Timber['fields']['skills'] = [];

	foreach (get_field('skills') as $skill){
		$context_Timber['fields']['skills'][] = new Timber\Post($skill);
	}
}

$context_Timber['is_preview'] = $is_preview;

// Render the block.
Timber::render( 'block/skills.twig', $context_Timber );
