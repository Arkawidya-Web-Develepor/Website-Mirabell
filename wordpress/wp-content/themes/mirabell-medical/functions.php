<?php
/**
 * Mirabell Medical Child Theme functions and definitions
 * Fully integrated with Kadence Design System & Modern CSS tokens
 */

function mirabell_enqueue_styles() {
    // 1. Kadence Core Styles
    wp_enqueue_style( 'kadence-global', get_template_directory_uri() . '/assets/css/global.min.css', array(), KADENCE_VERSION );
    wp_enqueue_style( 'kadence-header', get_template_directory_uri() . '/assets/css/header.min.css', array(), KADENCE_VERSION );
    wp_enqueue_style( 'kadence-content', get_template_directory_uri() . '/assets/css/content.min.css', array(), KADENCE_VERSION );
    wp_enqueue_style( 'kadence-footer', get_template_directory_uri() . '/assets/css/footer.min.css', array(), KADENCE_VERSION );
    
    // 2. Google Fonts: Plus Jakarta Sans
    wp_enqueue_style( 'mirabell-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null );

    // 3. Child Theme Custom Styles based on Kadence tokens
    wp_enqueue_style( 'mirabell-custom-css', get_stylesheet_directory_uri() . '/assets/css/mirabell-custom.css', array( 'kadence-global' ), '2.2.1' );
    
    // 4. Interactive Javascript Engine
    wp_enqueue_script( 'mirabell-custom-js', get_stylesheet_directory_uri() . '/assets/js/mirabell-custom.js', array(), '2.2.1', true );
}
add_action( 'wp_enqueue_scripts', 'mirabell_enqueue_styles', 20 );

function mirabell_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'mirabell_theme_setup' );
