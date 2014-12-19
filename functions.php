<?php
/**
 * Ink Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Ink Child 1.0
 */

function ink_child_styles() {
    wp_enqueue_style( 'ink-parent-theme-css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'ink_child_styles' );
