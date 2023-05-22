<?php

// Create Celside Category

function add_custom_category( $categories ) {
	$categories[] = [
		'slug' => 'hloc',
		'title' => 'Herrloc',
		'icon' => null
	];

	return $categories;
}
add_filter( 'block_categories_all', 'add_custom_category' );

// Register Blocks
add_action( 'init', function(){
	register_block_type( __DIR__ . '/build/header-image' );
	register_block_type( __DIR__ . '/build/header-home' );
	register_block_type( __DIR__ . '/build/button' );
	register_block_type( __DIR__ . '/build/title-page' );
	register_block_type( __DIR__ . '/build/wrapper' );
	register_block_type( __DIR__ . '/acf/skills' );
	register_block_type( __DIR__ . '/acf/folio' );
} );

// Allow list
add_filter( 'allowed_block_types_all', 'idx_allowed_block_types');

function idx_allowed_block_types()
{
	return array(
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'hloc/header-image',
		'hloc/skills',
		'hloc/header',
		'hloc/button',
		'hloc/folio',
		'hloc/page-title',
		'contact-form-7/contact-form-selector',
		'hloc/wrapper'
	);

}
