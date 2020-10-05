<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_thdev_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'wp-thdev' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-thdev' ),
        'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title h6">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'wp-thdev' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'wp-thdev' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title h6">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'wp-thdev' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'wp-thdev' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title h6">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'wp-thdev' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'wp-thdev' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title h6">',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'wp-thdev' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'wp-thdev' ),
        'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title h6">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'wp_thdev_widgets_init' );