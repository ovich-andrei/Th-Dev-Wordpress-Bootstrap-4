<?php

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js h-100">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class('d-flex flex-column bg-white h-100'); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'wp-thdev'); ?></a>

<header id="masthead" class="site-header <?php if (get_theme_mod('sticky_header', 0)) : echo 'sticky-top'; endif; ?>">
    <nav id="site-navigation"
         class="main-navigation navbar navbar-expand-lg fixed-top navbar-dark bg-dark border-bottom p-1">
        <div class="container">
            <div style="width:60px;"><?php the_custom_logo(); ?></div>

            <div class="site-branding-text">
                <?php
                if (is_front_page() && is_home()) : ?>
                    <h1 class="site-title h3 mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                                                      class="navbar-brand mb-0"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                    <h2 class="site-title h3 mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"
                                                      class="navbar-brand mb-0"><?php bloginfo('name'); ?></a></h2>
                    <?php
                endif;

                if (get_theme_mod('show_site_description', 1)) {
                    $description = get_bloginfo('description', 'display');
                    if ($description || is_customize_preview()) : ?>
                        <p class="site-description" style="font-size: 12px;"><?php echo esc_html($description); ?></p>
                        <?php
                    endif;
                }
                ?>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap"
                    aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id' => 'primary-menu',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'primary-menu-wrap',
                'menu_class' => 'navbar-nav ml-auto',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new wp_thdev_walker_nav_menu()
            ));
            ?>
        </div>
    </nav>

</header>

<div id="content" class="site-content" style="padding: 60px 0;">
