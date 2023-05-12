<?php

$context_Timber = Timber::context();
$context_Timber['block'] = $block;
$context_Timber['fields'] = get_fields();

// On créé des posts pour chaque skill, pour pouvoir facilement récupérer les champs ACF liés
if(is_array(get_field('portfolio')) && !is_null(get_field('skills')) ){

	// On vire l'actuel champ ACF skill pour le remplacer par un plus complet
	$context_Timber['fields']['folio'] = [];

	foreach (get_field('portfolio') as $skill){
		$context_Timber['fields']['folio'][] = new Timber\Post($skill);
	}
}

$context_Timber['is_preview'] = $is_preview;

// Render the block.
Timber::render( 'block/folio.twig', $context_Timber );
