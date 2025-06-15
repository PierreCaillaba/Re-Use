<?php
/**
 * Re-Use functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Re-Use
 * @subpackage Core
 * @since Re-Use 1.0
 */

 // Adds theme support for post formats.
function reuse_post_format_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
}
add_action( 'after_setup_theme', 'reuse_post_format_setup' );

// Enqueue main stylesheet.
function reuse_enqueue_styles() {
    wp_enqueue_style(
        'reuse-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'reuse_enqueue_styles' );

// Enqueue editor styles.
function reuse_editor_style() {
    add_editor_style( get_template_directory_uri() . '/assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'reuse_editor_style' );

// Register block pattern categories.
function reuse_pattern_categories() {
    register_block_pattern_category(
        're-use_pages',
        array(
            'label'       => __( 'Pages', 're-use' ),
            'description' => __( 'A collection of full page layouts.', 're-use' ),
        )
    );

    register_block_pattern_category(
        're-use_general',
        array(
            'label'       => __( 'General', 're-use' ),
            'description' => __( 'A collection of useful design patterns.', 're-use' ),
        )
    );
}
add_action( 'init', 'reuse_pattern_categories' );

// Register block styles (currently inactive, uncomment to use it).
/* function reuse_block_styles() {    
}
add_action( 'init', 'reuse_block_styles' ); */

// Register block binding sources.
function reuse_register_block_bindings() {
    register_block_bindings_source(
        're-use/format',
        array(
            'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 're-use' ),
            'get_value_callback' => 'reuse_format_binding',
        )
    );
}
add_action( 'init', 'reuse_register_block_bindings' );

// Register block binding callback function for the post format name.
function reuse_format_binding() {
    $post_format_slug = get_post_format();

    if ( $post_format_slug && 'standard' !== $post_format_slug ) {
        return get_post_format_string( $post_format_slug );
    }
}