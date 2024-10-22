<?php

function sandbox_block_type_variations( $variations, $block_type ) {
	if ( 'core/paragraph' === $block_type->name ) {
		$variations[] = array(
            'name'      => 'sandbox-name',
            'title'     => __( 'Developer Name', 'twentytwentyfour' ),
            'isDefault' => false,
            'icon'      => 'smiley',
            'attributes' => array(
                'metadata' => array(
                    'bindings' => array(
                        'content' => array(
                            'source' => 'core/post-meta',
                            'args' => array(
                                'key' => 'meta_sandbox_name',
                            ),
                        ),
                    ),
                    'name' => 'Developer Name',
                ),
            ),
        );
	}

	return $variations;
}

add_filter( 'get_block_type_variations', 'sandbox_block_type_variations', 10, 2 );

function star_wars_block_variations( $variations, $block_type ) {
	if ( 'core/paragraph' === $block_type->name ) {
		$variations[] = array(
            'name'      => 'star-wars-character',
            'title'     => __( 'Star Wars Character', 'my-plugin' ),
            'isDefault' => false,
            'icon'      => 'star-filled', // You can customize the icon as needed
            'attributes' => array(
                'metadata' => array(
                    'bindings' => array(
                        'content' => array(
                            'source' => 'sandbox/star-wars-character', // Use the source you registered
                            'args' => array(
                                'character_id' => 1, // Default character ID (e.g., Luke Skywalker)
                            ),
                        ),
                    ),
                ),
            ),
        );
	}

	return $variations;
}

add_filter( 'get_block_type_variations', 'star_wars_block_variations', 10, 2 );
