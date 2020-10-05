<?php

/**
 * Enqueue scripts and styles.
 */
function wp_thdev_scripts() {
    // Default
    wp_enqueue_style( 'fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'v4.3.1', 'all' );
    wp_enqueue_style( 'wp-thdev-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
    // Thema
    wp_enqueue_style( 'thema', get_template_directory_uri() . '/assets/css/thema.css', array(),  'all' );
    wp_enqueue_style( 'support', get_template_directory_uri() . '/assets/css/support.css', array(),  'all' );


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), 'v3.1.1',true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 'v3.1.1',true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 'v4.3.1', true );
    wp_enqueue_script( 'support', get_template_directory_uri() . '/assets/js/support.js',  array('jquery'), '1.0.1', true );

	    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_thdev_scripts' );

