<?php
/**
 * Ink Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Ink Child 1.0
 */

function ink_child_styles() {
    wp_enqueue_style( 'ink-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ink_child_styles', 999 );
