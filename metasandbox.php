<?php
/**
 * Plugin Name:       Meta Sandbox
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       meta-sandbox
 *
 * @package MetaSandbox
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function meta_sandbox_register_meta() {
    register_meta(
        'post',
        'meta_sandbox_mood',
        array(
            'show_in_rest'      => true,
            'single'            => true,
            'type'              => 'string',
            'sanitize_callback' => 'wp_strip_all_tags'
        )
    );
}

add_action( 'init', 'meta_sandbox_register_meta' );

function sandbox_register_meta_name() {
    register_meta(
        'post',
        'meta_sandbox_name',
        array(
            'show_in_rest'      => true,
            'single'            => true,
            'type'              => 'string',
            'sanitize_callback' => 'wp_strip_all_tags'
        )
    );
}

add_action( 'init', 'sandbox_register_meta_name' );

function sandbox_register_meta_email() {
    register_meta(
        'post',
        'meta_sandbox_email',
        array(
            'show_in_rest'      => true,
            'single'            => true,
            'type'              => 'string',
            'sanitize_callback' => 'wp_strip_all_tags'
        )
    );
}

add_action( 'init', 'sandbox_register_meta_email' );

function sandbox_register_meta_role() {
    register_meta(
        'post',
        'meta_sandbox_role',
        array(
            'show_in_rest'      => true,
            'single'            => true,
            'type'              => 'string',
            'sanitize_callback' => 'wp_strip_all_tags'
        )
    );
}

add_action( 'init', 'sandbox_register_meta_role' );

require plugin_dir_path( __FILE__ ) . 'block-variations.php';
require plugin_dir_path( __FILE__ ) . 'block-bindings-source.php';