<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'wow-scripts', get_stylesheet_directory_uri() . '/js/wow.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'mirandola-scripts', get_stylesheet_directory_uri() . '/js/mirandola.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'gsap-scripts', get_stylesheet_directory_uri() . '/js/gsap.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'scroll-scripts', get_stylesheet_directory_uri() . '/js/ScrollTrigger.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_style( 'mirandola-css', get_stylesheet_directory_uri() . '/css/mirandola.css', array(), $the_theme->get( 'Version' ) ); // includo il mio css 
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/css/animate.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'flexslider-css', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), $the_theme->get( 'Version' ) );


}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
