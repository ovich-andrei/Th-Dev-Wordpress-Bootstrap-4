<?php

?>

<ul>
    <?php $the_query = new WP_Query( 'showposts=5' ); ?>

    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(); ?>
                <h4 class="sidebar-post-title"><?php the_title(); ?></h4>
                <h5 class="sidebar-post-date"><?php b4st_post_date(); ?></h5>
            </a>
        </li>

<!--        <li>--><?php //echo substr(strip_tags($post->post_content), 0, 250);?><!--</li>-->
    <?php endwhile;?>
</ul>
