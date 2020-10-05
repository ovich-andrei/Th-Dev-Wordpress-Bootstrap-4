<?php

/**
 * Registers an editor stylesheet for the theme.
 */
function wp_thdev_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_thdev_add_editor_styles' );

require get_template_directory() . '/inc/header-scripts.php';

require get_template_directory() . '/inc/ex-functions.php';

require get_template_directory() . '/inc/setup-functions.php';

require get_template_directory() . '/inc/widgets.php';

require get_template_directory() . '/inc/scripts-styles.php';

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/custom-comment.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/custom-navbar.php';

require get_template_directory() . '/inc/enq-functions.php';

require get_template_directory() . '/inc/customizer.php';


