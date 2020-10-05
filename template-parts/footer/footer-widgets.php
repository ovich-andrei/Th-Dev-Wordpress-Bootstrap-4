<?php

?>

<section class="footer-widgets text-left">
    <div class="container">
        <div class="row">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="col">
                    <aside class="widget-area footer-1-area mb-2">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </aside>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="col">
                    <aside class="widget-area footer-2-area mb-2">
                        <?php dynamic_sidebar( 'footer-2' ); ?>
                    </aside>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="col">
                    <aside class="widget-area footer-3-area mb-2">
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    </aside>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <div class="col">
                    <aside class="widget-area footer-4-area mb-2">
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    </aside>
                </div>
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
</section>
