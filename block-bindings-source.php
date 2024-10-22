<?php
/**
 * Block Bindings Source
 */

function get_star_wars_character( array $source_args, $block_instance, string $attribute_name ) {
    // Get the character ID or name from source_args.
    $character_id = isset( $source_args['character_id'] ) ? $source_args['character_id'] : 1;
    $response = wp_remote_get( "https://swapi.dev/api/people/{$character_id}/" );

    if ( is_wp_error( $response ) ) {
        return 'Error fetching character data';
    }

    $data = json_decode( wp_remote_retrieve_body( $response ), true );

    // Return the character information.
    if ( isset( $data['name'] ) ) {
        return "Character: " . $data['name'] . ", Height: " . $data['height'] . "cm, Gender: " . $data['gender'];
    }

    return 'Character data not available';
}


function register_star_wars_source() {
    register_block_bindings_source( 'sandbox/star-wars-character', array(
        'label'              => __( 'Star Wars Character', 'my-plugin' ),
        'get_value_callback' => 'get_star_wars_character',
    ) );
}

add_action( 'init', 'register_star_wars_source' );