<?php

?>

<?php
$args = array(
    'show_all'     => false,
    'end_size'     => 1,
    'mid_size'     => 1,
    'prev_next'    => true,
    'prev_text'    => __('« Previous'),
    'next_text'    => __('Next »'),
    'add_args'     => false,
    'add_fragment' => '',
//    'screen_reader_text' => __( 'Posts navigation' ),
);
?>

<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php the_posts_pagination(); ?>

    </ul>
</nav>
