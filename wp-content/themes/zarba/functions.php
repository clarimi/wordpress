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
    echo "MARIO";
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');  
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );  // IN FOOTER  
    wp_enqueue_script( 'gsap-scripts', get_stylesheet_directory_uri() . '/js/gsap.min.js', array(), $the_theme->get( 'Version' ), true );// IN FOOTER
    wp_enqueue_script( 'scroll-scripts', get_stylesheet_directory_uri() . '/js/ScrollTrigger.min.js', array(), $the_theme->get( 'Version' ), true );// IN FOOTER

    /* Questo non serve
    wp_enqueue_script( 'TweenMax', get_stylesheet_directory_uri() . '/js/TweenMax.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'scrollmagic-js', get_stylesheet_directory_uri() . '/js/ScrollMagic.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'gasp-js', get_stylesheet_directory_uri() . '/js/animation.gsap.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/debug.addIndicators.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'scrollmagic-jquery', get_stylesheet_directory_uri() . '/js/jquery.ScrollMagic.min.js', array(), $the_theme->get( 'Version' ), true );
    */
    
    /* Questo non serve
    wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js');
	wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js' ); 
	wp_enqueue_script( 'gasp-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js' );
	wp_enqueue_script( 'custom-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js' ); 
    */
    

    wp_enqueue_script( 'zarba-js', get_stylesheet_directory_uri() . '/js/zarba.js', array(), $the_theme->get( 'Version' ), true); // IN FOOTER
    wp_enqueue_script( 'wow-scripts', get_stylesheet_directory_uri() . '/wow/wow.min.js', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style(  'wow-css', get_stylesheet_directory_uri() . '/wow/animate.compat.css', array(), $the_theme->get( 'Version' ) );
    
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    wp_enqueue_style( 'zarbas-css', get_stylesheet_directory_uri() . '/css/zarba.css', array(), $the_theme->get( 'Version' ) );

}


function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
